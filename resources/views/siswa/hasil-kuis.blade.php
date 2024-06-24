@extends('template.template-kuis')

@section('title','Hasil Kuis - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/kuis.css') }}">
@endsection

@section('content')
<div class="container-fluid vh-100">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card w-50">
                <div class="card-header fw-bold">
                    Hasil Kuis
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h5>Nilai</h5>
                        <h1 class="{{ $nilaiUser->nilai > 75 ? 'text-success' : 'text-danger' }} display-1 fw-bold">
                            {{ $nilaiUser->nilai }}
                        </h1>
                        <h5 class="{{ $nilaiUser->nilai > 75 ? 'text-success' : 'text-danger' }} fw-bold">
                            {{ $pesan }}
                        </h5>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Kelas</th>
                            <td>{{ auth()->user()->siswa->kelas->nama }}</td>
                        </tr>
                        <tr>
                            <th>
                                Jenis Tes
                            </th>
                            
                            <td>{{ $judulKuis }}</td>
                        </tr>
                        <tr>
                            <th>Percobaan</th>
                            
                            <td>{{ $nilaiUser->percobaan }}</td>
                        </tr>
                        <tr>
                            <th>Waktu Pengerjaan</th>
                            
                            <td>{{ $nilaiUser->waktu_pengerjaan }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a class=" {{ $nilaiUser->nilai > 75? 'btn-success' : 'btn-danger' }} btn fw-bold" href="{{ route('siswa.kuis',['jenis'=>$nilaiUser->jenis_kuis]) }}">Coba Lagi</a>
                    <a class="btn btn-primary fw-bold {{ $nilaiUser->nilai > 75? '' : 'd-none' }}" href="{{ route('siswa.dashboard') }}">Kembali ke Dashboard</a>
                    <a href="{{ route('siswa.materi',['bab'=>$nilaiUser->jenis_kuis,'page'=>'1']) }}" class="btn btn-info fw-bold">Kembali ke Materi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-Addon')
    <script>
        history.pushState(null, null, window.location.href);
        history.back();
        window.onpopstate = () => history.forward();
    </script>
@endsection