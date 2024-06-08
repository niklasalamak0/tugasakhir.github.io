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

<body style="background-color: #C0CFB2;">
    <div class="container mt-5">
    <h2 class="mt-5 mb-5" style="text-align: center; color: black; font-weight: bold;">Your Wishlist</h2>
        <div class="row">
            @foreach ($wishlistItems as $post)
            @php
            $imagePath = $post->image;
            if (strpos($imagePath, 'http') !== 0) {
                $imagePath = asset('storage/posts/' . $item->image);
            }
            @endphp
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card card-container" style="width: 100%; height: 100%;">
                    <img src="{{ $imagePath }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: contain;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{!! $post->content !!}</p>
                        <div class="mt-auto d-flex justify-content-between">
                            <form action="{{ route('wishlist.remove', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" style="height: 100%; margin-right:10px;">Remove from Wishlist</button>
                            </form>
                            <a href="{{ route('portofolio.checkout', ['id' => $post->id]) }}" class="btn btn-warning ml-2">
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
    @endsection
</body>

</html>