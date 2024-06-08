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
/* General page styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

/* Header styling *

/* Form container styling */
.register-box {
    max-width: 400px;
    margin: 0 auto;
    padding: 2em;
    
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.register-box .card-body {
    padding: 1em;
}

.register-box .login-box-msg {
    font-size: 1.2em;
    margin-bottom: 1em;
    text-align: center;
    color: #3c763d;
}

.register-box .input-group {
    margin-bottom: 1em;
}

.register-box .input-group .form-control {
    height: 45px;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 10px;
    font-size: 1em;
}

.register-box .input-group .input-group-text {
    background-color: #3c763d;
    color: white;
    border: none;
    border-radius: 3px;
}

.register-box .btn-primary {
    background-color: #3c763d;
    border: none;
    padding: 10px 20px;
    font-size: 1em;
    cursor: pointer;
    width: 100%;
    border-radius: 3px;
}

.register-box .btn-primary:hover {
    background-color: #2b542c;
}

.register-box .text-center {
    display: block;
    margin-top: 1em;
    text-align: center;
    color: #3c763d;
    text-decoration: none;
}

.register-box .text-center:hover {
    text-decoration: underline;
}


</style>

<body>
@section('content')
<body class="hold-transition register-page">
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
<div class="register-box">
        <div class="card">
            <div class="register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                @if(session('error'))
                    <div class="alert alert-danger text-light text-center m-2" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('register.post') }}" method="POST" role="form text-left">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="User name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            </div>
        </div>
    </div>
<!-- /.register-box -->
 
<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
</body>

</html>
@endsection