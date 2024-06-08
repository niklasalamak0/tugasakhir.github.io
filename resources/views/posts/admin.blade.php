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
                <!-- Navigation Link to Wishlist Page -->

                <a href="{{ route('wishlist.index') }}" method="GET" class="btn btn-warning" style="width: 150px; height: 70px;">
                    <img src="{{ asset('storage/posts/bucketshop.png') }}" alt="Wishlist" width="50" height="50">
                </a>
            </form>

        </div>
    </div>
</nav>
<h5 class="bhs" id="prd">Let's see the Products</h5>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card-container">
                @foreach($post as $post)
                <div class="col-md-3">
                    <div class="card mb-3" style="width: 20rem; border: 1px solid #ddd; border-radius: 10px; height: 100%;">
                        <img src="{{ asset('storage/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: contain;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('portofolio.destroy', $post->id) }}" method="POST" class="mt-auto">
                                <div class="d-flex justify-content-between mb-2">
                                    <a href="{{ route('portofolio.show', $post->id) }}" class="btn btn-sm btn-danger flex-fill mx-1">SHOW</a>
                                    <a href="{{ route('portofolio.edit', $post->id) }}" class="btn btn-sm btn-primary flex-fill mx-1">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger flex-fill mx-1">HAPUS</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                @php
                                $inWishlist = \App\Models\Wishlist::where('title', $post->title)->exists();
                                @endphp
                                @if (!$inWishlist)
                                <form action="{{ route('wishlist.add', $post->id) }}" method="POST" class="wish mr-2" style="margin-right:10px;">
                                    @csrf
                                    <input type="hidden" name="image" value="{{ asset('storage/posts/' . $post->image) }}">
                                    <input type="hidden" name="title" value="{{ $post->title }}">
                                    <input type="hidden" name="content" value="{{ $post->content }}">
                                    <button type="submit" class="btn btn-warning">
                                        Add to Wishlist
                                        <img src="{{ asset('storage/posts/bucketshop.png') }}" alt="Wishlist" style="width: 30px; height: 26px;">
                                    </button>
                                </form>
                                @else
                                <button class="btn btn-secondary mr-2" disabled>Already in Wishlist</button>
                                @endif
                                <a href="{{ route('portofolio.checkout', ['id' => $post->id]) }}" class="btn btn-warning">
                                    Checkout Now
                                    <img src="{{ asset('storage/posts/co.png') }}" alt="Checkout" style="width: 30px; height: 25px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection