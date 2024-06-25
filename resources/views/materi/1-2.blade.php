<div class="materi-bab">
    <div class="materi-bab-number">1</div>
    <div class="materi-bab-title">
        Bentuk Umum Sistem Persamaan Linear Dua Variabel
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
                Pesetda didik dapat membuat dan menuliskan sistem persamaan linear dua variabel.
            </div>
        </div>
    </div>
</div>
<p class="materi-paragraph">
    Sebelumnya kalian sudah menonton dan mengisikan jawaban pada dialog Utuh dan Palui, melalui percakapan Utuh menyebutkan perhitungan harga masing-masing barang bisa dilakukan dengan membuat persamaan linear dua variabel. Sebelum kita menghitung harga buah kasturi dan pakasam terlebih dahulu kita membuatnya ke dalam bentuk persamaan dengan dua variabel.
</p>
<div class="kegiatan-container">
    <div class="icon-container">
        <img src="{{ asset('img/icon-materi/mencoba.svg') }}" alt="" width="32px" height="32px">
    </div>
    <div class="kegiatan-title">
        Ayo Mencoba!
    </div>
</div>
1. Lengkapi tabel berikut:
<div class="table-responsive">
    <table class="table align-middle text-center table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Kasturi (Bungkus)</th>
                <th>Pakasam (Bungkus)</th>
                <th>Total Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Utuh</th>
                <td>2</td>
                <td>
                    <math-field id="isian-1"></math-field>
                    <div id="isian-1-feedback">
                        
                    </div>
                </td>
                <td>
                    <math-field id="isian-2"></math-field>
                    <div id="isian-2-feedback">
                        
                    </div>
                </td>
            </tr>
            <tr>
                <th>Palui</th>
                <td>
                    <math-field id="isian-3"></math-field>
                    <div id="isian-3-feedback">
                        
                    </div>
                </td>
                <td>
                    <math-field id="isian-4"></math-field>
                    <div id="isian-4-feedback">
                        
                    </div>
                </td>
                <td>19000</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="text-center mt-1 mb-3">
    <button class="btn btn-success" id="cekJawaban1">Cek Jawaban</button>
</div>

2. Susunlah lingkaran berikut sehingga menjadi kalimat yang benar untuk menghitung total harga belanja! <br>

<b>Petunjuk :</b>
<li>Klik lingakaran dengan kalimat yang disediakan.</li>
<li>Drag dan letakkan pada lingkaran dengan angka yang sesuai.</li>
<li>Untuk membatalkan, klik lingkaran yang sudah disusun.</li> 
<br>
<div id="drag-from-container" class="mt-2">
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-1" style="background-color: #FEB941">
        Harga Kasturi
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-2" style="background-color: black">
        Total Harga
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-3" style="background-color: #FEB941">
        Banyak Bungkus
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-4">
        Dikali
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-5" style="background-color: #FEB941">
        Harga Pakasam
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-6" style="background-color: #FF5F00">
        Ditambah
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-7" style="background-color: #FF5F00">
        Sama Dengan
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-8">
        Dikali
    </div>
    <div class="draggable-item" draggable="true" ondragstart="drag(event)" id="item-9" style="background-color: #FEB941">
        Banyak Bungkus
    </div>
</div>
<div id="drag-to-container">
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=1 id="drag-target-1">
            1
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=2 id="drag-target-2">
            2
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=3 id="drag-target-3">
            3
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=4 id="drag-target-4">
            4
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=5 id="drag-target-5">
            5
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=6 id="drag-target-6">
            6
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=7 id="drag-target-7">
            7
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=8 id="drag-target-8">
            8
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
    <div class="text-center">
        <div class="drag-to-target" ondragover="allowDrop(event)" ondrop="drop(event)" data-order=9 id="drag-target-9">
            9
        </div>
        <div class="feedback">
            <i class="bi bi-x-lg text-danger"></i>
        </div>
    </div>
</div>

<div class="text-center mt-2">
    <button class="btn btn-success" id="cekJawaban2">Cek Jawaban</button>
</div>

