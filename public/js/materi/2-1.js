let keyAnswer = {
    // CekJawaban 1
    'isian-1' : '2x', 'isian-2' : ['1y','y'],
    'isian-3' : ['17000','17.000'], 'isian-4' : ['x','1x'],
    'isian-5' : ['2y'], 'isian-6' : ['19000','19.000'],

    // Cek Jawban 2
    'isian-7' : '2', 'isian-8' : '1',
    'isian-9' : '2x', 'isian-10' : 'y',
    'isian-11' : ['17000','17.000'], 'isian-12' : 'x',
    'isian-13' : '2y', 'isian-14' : ['19000','19.000'],

    // Cek jawban 3
    'isian-15' : '2x', 'isian-16' : '4y',
    'isian-17' : ['38000','38.000'],
    
    // Cek Jawaban 4
    'isian-18' : '2x',
    'isian-19' : 'y', 'isian-20' : ['17000','17.000'],
    'isian-21' : '2x', 'isian-22' : '4y',
    'isian-23' : ['38000','38.000'], 'isian-24' : '-3',
    'isian-25' : ['-21000','-21.000'], 'isian-26' : ['7000','7.000'],

    // Cek Jawbana 5
    'isian-27' : '1', 'isian-28' : '2',
    'isian-29' : '2x', 'isian-30' : 'y',
    'isian-31' : ['17000','17.000'], 'isian-32' : 'x',
    'isian-33' : '2y', 'isian-34' : ['19000','19.000'],

    // Cek Jawbaan 6
    'isian-35' : '4x', 'isian-36' : '2y',
    'isian-37' : ['34000','34.000'],
    
    // Cek Jawbaan 7
    'isian-38' : 'x',
    'isian-39' : '2y', 'isian-40' : ['19000','19.000'],
    'isian-41' : '4x', 'isian-42' : '2y',
    'isian-43' : ['34000','34.000'], 'isian-44' : '-3',
    'isian-45' : ['-15000','-15.000'], 'isian-46' : ['5000','5.000'],

    // Cek Jawaban 8
    'isian-47' : ['5000','5.000'], 'isian-48' : ['7000','7.000'],
    'isian-49' : ['10000','10.000'], 'isian-50' : '+',
    'isian-51' : ['7000','7.000'], 'isian-52' : ['5000','5.000'],
    'isian-53' : '+', 'isian-54' : ['14000','14.000'],
}
let soalSelesai = []
let cekJawaban1 = document.getElementById('cekJawaban1');
let cekJawaban2 = document.getElementById('cekJawaban2');
let cekJawaban3 = document.getElementById('cekJawaban3');
let cekJawaban4 = document.getElementById('cekJawaban4');
let cekJawaban5 = document.getElementById('cekJawaban5');
let cekJawaban6 = document.getElementById('cekJawaban6');
let cekJawaban7 = document.getElementById('cekJawaban7');
let cekJawaban8 = document.getElementById('cekJawaban8');

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

cekJawaban1.addEventListener('click',()=>{cekJawaban(1,1,6)});
cekJawaban2.addEventListener('click',()=>{cekJawaban(2,7,14)});
cekJawaban3.addEventListener('click',()=>{cekJawaban(3,15,17)});
cekJawaban4.addEventListener('click',()=>{cekJawaban(4,18,26)});
cekJawaban5.addEventListener('click',()=>{cekJawaban(5,27,34)});
cekJawaban6.addEventListener('click',()=>{cekJawaban(6,35,37)});
cekJawaban7.addEventListener('click',()=>{cekJawaban(7,38,46)});
cekJawaban8.addEventListener('click',()=>{cekJawaban(8,47,54)});

btnSelanjutnya.addEventListener('click', (e)=> {
    if (soalSelesai.sort().join() != "1,2,3,4,5,6,7,8") {
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
    if (soalSelesai.sort().join() == "1,2,3,4,5,6,7,8") {
        $.ajax({
            type: 'post',
            url: '/materi/update-progress',
            data: {
                _token: token,
                bab: bab,
                page: page,
                progress: '50',
            },
            success: function(response){
                if(response.status == 'updated'){
                    $('#lock-2-2').addClass('d-none');
                    btnSelanjutnya.removeAttribute('disabled');
                }
            },
            error: function(reject){
                console.log(reject)
            }
        })
    }
}