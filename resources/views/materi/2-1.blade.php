<div class="materi-bab">
    <div class="materi-bab-number">2</div>
    <div class="materi-bab-title">
        Penyelesaian SPLDV: Metode Eliminasi
    </div>
</div>
<p class="materi-paragraph">
    Sistem persamaan linear dua variabel adalah dua atau lebih persamaan linear dengan dua variabel, yang mana kedua variabel tiap persamaan adalah sama, namun koefisien variabel dan konstanta untuk tiap persamaan belum tentu sama.
</p>
<p class="materi-paragraph">
    Pada sistem persamaan linear yang kita peroleh dari percakapan Palui dan Utuh pada dialog sebelumnya yaitu :
</p>
<div class="text-center">
    $$ 
        \begin{cases}
         x+2y = 17.000 \\
         2x + y = 19.000
        \end{cases}
    $$
</div>
<p class="materi-paragraph">
    \(x\) dan \(y\) disebut sebagai <b>variabel</b>, 1 dan 2 adalah <b>koefisisen variabel \(x\)</b>, 2 dan 1 adalah <b>koefisien variabel \(y\)</b>.
</p>
<p class="materi-paragraph">
    Apakah arti menentukan penyelesaian sistem persamaan itu? Artinya kamu harus menentukan pasangan-pasangan bilangan pengganti untuk \(x\) dan \(y\) yang mengubah kedua persamaan itu menjadi kalimat yang benar.
</p>
<p class="materi-paragraph">
    Bagaimana menentukan pasangan-pasangan bilangan pengganti untuk \(x\) dan \(y\) supaya persamaan tersebut menjadi kalimat yang benar? Ada beberapa cara untuk menentukan penyelesaian suatu sistem persamaan, diantaranya dengan <b>metode eliminasi</b> dan <b>metode subtitusi</b>.
</p>

<h5 class="materi-title mt-5"><span class="me-2">1.</span> Metode Eliminasi</h5>
<p class="materi-paragraph">
    Metode eliminasi artinya menghilangkan salah satu variabel untuk mendapatkan satu penyelesaian. Jika kamu ingin mencari nilai \(x\), maka terlebih eliminasilah variabel \(y\). Untuk lebih jelasnya mari kita gunakan metode eliminasi untuk mencari harga pakasam dan harga buah kasturi pada dialog sebelumnya.
</p>

<div class="kegiatan-container">
    <div class="icon-container">
        <img src="{{ asset('img/icon-materi/mencoba.svg') }}" alt="" width="32px" height="32px">
    </div>
    <div class="kegiatan-title">
        Ayo Mencoba
    </div>
</div>
<p class="materi-paragraph">
    Dengan persamaan yang sudah kita peroleh dari percakapan Palui dan Utuh, berapakah harga 1 bungkus kasturi dan 1 bungkus pakasam?
</p>
<img src="{{ asset('img/eliminasi-1.png') }}" alt="" class="img-fluid">
<p class="materi-paragraph">
    Kita dapat menggunakan bentuk aljabar untuk mengetahui harga 1 bungkus pakasam dan 1 bungkus kasturi. Ikuti cara Utuh sebagai berikut :
</p>

<div class="mt-3">
    <span class="me-2 fw-bold">1.</span> Tuliskan kedua persamaan yang sudah kita ketahui, dengan \(x\) sebagai harga 1 bungkus kasturi dan \(y\) harga bungkus pakasam
    <div class="d-flex align-items-center gap-2 mt-1">
        (1)
        <math-field id="isian-1"></math-field>
        \(+\)
        <math-field id="isian-2"></math-field>
        \(=\)
        <math-field id="isian-3"></math-field>
    </div>
    <div class="d-flex align-items-center gap-2 mt-1">
        (2)
        <math-field id="isian-4"></math-field>
        \(+\)
        <math-field id="isian-5"></math-field>
        \(=\)
        <math-field id="isian-6"></math-field>
    </div>
    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban1">Cek Jawaban</button>
    </div>
</div>

