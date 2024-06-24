@extends('template.template')

@section('title','Dashboard Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/dashboard.css') }}">
@endsection

@section('content')
<div class="container-fluid" style="height: 75vh">
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
                                <td>: {{ auth()->user()->siswa->kelas->nama }}</td>
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
</div>
@endsection

@section('js-Addon')

@endsection
