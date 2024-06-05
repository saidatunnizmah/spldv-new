@extends('template.template')

@section('title','Progress - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/progres.css') }}">
@endsection

@section('content')
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center fw-bold">
                Daftar Materi
            </h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card materi-card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('siswa.materi', ['bab'=>0,'page'=>1]) }}" class="materi-title">Apersepsi</a>
                            <div class="progress " role="progressbar" aria-valuenow="{{ $siswa->bab > 0 ? '100%' : '0%' }}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $siswa->bab > 0 ? '100%' : '0%' }}">{{ $siswa->bab > 0 ? '100%' : '0%' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card materi-card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-8 position-relative">
                            @if (auth()->user()->siswa->bab < 1)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.materi', ['bab'=>1,'page'=>1]) }}" class="materi-title">Konsep SPLDV</a>
                            <div class="progress " role="progressbar" aria-valuenow="{{ $progress1 }}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $progress1 }}%">{{ $progress1 }}%</div>
                            </div>
                        </div>
                        <div class="col-4 border-start position-relative">
                            @if (auth()->user()->siswa->bab < 2)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.kuis',['jenis'=>1]) }}" class="materi-title">Kuis 1</a>
                            <small class="d-block fw-bold mt-2">Riwayat Nilai Kuis</small>
                            <div class="percobaan mt-2">
                                @if (count($nilaiKuis1)>0)
                                    @foreach ($nilaiKuis1 as $item)
                                        <div class="percobaan-container {{ $item->nilai < 75? 'border-danger' : '' }}">
                                            {{ $item->nilai }}
                                        </div>
                                    @endforeach
                                @else
                                    Belum ada pengerjaan kuis
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card materi-card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-8 position-relative">
                            @if (auth()->user()->siswa->bab < 2)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.materi', ['bab'=>2,'page'=>1]) }}" class="materi-title">Penyelesaian SPLDV</a>
                            <div class="progress " role="progressbar" aria-valuenow="{{ $progress2 }}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $progress2 }}%">{{ $progress2 }}%</div>
                            </div>
                        </div>
                        <div class="col-4 border-start position-relative">
                            @if (auth()->user()->siswa->bab < 3)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.kuis',['jenis'=>2]) }}" class="materi-title">Kuis 2</a>
                            <small class="d-block fw-bold mt-2">Riwayat Nilai Kuis</small>
                            <div class="percobaan mt-2">
                                @if (count($nilaiKuis2)>0)
                                    @foreach ($nilaiKuis2 as $item)
                                        <div class="percobaan-container {{ $item->nilai < 75? 'border-danger' : '' }}">
                                            {{ $item->nilai }}
                                        </div>
                                    @endforeach
                                @else
                                    Belum ada pengerjaan kuis
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card materi-card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-8 position-relative">
                            @if (auth()->user()->siswa->bab < 3)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.materi', ['bab'=>3,'page'=>1]) }}" class="materi-title">Penerapan SPLDV</a>
                            <div class="progress " role="progressbar" aria-valuenow="{{ $progress3}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{ $progress3 }}%">{{ $progress3 }}%</div>
                            </div>
                        </div>
                        <div class="col-4 border-start position-relative">
                            @if (auth()->user()->siswa->bab < 4)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.kuis',['jenis'=>3]) }}" class="materi-title">Kuis 3</a>
                            <small class="d-block fw-bold mt-2">Riwayat Nilai Kuis</small>
                            <div class="percobaan mt-2">
                                @if (count($nilaiKuis3)>0)
                                    @foreach ($nilaiKuis3 as $item)
                                        <div class="percobaan-container {{ $item->nilai < 75? 'border-danger' : '' }}">
                                            {{ $item->nilai }}
                                        </div>
                                    @endforeach
                                @else
                                    Belum ada pengerjaan kuis
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card materi-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 position-relative">
                            @if (auth()->user()->siswa->bab < 3)
                                <div class="materi-lock">
                                    <i class="bi bi-lock-fill fs-3"></i>
                                </div>
                            @endif
                            <a href="{{ route('siswa.kuis', ['jenis'=>4]) }}" class="materi-title">Evaluasi</a>
                        </div>
                        <div class="col-7 border-start">
                            <small class="d-block fw-bold mt-2">Riwayat Nilai Evaluasi</small>
                            <div class="percobaan mt-2">
                                @if (count($nilaiEvaluasi)>0)
                                    @foreach ($nilaiEvaluasi as $item)
                                        <div class="percobaan-container {{ $item->nilai < 75? 'border-danger' : '' }}">
                                            {{ $item->nilai }}
                                        </div>
                                    @endforeach
                                @else
                                    Belum ada pengerjaan evaluasi
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection