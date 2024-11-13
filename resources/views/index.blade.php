<?php
// index.php
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="foto/logo1.jpg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Project PKL</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css-1/index.css">

    <!-- Header CSS -->
    <link rel="stylesheet" href="css_berita/header.css">

    <!-- Berita CSS -->
    <link rel="stylesheet" href="css_berita/kabar_berita.css">

    <!-- About CSS -->
    <link rel="stylesheet" href="css-1/about.css">
</head>


<body>
    <!-- Navigasi Menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a>
                <img src="foto/logo1.jpg" alt="Logo" width="70" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  m-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#about-section">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#berita-section">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn m-2 bg-white fw-medium text-black" href="pgs/login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @include('header')

    <hr class="container mt-5 mb-2">


    <!-- Include About dan Berita -->
    @include('about')
    <hr class='container mt-5 mb-2'>
    @include('kabar_berita')
    </div>
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DmZhu9Kq5zY1N4NjZkQ+gxGjkM95" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>