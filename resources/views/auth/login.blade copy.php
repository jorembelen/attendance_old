<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Attendance|App</title>

  <!-- Bootstrap core CSS -->
  <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="front/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="front/vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="front/device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="front/css/new-age.min.css" rel="stylesheet">

  <link rel="icon" href="https://colorlib.com/polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="/files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="/files/assets/css/style.css">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Attendance | App</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/#!">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header class="masthead">
    
    <section class="login-block">

        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        
        <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
            @csrf
        <div class="text-center">
        <img src="/files/assets/images/logo.png" alt="logo.png">
        </div>
        <div class="auth-box card">
        <div class="card-block">
        <div class="row m-b-20">
        <div class="col-md-12">
        <h3 class="text-center">Sign In</h3>
        </div>
        </div>
        <div class="form-group form-primary">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email Address" autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif	
        </div>
        <div class="form-group form-primary">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Password" autofocus>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        </div>
        <div class="row m-t-25 text-left">
        <div class="col-12">
        <div class="checkbox-fade fade-in-primary d-">
        <label>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
        <span class="text-inverse">Remember me</span>
        </label>
        </div>
        {{-- <div class="forgot-phone text-right f-right">
        <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
        </div>
        </div>
        </div> --}}
        <div class="row m-t-30">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
        </a>
        </div>
        </div>
        <hr />
        <div class="row">
        <div class="col-md-10">
        <p class="text-inverse text-left m-b-0">Thank you.</p>
        {{-- <p class="text-inverse text-left"><a href="/dashboard"><b class="f-w-600">Back to website</b></a></p> --}}
        </div>
        <div class="col-md-2">
        <img src="/files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
        </div>
        </div>
        </div>
        </div>
        </form>
        
        </div>
        
        </div>
        
        </div>
        
        </section>

  </header>

 

  <footer>
    <div class="container">
      <p>&copy; Attendance | App. All Rights Reserved 2020. Jongetz</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="front/vendor/jquery/jquery.min.js"></script>
  <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="front/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="front/js/new-age.min.js"></script>

</body>

</html>
