let tambahModal = new bootstrap.Modal('#tambahDiskusiModal')
let editModal = new bootstrap.Modal('#editDiskusiModal')
let hapusModal = new bootstrap.Modal('#hapusDiskusiModal') 

// ------ FUNCTION
function openEditModal(id) {
    editModal.show();
    $('#namaEditInput').removeClass('is-invalid')

    fetch(`/diskusi/${id}`, {
        method: 'GET',
        credentials: 'same-origin'
    })
    .then(res => res.json())
    .then(data => {
        $('#formModalEdit').attr('action', '/guru/diskusi/'+id)
        $('#urlEdit').val('/guru/diskusi/'+id)
        $('#judulDiskusiEdit').val(data.judul)
        $('#deskripsiDiskusiEdit').val(data.deskripsi)
        $('#babSelectEdit').val(data.bab)
        $('#pageSelectEdit').val(data.page)

    })
}

function openHapusModal(id){
    hapusModal.show();
    $('#formModalHapus').attr('action', '/guru/diskusi/'+id);
}