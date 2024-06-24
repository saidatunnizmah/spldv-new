@extends('template.template-guru')

@section('title','Data Siswa - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/guru/dataSiswa.css') }}">
@endsection

@section('content')
<div class="container" style="min-height: 75vh">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold">Set Soal Kuis</h1>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
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
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="kuis1-tab-pane" role="tabpanel" aria-labelledby="kuis1-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 1
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>1,'set'=>1]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 2
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>1,'set'=>2]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 3
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>1,'set'=>3]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kuis2-tab-pane" role="tabpanel" aria-labelledby="kuis2-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 1
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>2,'set'=>1]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 2
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>2,'set'=>2]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 3
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>2,'set'=>3]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kuis3-tab-pane" role="tabpanel" aria-labelledby="kuis3-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 1
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>3,'set'=>1]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="evaluasi-tab-pane" role="tabpanel" aria-labelledby="evaluasi-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    Soal Set 1
                                    <a href="{{ route('guru.setKuis.lihat', ['kuis'=>4,'set'=>1]) }}" class="btn btn-primary">Lihat Soal</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
