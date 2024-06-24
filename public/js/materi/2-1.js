let keyAnswer = {
    // CekJawaban 1
    'isian-1' : '2x', 'isian-2' : ['1y','y'],
    'isian-3' : ['17000','17.000'], 'isian-4' : ['x','1x'],
    'isian-5' : ['2y'], 'isian-6' : ['19000','19.000'],

    // Cek Jawban 2
    'isian-7' : '2', 'isian-8' : '1',
    'isian-9' : '1', 'isian-10' : '2',
    'isian-11' : '2x', 'isian-12' : 'y',
    'isian-13' : ['17000,17.000'], 
    'isian-14' : '2x', 'isian-15' : '4y',
    'isian-16' : ['38000','38.000'],
    
    // Cek Jawaban 3
    'isian-17' : '2x', 'isian-18' : 'y',
    'isian-19' : ['17000','17.000'], 
    'isian-20' : '2x', 'isian-21' : '4y',
    'isian-22' : ['38000','38.000'],
    'isian-23' : '0', 'isian-24' : '-3',
    'isian-25' : ['-21000','-21.000'], 'isian-26' : ['7000','7.000'],

    // Cek Jawbana 4
    'isian-27' : '1', 'isian-28' : '2',
    'isian-29' : '2', 'isian-30' : '1',
    'isian-31' : '4x', 'isian-32' : '2y',
    'isian-33' : ['34000','34.000'], 
    'isian-34' : 'x', 'isian-35' : '2y', 
    'isian-36' : ['19000','19.000'],
    
    // Cek Jawbaan 5
    'isian-37' : '4x', 'isian-38' : '2y',
    'isian-39' : ['34000','34.000'], 
    'isian-40' : 'x', 'isian-41' : '2y', 
    'isian-42' : ['19000','19.000'],
    'isian-43' : '3', 'isian-44' : '0',
    'isian-45' : ['15000','15.000'], 'isian-46' : ['5000','5.000'],

    // Cek Jawaban 6
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

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

cekJawaban1.addEventListener('click',()=>{cekJawaban(1,1,6)});
cekJawaban2.addEventListener('click',()=>{cekJawaban(2,7,16)});
cekJawaban3.addEventListener('click',()=>{cekJawaban(3,17,26)});
cekJawaban4.addEventListener('click',()=>{cekJawaban(4,27,36)});
cekJawaban5.addEventListener('click',()=>{cekJawaban(5,37,46)});
cekJawaban6.addEventListener('click',()=>{cekJawaban(6,47,54)});

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
                    $('#btnDownload').removeClass('d-none')
                    btnSelanjutnya.removeAttribute('disabled');
                }
            },
            error: function(reject){
                console.log(reject)
            }
        })
    }
}