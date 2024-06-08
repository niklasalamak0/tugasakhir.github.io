@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowgard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/posts/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .card {
        height: 100%;
        width: 100%;
        margin-top: 50px;
    }
    html, body {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f6f9; /* Optional: background color */
}

.navbar{
  margin-top: 100px;
}
.login-box {
    width: 360px;
    margin: 0 auto;
    padding: 15px;
}

.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

</style>
<body>
@section('content')
<body class="hold-transition login-page">
<nav class="navbar navbar-expand-lg navbar-light bg-transparant">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('portofolio.index') }}">
                <img src="{{ asset('storage/posts/logo.png') }}" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('portofolio.index') }}">Flowgard</a>
                    </li>
                </ul>          
            </div>
        </div>
    </nav>
<div class="login-box">
    <div class="card card-container">
      <div class="card-body login-card-body">
        <h2 style="text-align: center; margin:10px;">Login Admin</h2>
        <p class="login-box-msg"></p>

        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger text-light" role="alert">
            {{ session('error') }}
          </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="User Name">
          </div>

          <div class="form-group input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>

        <div >
        <p class="mb-0" style="text-decoration: none;">
          <a href="{{ route('register.post') }}" class="text-center">Register a new admin</a>
        </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.login-box -->
 
<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>            
</body>
@endsection
</html>