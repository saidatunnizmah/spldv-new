let rawUrl = window.location.href
let materiDropdownItem = document.querySelectorAll('.materi-dropdown-item')

materiDropdownItem.forEach((item) => {
    if (item.children[0].getAttribute('href') == rawUrl) {
        item.children[0].classList.add('active')
        item.parentElement.classList.remove('collapse')
    }
})

for (let i = 1; i <= 3; i++) {
    $(".materi-dropdown[data-toggle='dropdown-"+i+"']").click(function(){
        $("#dropdown-"+i).toggleClass("collapse");
    }) 
}
