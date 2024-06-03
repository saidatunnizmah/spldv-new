let soalSelesai = []
let cekJawaban1 = document.getElementById('cekJawaban1');
let cekJawaban2 = document.getElementById('cekJawaban2');
let cekJawaban3 = document.getElementById('cekJawaban3');

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

let keyAnswer = {
    // Cek Jawbaan 1
    'isian-1' : '2x',
    'isian-2' : '2y',
    'isian-3' : '760',
    'isian-4' : '4x',
    'isian-5' : '2y',
    'isian-6' : '920',

    // Cek Jawbaan 2
    'isian-7' : 'x', 'isian-8': '',
    'isian-9' : '', 'isian-10': '',
    'isian-11' : '', 'isian-12': '',
    'isian-13' : '', 'isian-14': '',
    'isian-15' : '', 'isian-16': '',
    'isian-17' : 'y', 'isian-18': '',
    'isian-19' : 'y', 'isian-20': '',

    // Cek Jawaban 3
    'isian-21' : 'y', 'isian-22': '1',
    'isian-23' : 'x', 'isian-24': '300',
    'isian-25' : '600', 'isian-26': '160',
    'isian-27' : '80'
}

cekJawaban1.addEventListener('click',()=>{cekJawaban(1,1,6);});
cekJawaban2.addEventListener('click',()=>{cekJawaban(2,7,20);});
cekJawaban3.addEventListener('click',()=>{cekJawaban(3,21,27);});


$('#isian-7').on('change', function () {
    keyAnswer['isian-7'] = this.value;
    if (this.value == 'x') {
        $('#isian-17, #isian-19, #isian-21').val('y')
        $('#isian-23').val('x')
        keyAnswer['isian-17'] = 'y';
        keyAnswer['isian-19'] = 'y';
        keyAnswer['isian-21'] = 'y';
        keyAnswer['isian-23'] = 'x';

        if (keyAnswer['isian-22']==1) {
            $('#persamaan-a1').html(`\\(2x + 2\\)`)
            $('#persamaan-b1').html('')
            $('#konstanta-a1').html('\\(760\\)')
            keyAnswer['isian-24'] = '300'

            $('#persamaan-a2').html(`2x +`)
            $('#persamaan-b2').html('')
            $('#konstanta-a2').html('\\(760\\)')
            keyAnswer['isian-25'] = '600'

            $('#persamaan-a3').html(`\\(2x\\)`)
            keyAnswer['isian-26'] = '160'

            $('#persamaan-a4').html(`\\(x\\)`)
            keyAnswer['isian-27'] = '80'
        }else{
            $('#persamaan-a1').html(`\\(4x + 2\\)`)
            $('#persamaan-b1').html('')
            $('#konstanta-a1').html('\\(920\\)')
            keyAnswer['isian-24'] = '300'
            
            $('#persamaan-a2').html(`\\(4x +\\)`)
            $('#persamaan-b2').html('')
            $('#konstanta-a2').html('\\(920\\)')
            keyAnswer['isian-25'] = '600'
            
            $('#persamaan-a4').html(`\\(4x\\)`)
            keyAnswer['isian-26'] = '320'
            
            $('#persamaan-a4').html(`\\(x\\)`)
            keyAnswer['isian-27'] = '80'
        }
        
    }else{
        $('#isian-17, #isian-19, #isian-21').val('x')
        $('#isian-23').val('y')

        keyAnswer['isian-17'] = 'x';
        keyAnswer['isian-19'] = 'x';
        keyAnswer['isian-21'] = 'x';
        keyAnswer['isian-23'] = 'y';

        if (keyAnswer['isian-22']==1) {
            $('#persamaan-a1').html('\\(2\\)')
            $('#persamaan-b1').html('\\( + 2y \\)')
            $('#konstanta-a1').html('\\(760\\)')
            keyAnswer['isian-24'] = '80'
            
            $('#persamaan-a2').html('')
            $('#persamaan-b2').html('\\( + 2y \\)')
            $('#konstanta-a2').html('\\(760\\)')
            keyAnswer['isian-25'] = '160'
            
            $('#persamaan-a3').html(`\\( 2y \\)`)
            keyAnswer['isian-26'] = '600'

            $('#persamaan-a4').html(`\\( y \\)`)
            keyAnswer['isian-27'] = '300'
        }else{
            $('#persamaan-a1').html('\\( 4 \\)')
            $('#persamaan-b1').html('\\( + 2y \\)')
            $('#konstanta-a1').html('\\(920\\)')
            keyAnswer['isian-24'] = '80'
            
            $('#persamaan-a2').html('')
            $('#persamaan-b2').html('\\( + 2y \\)')
            $('#konstanta-a2').html('\\(920\\)')
            keyAnswer['isian-25'] = '320'
            
            $('#persamaan-a3').html(`\\( 2y \\)`)
            keyAnswer['isian-26'] = '600'

            $('#persamaan-a4').html(`\\( y \\)`)
            keyAnswer['isian-27'] = '300'
        }
    }

    MathJax.typeset();
});

