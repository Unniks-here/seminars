<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable=['paper_submission_mode','paper_id','area_of_paper','title','authors_with_address','mode_of_presentation','mode_of_payment',
                'dd_no','dd_date','dd_bank','transation_id','transaction_bank','user_id','amount','doc_file'];
}
