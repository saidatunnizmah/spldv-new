@extends('template.template')

@section('title','Dashboard Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center fw-bold">
                Data Siswa
            </h3>

            <div class="card card-bio mt-4 mx-auto" style="width: 700px">
                <div class="card-body" >
                    <div class="d-flex justify-content-between align-items-center" id="card-content">
                        <table class="table-bio">
                            <tr>
                                <th>Nama</th>
                                <td>: {{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <td>: {{ auth()->user()->siswa->nisn }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>: VII {{ auth()->user()->siswa->kelas }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ auth()->user()->email }}</td>
                            </tr>
                        </table>
                        <img class="rounded-circle" src="{{ asset('img/anon-user.jpg') }}" alt="" width="150px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5>Kuis 1</h5>
                </div>
                <div class="card-body">
                    <table class="table table-kuis">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($nilaiKuis1))
                                @foreach ($nilaiKuis1 as $item)
                                    <tr>
                                        <td>{{ $item->percobaan }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->waktu_pengerjaan }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">
                                    Belum mengerjakan kuis
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5>Kuis 2</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($nilaiKuis2))
                                @foreach ($nilaiKuis2 as $item)
                                    <tr>
                                        <td>{{ $item->percobaan }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->waktu_pengerjaan }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">
                                    Belum mengerjakan kuis
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5>Kuis 3</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($nilaiKuis3))
                                @foreach ($nilaiKuis3 as $item)
                                    <tr>
                                        <td>{{ $item->percobaan }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->waktu_pengerjaan }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">
                                    Belum mengerjakan kuis
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card mx-auto" style="width: 400px">
                <div class="card-header">
                    <h5>Evaluasi</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Percobaan</th>
                                <th>Nilai</th>
                                <th>Waktu Pengerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($nilaiEvaluasi))
                                @foreach ($nilaiEvaluasi as $item)
                                    <tr>
                                        <td>{{ $item->percobaan }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->waktu_pengerjaan }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">
                                    Belum mengerjakan kuis
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-Addon')

@endsection
