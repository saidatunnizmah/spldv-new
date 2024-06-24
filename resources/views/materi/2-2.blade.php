<div class="materi-bab">
    <div class="materi-bab-number">2</div>
    <div class="materi-bab-title">
        Penyelesaian SPLDV: Metode Substitusi
    </div>
</div>
<div class="accordion accordion-flush my-2" id="accordionTujuan">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTujuan" aria-expanded="false" aria-controls="collapseTujuan">
                Tujuan Pembelajaran
            </button>
        </h2>
        <div id="collapseTujuan" class="accordion-collapse collapse mt-1" data-bs-parent="#accordionTujuan">
            <div class="accordion-body fw-bold" id="tujuanContainer">
                
            </div>
        </div>
    </div>
</div>
<h5 class="materi-title mt-5"><span class="me-2">2.</span> Metode Substitusi</h5>
<p class="materi-paragraph">
    Metode subtitusi adalah cara mengganti nilai \(x\) atau \(y\) dari suatu persamaan ke persamaan yang lainnya, jika salah satu suku dalam \(x\) atau \(y\) memiliki koefesien 1. Untuk lebih jelasnya mari kita gunakan metode eliminasi untuk mencari harga pakasam dan harga buah kasturi pada dialog sebelumnya.
</p>
<div class="kegiatan-container">
    <div class="icon-container">
        <img src="{{ asset('img/icon-materi/mencoba.svg') }}" alt="" width="32px" height="32px">
    </div>
    <div class="kegiatan-title">
        Ayo Mencoba
    </div>
</div>

<div class="my-3">
    Dari dialog sebelumnya kita peroleh persamaan sebagai berikut: <br>
    
    <ul class="list-unstyled">
        <li>
            Persamaan Utuh (1) <br>
            \(2x+y=17.000\)
        </li>
        <li>
            Persamaan Palui (2) <br>
            \(x+2y=19.000\)
        </li>
    </ul>
</div>

<p class="materi-paragraph">
    Berikut langkah Utuh untuk mengetahui nilai variabel \(x\) dan \(y\) menggunakan metode subtitusi:
</p>
<ol class="ayo-mencoba-step">
    <li>
        Tentukan persamaan mana yang dipilih untuk menyatakan salah satu variabel dalam bentuk variabel yang lain (misal persamaan (2)).
        <div class="card summary mt-3">
            <div class="card-body">
                <h5 class="text-center fw-bold mb-1">
                    Note:
                </h5>
                <p class="m-0">
                    Prioritaskan variabel dengan koefisien 1 agar proses substitusi lebih mudah dan sederhana
                </p>
            </div>
        </div>
    </li>
    <li>
        Pilih 1 variabel dan nyatakan dalam bentuk variabel lainnya (misal variabel \(x\)).

        <div class="mt-2">
            Persamaan Palui (2) <br>
            \(x+2y = 19.000\) <br>
            Menjadi :

            <div class="d-flex align-items-center gap-2">
                \(x =\)
                <math-field id="isian-1"></math-field>
                <select name="select" id="isian-2">
                    <option value="+">+</option>
                    <option value="-">\(-\)</option>
                </select>
                <math-field id="isian-3"></math-field>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban1">Cek Jawaban</button>
            </div>
        </div>
    </li>
    <li>
        Substitusikan
        <div class="d-flex align-items-center gap-2">
            \(x =\)
            <math-field id="isian-4"></math-field>
            <select name="select" id="isian-5">
                <option value="+">+</option>
                <option value="-">\(-\)</option>
            </select>
            <math-field id="isian-6"></math-field>
        </div>
        ke Persamaan (1) dan carilah nilai dari \(y\)
        <table class="table-hitung">
            <tr>
                <td class="d-flex align-items-center justify-content-end gap-2">
                    \(2\)
                    <math-field id="isian-7"></math-field>
                    \(+y\)
                </td>
                <td class="px-2">\(=\)</td>
                <td>\(17.000\)</td>
            </tr>
            <tr>
                <td class="d-flex align-items-center justify-content-end gap-2">
                    <math-field id="isian-8"></math-field>
                    \(+y\)
                </td>
                <td class="px-2">\(=\)</td>
                <td>\(17.000\)</td>
            </tr>
            <tr>
                <td class="d-flex align-items-center justify-content-end gap-2">
                    <math-field id="isian-9"></math-field>
                </td>
                <td class="px-2">\(=\)</td>
                <td>\(17.000\)</td>
            </tr>
            <tr>
                <td class="d-flex align-items-center justify-content-end">
                    <math-field id="isian-10"></math-field>
                </td>
                <td class="px-2">\(=\)</td>
                <td><math-field id="isian-11"></math-field></td>
            </tr>
            <tr>
                <td class="text-end">
                    \(y\)
                </td>
                <td class="px-2">\(=\)</td>
                <td><math-field id="isian-12"></math-field></td>
            </tr>
        </table>
        <div class="text-center mt-3">
            <button class="btn btn-success" id="cekJawaban2">Cek Jawaban</button>
        </div>
    </li>
    <li>
        Setelah mengetahui nilai \(y\), substitusikan nilai \(y\) ke dalam persamaan (misal Persamaan (2)).
        <table class="table-hitung">
            <tr>
                <td colspan="3" class="text-center">
                    \(2x+y=17.000\)
                </td>
            </tr>
            <tr>
                <td class="d-flex align-items-center gap-2">
                    \(2x +\)
                    <math-field id="isian-13"></math-field>
                </td>
                <td class="px-2">\(=\)</td>
                <td>
                    \(17.000\)
                </td>
            </tr>
            <tr>
                <td class="text-end">
                    \(2x\)
                </td>
                <td class="px-2">\(=\)</td>
                <td>
                    <math-field id="isian-14"></math-field>
                </td>
            </tr>
            <tr>
                <td class="text-end">\(x\)</td>
                <td class="px-2">\(=\)</td>
                <td>
                    <math-field id="isian-15"></math-field>
                </td>
            </tr>
        </table>
        <div class="text-center mt-3">
            <button class="btn btn-success" id="cekJawaban3">Cek Jawaban</button>
        </div>
    </li>
