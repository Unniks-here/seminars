@extends('layouts.admintemplate')

@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Submissions</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <?php $submission = App\Submission::where('user_id',Auth::user()->id)->first();  ?>
    <div class="row">
        <div class="col-lg-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0">Submission Details</h6>
              </div>
              <div class='card-body'>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.submission') }}">
                      {{ csrf_field() }}
                      <label for="paper_submission_mode">Payement Mode</label>
                      <select name="paper_submission_mode" class="form-control paper_submission_mode">
                        <option  value="Abstract">Abstract </option>
                        <option  value="Full paper">Full paper</option>
                      </select><br>
                      <label for="area_of_paper">Area of paper</label>
                      <select name="area_of_paper" class="form-control area_of_paper">
                          <option  value="RENEWABLE ENERGY">RENEWABLE ENERGY </option>
                          <option  value="FUELS AND COMBUSTION">FUELS AND COMBUSTION</option>
                          <option  value="ADVANCED TECHNOLOGIES">ADVANCED TECHNOLOGIES</option>
                          <option  value="ADVANCED FUNCTIONAL MATERIALS">ADVANCED FUNCTIONAL MATERIALS</option>
                          <option  value="THIN FILMS">THIN FILMS</option>
                          <option  value="SUSTAINABLE ENVIRONMENT">SUSTAINABLE ENVIRONMENT</option>
                     </select><br>
                      <br>
                      <label for="title">Title of paper</label>
                    <input class="form-control form-control-lg mb-3" value="{{!empty($submission->title)? $submission->title : ''}}" type="text" name="title"  placeholder="Title">
                      <br>
                      <label for="authors_with_address">Authors with phone number and email</label>
                      <textarea class="form-control form-control-lg mb-3" type="text" name="authors_with_address"  placeholder="Authors with details">{{!empty($submission->authors_with_address)? $submission->authors_with_address : ''}}</textarea>
                      <br>
                      <label for="mode_of_presentation">Mode of Presentation</label>
                      <select name="mode_of_presentation" class="form-control mode_of_presentation">
                        <option  value="Oral">Oral</option>
                        <option  value="Poster">Poster</option>
                      </select><br>
                      <br>
                      <label>Paper (PDF/docx/doc)</label>
                      <br>
                      <input type="file"  name="file_doc" class="form-control">
                        @if(!empty($submission->file_doc)) <a href="/uploads/{{$submission->file_doc}}">{{$submission->file_doc}}</a> @endif
                      <br>
                      <button class="btn btn-success" type="submit">Submit</button>
                  </form>
              </div>
            </div>
        <!-- / Post Overview -->
          </div>
    </div>
@endsection

@section('script')
    <script>
      @if(!empty($submission))
        $('.paper_submission_mode').val("{{$submission->paper_submission_mode}}");
        $('.area_of_paper').val("{{$submission->area_of_paper}}");
        $('.mode_of_presentation').val("{{$submission->mode_of_presentation}}");
      @endif
    </script>
@endsection