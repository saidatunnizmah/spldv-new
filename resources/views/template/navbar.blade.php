<nav class="navbar navbar-expand sticky-top">
    <div class="container-fluid d-block">
        <div class="row">
            <div class="col-12">
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-between align-items-center">
                    <li>
                        <a class="navbar-brand fs-3 fw-bold" href="{{ route('siswa.dashboard') }}">SPLDV</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('img/anon-user.jpg') }}" alt="" id="user-avatar">
                            <div class="">
                                <a class="nav-link dropdown-toggle fw-bold text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Hai {{ Auth::user()->name }}!
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    {{-- <li><a class="dropdown-item" href="#">Profil</a></li> --}}
                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    <li><a class="dropdown-item lg" href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>          
                </ul>
            </div>
        </div>
    </div>
</nav> 