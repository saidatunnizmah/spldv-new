


for (let i = 1; i <= 3; i++) {
    $(".materi-dropdown[data-toggle='dropdown-"+i+"']").click(function(){
        $("#dropdown-"+i).toggleClass("collapse");
    }) 
}
// $(".materi-dropdown").click(function(){
//     $(".materi-dropdown-menu").toggleClass("collapse");
// })