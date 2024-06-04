@extends('template.template-guru')

@section('title','Dashboard Guru - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/guru/dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid" id="content">
    <div class="row">
        <div class="col">
            <h1>Selamat Datang di Dashboard Guru</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Kelas</h5>
                    <ul class="nav nav-tabs" id="siswaTab" role="tablist">
                        @foreach (range('a','d') as $letter)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? "active" : "" }}" id="{{ $letter }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $letter }}-tab-pane" type="button" role="tab" aria-controls="{{ $letter }}-tab-pane" aria-selected="true">{{ strtoupper($letter) }}</button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="siswaTabContent">
                        @foreach (range('a','d') as $letter)
                        <div class="tab-pane fade py-3 {{ $loop->first ? "show active" : "" }}" id="{{ $letter }}-tab-pane" role="tabpanel" aria-labelledby="{{ $letter }}-tab" tabindex="{{ $loop->index }}">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Total Siswa</h5>
                                            <h1>{{ $dataSiswa[$letter]['totalSiswa'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Apersepsi</h5>
                                            <h1>{{ $dataSiswa[$letter]['bab0'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB I: Bentuk Umum SPLDV</h5>
                                            <h1>{{ $dataSiswa[$letter]['bab1'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB II: Penyelesaian SPLDV</h5>
                                            <h1>{{ $dataSiswa[$letter]['bab2'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB III: Penerapan SPLDV</h5>
                                            <h1>{{ $dataSiswa[$letter]['bab3'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Selesai</h5>
                                            <h1>{{ $dataSiswa[$letter]['selesai'] }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <h3>Kuis 1</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Siswa Telah Mengerjakan Kuis 1</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis1']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Lulus</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis1Lulus']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Gagal</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis1Gagal']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col">
                                    <h3>Kuis 2</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Siswa Telah Mengerjakan Kuis 2</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis2']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Lulus</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis2Lulus']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Gagal</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis2Gagal']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col">
                                    <h3>Kuis 3</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Siswa Telah Mengerjakan Kuis 3</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis3']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Lulus</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis3Lulus']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Gagal</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalKuis3Gagal']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <h3>Evaluasi</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Siswa Telah Mengerjakan Evaluasi</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalEvaluasi']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Lulus</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalEvaluasiLulus']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Gagal</h5>
                                            <h1>{{ count($dataSiswa[$letter]['totalEvaluasiGagal']) }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-Addon')

@endsection
