console.log($('#soal3_1').val());
$('#soal3_1').on('change', ()=>{
    userAnswer['soal3_1'] = $('#soal3_1').val()

    if ($('#soal3_1').val() == 'x') {
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
        
        if ($('#soal3_13').val()== 1) {
            $('#persamaan-1a').html('\\(3x+2\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(8\\)')
            
            $('#persamaan-2a').html('\\(3x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(8\\)')
            
            $('#persamaan-3a').html('\\(3x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2x+3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(12\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(12\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }
    }else{
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')

        if ($('#soal3_13').val()== 1) {
            $('#persamaan-1a').html('\\(3\\)')
            $('#persamaan-1b').html('\\(+2y\\)')
            $('#konstanta-1').html('\\(8\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+2y\\)')
            $('#konstanta-2').html('\\(8\\)')
            
            $('#persamaan-3a').html('\\(2y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+3y')
            $('#konstanta-1').html('\\(12\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+3y\\)')
            $('#konstanta-2').html('\\(12\\)')
            
            $('#persamaan-3a').html('\\(3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})

$('#soal3_13').on('change', ()=>{
    userAnswer['soal3_13'] = $('#soal3_13').val()

    if ($('#soal3_13').val()==1) {
        if ($('#soal3_1').val() == 'x') {
            $('#persamaan-1a').html('\\(3x+2\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(8\\)')
            
            $('#persamaan-2a').html('\\(3x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(8\\)')
            
            $('#persamaan-3a').html('\\(3x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(3\\)')
            $('#persamaan-1b').html('\\(+2y\\)')
            $('#konstanta-1').html('\\(8\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+2y\\)')
            $('#konstanta-2').html('\\(8\\)')
            
            $('#persamaan-3a').html('\\(2y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }else{
        if ($('#soal3_1').val() == 'x') {
            $('#persamaan-1a').html('\\(2x+3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(12\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(12\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+3y')
            $('#konstanta-1').html('\\(12\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+3y\\)')
            $('#konstanta-2').html('\\(12\\)')
            
            $('#persamaan-3a').html('\\(3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})