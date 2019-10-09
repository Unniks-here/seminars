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
                <h6 class="m-0">Submission List</h6>
              </div>
              @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
              @endif
              <div class='card-body table-responsive'>
                <a href="/doc/download" class="btn btn-success"><i></i> Excel</a>
                  <?php $submissions = App\Submission::join('users','users.id','user_id')->select('users.name','users.address','users.email','users.mobile','users.institution','submissions.*')->get(); ?>
                  <table class="table table-hover">
                      <thead>
                          <tr>
                            <th>Action</th>
                            <th>#</th>
                            <th>Reg No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Submission Mode</th>
                            <th>Area</th>
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Mode of Presentation</th>
                            <th>Mode of Payement</th>
                            <th>DD No</th>
                            <th>DD date</th>
                            <th>DD bank</th>
                            <th>Transaction ID</th>
                            <th>Transaction Date</th>
                            <th>Transaction Bank</th>
                            <th>Amount</th>
                            <th>File</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($submissions as $submit)
                          <tr>
                          <td>  <form method="POST" action="{{route('submission.destroy',$submit->id)}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{-- {!! Form::button('Delete',['class'=>'btn btn-danger btn-xs','type'=>'submit','onclick'=>'return confirm(\'Are you sure want to delete?\')']) !!} --}}
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                          </td>
                          <td>{{$loop->iteration}}</td>
                          {{-- <td><a class="mb-2 btn btn-sm {{$submit->approved==0? 'btn-warning' : 'btn-primary'  }} mr-1" href="/submissions/approve/now/{{$submit->id}}" style="color:white">{{$submit->approved==0? 'Approve' : 'Reject'  }}</a></td> --}}
                          <td>{{$submit->reg_id}}</td>
                          <td>{{$submit->name}}</td>
                          <td>{{$submit->address}}</td>
                          <td>{{$submit->email}}</td>
                          <td>{{$submit->mobile}}</td>
                          <td>{{$submit->paper_submission_mode}}</td>
                          <td>{{$submit->area_of_paper}}</td>
                          <td>{{$submit->title}}</td>
                          <td>{{$submit->authors_with_address}}</td>
                          <td>{{$submit->mode_of_presentation}}</td>
                          <td>{{$submit->mode_of_payment}}</td>
                          <td>{{$submit->dd_no}}</td>
                          <td>{{$submit->dd_date}}</td>
                          <td>{{$submit->dd_bank}}</td>
                          <td>{{$submit->transation_id}}</td>
                          <td>{{$submit->dd_date}}</td>
                          <td>{{$submit->transaction_bank}}</td>
                          <td>{{$submit->amount}}</td>
                          <td><a href="/uploads/{{$submit->file_doc}}">{{$submit->file_doc}}</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
        <!-- / Post Overview -->
          </div>
    </div>
@endsection