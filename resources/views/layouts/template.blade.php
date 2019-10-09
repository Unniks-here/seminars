<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iCEE 2K19</title>

  <!-- Font Awesome Icons -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
  <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

  @if(Request::is('index*') || Request::is('/'))
  <style>
    .btn-primary{
      background-color: #54846d !important;
    }
    .bg-primary {
      background-color: #54846d!important;
    }
    #mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link {
    color: #ffffff;
    }
    #mainNav .navbar-brand {
      color: rgba(255,255,255,.7);
    }
    .text-white-50 {
      color: rgba(255, 255, 255, 0.98)!important;
      font-family: sans-serif;
      font-size: larger;
    }
    .td {
      color: white !important;
    }
    #mainNav.navbar-scrolled .navbar-brand {
        color: #ffffff;
    }
    .img_logo{
      -webkit-filter: drop-shadow(2px 2px 0 white)
                drop-shadow(-2px 2px 0 white)
                drop-shadow(2px -2px 0 white)
                drop-shadow(-2px -2px 0 white);

filter: drop-shadow(1px 1px 0 white)         drop-shadow(-1px 1px 0 white)         drop-shadow(1px -1px 0 white)         drop-shadow(-1px -1px 0 white);
    }
	header.masthead{
		background-position: bottom;
	}
	body{
		background-color: #ffffff;
		<!-- background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='32' viewBox='0 0 16 32'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath fill-rule='evenodd' d='M0 24h4v2H0v-2zm0 4h6v2H0v-2zm0-8h2v2H0v-2zM0 0h4v2H0V0zm0 4h2v2H0V4zm16 20h-6v2h6v-2zm0 4H8v2h8v-2zm0-8h-4v2h4v-2zm0-20h-6v2h6V0zm0 4h-4v2h4V4zm-2 12h2v2h-2v-2zm0-8h2v2h-2V8zM2 8h10v2H2V8zm0 8h10v2H2v-2zm-2-4h14v2H0v-2zm4-8h6v2H4V4zm0 16h6v2H4v-2zM6 0h2v2H6V0zm0 24h2v2H6v-2z'/%3E%3C/g%3E%3C/svg%3E"); -->
		background-attachment: fixed;
	}
	@media (min-width: 992px){
			#mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link:hover {
			color: #8BC34A;
			-webkit-text-stroke: black;
		}
	}
	.imp_date{
		color: #000;
		border-radius: 5px;
		background-color: #cccccc;
	}
	.imp_date tr:first-child td{
		border-top: none;
	}
	 header.masthead h1 {
		font-size: 3.5rem;
		font-family: headingFont;
	}
	#mainNav .navbar-nav .nav-item .nav-link.active {
		color: #5dad00!important;
	}
	
  </style>

  @else
  <style>
    .btn-primary{
      background-color: #54846d !important;
    }
    .bg-primary {
      background-color: #54846d!important;
    }
    #mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link {
    color: #ffffff;
    }
    #mainNav .navbar-brand {
      color: rgba(255,255,255,.7);
    }
    .text-white-50 {
      color: rgba(255, 255, 255, 0.98)!important;
      font-family: sans-serif;
      font-size: larger;
    }
     
    #mainNav.navbar-scrolled .navbar-brand {
        color: #ffffff;
    }
    .img_logo{
      -webkit-filter: drop-shadow(2px 2px 0 white)
                drop-shadow(-2px 2px 0 white)
                drop-shadow(2px -2px 0 white)
                drop-shadow(-2px -2px 0 white);

filter: drop-shadow(1px 1px 0 white)         drop-shadow(-1px 1px 0 white)         drop-shadow(1px -1px 0 white)         drop-shadow(-1px -1px 0 white);
    }
	header.masthead{
		background-position: center;
	}
	body{
		background-color: #ffffff;
		<!-- background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='32' viewBox='0 0 16 32'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath fill-rule='evenodd' d='M0 24h4v2H0v-2zm0 4h6v2H0v-2zm0-8h2v2H0v-2zM0 0h4v2H0V0zm0 4h2v2H0V4zm16 20h-6v2h6v-2zm0 4H8v2h8v-2zm0-8h-4v2h4v-2zm0-20h-6v2h6V0zm0 4h-4v2h4V4zm-2 12h2v2h-2v-2zm0-8h2v2h-2V8zM2 8h10v2H2V8zm0 8h10v2H2v-2zm-2-4h14v2H0v-2zm4-8h6v2H4V4zm0 16h6v2H4v-2zM6 0h2v2H6V0zm0 24h2v2H6v-2z'/%3E%3C/g%3E%3C/svg%3E"); -->
		background-attachment: fixed;
	}
	@media (min-width: 992px){
			#mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link:hover {
			color: #8BC34A;
			-webkit-text-stroke: black;
		}
	}
	.imp_date{
		color: #000;
		border-radius: 5px;
		background-color: #cccccc;
	}
	.imp_date tr:first-child td{
		border-top: none;
	}
	 header.masthead h1 {
		font-size: 3rem;
		font-family: headingFont;
	}
	#mainNav .navbar-nav .nav-item .nav-link.active {
		color: #5dad00!important;
	}
	@media (min-width: 992px){
		header.masthead {
			height: 40vh;
			min-height: 15rem;
			padding-top: 72px;
			padding-bottom: 0;
		}
	}
	.border_table td{
	border-top:none;
	}
  </style>

  @endif
  <style>
    @media only screen and (max-width: 600px) {
  .sponsers{
    position: absolute;
    width: 95%;
    bottom: -80px;
  }
  }
  </style>
  @yield('css')
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" style="background-color: #000;" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">iCEE 2K19</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
          <a class="{{Request::is('index*')? 'active' : ''}} nav-link js-scroll-trigger" href="/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('about_us*')? 'active' : ''}} nav-link js-scroll-trigger" href="/about_us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('committee*')? 'active' : ''}} nav-link js-scroll-trigger" href="/committee">Committee</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('call_for_paper*')? 'active' : ''}} nav-link js-scroll-trigger" href="/call_for_paper">Call For Paper</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('speakers*')? 'active' : ''}} nav-link js-scroll-trigger" href="/speakers">Speakers</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('regist*')? 'active' : ''}} nav-link js-scroll-trigger" href="/registration">Registration</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('submission*')? 'active' : ''}} nav-link js-scroll-trigger" href="/submission">Submission</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('downloads*')? 'active' : ''}} nav-link js-scroll-trigger" href="/downloads">Downloads</a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('contact_us*')? 'active' : ''}} nav-link js-scroll-trigger" href="/contact_us">Contact Us</a>
          </li>
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          @if (Auth::user()->avatar)
                              <img class="img-circle" src="{{Auth::user()->avatar}}"
                                   style="height: 22px; width: 22px; margin-right: 4px;"/>
                          @endif
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li style="padding:10px">
                              <a href="/submissions/home">Submissions</a>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
        </ul>
      </div>
    </div>
  </nav>

  @include('layouts.heade_pages')
       
  
  <!-- Services Section -->
  <section class="page-section" id="home" style="padding: 3rem 0;">
    @yield('content')
  </section>
  

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - T. K. M. College of Arts and Science, Kollam</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.j')}}"></script>
  <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/creative.min.js')}}"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js'></script>
<script>
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: false,
			slideshowSpeed: 7000,
		});
		</script>
</body>

</html>
