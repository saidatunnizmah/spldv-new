Tentukan penyelesaian sistem persamaan linear dua variabel di bawah ini dengan metode eliminasi:
<ul>
    <li>
        \(3x+2y=22\)  <span class="ms-3">(1)</span>
    </li>
    <li>
        \(5x-y=28\) <span class="ms-3">(2)</span>
    </li>
</ul>

<div class="d-flex align-items-center gap-2 mb-2">
    Variabel yang akan dieliminasi
    <select name="select1" id="soal3_1">
        <option value="x" selected="selected">\(x\)</option>
        <option value="y">\(y\)</option>
    </select>
</div>

<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (1) dikali
    <math-field class="field-answer" style="width: 5em" id="soal3_2"></math-field>
</div>
<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (2) dikali
    <math-field class="field-answer" style="width: 5em" id="soal3_3"></math-field>
</div>

<table>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" id="soal3_4"></math-field>
                \(+\)
                <math-field class="field-answer" id="soal3_5"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_6"></math-field>
        </td>
        <td class="ps-2">Hasil Persamaan (1)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" id="soal3_7"></math-field>
                \(+\)
                <math-field class="field-answer" id="soal3_8"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_9"></math-field>
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
                <math-field class="field-answer" id="soal3_10"></math-field>
                <math-field class="variabel-disabled-y" style="width: 3em" value='y' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_11"></math-field>
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
            <math-field class="field-answer" id="soal3_12"></math-field>
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
    <math-field class="field-answer" style="width: 5em" id="soal3_13"></math-field>
</div>
<div class="d-flex align-items-center gap-2 mb-2">
    Persamaan (2) dikali
    <math-field class="field-answer" style="width: 5em" id="soal3_14"></math-field>
</div>

<table>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" id="soal3_15"></math-field>
                \(+\)
                <math-field class="field-answer" id="soal3_16"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_17"></math-field>
        </td>
        <td class="ps-2">Hasil Persamaan (1)</td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center gap-2">
                <math-field class="field-answer" id="soal3_18"></math-field>
                \(+\)
                <math-field class="field-answer" id="soal3_19"></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_20"></math-field>
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
                <math-field class="field-answer" id="soal3_21"></math-field>
                <math-field class="variabel-disabled-x" style="width: 3em" value='x' disabled></math-field>
            </div>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_22"></math-field>
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
            <math-field class="field-answer" id="soal3_23"></math-field>
        </td>
        <td></td>
    </tr>
</table>

{{-- <div class="my-2">
    <div class="d-flex align-items-center gap-2">
        Substitusi 
        <math-field class="variabel-disabled-y" style="width: 3em" value='y' disabled></math-field>
        ke persamaan
        <select name="select" id="soal3_13">
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
            <math-field class="field-answer" style="width: 5em" id="soal3_14"></math-field>
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
            <math-field class="field-answer" style="width: 5em" id="soal3_15"></math-field>
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
            <math-field class="field-answer" id="soal3_16"></math-field>
        </td>
    </tr>
    <tr>
        <td class="text-end">
            <span id="persamaan-4a">\(x\)</span>
        </td>
        <td class="px-2">\(=\)</td>
        <td>
            <math-field class="field-answer" id="soal3_17"></math-field>
        </td>
    </tr>
</table> --}}

<div class="my-2">
    <div class="d-flex align-items-center gap-2">
        Jadi, nilai variabel \(x=\)
        <math-field class="field-answer" style="width: 5em" id="soal3_24"></math-field>
        dan nilai variabel \(y=\)
        <math-field class="field-answer" style="width: 5em" id="soal3_25"></math-field>
    </div>
</div>

