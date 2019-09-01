<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Submission;
use Auth;

class PaymentController extends Controller
{
    function payment(Request $request)
    {
        $this->validate($request, [
            'dd_no' => 'max:50',
            'title' => 'max:50',
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

        $data=$request->all();
        $data['user_id']=Auth::user()->id;

        $submission=new Submission();
        $created=$submission->create($request->all());
        $submission->where('id',$created->id)->update(['user_id'=>Auth::user()->id]);

        return redirect('submissions/home');
    }
    function submission(Request $request)
    {
        
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
                'file_doc' => 'required|max:10000|mimes:doc,docx,pdf',
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
}
