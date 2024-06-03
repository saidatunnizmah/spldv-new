$('#soal'+soal+'_1').on('change',()=>{
    userAnswer['soal'+soal+'_1'] = $('#soal'+soal+'_1').val()

    if ($('#soal'+soal+'_1').val() == 'x') {
        $('#eliminasi-2').val('y')
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
    }else{
        $('#eliminasi-2').val('x')
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')
    }
})