<div class="card summary my-3">
    <div class="card-body">
        <h5 class="fw-bold">Note:</h5>
        Karena harga pakasam dan kasturi masing-masing belum diketahui, maka dinyatakan dalam bentuk variabel. <br>
        Pada kegiatan ini, harga perbungkus buah kasturi dapat dimisalkan sebagai \(x\) dan harga perbungkus pakasam sebgai \(y\)
    </div>
</div>

3. Bagaimana menyatakan total harga belanjaan dalam bentuk persamaan?
<div class="my-1">
    <p class="m-0 fw-bold">Persamaan 1 (Belanjaan Utuh)</p>
    
    <div class="d-flex align-items-center gap-2">
        <math-field style="width: 5em;" id="isian-5"></math-field>
        \( \times \)
        <math-field style="width: 5em" id="isian-6"></math-field>
        \( + \)
        <math-field style="width: 5em" id="isian-7"></math-field>
        \( \times \)
        <math-field style="width: 5em" id="isian-8"></math-field>
        \( = \)
        <math-field style="width: 7em" id="isian-9"></math-field>
    </div>
</div>
<div class="my-1">
    <p class="m-0 fw-bold">Persamaan 2 (Belanjaan Palui)</p>
    
    <div class="d-flex align-items-center gap-2">
        <math-field style="width: 5em" id="isian-10"></math-field>
        \( \times \)
        <math-field style="width: 5em" id="isian-11"></math-field>
        \( + \)
        <math-field style="width: 5em" id="isian-12"></math-field>
        \( \times \)
        <math-field style="width: 5em" id="isian-13"></math-field>
        \( = \)
        <math-field style="width: 7em" id="isian-14"></math-field>
    </div>
</div>
Dapat ditulis sebagai:
<div class="my-1">
    <p class="m-0 fw-bold">Persamaan 1 (Belanjaan Utuh)</p>
    
    <div class="d-flex align-items-center gap-2">
        <math-field style="width: 7em" id="isian-15"></math-field>
        \( + \)
        <math-field style="width: 7em" id="isian-16"></math-field>
        \( = \)
        <math-field id="isian-17"></math-field>
    </div>
</div>
<div class="my-1">
    <p class="m-0 fw-bold">Persamaan 2 (Belanjaan Palui)</p>
    
    <div class="d-flex align-items-center gap-2">
        <math-field style="width: 7em" id="isian-18"></math-field>
        \( + \)
        <math-field style="width: 7em" id="isian-19"></math-field>
        \( = \)
        <math-field id="isian-20"></math-field>
    </div>
</div>
<div class="text-center mt-2">
    <button class="btn btn-success" id="cekJawaban3">Cek Jawaban</button>
</div>

<div class="text-center d-none" id="persamaanUtuhPalui">
    $$ 
        \begin{cases}
         x+2y = 17.000 \ \ (Belanjaan \ Utuh) \\
         2x + y = 19.000 \ \ (Belanjaan \ Palui)
        \end{cases}
    $$
</div>

<p class="materi-paragraph mt-4">
    Masing-masing persamaan di atas memuat 2 variabel, setiap variabelnya berpangkat 1, dan tidak ada hasil kali antara kedua variabel sehingga disebut <span class="fw-bold">persamaan linear dua variabel</span>.
</p>
<p class="materi-paragraph">
    Karena terdapat 2 persamaan dengan 2 variabel yang sama maka kedua persamaan tersebut bersama-sama membentuk <span class="fw-bold">sistem persamaan linear dua variabel</span>.
</p>
<p class="materi-paragraph">
    Adapun bentuk umum sistem persamaan linear dua variabel sebagai berikut :
</p>
<div class="text-center">
    <img src="{{ asset('img/spldv-1.png') }}" alt="">
</div>
<p class="mb-0 mt-3">Contohnya:</p>
<div class="text-center">
    <img src="{{ asset('img/spldv-2.png') }}" alt="">
</div>
<p class="materi-paragraph mt-3">
    Selain contoh diatas terdapat juga sistem persamaan linear dua variabel dengan bentuk persamaan sebagai berikut :
</p>
<div class="text-center">
    <img src="{{ asset('img/spldv-3.png') }}" alt="">
</div>

<div class="text-center d-none" id="btnDownload">
    <a href="{{ route('siswa.materi.download', ['bab'=>1,'page'=>2]) }}" class="btn btn-success">Download Materi</a>
</div>