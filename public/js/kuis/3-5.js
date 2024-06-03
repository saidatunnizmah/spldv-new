console.log($('#soal5_1').val());
$('#soal5_1').on('change', ()=>{
    userAnswer['soal5_1'] = $('#soal5_1').val()
    if ($('#soal5_1').val() == 'x') {
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
        
        if ($('#soal5_13').val()== 1) {
            $('#persamaan-1a').html('\\(2x+\\)')
            $('#persamaan-1b').html('\\(+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('\\(+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(x-1\\)')
            $('#persamaan-1b').html('\\(+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('\\(x+\\)')
            $('#persamaan-2b').html('\\(+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }
    }else{
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')

        if ($('#soal5_13').val()== 1) {
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('\\(+y+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }else{
            $('#persamaan-1a').html('\\(1\\)')
            $('#persamaan-1b').html('\\(-y+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(-y+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(-y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})

$('#soal5_13').on('change', ()=>{
    userAnswer['soal5_13'] = $('#soal5_13').val()
    
    if ($('#soal5_13').val()==1) {
        if ($('#soal5_1').val() == 'x') {
            $('#persamaan-1a').html('\\(2x+\\)')
            $('#persamaan-1b').html('\\(+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('\\(+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('\\(+y+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }else{
        if ($('#soal5_1').val() == 'x') {
            $('#persamaan-1a').html('\\(x-1\\)')
            $('#persamaan-1b').html('\\(+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('\\(x+\\)')
            $('#persamaan-2b').html('\\(+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(1\\)')
            $('#persamaan-1b').html('\\(-y+2\\)')
            $('#konstanta-1').html('\\(0\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(-y+2\\)')
            $('#konstanta-2').html('\\(0\\)')
            
            $('#persamaan-3a').html('\\(-y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})