@extends('template.auth')

@section('title','Register - SPLDV')
@section('css-Addon')
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col d-flex justify-content-center align-items-center" id="form-wrapper">
                <div class="card " style="width: 500px">
                    <div class="card-body">
                        <h3 class="text-center fw-bold">
                            Registrasi
                        </h3>
                        <p class="text-center">
                            Sudah memiliki akun? Beralih ke halaman <a href="{{ route("login") }}">login</a>.
                        </p>
                        <div class="mx-auto">
                            <form method="POST" action="{{ route('register.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama anda..." value="{{ old('name') }}" >
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email anda..." value="{{ old('email') }}" >
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password anda..." >
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" placeholder="Masukkan NISN anda..." value="{{ old('nisn') }}" >
                                    @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <select class="form-select @error('kelas') is-invalid @enderror" id="kelas" name="kelas" aria-label="Default select example" >
                                        <option>Pilih kelas anda</option>
                                        <option value="A" {{ old('kelas')=='A'? 'selected' : '' }}>A</option>
                                        <option value="B" {{ old('kelas')=='B'? 'selected' : '' }}>B</option>
                                        <option value="C" {{ old('kelas')=='C'? 'selected' : '' }}>C</option>
                                        <option value="D" {{ old('kelas')=='D'? 'selected' : '' }}>D</option>
                                        <option value="E" {{ old('kelas')=='E'? 'selected' : '' }}>E</option>
                                        <option value="F" {{ old('kelas')=='F'? 'selected' : '' }}>F</option>
                                    </select>
                                    @error('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-green fw-bold">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="footer">
            <div class="col-12 py-1">
                <h5 class="text-center fw-bold">
                    &copy; SPLDV
                </h5>
            </div>
        </div>
    </div>
@endsection