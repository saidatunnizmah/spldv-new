let btnKuis1 = document.getElementById('btnKuis1')
let btnKuis2 = document.getElementById('btnKuis2')
let btnKuis3 = document.getElementById('btnKuis3')
let btnSelanjutnya = document.getElementById('btnSelanjutnya')

let modalKuisBody = document.getElementById('modalKuisBody');
let modalKuisBtn =document.getElementById('modalKuisBtn');

btnKuis1.addEventListener('click',()=>{
    modalKuisBody.innerHTML = "Anda akan mengerjakan Kuis 1: Bentuk Umum SPLDV"
    modalKuisBtn.setAttribute('href',"/kuis/1")
})
btnKuis2.addEventListener('click',()=>{
    modalKuisBody.innerHTML = "Anda akan mengerjakan Kuis 2: Penyelesaian SPLDV"
    modalKuisBtn.setAttribute('href',"/kuis/2")
})
btnKuis3.addEventListener('click',()=>{
    modalKuisBody.innerHTML = "Anda akan mengerjakan Kuis 3: Penerapan SPLDV"
    modalKuisBtn.setAttribute('href',"/kuis/3")
})
// if (btnSelanjutnya != null) {
//     let jenisKuis = btnSelanjutnya.getAttribute('data-kuis')
//     btnSelanjutnya.addEventListener('click',()=>{
//         modalKuisBody.innerHTML = "Anda akan mengerjakan Kuis " + jenisKuis+ ": "+title
//         modalKuisBtn.setAttribute('href',"/kuis/"+btnSelanjutnya.getAttribute('data-kuis'))
//     })
// }

