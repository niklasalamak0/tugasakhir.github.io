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
<style>
    .art {
        margin: 20px;
        float: right;
    }
    .img {
        float: left;
        margin-right: 20px;/* Adjust size as needed */
        border-radius: 10px;
    }
    .d-flex {
        margin-bottom: 20px;
        display: flex;
        align-items: flex-start;
    }
    .d-flex:not(:last-child) {
        border-bottom: 2px solid #E6FF94; /* Separator color */
        padding-bottom: 20px;
    }
    .container-fluid {
        border-radius: 20px;
        padding: 20px;
    }
    .scroll {
        background-color: #45624E;
        padding: 20px;
        border-radius: 10px;
    }
    .fotbar h2 {
        color: #E6FF94;
        font-size: larger;
        margin-bottom: 20px;
    }
    h2{
        font-weight: bolder;
    }
</style>
<body>
<div class="container-fluid">
    <div class="">
        <div class="">
            <div class="fotbar" style="margin-top: 20px; margin-bottom:20px;">
                <h2>Warta: Berita dan informasi terbaru yang perlu Anda ketahui</h2>
            </div>
            <div class="scroll shadow">
                <div class="">
                    <div class="d-flex">
                        <img class="img" src="{{ asset('storage/posts/kebun.jpg') }}" alt="Ekspor Buah Tropis Meningkat Tajam">
                        <div class="art">
                            <h2>Ekspor Buah Tropis Meningkat Tajam</h2><br>
                            <p>Surabaya, 24 Mei 2024 - Ekspor buah tropis dari Indonesia mengalami peningkatan tajam pada kuartal 
                            pertama tahun 2024. Data dari Kementerian Perdagangan menunjukkan ekspor buah seperti mangga, durian, 
                            dan salak naik 25% dibandingkan periode yang sama tahun lalu. Pasar utama untuk buah tropis Indonesia 
                            adalah negara-negara di Asia Timur dan Eropa. Peningkatan ekspor ini didorong oleh kualitas buah yang 
                            semakin baik dan peningkatan daya saing produk pertanian Indonesia di pasar internasional.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img class="img" src="{{ asset('storage/posts/kebun2.jpg') }}" alt="Program Reboisasi Lahan Pertanian">
                        <div class="art">
                            <h2>Program Reboisasi Lahan Pertanian</h2><br>
                            <p>Bogor, 24 Mei 2024 - Pemerintah Indonesia meluncurkan program reboisasi lahan pertanian untuk mengatasi masalah 
                            degradasi tanah dan perubahan iklim. Program ini mencakup penanaman pohon di lahan-lahan pertanian yang terdegradasi 
                            serta pelatihan bagi petani tentang praktik pertanian yang lebih berkelanjutan. Dengan reboisasi ini, diharapkan dapat meningkatkan 
                            kesuburan tanah dan kesejahteraan petani. Program ini juga didukung oleh berbagai lembaga swadaya masyarakat dan komunitas lokal.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <img class="img" src="{{ asset('storage/posts/padi.jpg') }}" alt="Peningkatan Panen Padi di Indonesia">
                        <div class="art">
                            <h2>Peningkatan Panen Padi di Indonesia</h2><br>
                            <p>Jakarta, 24 Mei 2024 - Produksi padi di Indonesia menunjukkan peningkatan signifikan pada tahun 2024. Menurut data Kementerian Pertanian, 
                            produksi padi nasional mencapai 60 juta ton, naik 10% dibandingkan tahun sebelumnya. Peningkatan ini disebabkan oleh penerapan teknologi 
                            pertanian modern dan penggunaan varietas padi unggul yang lebih tahan hama. Menteri Pertanian menyatakan bahwa pemerintah akan terus 
                            mendukung inovasi di sektor pertanian untuk mencapai swasembada pangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
