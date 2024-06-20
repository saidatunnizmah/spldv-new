@extends('template.template-guru')

@section('title','Data Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/guru/dataSiswa.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
        <div class="col">
            <h1 class="text-center fw-bold">Data Siswa</h1>
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
                        <div class="tab-pane fade py-3 {{ $loop->first ? "show active" : "" }}" id="{{ 'kelas-'.$item->id }}-tab-pane" role="tabpanel" aria-labelledby="{{ 'kelas-'.$item->id }}-tab" tabindex="{{ $loop->index }}">
                            <table class="table table-bordered align-middle">
                                <thead class="table-success text-center">
                                    <tr class="align-middle">
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Email</th>
                                        <th rowspan="2">NISN</th>
                                        <th colspan="2" class="text-center">Progress</th>
                                        <th colspan="4" class="text-center">Kuis</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Bab</th>
                                        <th>Halaman</th>
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
                                        <td class="text-start">{{ $siswa->user->email }}</td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->bab }}</td>
                                        <td>{{ $siswa->page  }}</td>
                                        <td>
                                            {!! $kuis1[$item->id][$siswa->id] > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $kuis2[$item->id][$siswa->id] > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $kuis3[$item->id][$siswa->id] ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $evaluasi[$item->id][$siswa->id] > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm btn-modal-edit" data-bs-toggle="modal" data-bs-target="#editSiswaModal" data-siswa="{{ $siswa->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm btn-hapus" data-siswa="{{ $siswa->id }}">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- @for ($i = 0; $i< count($dataSiswa[$letter]); $i++)
                                    <tr class="text-center">
                                        <td class="text-start">{{ $dataSiswa[$letter][$i]->user->name }}</td>
                                        <td class="text-start">{{ $dataSiswa[$letter][$i]->user->email }}</td>
                                        <td>{{ $dataSiswa[$letter][$i]->nisn }}</td>
                                        <td>{{ $dataSiswa[$letter][$i]->bab }}</td>
                                        <td>{{ $dataSiswa[$letter][$i]->page  }}</td>
                                        <td>
                                            {!! $dataSiswa[$letter][$i]->kuis1 > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $dataSiswa[$letter][$i]->kuis2 > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $dataSiswa[$letter][$i]->kuis3 > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            {!! $dataSiswa[$letter][$i]->evaluasi > 0 ? '<i class="bi bi-check-lg text-success"></i>' : '<i class="bi bi-x-lg text-danger"></i>' !!}
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm btn-modal-edit" data-bs-toggle="modal" data-bs-target="#editSiswaModal" data-siswa="{{ $dataSiswa[$letter][$i]->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm btn-hapus" data-siswa="{{ $dataSiswa[$letter][$i]->id }}">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endfor --}}
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

<div class="modal fade" id="editSiswaModal" tabindex="-1" aria-labelledby="editSiswaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editSiswaModalLabel">Edit Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formModalEdit" method="POST">
                @method('PUT')
                @csrf
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaInput" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaInput" name="namaInput">
                        @error('namaInput')
                            <div class="invalid-feedback">
                                Looks good!
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="emailInput">
                        @error('emailInput')
                            <div class="invalid-feedback">
                                Looks good!
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nisnInput" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisnInput" name="nisnInput">
                        @error('nisnInput')
                            <div class="invalid-feedback">
                                Looks good!
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="passwordInput" name="passwordInput">
                        @error('passwordInput')
                            <div class="invalid-feedback">
                                Looks good!
                            </div>                      
                        @enderror
                    </div>                    
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="passwordInputConfirmation" name="passwordInput_confirmation">
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
  
@endsection

@section('js-Addon')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/guru/dataSiswa.js') }}"></script>
<script>
    let token = '{{ csrf_token() }}'
</script>
@endsection
