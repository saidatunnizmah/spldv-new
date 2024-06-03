console.log($('#soal1_1').val());
$('#soal1_1').on('change', ()=>{
    userAnswer['soal1_1'] = $('#soal1_1').val()
    
    if ($('#soal1_1').val() == 'x') {
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
        
        if ($('#soal1_13').val()== 1) {
            $('#persamaan-1a').html('\\(4x+5\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(20\\)')
            
            $('#persamaan-2a').html('\\(4x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(20\\)')
            
            $('#persamaan-3a').html('\\(4x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2x+3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(4\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }
    }else{
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')

        if ($('#soal1_13').val()== 1) {
            $('#persamaan-1a').html('\\(4\\)')
            $('#persamaan-1b').html('\\(+5y\\)')
            $('#konstanta-1').html('\\(20\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+5y\\)')
            $('#konstanta-2').html('\\(20\\)')
            
            $('#persamaan-3a').html('\\(5y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+3y')
            $('#konstanta-1').html('\\(4\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+3y\\)')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})

$('#soal1_13').on('change', ()=>{
    userAnswer['soal1_13'] = $('#soal1_13').val()

    if ($('#soal1_13').val()==1) {
        if ($('#soal1_1').val() == 'x') {
            $('#persamaan-1a').html('\\(4x+5\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(20\\)')
            
            $('#persamaan-2a').html('\\(4x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(20\\)')
            
            $('#persamaan-3a').html('\\(4x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(4\\)')
            $('#persamaan-1b').html('\\(+5y\\)')
            $('#konstanta-1').html('\\(20\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+5y\\)')
            $('#konstanta-2').html('\\(20\\)')
            
            $('#persamaan-3a').html('\\(5y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }else{
        if ($('#soal1_1').val() == 'x') {
            $('#persamaan-1a').html('\\(2x+3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(4\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+3y')
            $('#konstanta-1').html('\\(4\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+3y\\)')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})