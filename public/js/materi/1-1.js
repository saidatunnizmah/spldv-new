let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]
let sudahNontonCheck = document.getElementById('sudahNontonCheck');
// let timer = 60000; //Dalam Milidetik
let timer = 10000; //Dalam Milidetik

btnSelanjutnya.addEventListener('click', (e)=>{
    if (!sudahNontonCheck.checked) {
        e.preventDefault()
        Swal.fire({
            title: 'Anda Belum Dapat Berpindah ke Halaman Berikutnya',
            text: 'Jalankan dan selesaikan dialog di atas! Kemudian conteng bahwa anda sudah menonton',
            icon: 'error'
        })
    }
})

setTimeout(()=>{
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
            sudahNontonCheck.removeAttribute('disabled');
            $('#lock-1-2').addClass('d-none')
        },
        error: function(reject){
            console.log(reject)
        }
    })
},timer)