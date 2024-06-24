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
                        @foreach ($kelas as $item)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? "active" : "" }}" id="{{ $item->id }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $item->id }}-tab-pane" type="button" role="tab" aria-controls="{{ $item->id }}-tab-pane" aria-selected="true">{{ strtoupper($item->nama) }}</button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="siswaTabContent">
                        @foreach ($kelas as $item)
                        <div class="tab-pane fade py-3 {{ $loop->first ? "show active" : "" }}" id="{{ $item->id }}-tab-pane" role="tabpanel" aria-labelledby="{{ $item->id }}-tab" tabindex="{{ $loop->index }}">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Total Siswa</h5>
                                            <h1>{{ $item->siswa->count() }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Apersepsi</h5>
                                            <h1>{{ $item->siswa()->where('bab',0)->count() }} / {{ $item->siswa->count() }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB I: Bentuk Umum SPLDV</h5>
                                            <h1>{{ $item->siswa()->where('bab','>',0)->count() }} / {{ $item->siswa->count() }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB II: Penyelesaian SPLDV</h5>
                                            <h1>{{ $item->siswa()->where('bab','>',1)->count() }} / {{ $item->siswa->count() }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>BAB III: Penerapan SPLDV</h5>
                                            <h1>{{ $item->siswa()->where('bab','>',2)->count() }} / {{ $item->siswa->count() }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Selesai</h5>
                                            <h1>{{ $item->siswa()->where('bab','>',3)->count() }}</h1>
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
                                            <h1>{{ $kuis1[$item->id] }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Lulus</h5>
                                            <h1>{{ count($kuis1Lulus[$item->id]) }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5>Jumlah Siswa Gagal</h5>
                                            <h1>{{ count($kuis1Gagal[$item->id]) }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row mt-5">
                                <div class="col">
                                    <h3>Kuis 2</h3>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
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
                            </div> --}}

                            {{-- <div class="row mt-5">
                                <div class="col">
                                    <h3>Kuis 3</h3>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
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
                            </div> --}}
                            {{-- <div class="row mt-3">
                                <div class="col">
                                    <h3>Evaluasi</h3>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
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
                            </div> --}}
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
