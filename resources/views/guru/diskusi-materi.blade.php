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
                <h1 class="fw-bold">Diskusi Materi</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDiskusiModal">
                    Tambah Diskusi
                </button>
            </div>
            <ul class="nav nav-tabs" id="diskusiTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="0-1-tab" data-bs-toggle="tab" data-bs-target="#0-1-tab-pane" type="button" role="tab" aria-controls="0-1-tab-pane" aria-selected="true">Apersepsi</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="1-1-tab" data-bs-toggle="tab" data-bs-target="#1-1-tab-pane" type="button" role="tab" aria-controls="1-1-tab-pane" aria-selected="true">Bab I Page I</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="1-2-tab" data-bs-toggle="tab" data-bs-target="#1-2-tab-pane" type="button" role="tab" aria-controls="1-2-tab-pane" aria-selected="false">Bab I Page II</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="2-1-tab" data-bs-toggle="tab" data-bs-target="#2-1-tab-pane" type="button" role="tab" aria-controls="2-1-tab-pane" aria-selected="false">Bab II Page I</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="2-2-tab" data-bs-toggle="tab" data-bs-target="#2-2-tab-pane" type="button" role="tab" aria-controls="2-2-tab-pane" aria-selected="false">Bab II Page II</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="3-1-tab" data-bs-toggle="tab" data-bs-target="#3-1-tab-pane" type="button" role="tab" aria-controls="3-1-tab-pane" aria-selected="false">Bab III Page I</button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="diskusiTabContent">
                <div class="tab-pane fade show active" id="0-1-tab-pane" role="tabpanel" aria-labelledby="0-1-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi0_1))
                                            @foreach ($diskusi0_1 as $item)
                                            <tr>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                              </table>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="1-1-tab-pane" role="tabpanel" aria-labelledby="1-1-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi1_1))
                                            @foreach ($diskusi1_1 as $item)
                                            <tr>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                              </table>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="1-2-tab-pane" role="tabpanel" aria-labelledby="1-2-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi1_2))
                                            @foreach ($diskusi1_2 as $item)
                                            <tr>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                              </table>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="2-1-tab-pane" role="tabpanel" aria-labelledby="2-1-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi2_1))
                                            @foreach ($diskusi2_1 as $item)
                                            <tr>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                              </table>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="2-2-tab-pane" role="tabpanel" aria-labelledby="2-2-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi2_2))
                                            @foreach ($diskusi2_2 as $item)
                                            <tr>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
                                            </tr>
                                        @endif
                                    </tbody>
                              </table>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="3-1-tab-pane" role="tabpanel" aria-labelledby="3-1-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul Diskusi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($diskusi3_1))
                                            @foreach ($diskusi3_1 as $item)
                                                <tr>
                                                    <td>{{ $item->judul }}</td>
                                                    <td>{{ $item->deskripsi }}</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-warning" onclick="openEditModal({{ $item->id }})">Edit</button>
                                                        <button class="btn btn-sm btn-danger" onclick="openHapusModal({{ $item->id }})">Hapus</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="text-center">
                                                <td colspan="3">Tidak ada diskusi</td>
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

<div class="modal fade" id="tambahDiskusiModal" tabindex="-1" aria-labelledby="tambahDiskusiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahDiskusiModalLabel">Tambah Diskusi</h1>
            </div>
            <form action="{{ route('guru.diskusi.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judulDiskusi" class="form-label">Judul Diskusi</label>
                    <input type="text" class="form-control @error('judulDiskusi','tambah') is-invalid @enderror" id="judulDiskusi" name="judulDiskusi">
                    @error('judulDiskusi','tambah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                      
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsiDiskusi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsiDiskusi','tambah') is-invalid @enderror" id="deskripsiDiskusi" name="deskripsiDiskusi">
                    @error('deskripsiDiskusi','tambah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                      
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="babSelect" class="form-label">Bab</label>
                    <select class="form-select @error('babSelect', 'tambah') is-invalid @enderror" aria-label="Default select example" id="babSelect" name="babSelect">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    @error('babSelect','tambah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                      
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pageSelect" class="form-label">Page</label>
                    <select class="form-select @error('pageSelect', 'tambah') is-invalid @enderror" aria-label="Default select example" id="pageSelect" name="pageSelect">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                    </select>
                    @error('pageSelect', 'tambah')
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

<div class="modal fade" id="editDiskusiModal" tabindex="-1" aria-labelledby="editDiskusiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editDiskusiModalLabel">Edit Data Diskusi</h1>
            </div>
            <form id="formModalEdit" method="POST" action="{{ old('urlEdit') }}">
                @method('PUT')
                @csrf
                <input type="hidden" name="urlEdit" id="urlEdit" value="{{ old('urlEdit') }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="judulDiskusi" class="form-label">Judul Diskusi</label>
                        <input type="text" class="form-control @error('judulDiskusi','edit') is-invalid @enderror" id="judulDiskusiEdit" name="judulDiskusi">
                        @error('judulDiskusi', 'edit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsiDiskusi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control @error('deskripsiDiskusi', 'edit') is-invalid @enderror" id="deskripsiDiskusiEdit" name="deskripsiDiskusi">
                        @error('deskripsiDiskusi', 'edit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="babSelect" class="form-label">Bab</label>
                        <select class="form-select @error('babSelect', 'edit') is-invalid @enderror" aria-label="Default select example" id="babSelectEdit" name="babSelect">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        @error('babSelect', 'edit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                      
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pageSelect" class="form-label">Page</label>
                        <select class="form-select @error('pageSelect', 'edit') is-invalid @enderror" aria-label="Default select example" id="pageSelectEdit" name="pageSelect">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        @error('pageSelect', 'edit')
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
<div class="modal fade" id="hapusDiskusiModal" tabindex="-1" aria-labelledby="hapusDiskusiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="hapusDiskusiModalLabel">Hapus Diskusi</h1>
            </div>
            <form id="formModalHapus" method="POST">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                <div class="text-center">
                    <i class="bi bi-exclamation-circle-fill display-4 text-danger d-block"></i>
                    <h5>
                        Anda yakin ingin menghapus diskusi berikut?
                    </h5>
                    <p>Ini akan menghapus semua chat di dalamnya.</p>
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
<script src="{{ asset('js/guru/diskusi-materi.js') }}"></script>
<script>
    @if ($errors->edit->any())
        editModal.show()
    @endif
    @if ($errors->tambah->any())
        tambahModal.show()
    @endif
    let token = '{{ csrf_token() }}'
</script>
@endsection
