@extends('template.template')

@section('title','Progress Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold">Progress Siswa</h1>
            <ul class="nav nav-tabs" id="kuisTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="kuis1-tab" data-bs-toggle="tab" data-bs-target="#kuis1-tab-pane" type="button" role="tab" aria-controls="kuis1-tab-pane" aria-selected="true">Kuis 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kuis2-tab" data-bs-toggle="tab" data-bs-target="#kuis2-tab-pane" type="button" role="tab" aria-controls="kuis2-tab-pane" aria-selected="false">Kuis 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kuis3-tab" data-bs-toggle="tab" data-bs-target="#kuis3-tab-pane" type="button" role="tab" aria-controls="kuis3-tab-pane" aria-selected="false">Kuis 3</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="evaluasi-tab" data-bs-toggle="tab" data-bs-target="#evaluasi-tab-pane" type="button" role="tab" aria-controls="evaluasi-tab-pane" aria-selected="false">Evaluasi</button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="kuisTabContent">
                <div class="tab-pane fade show active" id="kuis1-tab-pane" role="tabpanel" aria-labelledby="kuis1-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header">Kuis 1</div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Percobaan</th>
                                        <th>Nilai</th>
                                        <th>Waktu Percobaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($kuis1))
                                        @foreach ($kuis1 as $item)
                                            <tr>
                                                <td>{{ $item->percobaan }}</td>
                                                <td>{{ $item->nilai }}</td>
                                                <td>{{ $item->waktu_pengerjaan }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="text-center">
                                            <td colspan="3">Anda Belum Pernah Mengerjakan Kuis 2</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kuis2-tab-pane" role="tabpanel" aria-labelledby="kuis2-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header">Kuis 2</div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Percobaan</th>
                                        <th>Nilai</th>
                                        <th>Waktu Percobaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($kuis2))
                                        @foreach ($kuis2 as $item)
                                        <tr>
                                            <td>{{ $item->percobaan }}</td>
                                            <td>{{ $item->nilai }}</td>
                                            <td>{{ $item->waktu_pengerjaan }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="3">Anda Belum Pernah Mengerjakan Kuis 2</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kuis3-tab-pane" role="tabpanel" aria-labelledby="kuis3-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header">Kuis 3</div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Percobaan</th>
                                        <th>Nilai</th>
                                        <th>Waktu Percobaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($kuis3))
                                        @foreach ($kuis3 as $item)
                                            <tr>
                                                <td>{{ $item->percobaan }}</td>
                                                <td>{{ $item->nilai }}</td>
                                                <td>{{ $item->waktu_pengerjaan }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="3">Anda Belum Pernah Mengerjakan Kuis 3</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="evaluasi-tab-pane" role="tabpanel" aria-labelledby="evaluasi-tab" tabindex="0">
                    <div class="card">
                        <div class="card-header">Kuis 2</div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Percobaan</th>
                                        <th>Nilai</th>
                                        <th>Waktu Percobaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($evaluasi))
                                        @foreach ($evaluasi as $item)
                                        <tr>
                                            <td>{{ $item->percobaan }}</td>
                                            <td>{{ $item->nilai }}</td>
                                            <td>{{ $item->waktu_pengerjaan }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="3">Anda Belum Pernah Mengerjakan Evaluasi</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
              
              
            
        </div>
    </div>
</div>
  
@endsection

@section('js-Addon')
<script src="{{ asset('js/guru/dataNilai.js') }}"></script>
@endsection
