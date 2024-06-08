@extends('template.template')

@section('title', 'Perihal - SPLDV')

@section('css-Addon')
    <link rel="stylesheet" href="{{ asset('css/siswa/perihal.css') }}">
@endsection

@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 px-5">
                <h3 class="text-center fw-bold">
                    Informasi
                </h3>

                <div class="card">
                    <div class="card-header">
                        <div class="mb-0 h5 fw-semibold card-title h5">INFORMASI MEDIA</div>
                    </div>
                    <div class="p-5 card-body">
                        <p class="mb-4 card-text">Media pembelajaran ini dibuat untuk memenuhi persyaratan dalam
                            menyelesaikan program Strata-1 Pendidikan Komputer dengan judul:</p>
                        <p class="fw-semibold fs-5 text-center card-text">PENGEMBANGAN MEDIA PEMBELAJARAN INTERAKTIF
                            BERBASIS WEB TOPIK SISTEM PERSAMAAN LINEAR DUA VARIABEL BERKONTEKS LAHAN BASAH DENGAN METODE
                            DRILL AND PRACTICE</p>
                        <div>
                            <table class="mt-5">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Nama</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Saidatun Nizmah</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Email</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: <a
                                                    href="mailto:aniskateha@gmail.com">aniskateha@gmail.com</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Dosen Pembimbing 1</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Dr. R. Ati Sukmawati, M.Kom</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Dosen Pembimbing 2</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Rizky Pamuji, S.Kom.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Program Studi</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: S-1 Pendidikan Komputer</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Fakultas</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Fakultas Keguruan dan Ilmu Pendidikan (FKIP)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-0">Instansi</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Universitas Lambung Mangkurat</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <h5 class="fw-bold mt-3">Daftar Pustaka</h5>
                <div class="card">
                    <div class="card-body">
                        Sudirman. (2013). Cerdas Aktif Matematikla Pelajaran Matematika untuk SMP. Jakarta:Ganeca Exact.
                        <br><br>
                        Tim Gako Tosho. (2021). Matematika untuk Sekolah Menengah Pertama Kelas VIII. Kementerian
                        Pendidikan, Kebudayaan, Riset, dan Teknologi.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
