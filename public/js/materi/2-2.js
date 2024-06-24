let keyAnswer = {
    // Cek Jawaban 1
    'isian-1' : ['19000','19.000'], 'isian-2' : '-',
    'isian-3' : '2y',
    
    // Cek Jawaban 2
    'isian-4' : ['19000','19.000'],
    'isian-5' : '-', 'isian-6' : '2y',
    'isian-7' : ['19000-2y','19.000-2y'], 'isian-8' : ['38000-4y','38.000-4y'],
    'isian-9' : ['38000-3y','38.000-3y'], 'isian-10' : '-3y',
    'isian-11' : ['-21000','-21.000'], 'isian-12' : ['7000','7.000'],
    
    // Cek Jawaban 3
    'isian-13' : ['7000', '7.000'], 'isian-14' : ['10000', '10.000'],
    'isian-15' : ['5000', '5.000'], 
    
    // Cek Jawbaan 4
    'isian-16' : ['5000', '5.000'],
    'isian-17' : ['7000', '7.000'], 'isian-18' : ['10000', '10.000'],
    'isian-19' : '+', 'isian-20' : ['7000', '7.000'],
    'isian-21' : ['5000', '5.000'], 'isian-22' : '+',
    'isian-23' : ['14000', '14.000']
}
let soalSelesai = []
let cekJawaban1 = document.getElementById('cekJawaban1');
let cekJawaban2 = document.getElementById('cekJawaban2');
let cekJawaban3 = document.getElementById('cekJawaban3');
let cekJawaban4 = document.getElementById('cekJawaban4');

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

cekJawaban1.addEventListener('click',()=>{cekJawaban(1,1,3)});
cekJawaban2.addEventListener('click',()=>{cekJawaban(2,4,12)});
cekJawaban3.addEventListener('click',()=>{cekJawaban(3,13,15)});
cekJawaban4.addEventListener('click',()=>{cekJawaban(4,16,23)});

btnSelanjutnya.addEventListener('click', (e) => {
    if (soalSelesai.sort().join() != "1,2,3,4") {
        e.preventDefault()
        Swal.fire({
            title: "Anda Belum Dapat Berpindah ke Halaman Berikutnya",
            text: 'Jawab semua soal dengan benar untuk dapat berpindah ke halaman selanjutnya',
            icon : 'error'
        })
    }
})
// ------------------ FUNCTION ----------------------
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
    if (soalSelesai.sort().join() == "1,2,3,4") {
        $.ajax({
            type: 'post',
            url: '/materi/update-progress',
            data: {
                _token: token,
                bab: bab,
                page: page,
                progress: '0',
            },
            success: function(response){
                if(response.status == 'updated'){
                    $('#lock-2-3').addClass('d-none');
                    $('#btnDownload').removeClass('d-none')
                    btnSelanjutnya.setAttribute('data-bs-toggle','modal')
                    btnSelanjutnya.setAttribute('data-bs-target','#kuisModal')
                }
            },
            error: function(reject){
                console.log(reject)
            }
        })
    }
}