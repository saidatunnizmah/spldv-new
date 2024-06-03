<nav id="sidebar">
    <div class="sidebar-brand-box">
        <a class="logo fs-3 fw-semibold" href="">SPLDV</a>
    </div>
    <div id="sidebar-menu" class="">
        <ul id="side-menu" class="list-unstyled overflow-scroll">
            <li class="menu-title">Materi</li>
            <li class="">
                <a class="{{ $bab == 0 ? "active" : "" }}" href="{{ route('siswa.materi',['bab'=>0, 'page'=>1]) }}" >
                    <i class="bi bi-0-circle-fill fs-5"></i>
                    Apersepsi
                </a>
            </li>
            <li class="">
                @if (auth()->user()->siswa->bab < 1)
                    <div class="materi-dropdown-lock" id="lock-1">
                        <i class="bi bi-lock-fill fs-3"></i>
                    </div>
                @endif
                <a class="materi-dropdown {{ $bab == 1 ? "active" : "" }}" data-toggle="dropdown-1" {{ auth()->user()->siswa->bab >= 1 ? '' : 'disabled' }}>
                    <i class="bi bi-1-circle-fill fs-5"></i>
                    Bentuk Umum SPLDV
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="materi-dropdown-menu collapse" id="dropdown-1">
                    <li class="materi-dropdown-item">
                        <a href="{{ route('siswa.materi',['bab'=>1, 'page'=>1]) }}">Materi: Pengenalan SPLDV</a>
                    </li>
                    <li class="materi-dropdown-item">
                        @if (auth()->user()->siswa->bab < 1 || (auth()->user()->siswa->bab == 1 && auth()->user()->siswa->page <2))
                            <div class="materi-dropdown-lock" id="lock-1-2">
                                <i class="bi bi-lock-fill fs-3"></i>
                            </div>
                        @endif
                        <a href="{{ route('siswa.materi',['bab'=>1, 'page'=>2]) }}">Materi: Bentuk Umum SPLDV</a>
                    </li>
                    <li class="materi-dropdown-item">
                        @if (auth()->user()->siswa->bab < 2)
                            <div class="materi-dropdown-lock" id="lock-1-3">
                                <i class="bi bi-lock-fill fs-3"></i>
                            </div>
                        @endif
                        <a id="btnKuis1" data-bs-toggle="modal" data-bs-target="#kuisModal" data-kuis="1" style="cursor: pointer">Kuis 1</a>
                    </li>
                </ul>
            </li>
            <li>
                @if (auth()->user()->siswa->bab < 2)
                    <div class="materi-dropdown-lock" id="lock-2">
                        <i class="bi bi-lock-fill fs-3"></i>
                    </div>
                @endif
                <a class="materi-dropdown {{ $bab == 2 ? "active" : "" }}" data-toggle="dropdown-2" {{ auth()->user()->siswa->bab >= 2 ? '' : 'disabled' }}>
                    <i class="bi bi-2-circle-fill fs-5"></i>
                    Penyelesaian SPLDV
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="materi-dropdown-menu collapse" id="dropdown-2">
                    <li class="materi-dropdown-item">
                        <a href="{{ route('siswa.materi', ['bab'=>2, 'page'=>1]) }}">Materi: Metode Eliminasi</a>
                    </li>
                    <li class="materi-dropdown-item">
                        @if (auth()->user()->siswa->bab < 2 || (auth()->user()->siswa->bab == 2 && auth()->user()->siswa->page <2))
                            <div class="materi-dropdown-lock" id="lock-2-2">
                                <i class="bi bi-lock-fill fs-3"></i>
                            </div>
                        @endif
                        <a href="{{ route('siswa.materi', ['bab'=>2, 'page'=>2]) }}">Materi: Metode Substitusi</a>
                    </li>
                    <li class="materi-dropdown-item">
                        @if (auth()->user()->siswa->bab < 3)
                            <div class="materi-dropdown-lock" id="lock-2-3">
                                <i class="bi bi-lock-fill fs-3"></i>
                            </div>
                        @endif
                        <a id="btnKuis2" data-bs-toggle="modal" data-bs-target="#kuisModal" data-kuis="2" style="cursor: pointer">Kuis 2</a>
                    </li>
                </ul>
            </li>
            <li>
                @if (auth()->user()->siswa->bab < 3)
                    <div class="materi-dropdown-lock" id="lock-3">
                        <i class="bi bi-lock-fill fs-3"></i>
                    </div>
                @endif
                <a class="materi-dropdown {{ $bab == 3 ? "active" : "" }}" data-toggle="dropdown-3" {{ auth()->user()->siswa->bab >= 3 ? '' : 'disabled' }}>
                    <i class="bi bi-3-circle-fill fs-5"></i>
                    Penerapan SPLDV
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="materi-dropdown-menu collapse" id="dropdown-3">
                    <li class="materi-dropdown-item">
                        <a href="{{ route('siswa.materi', ['bab'=>3, 'page'=>1]) }}">Materi</a>
                    </li>
                    <li class="materi-dropdown-item">
                        @if (auth()->user()->siswa->bab < 4)
                            <div class="materi-dropdown-lock" id="lock-3-1">
                                <i class="bi bi-lock-fill fs-3"></i>
                            </div>
                        @endif
                        <a id="btnKuis3" data-bs-toggle="modal" data-bs-target="#kuisModal" data-kuis="3" style="cursor: pointer">Kuis 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>