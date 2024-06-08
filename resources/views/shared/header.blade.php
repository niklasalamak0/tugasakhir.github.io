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
    body {
        background: #C0CFB2;
        color: #ffffff;
        justify-content: center;
        align-items: center;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }

    div.scroll-container {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
        padding: 10px;
    }

    div.scroll-container img {
        padding: 10px;
    }


    .jarak {
        text-align: center;
        margin: 50px;
        font-style: italic;
    }

    .jrk {
        padding: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Irish Grover;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #C9D8C5;
        padding: 10px 20px;
        /* Add bottom border for separation */
    }

    .navbar-brand img {
        max-height: 50px;
        /* Control the size of the logo */
        margin-right: 10px;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-item .nav-link {
        text-decoration: none;
        color: #000;
        font-size: 1.2rem;
        transition: color 0.3s ease;
    }

    .nav-item .nav-link:hover {
        color: #6B8E23;
    }

    .navbar .form-inline {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .navbar .form-inline button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        height: 50px;
        /* Ensure both buttons have the same height */
        border: none;
        background-color: #6B8E23;
        color: #FFF;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .navbar .form-inline button img {
        width: 30px;
        /* Adjust image size to fit within the button */
        height: 30px;
        margin: 0;
    }


    .navbar .form-inline button:hover {
        background-color: #556B2F;
    }

    .navbar .form-inline img {
        width: 50px;
        height: 50px;
        margin-left: 10px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .navbar .form-inline img:hover {
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar-brand,
        .navbar-nav,
        .form-inline {
            margin-bottom: 10px;
        }
    }


    .wrapper {
        margin: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        /* Center the wrapper content */
        background-color: #C9D8C5;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Add some shadow for depth */
    }

    .dewe {
        max-width: 50%;
        height: auto;
        margin-right: 20px;
        /* Space between image and text */
    }

    .dewe:hover {
        transform: scale(1.1);
        transition: transform 0.5s ease;
    }

    .text-box {
        max-width: 50%;
        font-size: 1.5rem;
        /* Responsive font size */
        color: #000;
        /* Text color */
    }

    .text-box h1 {
        color: #E6FF94;
        font-size: 2rem;
        /* Larger heading */
        margin-bottom: 20px;
    }

    .text-box p {
        font-size: 1.2rem;
        /* Larger paragraphs */
        margin-bottom: 20px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.2rem;
        color: #FFF;
        background-color: #6B8E23;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #556B2F;
    }

    @media (max-width: 768px) {
        .wrapper {
            flex-direction: column;
            /* Stack items vertically on small screens */
            align-items: center;
        }

        .dewe,
        .text-box {
            max-width: 100%;
            /* Full width for small screens */
            margin: 10px 0;
        }

        .text-box {
            font-size: 1rem;
        }

        .text-box h1 {
            font-size: 1.5rem;
        }

        .text-box p {
            font-size: 1rem;
        }

        .button {
            font-size: 1rem;
            padding: 8px 16px;
        }
    }



    img {
        max-width: 500px;
        max-height: 500px;
        border-radius: 10px;
        margin-left: 20px;
    }

    table {
        text-align: center;
        color: white;
        font-weight: bold;
        margin-bottom: 50px;
        max-width: 95%;
        border-radius: 10px;
    }

    .bhsp {
        background-color: #0A6847;
        text-align: center;
        justify-content: center;
        width: 40%;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .bhs {
        background-color: #6B8E23;
        text-align: center;
        justify-content: center;
        width: 30%;
        margin: 10px auto;
        padding: 20px;
        border-radius: 10px;
        margin-top: 100px;
        margin-bottom: 50px;
    }

    .card-container {
        margin-bottom: 100px;
        display: flex;
        flex-wrap: wrap;
        gap: 100px;
        justify-content: center;
    }

    .card {
        width: 18rem;
        background-color: #45624E;
        /* Set card background color */
        border-radius: 10px;
        color: #FFF;
        /* Set text color to white for readability */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: add a shadow for better visuals */
    }

    .card img {
        width: 100%;
        max-width: 250px;
        margin: 10px auto 0;
        /* Center the image */
        display: block;
        border-radius: 10px 10px 0 0;
        /* Optional: round the top corners of the image */
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #6B8E23;
        border: none;
        color: #FFF;
        padding: 10px 20px;
        text-align: center;
        display: inline-block;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #556B2F;
    }

    @media (max-width: 768px) {
        .card-container {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 100%;
            max-width: 350px;
        }
    }

    /* image galery */
    .fotbar {
        text-align: center;
        justify-content: center;
        padding: 20px;
        background-color: #45624E;
    }

    .shadow {
        background-color: #45624E;
    }

    .shadow img {
        transition: .5s ease;
    }

    .shadow img:hover {
        transform: scale(0.9);
        /* Efek zoom out */
        transition: transform 0.5s ease;
    }

    .scroll-container {
        display: flex;
        overflow-x: auto;
        padding: 10px;
        scrollbar-width: none;
        white-space: nowrap;
        height: auto;
        max-height: 100%;
    }

    .scroll-container::-webkit-scrollbar {
        display: none;
    }

    .image-container {
        position: relative;
        margin: 0 10px;
        flex-shrink: 0;
    }

    .image-container img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .image-container-wrapper {
        display: flex;
    }

    .image-container2 {
        position: relative;
        margin-right: 10px;
        flex-shrink: 0;
    }

    .img {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay2 {
        position: absolute;
        top: 70%;
        left: 20px;
        right: 0;
        bottom: 0;
        height: 30%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #45624E;
        z-index: 1;
    }

    .image-container:hover .overlay2 {
        opacity: 1;
    }

    .capt {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        color: white;
        padding: 10px;
        text-align: center;
    }

    .baca {
        background-color: #6B8E23;
        border: none;
        color: #FFF;
        padding: 10px 20px;
        text-align: center;
        display: inline-block;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .image-container:hover .overlay2 {
        opacity: 1;
    }

    .image-container2:hover .overlay {
        opacity: 1;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text2 {
        position: absolute;
        left: 50%;
    }

    /* ig follow */
    .pollow:hover {
        background-color: #FF9F66;
        transform: scale(0.8);
    }

    .pollow {
        background-color: #0A6847;
        border-radius: 10px;
        padding: 20px;
        margin: 50px auto;
        max-width: 500px;
        text-align: center;
        transition: transform 0.5s ease, background-color 0.5s ease;
    }

    .follow-btn {
        background-color: #FFFFFF;
        border: none;
        margin: 10px;
        border-radius: 5px;
        padding: 10px 20px;
        color: #0A6847;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .follow-btn:hover {
        background-color: #4D869C;
    }

    h1,
    .text-box p {
        opacity: 0;
        transform: translateX(100%);
        animation: slide-in 1s forwards;
    }

    h1 {
        animation-delay: 0.5s;
    }

    .text-box p {
        animation-delay: 1s;
    }

    @keyframes slide-in {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* tambahan */
    .satu {
        position: relative;
        width: 300px;
        height: 100px;
        display: flex;
        text-align: center;
        justify-content: center;
    }

    .anc,
    .ig {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .anc {
        z-index: 1;
        background-color: white;
        color: #0A6847;
        display: flex;
        text-align: center;
        margin-top: none;
        border: 5px solid #0A6847;
    }

    .message {
        text-align: center;
    }

    .ig {
        z-index: 2;
        background-color: #0A6847;
        cursor: pointer;
        transition: transform 0.8s ease;
    }

    .ig.hide {
        transform: translateX(180%);
    }

    .pembatas {
        background-color: #333;
        height: 5px;
    }

    .wish {
        justify-content: center;
        margin-left: 5px;
        margin-top: 10px;
        display: flex;
    }

    /* footer */
</style>

<body>
    <div>
        <div class="row">
            <div class="col-md-12">




