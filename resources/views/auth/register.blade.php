@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default" style="padding: 15px;
            border: 1px solid #ced4da;">
                <div class="panel-heading text-center"><b><font size="5">Register</font></b></div>
                <hr>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class=" control-label">Name</label>

                            <div class=" ">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail address</label>

                            <div class=" ">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">Designation</label>

                            <div class=" ">
                                <input type="text" name="designation" class="form-control"  >

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class=" control-label">Address</label>

                            <div class=" ">
                                <textarea name="address" class="form-control" required ></textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('institution') ? ' has-error' : '' }}">
                            <label for="institution" class=" control-label">Institution</label>

                            <div class=" ">
                                <input id="institution" type="text" class="form-control" name="institution" required>

                                @if ($errors->has('institution'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class=" control-label">City</label>

                            <div class=" ">
                                <input id="city" type="text" class="form-control" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                            <label for="pincode" class=" control-label">Pincode</label>

                            <div class=" ">
                                <input id="pincode" type="text" class="form-control" name="pincode"  required>

                                @if ($errors->has('pincode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class=" control-label">Country</label>

                            <div class=" ">
                                <input id="country" type="country" class="form-control" name="country" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">Mobile</label>

                            <div class=" ">
                                <input id="mobile" type="number" class="form-control" name="mobile" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class=" control-label">Participation category</label>

                            <div class=" ">
                                <select name="category" class="form-control">
                                    <option value="Student">Student</option>
                                    <option value="Research Scholar">Research Scholar</option>
                                    <option value="Faculty/Scientist">Faculty/ Scientist</option>
                                    <option value="Industry">Industry</option>
                                  </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('participant_type') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">Participany type</label>

                            <div class=" ">
                                <select name="participant_type" class="form-control">
                                    <option value="Participation only">Participation only</option>
                                    <option value="Paper presentation">Paper presentation</option> 
                                    <option value="Poster presentation">Poster presentation</option> 
                                </select>
                                @if ($errors->has('participant_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('participant_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('accomadation') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Need accomadation ?</label>

                            <div class=" ">
                                <label class="radio-inline"><input type="radio" value="Yes" name="accomadation" checked>Yes</label>&nbsp;
                                <label class="radio-inline"><input type="radio" value="No" name="accomadation">No</label>

                                @if ($errors->has('accomadation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accomadation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="  control-label">Password</label>

                            <div class=" ">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class=" control-label">Confirm Password</label>

                            <div class=" ">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
