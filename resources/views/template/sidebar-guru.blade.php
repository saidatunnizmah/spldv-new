<nav id="sidebar">
    <div class="sidebar-brand-box">
        <a class="logo fs-3 fw-semibold" href="">SPLDV</a>
    </div>
    <div id="sidebar-menu">
        <ul id="side-menu" class="list-unstyled">
            <li class="menu-title">Menu</li>
            <li class="">
                <a href="{{ route('guru.dashboard') }}" >
                    <i class="bi bi-grid-fill fs-5"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('guru.dataSiswa') }}">
                    <i class="bi bi-person-lines-fill fs-5"></i>
                    Data Siswa
                </a>
            </li>
            <li>
                <a href="{{ route('guru.dataNilai') }}">
                    <i class="bi bi-file-bar-graph-fill fs-5"></i>
                    Data Nilai Siswa
                </a>
            </li>
        </ul>
    </div>
</nav>