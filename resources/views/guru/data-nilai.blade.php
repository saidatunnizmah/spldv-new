@extends('template.template-guru')

@section('title','Data Nilai Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold">Data Nilai Siswa</h1>
            <div class="card">
                <div class="card-body">
                    <h5>Kelas</h5>
                    <ul class="nav nav-tabs" id="siswaTab" role="tablist">
                        @foreach ($kelas as $item)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? "active" : "" }}" id="{{ 'kelas-'.$item->id }}-tab" data-bs-toggle="tab" data-bs-target="#{{ 'kelas-'.$item->id }}-tab-pane" type="button" role="tab" aria-controls="{{ 'kelas-'.$item->id }}-tab-pane" aria-selected="true">{{ $item->nama }}</button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="siswaTabContent">
                        @foreach ($kelas as $item)
                        <div class="tab-pane fade py-3 {{ $loop->first ? "show active" : "" }}" id="{{ 'kelas-'.$item }}-tab-pane" role="tabpanel" aria-labelledby="{{ 'kelas-'.$item }}-tab" tabindex="{{ $loop->index }}">
                            <div class="text-end mb-3">
                                <a href="{{ route('guru.dataNilai.exportNilaiKelas',['id'=>$item->id]) }}" class="btn btn-success">Export ke PDF</a>
                            </div>
                            
                            <table class="table table-bordered align-middle">
                                <thead class="table-success text-center">
                                    <tr class="align-middle">
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">NISN</th>
                                        <th colspan="4" class="text-center">Nilai Terakhir</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Kuis 1</th>
                                        <th>Kuis 2</th>
                                        <th>Kuis 3</th>
                                        <th>Evaluasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($item->siswa as $siswa)
                                        <tr class="text-center">
                                            <td class="text-start">{{ $siswa->user->name }}</td>
                                            <td class="text-start">{{ $siswa->nisn }}</td>
                                            <td>{{ is_null($kuis1Latest[$item->id][$siswa->id]) ? '-' : $kuis1Latest[$item->id][$siswa->id]->nilai }}</td>
                                            <td>{{ is_null($kuis2Latest[$item->id][$siswa->id]) ? '-' : $kuis2Latest[$item->id][$siswa->id]->nilai }}</td>
                                            <td>{{ is_null($kuis3Latest[$item->id][$siswa->id]) ? '-' : $kuis3Latest[$item->id][$siswa->id]->nilai }}</td>
                                            <td>{{ is_null($evaluasiLatest[$item->id][$siswa->id]) ? '-' : $evaluasiLatest[$item->id][$siswa->id]->nilai }}</td>
                                            <td><button class="btn btn-sm btn-primary btn-modal" data-bs-toggle="modal" data-bs-target="#nilaiModal" data-siswa="{{ $siswa->id }}">Lihat Riwayat</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="nilaiModal" tabindex="-1" aria-labelledby="nilaiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nilaiModalLabel">Riwayat Nilai</h1>
            </div>
            <div class="modal-body">
                <div class="my-2">
                    <h5>Kuis 1</h5>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Percobaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyKuis1">
                            
                        </tbody>
                    </table>
                </div>
                <div class="my-2">
                    <h5>Kuis 2</h5>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Percobaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyKuis2">
                            
                        </tbody>
                    </table>
                </div>
                <div class="my-2">
                    <h5>Kuis 3</h5>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Percobaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyKuis3">
                            
                        </tbody>
                    </table>
                </div>
                <div class="my-2">
                    <h5>Evaluasi</h5>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Percobaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyEvaluasi">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
  
@endsection

@section('js-Addon')
<script src="{{ asset('js/guru/dataNilai.js') }}"></script>
@endsection
