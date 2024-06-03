if (soal <= 2) {
    $('#soal'+soal+'_7').on('change',()=>{
        userAnswer['soal'+soal+'_7'] = $('#soal'+soal+'_7').val()
    
        if ($('#soal'+soal+'_7').val() == 'x') {
            $('#eliminasi-2').val('y')
            $('.variabel-disabled-y').val('y')
            $('.variabel-disabled-x').val('x')
        }else{
            $('#eliminasi-2').val('x')
            $('.variabel-disabled-y').val('x')
            $('.variabel-disabled-x').val('y')
        }
    }) 
}

if (soal >= 3) {
    $('#soal'+soal+'_7').on('change',()=>{
        userAnswer['soal'+soal+'_7'] = $('#soal'+soal+'_7').val()

        if ($('#soal'+soal+'_7').val() == '1') {
            $('.variabel-disabled-2').val('2')
        }else{
            $('.variabel-disabled-2').val('1')
        }
    })
    $('#soal'+soal+'_8').on('change',()=>{
        userAnswer['soal'+soal+'_8'] = $('#soal'+soal+'_8').val()
    
        if ($('#soal'+soal+'_8').val() == 'x') {
            $('.variabel-disabled-y').val('y')
            $('.variabel-disabled-x').val('x')
        }else{
            $('.variabel-disabled-y').val('x')
            $('.variabel-disabled-x').val('y')
        }
    }) 
}