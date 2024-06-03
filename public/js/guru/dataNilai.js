let btnModalNilai = document.getElementsByClassName('btn-modal');
let tbodyKuis1 = document.getElementById('tbodyKuis1');
let tbodyKuis2 = document.getElementById('tbodyKuis2');
let tbodyKuis3 = document.getElementById('tbodyKuis3');
let tbodyEvaluasi = document.getElementById('tbodyEvaluasi');

for (let i = 0; i < btnModalNilai.length; i++) {
    btnModalNilai[i].addEventListener('click', ()=>{
        let id = btnModalNilai[i].getAttribute('data-siswa');
        
        $.get(`/guru/data/nilai/${id}`, function (data) {
            for (let i = 1; i <= 3; i++) {
                if (data['kuis'+i].length > 0) {
                    $('#tbodyKuis'+i).html('')
                    for (let j = 0; j < data.kuis1.length; j++) {
                        let element = `
                        <tr class="text-center">
                            <td>${data['kuis'+i][j].percobaan}</td>
                            <td>${data['kuis'+i][j].nilai}</td>
                            <td>${data['kuis'+i][j].waktu_pengerjaan}</td>
                        </tr>
                        `
                        $('#tbodyKuis'+i).append(element)
                        // tbodyKuis1.insertAdjacentHTML('afterbegin',kuis1)
                    }
                }else{
                    let element = `
                    <tr>
                       <td colspan="3" class="text-center">Belum mengerjakan kuis</td>
                    </tr>
                    `
                    $('#tbodyKuis'+i).html(element)
                    // tbodyKuis1.innerHTML=element
                }
            }

            if (data['evaluasi'].length > 0) {
                for (let i = 0; i < data['evaluasi'].length; i++) {
                    let element = `
                    <tr class="text-center">
                        <td>${data['evaluasi'].percobaan}</td>
                        <td>${data['evaluasi'].nilai}</td>
                        <td>${data['evaluasi'].waktu_pengerjaan}</td>
                    </tr>
                    `
                    $('#tbodyEvaluasi'+i).append(element)                  
                }
            }else{
                let element = `
                    <tr>
                       <td colspan="3" class="text-center">Belum mengerjakan kuis</td>
                    </tr>
                    `
                $('#tbodyEvaluasi').html(element);
            }
        },
    );
    })    
}