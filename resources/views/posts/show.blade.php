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
@section('content')
<body style="background-color: #C0CFB2; ">
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
        <form class="form-inline">


            <a style="text-decoration: none; margin-right: 10px; " href="{{ route('login')}}">
                <button type="button" class="btn btn-success" style="width: 150px; height: 70px;">View Admin</button>
            </a>
            <!-- Navigation Link to Wishlist Page -->

            <a href="{{ route('wishlist.index') }}" method="GET" class="btn btn-warning" style="width: 150px; height: 70px;">
                <img src="{{ asset('storage/posts/bucketshop.png') }}" alt="Wishlist" width="50" height="50">
            </a>
        </form>

    </div>
</div>
</nav>
    <h1 class="mt-5 mb-5" style="text-align: center; color :black; font-weight:bold;">Detail Produk</h1>
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 text-white rounded" style="background-color: #556B2F;">
            <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-100 rounded">
            <hr>
            <h4>{{ $post->title }}</h4>
            <p class="tmt-3">
                {!! $post->content !!}
            </p>
            <a href="/portofolio" class="btn btn-dark">Back</a>
        </div>
    </div>
    @endsection
</body>

</html>