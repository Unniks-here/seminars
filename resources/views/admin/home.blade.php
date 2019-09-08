@extends('layouts.admintemplate')

@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Home</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <?php $submission = App\Submission::where('user_id',Auth::user()->id)->first();  ?>
    <div class="row">
        <div class="col-sm-4">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                    <h6 class="m-0"><span class="pull-right">Registration No: {{!empty($submission)?$submission->reg_id:'NIL'}}</span></h6>
                    </div>
                    <div class='card-body p-0'>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3 pb-2">
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category1">Payment Details </label>
                            @if(empty($submission))
                              <label class="bg-secondary rounded text-white text-center p-0">&nbsp; Not Entered &nbsp; </label>
                            @else
                              <label class="bg-success rounded text-white text-center p-0">&nbsp; Submitted &nbsp; </label>
                            @endif
                          </div>
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category2">Participant Mode</label>
                            
                              <label class="bg-success rounded text-white text-center p-0">&nbsp;  {{Auth::user()->participant_type}} &nbsp; </label>
                          </div>
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category3">Registration Status</label>
                            @if(empty($submission))
                              <label class="bg-secondary rounded text-white text-center p-0">&nbsp; Not Submitted &nbsp; </label>
                            @elseif($submission->approved==1)
                              <label class="bg-success rounded text-white text-center p-0">&nbsp; Approved &nbsp; </label>
                            @elseif($submission->approved==0)
                              <label class="bg-warning rounded text-white text-center p-0">&nbsp; @if(Auth::user()->participant_type=='Participation only') The details are uploaded successfully. Further intimation will send you soon via e-mail @else Success @endif &nbsp; </label>
                            @elseif($submission->approved==-1)
                                <label class="bg-rejected rounded text-white text-center p-0">&nbsp; Rejected &nbsp; </label>
                            @else 
                              Please enter payment details
                            @endif
                          </div>
                      </ul>
                    </div>
                  </div>
                  <!-- / Post Overview -->
        </div>
    </div>
@endsection