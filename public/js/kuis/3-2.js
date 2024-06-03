console.log($('#soal2_1').val());
$('#soal2_1').on('change', ()=>{
    userAnswer['soal2_1'] = $('#soal1_1').val()

    if ($('#soal2_1').val() == 'x') {
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
        
        if ($('#soal2_13').val()== 1) {
            $('#persamaan-1a').html('\\(6x-3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(15\\)')
            
            $('#persamaan-2a').html('\\(6x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(15\\)')
            
            $('#persamaan-3a').html('\\(6x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(4x+1\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(7\\)')
            
            $('#persamaan-2a').html('\\(4x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(7\\)')
            
            $('#persamaan-3a').html('\\(4x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }
    }else{
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')

        if ($('#soal2_13').val()== 1) {
            $('#persamaan-1a').html('\\(6\\)')
            $('#persamaan-1b').html('\\(-3y\\)')
            $('#konstanta-1').html('\\(15\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(-3y\\)')
            $('#konstanta-2').html('\\(15\\)')
            
            $('#persamaan-3a').html('\\(-3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }else{
            $('#persamaan-1a').html('\\(4\\)')
            $('#persamaan-1b').html('+y')
            $('#konstanta-1').html('\\(7\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y\\)')
            $('#konstanta-2').html('\\(7\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})

$('#soal2_13').on('change', ()=>{
    userAnswer['soal2_13'] = $('#soal2_13').val()

    if ($('#soal2_13').val()==1) {
        if ($('#soal2_1').val() == 'x') {
            $('#persamaan-1a').html('\\(6x-3\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(15\\)')
            
            $('#persamaan-2a').html('\\(6x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(15\\)')
            
            $('#persamaan-3a').html('\\(6x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(6\\)')
            $('#persamaan-1b').html('\\(-3y\\)')
            $('#konstanta-1').html('\\(15\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(-3y\\)')
            $('#konstanta-2').html('\\(15\\)')
            
            $('#persamaan-3a').html('\\(-3y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }else{
        if ($('#soal2_1').val() == 'x') {
            $('#persamaan-1a').html('\\(4x+1\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(7\\)')
            
            $('#persamaan-2a').html('\\(4x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(7\\)')
            
            $('#persamaan-3a').html('\\(4x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(4\\)')
            $('#persamaan-1b').html('+y')
            $('#konstanta-1').html('\\(7\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y\\)')
            $('#konstanta-2').html('\\(7\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})