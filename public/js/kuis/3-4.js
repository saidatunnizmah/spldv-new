console.log($('#soal4_1').val());
$('#soal4_1').on('change', ()=>{
    userAnswer['soal4_1'] = $('#soal4_1').val()
    if ($('#soal4_1').val() == 'x') {
        $('.variabel-disabled-y').val('y')
        $('.variabel-disabled-x').val('x')
        
        if ($('#soal4_13').val()== 1) {
            $('#persamaan-1a').html('\\(3x+4\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(-7\\)')
            
            $('#persamaan-2a').html('\\(3x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(-7\\)')
            
            $('#persamaan-3a').html('\\(3x+\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2x+1\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(-3\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(-3\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }
    }else{
        $('.variabel-disabled-y').val('x')
        $('.variabel-disabled-x').val('y')

        if ($('#soal4_13').val()== 1) {
            $('#persamaan-1a').html('\\(3\\)')
            $('#persamaan-1b').html('\\(+4y\\)')
            $('#konstanta-1').html('\\(-7\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+4y\\)')
            $('#konstanta-2').html('\\(-7\\)')
            
            $('#persamaan-3a').html('\\(4y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+y')
            $('#konstanta-1').html('\\(-3\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y\\)')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})

$('#soal4_13').on('change', ()=>{
    userAnswer['soal4_13'] = $('#soal4_13').val()
    if ($('#soal4_13').val()==1) {
        if ($('#soal4_1').val() == 'x') {
            $('#persamaan-1a').html('\\(3x+4\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(-7\\)')
            
            $('#persamaan-2a').html('\\(3x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(-7\\)')
            
            $('#persamaan-3a').html('\\(3x+\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(3\\)')
            $('#persamaan-1b').html('\\(+4y\\)')
            $('#konstanta-1').html('\\(-7\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+4y\\)')
            $('#konstanta-2').html('\\(-7\\)')
            
            $('#persamaan-3a').html('\\(4y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }else{
        if ($('#soal4_1').val() == 'x') {
            $('#persamaan-1a').html('\\(2x+1\\)')
            $('#persamaan-1b').html('')
            $('#konstanta-1').html('\\(-3\\)')
            
            $('#persamaan-2a').html('\\(2x+\\)')
            $('#persamaan-2b').html('')
            $('#konstanta-2').html('\\(-3\\)')
            
            $('#persamaan-3a').html('\\(2x\\)')
            
            $('#persamaan-4a').html('\\(x\\)')
        }else{
            $('#persamaan-1a').html('\\(2\\)')
            $('#persamaan-1b').html('+y')
            $('#konstanta-1').html('\\(-3\\)')
            
            $('#persamaan-2a').html('')
            $('#persamaan-2b').html('\\(+y\\)')
            $('#konstanta-2').html('\\(4\\)')
            
            $('#persamaan-3a').html('\\(y\\)')
            
            $('#persamaan-4a').html('\\(y\\)')
        }
    }
    MathJax.typeset();
})