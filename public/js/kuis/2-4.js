$('#soal4_1').on('change',()=>{
    userAnswer['soal4_1'] = $('#soal4_1').val()

    if ($('#soal4_1').val() == 'x') {
        $('#eliminasi-2').val('y')
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
    }else{
        $('#eliminasi-2').val('x')
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')
    }
})