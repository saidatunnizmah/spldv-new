let editModal = new bootstrap.Modal('#editKelasModal')
let hapusModal = new bootstrap.Modal('#hapusKelasModal') 

// ------ FUNCTION
function openEditModal(id) {
    editModal.show();
    $('#namaEditInput').removeClass('is-invalid')

    fetch(`/guru/data/kelas/${id}`, {
        method: 'GET',
        credentials: 'same-origin'
    })
    .then(res => res.json())
    .then(data => {
        $('#formModalEdit').attr('action', '/guru/data-kelas/'+id)
        $('#urlEdit').val('/guru/data-kelas/'+id)
        $('#namaEditInput').val(data.nama)
    })
}

function openHapusModal(id){
    hapusModal.show();
    $('#formModalHapus').attr('action', '/guru/data-kelas/'+id);
}