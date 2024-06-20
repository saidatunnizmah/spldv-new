let keyAnswer=[1,3,4];
let cekJawabanBtn = document.getElementById('cekJawaban1');
let checkboxes = document.getElementsByClassName('form-check-input');
let checkFeedback = document.getElementsByClassName('feedback');
let cardKesimpulan = document.getElementById('summary-01');

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

let pindahHalaman = 0

btnSelanjutnya.addEventListener('click', (e) => {
    if (pindahHalaman == 0) {
        e.preventDefault()
        Swal.fire({
            title: 'Anda Belum Dapat Berpindah ke Halaman Berikutnya',
            text : 'Jawab soal dengan benar untuk bisa lanjut ke halaman berikutnya',
            icon: 'error'
        })
    }
})

cekJawabanBtn.addEventListener('click',()=>{
    let salah = 0;
    let benar = 0;
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked == true) {
            if (keyAnswer.includes(parseInt(checkboxes[i].value))) {
                checkboxes[i].setAttribute('disabled',true)
                checkFeedback[i].innerHTML = `<i class="bi bi-check"></i>`
                checkFeedback[i].classList.add('benar'); 
                benar++;
            }else{
                checkFeedback[i].innerHTML = `<i class="bi bi-x"></i>`
                checkFeedback[i].classList.add('salah');
                salah++;
            }
        }  
    }

    if (salah==0 && benar == 3) {
        Swal.fire({
            title: "Jawaban Anda Benar!",
            icon: "success"
        }).then(()=>{
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
                        if(response.status == 'updated' || response.status == 'no-change'){
                            $('#lock-1').addClass('d-none');
                            pindahHalaman = 1
                            cardKesimpulan.classList.remove('d-none');
                        }
                    },
                    error: function(reject){
                        console.log(reject)
                    }
            })
        });
    }else if(salah==0 && benar == 0){
        Swal.fire({
            title: "Anda Belum Menjawab!",
            icon: "error"
        });
    }else{
        Swal.fire({
            title: "Jawaban anda belum tepat!",
            icon: "error"
        });
    }
})