<div class="mt-3">
    <span class="me-2 fw-bold">2. </span>Eliminasi harga pakasam (variabel \(x\))
    <ul class="ayo-mencoba-step">
        <li>
            Pada kedua persamaan tersebut koefisien variabel \(x\) adalah <math-field class="d-inline-block mx-1" style="width: 5em" id="isian-7"></math-field> dan <math-field class="d-inline-block mx-1" style="width: 5em" id="isian-8"></math-field>. Karena nilainya tidak sama maka langkah pertama yang harus dilakukan adalah menyamakan koefisien variabel tersebut, dengan cara mengalikan persamaan dengan bilangan bulat sehingga membentuk persamaan baru.
            <div class="d-flex align-items-center gap-2 mt-1">
                (1)
                <math-field id="isian-9"></math-field>
                \(+\)
                <math-field id="isian-10"></math-field>
                \(=\)
                <math-field id="isian-11"></math-field>

                <span class="ms-3">\(\times 1\)</span>
            </div>
            <div class="d-flex align-items-center gap-2 mt-1">
                (2)
                <math-field id="isian-12"></math-field>
                \(+\)
                <math-field id="isian-13"></math-field>
                \(=\)
                <math-field id="isian-14"></math-field>

                <span class="ms-3">\(\times 2\)</span>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban2">Cek Jawaban</button>
            </div>
        </li>
        <li>
            Sehingga menghasilkan persamaan baru yaitu:
            <div class="d-flex align-items-center gap-2 mt-1">
                (3)
                <math-field id="isian-15"></math-field>
                \(+\)
                <math-field id="isian-16"></math-field>
                \(=\)
                <math-field id="isian-17"></math-field>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban3">Cek Jawaban</button>
            </div>
        </li>
        <li>
            Menggunakan persamaan baru, kita dapat mengeliminasi variabel \(x\) dengan cara mengurangkan persamaan (1) dengan persamaan (3).
            <table class="mt-2">
                <tr>
                    <td>(1)</td>
                    <td class="d-flex align-items-center gap-2">
                        <math-field id="isian-18"></math-field>
                        \(+\)
                        <math-field id="isian-19"></math-field>
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-20"></math-field></td>
                    <td></td>
                </tr>
                <tr>
                    <td>(3)</td>
                    <td class="d-flex align-items-center gap-2">
                        <math-field id="isian-21"></math-field>
                        \(+\)
                        <math-field id="isian-22"></math-field>
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-23"></math-field></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr class="border border-black opacity-100">
                    </td>
                    <td class="text-center" style="width: 3em"> \(-\)</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end">
                        <math-field id="isian-24" style="width: 5em"></math-field> \(y\)
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-25"></math-field></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end">
                        \(y\)
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-26"></math-field></td>
                </tr>
            </table>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban4">Cek Jawaban</button>
            </div>
        </li>
        <li>
            Dengan mengeliminasi variabel \(x\) maka akan menyisakan variabel \(y\) saja.
        </li>
    </ul>
</div>

