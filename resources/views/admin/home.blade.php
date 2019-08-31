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
                      <h6 class="m-0">Status</h6>
                    </div>
                    <div class='card-body p-0'>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3 pb-2">
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category1">Payment Details </label>
                            @if(empty($submission))
                              <label class="bg-secondary rounded text-white text-center p-0">Not Entered</label>
                            @else
                              <label class="bg-success rounded text-white text-center p-0">Submitted</label>
                            @endif
                          </div>
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category2">Participant Mode</label>
                            
                              <label class="bg-success rounded text-white text-center p-0">{{Auth::user()->participant_type}}</label>
                          </div>
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category3">Paper Submitted Status</label>
                            @if(empty($submission))
                              <label class="bg-secondary rounded text-white text-center p-0">Not Submitted</label>
                            @elseif($submission->approved==1)
                              <label class="bg-success rounded text-white text-center p-0">Approved</label>
                            @elseif($submission->approved==0)
                              <label class="bg-warning rounded text-white text-center p-0">Pending</label>
                              @elseif($submission->approved==-1)
                                <label class="bg-rejected rounded text-white text-center p-0">Rejected</label>
                            @endif
                          </div>
                      </ul>
                    </div>
                  </div>
                  <!-- / Post Overview -->
        </div>
    </div>
@endsection