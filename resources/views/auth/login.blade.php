<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

  <!-- Custom fonts for this template-->
  <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body class="bg-gradient-dark">
 <div class="container">
 <!-- Outer Row -->
 <div class="row justify-content-center">
 <div class="col-xl-5 col-lg-12 col-md-9">
 <div class="card o-hidden border-0 shadow-lg my-5">
 <div class="card-body p-0">
 <!-- Nested Row within Card Body -->
 <div class="center">
 <div class="col-lg-6 d-none d-lg-block "></div>
 <div class="col-lg-20">
 <div class="p-5">
 <div class="text-center">
 <h1 class="h4 text-gray-900 mb4">Sistem Informasi Akuntansi<br>Fakultas Teknik dan Informatika<br>
 <br><img src="{{ asset('asset/img/logo_ubsi.png')}}"width="160"></h1>
 </div>
 <form method="POST" action="{{ route('login') }}">
 @csrf
<div class="form-group row">
 <label for="email" class="col-md-12 col-formlabel text-md-left">{{ __('E-Mail Address') }}</label>
 <div class="col-md-12">
 <input id="email" type="email" class="form-control @error('email') isinvalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
 @error('email')
 <span class="invalidfeedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
<div class="form-group row">
 <label for="password" class="col-md-12 colform-label text-md-left">{{ __('Password') }}</label>
 <div class="col-md-12">
 <input id="password" type="password" class="form-control @error('password') isinvalid @enderror" name="password" required autocomplete="currentpassword">
 @error('password')
 <span class="invalidfeedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
<div class="form-group row">
<div class="col-md-12 offset-md-12">
 <div class="form-check">
 <input class="form-checkinput" type="checkbox" name="remember" id="remember" {{ old('remember') ?'checked' : '' }}>
 <label class="form-checklabel" for="remember">
 {{ __('Remember Me') }}
 </label>
 </div>
 </div>
 </div>
<div class="form-group row mb-0">
 <div class="col-md-12 offset-md-12">
 <button type="submit" class="btn btn-primary btn-block mb-4" >
    {{ __('Login') }}
 </button>
@if (Route::has('password.request'))
 <a class="btn btnlink" href="{{ route('password.request') }}">
 {{ __('Forgot Your Password?') }}
 </a>
 @endif
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'
)}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('asset/vendor/jquery-
easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('asset/js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{ asset('asset/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js')
}}"></script>
<script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.
js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('asset/js/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('asset/js/demo/chart-pie-demo.js')}}"></script>
<script src="{{ asset('asset/js/demo/datatables-demo.js')}}"></script>
</body>
</html>