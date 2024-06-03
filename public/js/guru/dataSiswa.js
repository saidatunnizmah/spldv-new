let btnModalEdit = document.getElementsByClassName('btn-modal-edit');
let btnHapus = document.getElementsByClassName('btn-hapus')
let formModalEdit = document.getElementById('formModalEdit');
let namaInput = document.getElementById('namaInput');
let emailInput = document.getElementById('emailInput');
let nisnInput = document.getElementById('nisnInput');

for (let i = 0; i < btnModalEdit.length; i++) {
    btnModalEdit[i].addEventListener('click',()=>{
        let id = btnModalEdit[i].getAttribute('data-siswa');
        $.get(`/guru/data/${id}`, function (data) {
                formModalEdit.setAttribute('action',`/guru/data-siswa/${id}`)
                namaInput.value = data.user.name;
                emailInput.value = data.user.email;
                nisnInput.value = data.nisn
            },
        );
    })
}

for (let i = 0; i < btnHapus.length; i++) {
    btnHapus[i].addEventListener('click', ()=>{
        let id = btnHapus[i].getAttribute('data-siswa');
        Swal.fire({
            title: "Apakah kamu yakin?",
            text: "Data siswa yang dihapus tidak bisa dikembalikan",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                type: "delete",
                data : {
                    _token : token
                },
                url: `/guru/data-siswa/${id}`,
                success: function (response) {
                    Swal.fire({
                        title: response.message,
                        icon: "success"
                    });

                    setTimeout(function(){
                        window.location.href = "/guru/data-siswa"
                    }, 1000)
                }
              });
            }
          });
    })
}