</ol>
<p class="materi-paragraph">
    Setelah memperoleh nilai variabel \(x\) dan \(y\) menggunakan metode subtitusi, periksalah apakah dengan nilai \(x\) dan \(y\) dapat membuat kedua persamaan tersebut bernilai benar.
</p>


<div class="mt-3">
    <p class="fw-bold">Pengujian:</p>
    <div class="d-flex gap-3">
        <div class="d-flex align-items-center gap-2">
            \(x\) =
            <math-field style="width: 5em" id="isian-16"></math-field>
        </div>
        <div class="d-flex align-items-center gap-2">
            \(y\) =
            <math-field style="width: 5em" id="isian-17"></math-field>
        </div>
    </div>

    <div class="mt-3">
        \(2x+y=17.000\) <span class="ms-3">(1)</span>
        <div class="d-flex align-items-center gap-2 mt-2">
            <math-field style="width: 5em" id="isian-18"></math-field>
            <select name="select" id="isian-19">
                <option value="+">\(+\)</option>
                <option value="-">\(-\)</option>
            </select>
            <math-field style="width: 5em" id="isian-20"></math-field>
            \(= 17.000\)
        </div>
    </div>

    <div class="mt-3">
        \(x+2y=19.000\) <span class="ms-3">(2)</span>
        <div class="d-flex align-items-center gap-2 mt-2">
            <math-field style="width: 5em" id="isian-21"></math-field>
            <select name="select" id="isian-22">
                <option value="+">\(+\)</option>
                <option value="-">\(-\)</option>
            </select>
            <math-field style="width: 5em" id="isian-23"></math-field>
            \(= 19.000\)
        </div>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban4">Cek Jawaban</button>
    </div>
</div>

<p class="materi-paragraph">
    Karena kedua persamaan tersebut bernilai benar, maka nilai variabel \(x\) dan \(y\) yang kita peroleh dengan metode subtitusi adalah benar. 
    <br><br>
    Dengan demikian langkah-langkah metode subtitusi adalah sebagai berikut :
</p>

<ol class="my-3">
    <li>Menentukan persamaan apa yang akan diubah</li>
    <li>Memilih dan menyatakan salah satu variabel dalam bentuk variabel yang lain</li>
    <li>
        Memasukkan hasil dari Langkah 2) ke dalam persamaan ke Persamaan (2), sehingga diperoleh nilai variabelnya
    </li>
    <li>
        Mensubstitusi nilai variabel yang diperoleh dari Langkah 3) ke dalam salah satu persamaan, sehingga diperoleh nilai variabel yang kedua.
    </li>
</ol>

<p class="materi-paragraph">
    Melalui kedua metode yang kita gunakan baik metode eliminasi maupun metode subtitusi dapat menghasilkan solusi yang benar untuk sebuah sistem persamaan linear dua variabel. Kedua metode ini memiliki keunggulan dan kelemahan masing-masing.
</p>
<p class="materi-paragraph">
    Metode eliminasi sering kali lebih efisien dalam mengurangi jumlah variabel, sedangkan metode subtitusi bisa lebih mudah diterapkan pada sistem persamaan yang memiliki persamaan yang relatif sederhana. Namun, kedua metode dapat menghasilkan solusi yang akurat dan valid untuk sistem persamaan linear dua variabel.
</p>

<div class="text-center d-none" id="btnDownload">
    <a href="{{ route('siswa.materi.download', ['bab'=>2,'page'=>2]) }}" class="btn btn-success">Download Materi</a>
</div>