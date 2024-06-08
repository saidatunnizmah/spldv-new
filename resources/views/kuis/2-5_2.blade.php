Tentukan penyelesaian sistem persamaan linear dua variabel di bawah ini dengan metode eliminasi:
<ul>
    <li>
        \(6x+y=20\)  <span class="ms-3">(1)</span>
    </li>
    <li>
        \(7x+3y=27\) <span class="ms-3">(2)</span>
    </li>
</ul>

<div class="d-flex align-items-center gap-2 mb-2">
    Variabel yang akan dieliminasi
    <select name="select1" id="soal5_1">
        <option value="x" selected="selected">\(x\)</option>
        <option value="y">\(y\)</option>
    </select>
</div>

<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (1) dikali
    <math-field class="field-answer" style="width: 5em" id="soal5_2"></math-field>
</div>
<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (2) dikali
    <math-field class="field-answer" style="width: 5em" id="soal5_3"></math-field>
</div>

<table>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" style="width: 15em" id="soal5_4"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_5"></math-field>
        </td>
        <td class="ps-2">Hasil Persamaan (1)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" style="width: 15em" id="soal5_6"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_7"></math-field>
        </td>
        <td class="ps-2 w-100">Hasil Persamaan (2)</td>
    </tr>
    <tr>
        <td colspan="3">
            <hr class="border border-black opacity-100">
        </td>
        <td class="ps-2"> \(-\)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center justify-content-end gap-2">
                <math-field class="field-answer" id="soal5_8"></math-field>
                <math-field class="variabel-disabled-y" style="width: 3em" value='y' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_9"></math-field>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center justify-content-end gap-2">
                <math-field class="variabel-disabled-y" style="width: 3em" value='y' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_10"></math-field>
        </td>
        <td></td>
    </tr>
</table>

<div class="d-flex align-items-center gap-2 mb-2 mt-5">
    Variabel selanjutnya yang akan dieliminasi
    <math-field style="width: 3em" value="y" id="eliminasi-2" disabled></math-field>
</div>

<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (1) dikali
    <math-field class="field-answer" style="width: 5em" id="soal5_11"></math-field>
</div>
<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (2) dikali
    <math-field class="field-answer" style="width: 5em" id="soal5_12"></math-field>
</div>

<table>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" style="width: 15em" id="soal5_13"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_14"></math-field>
        </td>
        <td class="ps-2">Hasil Persamaan (1)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" style="width: 15em" id="soal5_15"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_16"></math-field>
        </td>
        <td class="ps-2 w-100">Hasil Persamaan (2)</td>
    </tr>
    <tr>
        <td colspan="3">
            <hr class="border border-black opacity-100">
        </td>
        <td class="ps-2"> \(-\)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center justify-content-end gap-2">
                <math-field class="field-answer" id="soal5_17"></math-field>
                <math-field class="variabel-disabled-x" style="width: 3em" value='x' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_18"></math-field>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center justify-content-end gap-2">
                <math-field class="variabel-disabled-x" style="width: 3em" value='x' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_19"></math-field>
        </td>
        <td></td>
    </tr>
</table>

{{-- <div class="my-2">
    <div class="d-flex align-items-center gap-2">
        Substitusi 
        <math-field class="variabel-disabled-y" style="width: 3em" value='y' disabled></math-field>
        ke persamaan
        <select name="select" id="soal5_13">
            <option value="1">\(1\)</option>
            <option value="2">\(2\)</option>
        </select>
        dan carilah nilai variabel 
        <math-field class="variabel-disabled-x" style="width: 3em" value='x' disabled></math-field>
    </div>
</div>
<table>
    <tr>
        <td class="d-flex align-items-center gap-2">
            <span id="persamaan-1a">\(4x+5\)</span>
            <math-field class="field-answer" style="width: 5em" id="soal5_14"></math-field>
            <span id="persamaan-1b"></span>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <span id="konstanta-1">\(20\)</span>
        </td>
    </tr>
    <tr>
        <td class="d-flex align-items-center justify-content-end gap-2">
            <span id="persamaan-2a">\(4x+\)</span>
            <math-field class="field-answer" style="width: 5em" id="soal5_15"></math-field>
            <span id="persamaan-2b"></span>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <span id="konstanta-2">\(20\)</span>
        </td>
    </tr>
    <tr>
        <td class="text-end">
            <span id="persamaan-3a">\(4x\)</span>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_16"></math-field>
        </td>
    </tr>
    <tr>
        <td class="text-end">
            <span id="persamaan-4a">\(x\)</span>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal5_17"></math-field>
        </td>
    </tr>
</table> --}}

<div class="my-2">
    <div class="d-flex align-items-center gap-2">
        Jadi, nilai variabel \(x=\)
        <math-field class="field-answer" style="width: 5em" id="soal5_20"></math-field>
        dan nilai variabel \(y=\)
        <math-field class="field-answer" style="width: 5em" id="soal5_21"></math-field>
    </div>
</div>

