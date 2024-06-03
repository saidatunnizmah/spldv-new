<div class="materi-bab">
    <div class="materi-bab-number">3</div>
    <div class="materi-bab-title">
        Aplikasi Sistem Persamaan Linear Dua Variabel
    </div>
</div>
<div class="kegiatan-container">
    <div class="icon-container">
        <img src="{{ asset('img/icon-materi/tahukah.svg') }}" alt="" width="32px" height="32px">
    </div>
    <div class="kegiatan-title">
        Tahukah Kamu?
    </div>
</div>

<p class="materi-paragraph">
    Tikar Purun adalah produk tradisional yang khas dari Kalimantan Selatan, Indonesia. Tikar ini terbuat dari bahan alam, yaitu daun purun atau daun areuy purun (Daemonorops spp.), sejenis tumbuhan palma yang tumbuh subur di daerah rawa-rawa dan lahan basah di Kalimantan Selatan. Tikar Purun adalah salah satu bentuk seni kerajinan tangan yang telah ada selama berabad-abad dan merupakan bagian penting dari budaya dan kehidupan sehari-hari masyarakat setempat.
</p>
<div class="text-center">
    <img src="{{ asset('img/tikar-purun.png') }}" alt="" class="img-fluid">
</div>

<div class="kegiatan-container mt-5">
    <div class="icon-container">
        <img src="{{ asset('img/icon-materi/mencoba.svg') }}" alt="" width="32px" height="32px">
    </div>
    <div class="kegiatan-title">
        Ayo Mencoba !
    </div>
</div>

<div class="d-flex flex-column justify-content-center align-items-center gap-3">
    <img src="{{ asset('img/bab3-mencoba1.png') }}" alt="" class="img-fluid">
    <img src="{{ asset('img/bab3-mencoba2.png') }}" alt="" class="img-fluid">
</div>

<div class="my-3">
    Keliling 1 tikar purun adalah 760 cm, dan keliling 2 buah tikar purun yang bersentuhan adalah 920 cm. Tentukan panjang dan lebar tikar purun tersebut!

    <div class="mt-3">
        <p class="m-0 fw-bold">
            Persamaan Tikar (1)
        </p>
        <div class="d-flex align-items-center gap-2">
            <math-field style="width: 5em" id="isian-1"></math-field>
            \(+\)
            <math-field style="width: 5em" id="isian-2"></math-field>
            \(=\)
            <math-field style="width: 5em" id="isian-3"></math-field>
        </div>
    </div>
    <div class="mt-3">
        <p class="m-0 fw-bold">
            Persamaan Tikar (2)
        </p>
        <div class="d-flex align-items-center gap-2">
            <math-field style="width: 5em" id="isian-4"></math-field>
            \(+\)
            <math-field style="width: 5em" id="isian-5"></math-field>
            \(=\)
            <math-field style="width: 5em" id="isian-6"></math-field>
        </div>
    </div>
    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban1">Cek Jawaban</button>
    </div>
</div>

<div class="d-flex align-items-center gap-2 my-3">
    Eliminasi variabel
    <select name="select" id="isian-7">
        <option value="x">\(x\)</option>
        <option value="y">\(y\)</option>
    </select>
</div>

<div class="d-flex align-items-center gap-2 my-3">
    Persamaan (1) dikali
    <math-field style="width: 5em" id="isian-8"></math-field>
</div>
<div class="d-flex align-items-center gap-2 my-3">
    Persamaan (2) dikali
    <math-field style="width: 5em" id="isian-9"></math-field>
</div>

<div class="mt-3">
    <table class="table-hitung">
        <tr>
            <td class="d-flex align-items-center gap-2">
                <math-field style="width: 5em" id="isian-10"></math-field>
                \(+\)
                <math-field style="width: 5em" id="isian-11"></math-field>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field style="width: 5em" id="isian-12"></math-field>
            </td>
            <td class="ps-3"> <small>Hasil Persamaan (1)</small></td>
        </tr>
        <tr>
            <td class="d-flex align-items-center gap-2">
                <math-field style="width: 5em" id="isian-13"></math-field>
                \(+\)
                <math-field style="width: 5em" id="isian-14"></math-field>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field style="width: 5em" id="isian-15"></math-field>
            </td>
            <td class="ps-3"><small>Hasil Persamaan (2)</small></td>
        </tr>
        <tr>
            <td colspan="3">
                <hr class="border border-black opacity-100">
            </td>
            <td class="fs-3"> \(-\)</td>
        </tr>
        <tr>
            <td class="d-flex align-items-center justify-content-end gap-2">
                <math-field style="width: 5em" id="isian-16"></math-field>
                <math-field style="width: 3em" id="isian-17" value="y" disabled></math-field>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field id="isian-18" style="width: 5em"></math-field>
            </td>
            <td></td>
        </tr>
        <tr>
            <td class="text-end">
                {{-- <input type="text" name="" id="" value="\(y\)" disabled> --}}
                <math-field  id="isian-19" value="y" disabled style="width: 3em"></math-field>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field id="isian-20" style="width: 5em"></math-field>
            </td>
            <td></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban2">Cek Jawaban</button>
    </div>
</div>

<div class="my-3">
    <p class="m-0">
        
    </p>
    <div class="d-flex align-items-center gap-2 mt-3 flex-wrap">
        Substitusi
        <math-field  id="isian-21" value="y" disabled style="width: 3em"></math-field>
        ke persamaan
        <select name="select" id="isian-22">
            <option value="1">\(1\)</option>
            <option value="2">\(2\)</option>
        </select>
        dan carilah nilai dari variabel
        <math-field  id="isian-23" value="x" disabled style="width: 3em"></math-field>
    </div>

    <table class="table-hitung mt-3 align-middle">
        <tr>
            <td class="d-flex align-items-center justify-content-end gap-2">
                <span id="persamaan-a1">\(2x+2\)</span>
                <math-field style="width: 5em" id="isian-24"></math-field>
                <span id="persamaan-b1"></span>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <span id="konstanta-a1">\(760\)</span>
            </td>
        </tr>
        <tr>
            <td class="d-flex align-items-center justify-content-end gap-2">
                <span id="persamaan-a2">\(2x+\)</span>
                <math-field style="width: 5em" id="isian-25"></math-field>
                <span id="persamaan-b2"></span>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <span id="konstanta-a2">\(760\)</span>
            </td>
        </tr>
        <tr>
            <td class="text-end">
                <span id="persamaan-a3">\(2x\)</span>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field id="isian-26"></math-field>
            </td>
        </tr>
        <tr>
            <td class="text-end">
                <span id="persamaan-a4">\(x\)</span>
            </td>
            <td class="px-2">\(=\)</td>
            <td>
                <math-field id="isian-27"></math-field>
            </td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban3">Cek Jawaban</button>
    </div>
</div>

