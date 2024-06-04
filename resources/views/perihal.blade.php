<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perihal - Media Pembelajaran SPLDV</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a class="nav-link" href="{{ route('landingPage') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa.progress') }}">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('landingPage.perihal') }}">Perihal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="row" id="banner">
            <div class="col-12 py-5">
                <h3 class="text-center fw-bold">
                    Informasi
                </h3>
    
                <div class="card">
                    <div class="card-header">
                            <div class="mb-0 h5 fw-semibold card-title h5">INFORMASI MEDIA</div>
                    </div>
                    <div class="p-5 card-body">
                        <p class="mb-4 card-text">Media pembelajaran ini dibuat untuk memenuhi persyaratan dalam menyelesaikan program Strata-1 Pendidikan Komputer dengan judul:</p>
                        <p class="fw-semibold fs-5 text-center card-text">PENGEMBANGAN MEDIA PEMBELAJARAN INTERAKTIF BERBASIS WEB TOPIK SISTEM PERSAMAAN LINEAR DUA VARIABEL BERKONTEKS LAHAN BASAH DENGAN METODE DRILL AND PRACTICE</p>
                        <div>
                            <table class="mt-5">
                                <tbody>
                                <tr>
                                    <td><p class="me-5 mb-0">Nama</p></td>
                                    <td><p class="mb-2">: Saidatun Nizmah</p></td>
                                </tr>
                                <tr>
                                    <td><p class="me-5 mb-0">Email</p></td>
                                    <td><p class="mb-2">: <a href="mailto:aniskateha@gmail.com">aniskateha@gmail.com</a></p></td>
                                </tr>
                                <tr>
                                    <td><p class="me-5 mb-0">Dosen Pembimbing 1</p></td>
                                    <td><p class="mb-2">: Dr. R. Ati Sukmawati, M.Kom</p></td>
                                </tr><tr><td><p class="me-5 mb-0">Dosen Pembimbing 2</p></td>
                                    <td><p class="mb-2">: Rizky Pamuji, S.Kom.</p></td>
                                </tr>
                                <tr>
                                    <td><p class="me-5 mb-0">Program Studi</p></td>
                                    <td><p class="mb-2">: S-1 Pendidikan Komputer</p></td>
                                </tr><tr><td><p class="me-5 mb-0">Fakultas</p></td>
                                    <td><p class="mb-2">: Fakultas Keguruan dan Ilmu Pendidikan (FKIP)</p></td>
                                </tr>
                                <tr>
                                    <td><p class="me-5 mb-0">Instansi</p></td>
                                    <td><p class="mb-2">: Universitas Lambung Mangkurat</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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
</body>
</html>