<div class="mt-3">
    <span class="me-2 fw-bold">3. </span>Eliminasi harga kasturi (variabel \(y\))
    <ul class="ayo-mencoba-step">
        <li>
            Cara yang sama dapat kita lakukan untuk mengetahui variabel \(y\), yaitu dengan cara mengeliminasi \(y\) dari kedua persamaan tersebut. Pada kedua persamaan tersebut koefisien variabel \(y\) adalah
            <math-field class="d-inline-block mx-1" style="width: 5em" id="isian-27"></math-field> dan <math-field class="d-inline-block mx-1" style="width: 5em" id="isian-28"></math-field>
            , karena nilainya tidak sama maka samakan kedua koefisien variable tersebut.
            
            <div class="d-flex align-items-center gap-2 mt-1">
                (1)
                <math-field id="isian-29"></math-field>
                \(+\)
                <math-field id="isian-30"></math-field>
                \(=\)
                <math-field id="isian-31"></math-field>

                <span class="ms-3">\(\times 2\)</span>
            </div>
            <div class="d-flex align-items-center gap-2 mt-1">
                (2)
                <math-field id="isian-32"></math-field>
                \(+\)
                <math-field id="isian-33"></math-field>
                \(=\)
                <math-field id="isian-34"></math-field>

                <span class="ms-3">\(\times 1\)</span>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban5">Cek Jawaban</button>
            </div>
        </li>
        <li>
            Untuk menyamakan koefisien dari variabel \(y\) kita mengalikan persamaan (2) dengan 2, sehingga menghailkan persamaan baru yaitu:
            <div class="d-flex align-items-center gap-2 my-2">
                (4)
                <math-field id="isian-35"></math-field>
                \(+\)
                <math-field id="isian-36"></math-field>
                \(=\)
                <math-field id="isian-37"></math-field>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban6">Cek Jawaban</button>
            </div>
        </li>
        <li>
            Dengan persamaan baru kita dapat mengeliminasi \(y\) dari persamaan (2) dan (4).
            <table class="mt-2 table-hitung">
                <tr>
                    <td>(1)</td>
                    <td class="d-flex align-items-center gap-2">
                        <math-field id="isian-38"></math-field>
                        \(+\)
                        <math-field id="isian-39"></math-field>
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-40"></math-field></td>
                    <td></td>
                </tr>
                <tr>
                    <td>(4)</td>
                    <td class="d-flex align-items-center gap-2">
                        <math-field id="isian-41"></math-field>
                        \(+\)
                        <math-field id="isian-42"></math-field>
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-43"></math-field></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr class="border border-black opacity-100">
                    </td>
                    <td class="text-center" style="width: 3em"> \(-\)</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end">
                        <math-field id="isian-44"></math-field> \(x\)
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-45"></math-field></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end">
                        \(x\)
                    </td>
                    <td class="px-2">\(=\)</td>
                    <td><math-field id="isian-46"></math-field></td>
                </tr>
            </table>
            <div class="text-center mt-3">
                <button class="btn btn-success" id="cekJawaban7">Cek Jawaban</button>
            </div>
        </li>
    </ul>
    <p class="materi-paragraph">
        Setelah mengeliminasi variabel \(y\) maka kita akan mendapatkan nilai dari variabel \(x\), dan pada proses sebelumnya kita telah memperoleh nilai variabel \(y\).
        Periksalah apakah dengan nilai \(x\) dan \(y\) dapat membuat kedua persamaan tersebut bernilai benar.
    </p>
</div>
<div class="mt-3">
    <p class="fw-bold">Pengujian:</p>
    <div class="d-flex gap-3">
        <div class="d-flex align-items-center gap-2">
            \(x\) =
            <math-field style="width: 6em" id="isian-47"></math-field>
        </div>
        <div class="d-flex align-items-center gap-2">
            \(y\) =
            <math-field style="width: 6em" id="isian-48"></math-field>
        </div>
    </div>

    <div class="mt-3">
        \(2x+y=17.000\) <span class="ms-3">(1)</span>
        <div class="d-flex align-items-center gap-2 mt-2">
            <math-field style="width: 5em" id="isian-49"></math-field>
            <select name="select" id="isian-50">
                <option value="+">\(+\)</option>
                <option value="-">\(-\)</option>
            </select>
            <math-field style="width: 5em" id="isian-51"></math-field>
            \(= 17.000\)
        </div>
    </div>

    <div class="mt-3">
        \(x+2y=19.000\) <span class="ms-3">(2)</span>
        <div class="d-flex align-items-center gap-2 mt-2">
            <math-field style="width: 5em" id="isian-52"></math-field>
            <select name="select" id="isian-53">
                <option value="+">\(+\)</option>
                <option value="-">\(-\)</option>
            </select>
            <math-field style="width: 5em" id="isian-54"></math-field>
            \(= 19.000\)
        </div>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-success" id="cekJawaban8">Cek Jawaban</button>
    </div>
</div>

<div class="mt-3">
    <span class="me-2 fw-bold">4. </span> Kesimpulan
    <p class="materi-paragraph">
        Karena kedua persamaan tersebut bernilai benar maka nilai variabel \(x\) dan \(y\) yang kita peroleh dengan metode eliminasi adalah benar. Dengan demikian langkah-langkah metode eliminasi adalah sebagai berikut:
    </p>
    <ol>
        <li>Menyamakan koefisien salah satu variabelnya (misal \(x\))</li>
        <li>Mengeliminasi variabel \(x\) sehingga diperoleh nilai variabel \(y\)</li>
        <li>Memilih variabel yang nilainya paling sederhana</li>
        <li>Melakukan hal yang sama terhadap variabel lainnya (\(y\)) sehingga memperoleh nilai variabel \(x\)</li>
    </ol>
</div>