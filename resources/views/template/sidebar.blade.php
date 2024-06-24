<nav id="sidebar">
    <div class="sidebar-brand-box">
        <a class="logo fs-3 fw-semibold" href="">SPLDV</a>
    </div>
    <div id="sidebar-menu">
        <ul id="side-menu" class="list-unstyled">
            <li class="menu-title">Menu</li>
            <li class="">
                <a href="{{ route('siswa.dashboard') }}" >
                    <i class="bi bi-grid-fill fs-5"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.daftar-materi') }}">
                    <i class="bi bi-book-half fs-5"></i>
                    Materi
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.progress') }}">
                    <i class="bi bi-clipboard-check-fill fs-5"></i>
                    Progres
                </a>
            </li>
            <li>
                <a href="{{ route('siswa.perihal') }}">
                    <i class="bi bi-info-circle-fill fs-5"></i>
                    Perihal
                </a>
            </li>
        </ul>
    </div>
</nav>