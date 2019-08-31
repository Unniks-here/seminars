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
    
    <div class="row">
        <div class="col-lg-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0">Submission Details</h6>
              </div>
              <div class='card-body'>
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.submission') }}">
                      {{ csrf_field() }}
                      <label for="paper_submission_mode">Payement Mode</label>
                      <select name="paper_submission_mode" class="form-control paper_submission_mode">
                        <option  value="Abstract">Abstract </option>
                        <option  value="Full paper">Full paper</option>
                      </select><br>
                      <label for="paper_submission_mode">Area of paper</label>
                      <select name="paper_submission_mode" class="form-control paper_submission_mode">
                          <option  value="RENEWABLE ENERGY">RENEWABLE ENERGY </option>
                          <option  value="FUELS AND COMBUSTION">FUELS AND COMBUSTION</option>
                          <option  value="ADVANCED TECHNOLOGIES">ADVANCED TECHNOLOGIES</option>
                          <option  value="ADVANCED FUNCTIONAL MATERIALS">ADVANCED FUNCTIONAL MATERIALS</option>
                          <option  value="THIN FILMS">THIN FILMS</option>
                          <option  value="SUSTAINABLE ENVIRONMENT">SUSTAINABLE ENVIRONMENT</option>
                     </select><br>
                      <br>
                      <label for="paper_submission_mode">Title of paper</label>
                      <input class="form-control form-control-lg mb-3" type="text" name="title"  placeholder="Title">
                      <br>
                      <label for="paper_submission_mode">Authors with phone number and email</label>
                      <textarea class="form-control form-control-lg mb-3" type="text" name="authors_with_address"  placeholder="Bank Details"></textarea>
                      <br>
                      <label for="paper_submission_mode">Mode of Presentation</label>
                      <select name="paper_submission_mode" class="form-control paper_submission_mode">
                        <option  value="Oral">Oral</option>
                        <option  value="Poster">Poster</option>
                      </select><br>
                      <br>
                      <button class="btn btn-success" type="submit">Submit</button>
                  </form>
              </div>
            </div>
        <!-- / Post Overview -->
          </div>
    </div>
@endsection