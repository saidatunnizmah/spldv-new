$(document).ready(function () {
    let path = window.location.pathname;
    $('#side-menu li a').each(function(){
        if ($(this).attr('href').indexOf(path) !== -1) {
            $(this.parentElement).addClass('active')
        }
    })
});