$('#isian-8').on('change', function(){  
    let answer = this.value;
    let koefisienX = 2*answer;
    let koefisienY = 2*answer;
    let konstanta = 760*answer;

    keyAnswer['isian-8'] = answer
    keyAnswer['isian-10'] = koefisienX + 'x'
    keyAnswer['isian-11'] = koefisienY + 'y'
    keyAnswer['isian-12'] = konstanta

    if (keyAnswer['isian-7']=='x'){
        if (keyAnswer['isian-9']!='') {
            let koefisienY2 = parseInt(keyAnswer['isian-14'].split('y')[0])
            keyAnswer['isian-16'] = koefisienY - koefisienY2
            keyAnswer['isian-18'] = parseInt(keyAnswer['isian-12']) - parseInt(keyAnswer['isian-15'])
            keyAnswer['isian-20'] = keyAnswer['isian-18']/keyAnswer['isian-16']
        }
    }else{
        if (keyAnswer['isian-9']!='') {
            let koefisienX2 = parseInt(keyAnswer['isian-13'].split('x')[0])
            keyAnswer['isian-16'] = koefisienX - koefisienX2
            keyAnswer['isian-18'] = parseInt(keyAnswer['isian-12']) - parseInt(keyAnswer['isian-15'])
            keyAnswer['isian-20'] = keyAnswer['isian-18']/keyAnswer['isian-16']
        }
    }
});

$('#isian-9').on('change', function(){  
    let answer = this.value;
    let koefisienX = 4*answer;
    let koefisienY = 2*answer;
    let konstanta = 920*answer;

    keyAnswer['isian-9'] = answer
    keyAnswer['isian-13'] = koefisienX + 'x'
    keyAnswer['isian-14'] = koefisienY + 'y'
    keyAnswer['isian-15'] = konstanta

    if (keyAnswer['isian-7']=='x'){
        if (keyAnswer['isian-8']!='') {
            let koefisienY1 = parseInt(keyAnswer['isian-11'].split('y')[0])
            keyAnswer['isian-16'] = koefisienY1 - koefisienY
            keyAnswer['isian-18'] = parseInt(keyAnswer['isian-12']) - parseInt(keyAnswer['isian-15'])
            keyAnswer['isian-20'] = keyAnswer['isian-18']/keyAnswer['isian-16']
        }
    }else{
        if (keyAnswer['isian-8']!='') {
            let koefisienX1 = parseInt(keyAnswer['isian-10'].split('x')[0])
            keyAnswer['isian-16'] = koefisienX1 - koefisienX
            keyAnswer['isian-18'] = parseInt(keyAnswer['isian-12']) - parseInt(keyAnswer['isian-15'])
            keyAnswer['isian-20'] = keyAnswer['isian-18']/keyAnswer['isian-16']
        }
    }
});

