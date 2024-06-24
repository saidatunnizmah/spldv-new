let dragFromContainer = document.getElementById('drag-from-container');
let dragToContainer = document.getElementById('drag-to-container')
let cekJawaban1 = document.getElementById('cekJawaban1');
let cekJawaban2 = document.getElementById('cekJawaban2');
let cekJawaban3 = document.getElementById('cekJawaban3');

let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

let soalSelesai = [];
let keyAnswer = {
    'isian-1' : 1,
    'isian-2' : ['17000','17.000'],
    'isian-3' : 1,
    'isian-4' : 2,

    'isian-5' : '2',
    'isian-6' : 'x',
    'isian-7' : '1',
    'isian-8' : 'y',
    'isian-9' : ['17000','17.000'],
    'isian-10' : '1',
    'isian-11' : 'x',
    'isian-12' : '2',
    'isian-13' : 'y',
    'isian-14' : ['19000','19.000'],

    'isian-15' : '2x',
    'isian-16' : 'y',
    'isian-17' : ['17000','17.000'],
    'isian-18' : 'x',
    'isian-19' : '2y',
    'isian-20' : ['19000','19.000'],
}
let keyDragDrop = {
    1 : 'Banyak Bungkus',
    2 : 'Dikali',
    3 : ['Harga Kasturi', 'Harga Pakasam'],
    4 : 'Ditambah',
    5 : 'Banyak Bungkus',
    6 : 'Dikali',
    7 : ['Harga Pakasam','Harga Kasturi'],
    8 : 'Sama Dengan',
    9 : 'Total Harga' 
}
let userDragDrop = {
    1 : '',
    2 : '',
    3 : '',
    4 : '',
    5 : '',
    6 : '',
    7 : '',
    8 : '',
    9 : '' 
}

cekJawaban1.addEventListener('click',()=>{
    let benar = 0;
    let salah = 0;
    
    for (let i = 1; i <= 4; i++) {
        let id = 'isian-'+i;
        let isian = document.getElementById(id);
        let isianFeedback = document.getElementById(id+'-feedback');

        if (keyAnswer[id] instanceof Array) {
            if (keyAnswer[id].includes(isian.value)) {
                benar++;
                isian.setAttribute('disabled',true);
                isianFeedback.innerHTML = `<small class="text-success">Jawaban anda benar!</small>`
            }else{
                salah++;
                isianFeedback.innerHTML= `<small class="text-danger">Jawaban anda salah!</small>`
            }  
        }else{
            if (isian.value == keyAnswer[id]) {
                benar++;
                isian.setAttribute('disabled',true);
                isianFeedback.innerHTML = `<small class="text-success">Jawaban anda benar!</small>`
            }else{
                salah++;
                isianFeedback.innerHTML= `<small class="text-danger">Jawaban anda salah!</small>`
            }        
        }
    }

    cekJawabanIsianAlert(1,benar,salah)
})

cekJawaban2.addEventListener('click',()=>{
    let benar = 1;
    let jawabanSalah = []
    for (let i = 1; i <= 9; i++) {
        if (Array.isArray(keyDragDrop[i])) {
            if (!keyDragDrop[i].includes(userDragDrop[i])) {
                benar = 0
                jawabanSalah.push(i)
            }
        }else{
            if (userDragDrop[i] != keyDragDrop[i]) {
                benar = 0
                jawabanSalah.push(i)
            }
        }
    }

    let feedback = document.querySelectorAll('#drag-to-container .feedback')
    let draggableItem = document.querySelectorAll('.draggable-item')
    if (benar == 1) {
        Swal.fire({
            title: "Jawaban Anda Benar!",
            icon: "success"
        });
        soalSelesai.push(2)
        cekJawaban2.setAttribute('disabled',true);

        draggableItem.forEach(item => {
            item.removeEventListener('click',backToDragFromContainer);
        })
        feedback.forEach(item => {
            item.style.display = 'none'
        })
    }else{
        Swal.fire({
            title: "Jawaban Anda Belum Tepat!",
            icon: "error"
        });

        jawabanSalah.forEach(index => {
            feedback[index-1].style.display = 'block'
        });
    }
})

cekJawaban3.addEventListener('click',()=>{
    let benar = 0;
    let salah = 0;
    
    for (let i = 5; i <= 20; i++) {
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
    cekJawabanIsianAlert(3,benar,salah)
})

btnSelanjutnya.addEventListener('click', () => {
    if (soalSelesai.sort().join() != '1,2,3' || soalSelesai == []) {
        Swal.fire({
            title: "Anda Belum Dapat Berpindah ke Halaman Berikutnya",
            icon: "error",
            text: "Anda harus menjawab dengan benar semua soal!"
        })
    }
})



//------------------- FUNCTION --------------------
function allowDrop(ev) {
    ev.preventDefault();
}
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    if (ev.target.className == 'drag-to-target') {
        var data = ev.dataTransfer.getData("text");
        var item = document.getElementById(data);
        var targetOrder = ev.target.getAttribute('data-order')
        ev.target.innerHTML = ""
        ev.target.appendChild(item);
        item.addEventListener('click', backToDragFromContainer);
        item.setAttribute('draggable', false);
        userDragDrop[targetOrder] = item.innerText
    }
}

function backToDragFromContainer(ev){
    var parentId = ev.target.parentElement.id
    var order = ev.target.parentElement.dataset.order
    var item = document.getElementById(ev.target.id)
    dragFromContainer.appendChild(item)
    item.setAttribute('draggable',true)
    item.removeEventListener('click',backToDragFromContainer)
    document.getElementById(parentId).innerHTML = order;
    userDragDrop[order] = ''
}

function cekJawabanIsianAlert(soal,totalBenar,totalSalah) {
    let totalSoal = totalBenar + totalSalah;
    if (totalSalah==0 && totalBenar == totalSoal) {
        Swal.fire({
            title: "Jawaban Anda Benar!",
            icon: "success"
        });
        if (soal == 3) {
            console.log('soal 3');
            console.log($('#persamaanUtuhPalui'));
            $('#persamaanUtuhPalui').removeClass('d-none')
        }else{
            console.log('bukan soal 3');
        }
        soalSelesai.push(soal)
        document.getElementById('cekJawaban'+soal).setAttribute('disabled',true);
        cekSoalSelesai()
    }else if(totalSalah == 0 && totalBenar == 0){
        Swal.fire({
            title: "Anda Belum Menjawab!",
            icon: "error"
        });
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
                progress: '0',
            },
            success: function(response){
                if(response.status == 'updated'){
                    $('#lock-1-3').addClass('d-none');
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
// data-bs-toggle="modal" data-bs-target="#kuisModal"