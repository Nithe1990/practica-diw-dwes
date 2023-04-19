$(document).ready(function(){
    $("button img").hover(function(){
        $(this).attr("src", "../web root/imágenes/star-fill.svg");
        $(this).parent().nextAll().children().attr("src", "../web root/imágenes/star-fill.svg");
    },
    function(){
        $(this).attr("src", "../web root/imágenes/star.svg");
        $(this).parent().nextAll().children().attr("src", "../web root/imágenes/star.svg");
    });
});
