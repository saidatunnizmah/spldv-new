<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Media Pembelajaran SPLDV</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingPage/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-bold" href="#">SPLDV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLandingPage" aria-controls="navbarLandingPage" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarLandingPage">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perihal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="row" id="banner">
            <div class="col-md-5 col-sm-12 order-sm-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/landingPage/comp.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 col-sm-12  order-sm-1 d-flex align-items-center" id="app-desc">
                <div class="">
                    <h4 class="mb-0">Media Pembelajaran Interaktif</h4>
                    <h2 class="fw-bold">Sistem Persamaan Linear Dua Variabel</h2>
                    <p>Selamat datang di aplikasi media pembelajaran interaktif kami yang didedikasikan untuk memudahkan pemahaman tentang sistem persamaan linear dua variabel. Kami menghadirkan pendekatan belajar yang menyenangkan dan udah dipahami melalui fitur-fitur interaktif, latihan soal yang disesuaikan, dan visualisasi yang memukau. </p>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="btn btn-lg btn-color" style="width: 10em">Mulai Belajar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="row">
            <div class="col-12 py-1">
                <h5 class="text-center fw-bold">
                    &copy; SPLDV
                </h5>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>