$('#isian-22').on('change', function(){
    keyAnswer['isian-22'] = this.value;
    if (this.value == 1) {
        if (keyAnswer['isian-7']=='x') {
            $('#persamaan-a1').html(`\\(2x + 2\\)`)
            $('#persamaan-b1').html('')
            $('#konstanta-a1').html('\\(760\\)')
            keyAnswer['isian-24'] = '300'

            $('#persamaan-a2').html(`2x +`)
            $('#persamaan-b2').html('')
            $('#konstanta-a2').html('\\(760\\)')
            keyAnswer['isian-25'] = '600'

            $('#persamaan-a3').html(`\\(2x\\)`)
            keyAnswer['isian-26'] = '160'

            $('#persamaan-a4').html(`\\(x\\)`)
            keyAnswer['isian-27'] = '80'
        }else{
            $('#persamaan-a1').html('\\(2\\)')
            $('#persamaan-b1').html('+2y')
            $('#konstanta-a1').html('\\(760\\)')
            keyAnswer['isian-24'] = '80'

            $('#persamaan-a2').html('')
            $('#persamaan-b2').html('+2y')
            $('#konstanta-a2').html('\\(760\\)')
            keyAnswer['isian-25'] = '160'
            
            $('#persamaan-a3').html(`\\( 2y \\)`)
            keyAnswer['isian-26'] = '600'
            
            $('#persamaan-a4').html(`\\( y \\)`)
            keyAnswer['isian-27'] = '300'
        }
    }else{
        if (keyAnswer['isian-7']=='x') {
            $('#persamaan-a1').html(`\\(4x + 2\\)`)
            $('#persamaan-b1').html('')
            $('#konstanta-a1').html('\\(920\\)')
            keyAnswer['isian-24'] = '300'
            
            $('#persamaan-a2').html(`\\(4x +\\)`)
            $('#persamaan-b2').html('')
            $('#konstanta-a2').html('\\(920\\)')
            keyAnswer['isian-25'] = '600'
            
            $('#persamaan-a3').html(`\\(4x\\)`)
            keyAnswer['isian-26'] = '320'

            $('#persamaan-a4').html(`\\(x\\)`)
            keyAnswer['isian-27'] = '80'
        }else{
            $('#persamaan-a1').html('\\( 4 \\)')
            $('#persamaan-b1').html('\\( + 2y \\)')
            $('#konstanta-a1').html('\\(920\\)')
            keyAnswer['isian-24'] = '80'
            
            $('#persamaan-a2').html('')
            $('#persamaan-b2').html('\\( + 2y \\)')
            $('#konstanta-a2').html('\\(920\\)')
            keyAnswer['isian-24'] = '320'
            
            $('#persamaan-a3').html(`\\( 2y \\)`)
            keyAnswer['isian-24'] = '600'

            $('#persamaan-a4').html(`\\( y \\)`)
            keyAnswer['isian-24'] = '300'
        }
    }

    MathJax.typeset();
})

// --------- FUNCTION -----------
function cekJawaban(urutanCek,isianPertama, isianTerakhir){
    let benar = 0;
    let salah = 0;
    
    for (let i = isianPertama; i <= isianTerakhir; i++) {
        let id = 'isian-'+i;
        let isian = document.getElementById(id);

        if (keyAnswer[id] instanceof Array) {
            if (keyAnswer[id].includes(isian.value)) {
                benar++;
                isian.setAttribute('disabled',true);
                isian.classList.add('benar');
                isian.classList.remove('salah');
            }else{
                salah++;
                isian.classList.add('salah');
                isian.classList.remove('benar');
            }  
        }else{
            if (isian.value == keyAnswer[id]) {
                benar++;
                isian.setAttribute('disabled',true);
                isian.classList.add('benar');
                isian.classList.remove('salah');
            }else{
                salah++;
                isian.classList.add('salah');
                isian.classList.remove('benar');
            }        
        }      
    }
    cekJawabanIsianAlert(urutanCek,benar,salah)
}

function cekJawabanIsianAlert(soal,totalBenar,totalSalah) {
    let totalSoal = totalBenar + totalSalah;
    if (totalSalah==0 && totalBenar == totalSoal) {
        Swal.fire({
            title: "Jawaban Anda Benar!",
            icon: "success"
        });
        soalSelesai.push(soal)
        document.getElementById('cekJawaban'+soal).setAttribute('disabled',true);
        cekSoalSelesai()
    }else{
        Swal.fire({
            title: "Jawaban Anda Belum Tepat!",
            icon: "error"
        });
    }
}
function cekSoalSelesai() {
    if (soalSelesai.sort().join() == "1,2,3") {
        $.ajax({
            type: 'post',
            url: '/materi/update-progress',
            data: {
                _token: token,
                bab: bab,
                page: page,
                progress: '100',
            },
            success: function(response){
                if(response.status == 'updated'){
                    $('#lock-3-1').addClass('d-none');
                    btnSelanjutnya.removeAttribute('disabled');
                }
            },
            error: function(reject){
                console.log(reject)
            }
        })
    }
}