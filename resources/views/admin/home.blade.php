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
    @if(empty($submission)) 
    @php return redirect()->route('admin.payment') @endphp
    @endif
    <div class="row">
        <div class="col-sm-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($submission->approved==0)
            <label class="bg-info rounded text-white text-center p-0">&nbsp; Registration & abstract submission process completed successfully. Further intimation will send you soon via e-mail &nbsp; </label>
            @endif
            @if($submission->full_paper)
            <label class="bg-info rounded text-white text-center p-0">&nbsp;Thankyou. Your full paper submitted successfully. Please send your full paper to our email address too, icee2k19@gmail.com. <br>We will contact you soon &nbsp; </label>
            @endif
            <br>
            @if(Auth::user()->participant_type!='Participation only')
            @if(!$submission->full_paper)<h4>Upload your full paper here <i class="fa fa-hand"></i></h4>
            @endif
            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.submission.fullpaper') }}">
              {{ csrf_field() }}
              <br>
              <label><b>Full Paper (docx/doc)</b></label>
              <br>
              <input type="file" required name="full_paper" class="form-control">
                @if(!empty($submission->full_paper)) <a href="/uploads/{{$submission->full_paper}}">{{$submission->full_paper}}</a> @endif
              <br>
              <button class="btn btn-success" type="submit">@if(!empty($submission->full_paper)) Change @else Upload @endif </button>
          </form>
            @endif
        </div>
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
                            
                          </div>
                          <div class="custom-control  mb-1">
                            <label class="custom-control-label" for="category2">Participant Mode</label>
                            
                              <label class="bg-success rounded text-white text-center p-0">&nbsp;  {{Auth::user()->participant_type}} &nbsp; </label>
                          </div>
                      </ul>
                    </div>
                  </div>
                  <!-- / Post Overview -->
        </div>
    </div>
@endsection