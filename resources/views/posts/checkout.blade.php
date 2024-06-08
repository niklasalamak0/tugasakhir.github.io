<!-- resources/views/posts/checkout.blade.php -->
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
    /* Include the CSS for the modal here */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        border-radius: 10px;
        text-align: center;
    }

    .modal-content img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .beli{
        margin: 20px;
    }
</style>

<body style="background-color: #C0CFB2;">
    <h2 class="mt-5 mb-5" style="text-align: center; color: black; font-weight: bold;">Pemrosesan Pembelian</h2>
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 text-white rounded" style="background-color: #45624E; display: flex; gap: 20px;">
            <div style="flex: 1;">
                <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-100 rounded">
                <hr>
                <h4>{{ $post->title }}</h4>
                <p class="tmt-3">
                    {!! $post->content !!}
                </p>
                <a href="/portofolio" class="btn btn-dark">Back</a>
            </div>

            <div style="flex: 1;">
                <div class="beli">
                    <form id="checkoutForm">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Rumah :</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="" placeholder="Masukkan Alamat Lengkap Rumah Anda">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No Hp Pembeli :</label>
                            <input type="text" class="form-control" id="nohp" placeholder="Masukkan No Hp Anda">
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod" class="form-label">Pilih Metode Pembayaran :</label>
                            <select class="form-select" id="paymentMethod" aria-label="Default select example">
                                <option selected value="">Metode Pembayaran</option>
                                <option value="COD">COD</option>
                                <option value="DANA">DANA</option>
                                <option value="GOPAY">GOPAY</option>
                                <option value="OVO">OVO</option>
                                <option value="Transfer Bank">Transfer Bank</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-warning" id="checkoutBtn">Checkout Now</button>
                    </form>
                </div>
            </div>

            <!-- The Modal -->
            <div id="checkoutModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <img src="{{ asset('storage/posts/antar.jpg') }}" alt="Terima kasih atas pesanan anda">
                    <p style="color: black;">Terima kasih atas pesanan anda, silahkan tunggu pesanan anda sampai ke rumah anda.</p>
                </div>
            </div>
        </div>

            <script>
                // Get the modal
                var modal = document.getElementById("checkoutModal");

                // Get the button that opens the modal
                var btn = document.getElementById("checkoutBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                    var alamat = document.getElementById("alamat").value;
                    var nohp = document.getElementById("nohp").value;
                    var paymentMethod = document.getElementById("paymentMethod").value;

                    if (!alamat || !nohp || !paymentMethod) {
                        alert("Harap mengisi semua informasi terlebih dahulu.");
                    } else {
                        modal.style.display = "block";
                    }
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
    </div>
    @endsection
</body>

</html>