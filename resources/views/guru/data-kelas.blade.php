@extends('template.template-guru')

@section('title','Data Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/guru/dataSiswa.css') }}">
@endsection

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Data Kelas</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKelasModal">
                    Tambah Kelas
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Jumlah Siswa</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->siswa()->count() }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                      </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahKelasModal" tabindex="-1" aria-labelledby="tambahKelasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahKelasModalLabel">Tambah Kelas</h1>
            </div>
            <form action="{{ route('guru.dataKelas.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="namaInput" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput">
                    @error('namaInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                      
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  

<div class="modal fade" id="editKelasModal" tabindex="-1" aria-labelledby="editKelasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editKelasModalLabel">Edit Data Kelas</h1>
            </div>
            <form id="formModalEdit" method="POST" action="{{ old('urlEdit') }}">
                @method('PUT')
                @csrf
                <input type="hidden" name="urlEdit" id="urlEdit" value="{{ old('urlEdit') }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaEditInput" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control @error('namaEditInput', 'edit') is-invalid @enderror" id="namaEditInput" name="namaEditInput">
                        @error('namaEditInput', 'edit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                      
                        @enderror
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
<div class="modal fade" id="hapusKelasModal" tabindex="-1" aria-labelledby="hapusKelasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapusKelasModalLabel">Hapus Kelas</h1>
            </div>
            <form id="formModalHapus" method="POST">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                <div class="text-center">
                    <i class="bi bi-exclamation-circle-fill display-4 text-danger d-block"></i>
                    <h5>
                        Anda yakin ingin menghapus kelas berikut?
                    </h5>
                    <p>Ini akan menghapus semua siswa di dalamnya.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  
  
@endsection

@section('js-Addon')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/guru/dataKelas.js') }}"></script>
<script>
    @if ($errors->edit->any())
        editModal.show()
    @endif
    let token = '{{ csrf_token() }}'
</script>
@endsection
