@extends('template.template-guru')

@section('title','Data Siswa - SPLDV')

@section('css-Addon')
{{-- <link rel="stylesheet" href="{{ asset('css/guru/dataSiswa.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/siswa/kuis.css') }}">
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
            <div class="mb-3">
                <h1 class="fw-bold">Kuis {{ $kuis }} :  {{ $judulKuis }}</h1>
                <h3>Set {{ $set }}</h3>
            </div>     
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">

            @for ($i = 1; $i <= $jumlahSoal; $i++)
                <div class="accordion mb-3" id="accordionSoal-{{ $i }}">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSoal-{{ $i }}" aria-expanded="true" aria-controls="collapseSoal-{{ $i }}">
                                Soal {{ $i }}
                            </button>
                        </h2>
                        <div id="collapseSoal-{{ $i }}" class="accordion-collapse collapse" data-bs-parent="#accordionSoal-{{ $i }}">
                            <div class="accordion-body">
                                {{ $soal[$i] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
            
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
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script type="module">
    window.addEventListener("DOMContentLoaded", () => 
      import("//unpkg.com/mathlive?module").then((mathlive) => 
        mathlive.renderMathInDocument()
      )
    );
</script>
@endsection
