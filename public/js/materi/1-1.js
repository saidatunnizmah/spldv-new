btnSelanjutnya.setAttribute('disabled',true);
let urlSplitted = window.location.href.split('/')
let bab = urlSplitted[urlSplitted.length - 2]
let page = urlSplitted[urlSplitted.length - 1]

// let timer = 60000; //Dalam Milidetik
let timer = 10000; //Dalam Milidetik

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
            btnSelanjutnya.removeAttribute('disabled');
            $('#lock-1-2').addClass('d-none')
        },
        error: function(reject){
            console.log(reject)
        }
    })
},timer)