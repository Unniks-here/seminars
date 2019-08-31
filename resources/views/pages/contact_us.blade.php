@extends('layouts.template')

@section('content')
    <div class="container">
      <h1 style="text-align: center">Let's Get In Touch!</h1>
      <hr class="divider  my-4"> 
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center"> 
          <p class="text-muted mb-5">Want to participate? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
	  <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+91 0474 2712240</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:icee2k19@gmail.com">icee2k19@gmail.com</a>
        </div>
      </div>
	  <div class="row justify-content-center">
          <div class="col-sm-4 col-sm-offset-5">
          <table class="table">
            <tbody><tr>
              <td>Dr. S. Anas</td>
              <td>+91  9447926654</td>
            </tr>
            <tr>
              <td>Dr. P. K. Manoj</td>
              <td>+91 9495902021</td>
            </tr>
          </tbody></table>
          </div>
      </div>
        
    </div>
@endsection