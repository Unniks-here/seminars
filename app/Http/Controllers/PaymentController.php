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
        $data=$request->all();
        $data['user_id']=Auth::user()->id;

        $submission=new Submission();
        $created=$submission->where('id',$created->id)->update($request->all());

        return redirect('submissions/home');
    }
}
