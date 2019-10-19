<?php

namespace App\Http\Controllers;

use App\Helpers\DateConversion as AppDateConversion;
use App\Model\DateConversion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Submission;
use Auth;
use Maatwebsite\Excel\Facades\Excel;

class PaymentController extends Controller
{
    function payment(Request $request)
    {
        $this->validate($request, [
            'dd_no' => 'max:50',
            'title' => 'max:150',
            'authors_with_address' => 'max:191',
            'mode_of_presentation' => 'max:40',
            'mode_of_payment' => 'max:15',
            'dd_no' => 'max:50',
            'dd_date' => 'max:25',
            'transaction_date' => 'max:25',
            'dd_bank' => 'max:50',
            'transation_id' => 'max:50',
            'transaction_bank' => 'max:50',
        ]);

        $data=$request->except('_token');
        $data['user_id']=Auth::user()->id;

        $submission=new Submission();
        $user_found=$submission->where('user_id',Auth::user()->id)->first();

        $data['dd_date']=!empty($data['dd_date'])?AppDateConversion::DtoY($data['dd_date']):null;
        $data['transaction_date']=!empty($data['dd_date'])?AppDateConversion::DtoY($data['dd_date']):null;
        
        
        if(!$user_found)
        {
            $created=$submission->create($data);
            $length = strlen((string) $created->id);
            $id=(string) $created->id;
            $s_id=$created->id;
        }
        else
        {
            $created=$submission->where('id',$user_found->id)->update($data);
            $length = strlen((string) $user_found->id);
            $id=(string)  $user_found->id;
            $s_id=$user_found->id;
        }
        
        if($length==1)
        {
            $id='00'.$id;
        }
        else if($length==2)
        {
            $id='0'.$id;
        }
        $id='ICEE'.$id;
        $submission->where('id',$s_id)->update(['user_id'=>Auth::user()->id,'reg_id'=>$id]);

        if(Auth::user()->participant_type=='Participation only')
        {
            return redirect('submissions/home');
        }
        else
        {
            return redirect('submissions/submissions');
        }
    }
    function submission(Request $request)
    {
        $this->validate($request, [
            'dd_no' => 'max:50',
            'title' => 'max:150',
            'authors_with_address' => 'max:191',
            'mode_of_presentation' => 'max:40',
            'mode_of_payment' => 'max:15',
            'dd_no' => 'max:50',
            'dd_date' => 'max:25',
            'transaction_date' => 'max:25',
            'dd_bank' => 'max:50',
            'transation_id' => 'max:50',
            'transaction_bank' => 'max:50',
        ]);

        $submission=new Submission();
        $created=$submission->where('user_id',Auth::user()->id)->first();

        if(!$request->hasFile('file_doc'))
        {
            if(!empty($created->file_doc))
            {
                $request->file_doc=$created->file_doc;
            }
        }
        else{
            $this->validate($request, [
                'file_doc' => 'required|max:10000|mimes:doc,docx',
            ]);
        }
        

        $data=$request->except(['_token']);

        try{
            if($request->hasFile('file_doc'))
            {
                $file = $request->file('file_doc'); 
                $file_name=time().'_'.$file->getClientOriginalName();
                $ext=$file->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $file->move($destinationPath,$file_name);
                $data['file_doc']=$file_name;
            }
        }
        catch(\Exception $e)
        {
            \Log::error('file upload error >>> '. $e);
        }
        $submission->where('user_id',Auth::user()->id)->update($data);

        return redirect('submissions/home');
    }

    function excel()
    {
        $submissions=Submission::join('users','users.id','user_id')->select('users.name','users.address','users.email','users.mobile','users.institution','submissions.*')->get();
        Excel::create('submission_list_'.time(), function($excel)use($submissions) {
            $excel->sheet('report', function($sheet)use($submissions) {

                $sheet->loadView('admin.excel',compact('submissions'));

            });

        })->export('xls');
        // Excel::download(view('admin.excel',compact('submissions')),'data.xlsx');
    }
    public function deleteSubmission($submission)
    {
        Submission::where('id',$submission)->delete();
        return redirect()->back()->with('message','Submission deleted successfully');
    }

    public function full_paper(Request $request)
    {
        $submission=new Submission();
        $created=$submission->where('user_id',Auth::user()->id)->first();

        if(!$request->hasFile('full_paper'))
        {
            if(!empty($created->full_paper))
            {
                $request->file_doc=$created->full_paper;
            }
        }
        else{
            $this->validate($request, [
                'full_paper' => 'required|max:60000|mimes:doc,docx',
            ]);
        }

        $data=$request->except(['_token']);

        try{
            if($request->hasFile('full_paper'))
            {
                $file = $request->file('full_paper'); 
                $file_name=time().'_'.$file->getClientOriginalName();
                $ext=$file->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $file->move($destinationPath,$file_name);
                $data['full_paper']=$file_name;
            }
        }
        catch(\Exception $e)
        {
            \Log::error('file upload error >>> '. $e);
        }
        $submission->where('user_id',Auth::user()->id)->update($data);

        return redirect('submissions/home');
    }
}
