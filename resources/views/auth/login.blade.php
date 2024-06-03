@extends('template.auth')

@section('title','Login - SPLDV')
@section('css-Addon')
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
@endsection

@section('body')
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil mendaftar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
          
        <div class="row">
            <div class="col vh-100 d-flex justify-content-center align-items-center">
                <div class="card mb-5" style="width: 500px">
                    <div class="card-body">
                        <h3 class="text-center fw-bold">
                            Masuk
                        </h3>
                        <p class="text-center">
                            Belum memiliki akun? Beralih ke halaman <a href="{{ route('register') }}">register</a>.
                        </p>
                        <div class="mx-auto">
                            <form method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-green fw-bold">Masuk</button>
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