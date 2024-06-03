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
                        @foreach (range('a','d') as $letter)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? "active" : "" }}" id="{{ $letter }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $letter }}-tab-pane" type="button" role="tab" aria-controls="{{ $letter }}-tab-pane" aria-selected="true">{{ strtoupper($letter) }}</button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="siswaTabContent">
                        @foreach (range('a','d') as $letter)
                        <div class="tab-pane fade py-3 {{ $loop->first ? "show active" : "" }}" id="{{ $letter }}-tab-pane" role="tabpanel" aria-labelledby="{{ $letter }}-tab" tabindex="{{ $loop->index }}">
                            
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
                                    @for ($i = 0; $i< count($dataSiswa[$letter]); $i++)
                                    <tr class="text-center">
                                        <td class="text-start">{{ $dataSiswa[$letter][$i]->user->name }}</td>
                                        <td class="text-start">{{ $dataSiswa[$letter][$i]->nisn }}</td>
                                        <td>{{ is_null($dataSiswa[$letter][$i]['kuis1Latest']) ? '-' : $dataSiswa[$letter][$i]['kuis1Latest']->nilai }}</td>
                                        <td>{{ is_null($dataSiswa[$letter][$i]['kuis2Latest']) ? '-' : $dataSiswa[$letter][$i]['kuis2Latest']->nilai }}</td>
                                        <td>{{ is_null($dataSiswa[$letter][$i]['kuis3Latest']) ? '-' : $dataSiswa[$letter][$i]['kuis3Latest']->nilai }}</td>
                                        <td>{{ is_null($dataSiswa[$letter][$i]['evaluasiLatest']) ? '-' : $dataSiswa[$letter][$i]['evaluasiLatest']->nilai }}</td>
                                        <td><button class="btn btn-sm btn-primary btn-modal" data-bs-toggle="modal" data-bs-target="#nilaiModal" data-siswa="{{ $dataSiswa[$letter][$i]->id }}">Lihat Riwayat</button></td>
                                    </tr>
                                    @endfor
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
