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
        height: 100%
    }
</style>

<body>
    <!-- navbar -->
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
    @section('content')
    <!-- body -->
    <div class="wrapper">
        <img class="dewe" src="storage/posts/alat.png" alt="Alat Berkebun">
        <div class="text-box">
            <h1>Mau berkebun?</h1>
            <p>Bingung mencari peralatannya?</p>
            <p>Tenang kami disini menyediakan, Kebutuhan berkebun anda</p>
            <a href="#"><button class="button" style="border: none;">See More</button></a>
        </div>
    </div>

    <div class="container-fluid" style="border-radius: 20px; margin-top:200px;">
        <div class="">
            <div class="">
                <div class="fotbar">
                    <h2 style="color: #E6FF94; font-size:larger;">Warta: Berita dan informasi terbaru yang perlu Anda ketahui</h2>
                </div>
                <div class="scroll-container shadow" style="background-color:#45624E;">
                    <div class="image-container-wrapper">
                        <div class="image-container">
                            <img class="img" src="storage/posts/kebun.jpg" alt="">
                            <div class="overlay2">
                                <div class="capt">
                                    <h2>Ekspor Buah Tropis Meningkat Tajam</h2>
                                    <a href="{{ route('portofolio.berita')}}"><button class="baca">Baca Selengkapnya -></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="image-container">
                            <img class="img" src="storage/posts/kebun2.jpg" alt="">
                            <div class="overlay2">
                                <div class="capt">
                                    <h2>Program Reboisasi Lahan Pertanian</h2>
                                    <a href="{{ route('portofolio.berita')}}"><button class="baca">Baca Selengkapnya -></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="image-container">
                            <img class="img" src="storage/posts/padi.jpg" alt="">
                            <div class="overlay2">
                                <div class="capt">
                                    <h2>Peningkatan Panen Padi di Indonesia</h2>
                                    <a href="{{ route('portofolio.berita')}}"><button class="baca">Baca Selengkapnya -></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <hr class="border-end border-light" style="height: 10px; margin-right: 20px; margin-left:20px;">


    <h5 class="bhs" id="prd">Let's see the Products</h5>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-container">
                    @foreach($posts as $post)
                    <div class="col-md-3">
                        <div class="card mb-3" style="width: 20rem; border: 1px solid #ddd; border-radius: 10px; height: 100%;">
                            <img src="{{ asset('storage/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: contain;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>


                                <a href="{{ route('portofolio.show', $post->id) }}" style="margin: 10px;" class="btn btn-sm btn-danger flex-fill mx-1">SHOW</a>


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
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    @endsection


    <!-- <div class="pollow">
            <h2 class="mt-2">Klik 'Follow Me' to see My IG Account 👉<a href="https://www.instagram.com/nikola_ziuz?igsh=ZGd3bXdhMHUyMHV4"><button class="follow-btn">FollowMe</button></a></h2>
            </div>

            <div class="footer bg-dark">
                <h2>"Lanjut Follow dan Dm di IG saja :)"</h2>
            </div> -->


</body>

</html>