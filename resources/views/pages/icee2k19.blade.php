@extends('layouts.template')

@section('content')
    <div class="container">
      <h1 style="text-align: center">Online Registration</h1>
      <hr class="divider  my-4">  
	  <br>
	  <div class="row">
	  <div class="col-md-2">&nbsp;</div>
	  <div class="col-sm-8  " style="background-color: white; padding: 15px; border-radius: 10px; border: 1px solid #d6d6d6;">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }} 
			<div class="row">
				<label class="control-label col-sm-2" for="name">Name</label>
				<div class="col-sm-4">
				  <input type="text name="name" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Designation</label>
				<div class="col-sm-4">
				  <input type="text" name="designation" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Address</label>
				<div class="col-sm-10">
				  <input type="text" name="address" class="form-control"  >
				</div>
			</div>
			<hr>
			
			<div class="row">
				<label class="control-label col-sm-2" for="name">Institution</label>
				<div class="col-sm-10">
				  <input type="text" name="institution" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">City</label>
				<div class="col-sm-3">
				  <input type="text" name="city" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Pincode</label>
				<div class="col-sm-2">
				  <input type="number" name="pincode" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Country</label>
				<div class="col-sm-3">
				  <input type="text" name="country" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Mobile no</label>
				<div class="col-sm-3">
				  <input type="text" name="mobile" class="form-control"  ><br>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Email id</label>
				<div class="col-sm-4">
				  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				</div>
			</div>
			<hr>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Participation category</label>
				<div class="col-sm-4">
				  <select name="category" class="form-control">
					<option value="Student/Research">Student/Research</option>
					<option value="Scholar/Faculty">Scholar/Faculty</option>
					<option value="Scientist/ Industry">Scientist/ Industry</option>
				  </select>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Participant type</label>
				<div class="col-sm-4">
				  <select name="participant_type" class="form-control">
					<option value="Author of paper">Author of paper</option>
					<option value="Delegate">Delegate</option> 
				  </select>
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-4" for="name">Accommodation required</label>
				<div class="col-sm-8">
				  <label class="radio-inline"><input type="radio" name="accomadation" checked>Yes</label>&nbsp;
					<label class="radio-inline"><input type="radio" name="accomadation">No</label>
				</div>
			</div>
			<hr>
			{{-- <div class="row">
				<label class="control-label col-sm-2" for="name">Login id</label>
				<div class="col-sm-4">
				  <input type="text" class="form-control"  ><br>
				</div>
			</div> --}}
			<div class="row">
				<label class="control-label col-sm-2" for="name">Password</label>
				<div class="col-sm-4">
				  <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
			</div>
			<div class="row">
				<label class="control-label col-sm-2" for="name">Retype Password</label>
				<div class="col-sm-4">
				  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>
			</div> 
			<hr>
			<div class="text-center">
			<input type="submit" class="btn btn-primary" value="Submit"> 
			</div>
		 </form>
      </div> 
      </div> 
      </div> 
 
        
    </div>
@endsection