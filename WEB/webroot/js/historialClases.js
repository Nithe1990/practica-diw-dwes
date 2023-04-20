$(document).ready(function(){
    $("button img").hover(function(){
        $(this).attr("src", "../webroot/imágenes/star-fill.svg");
        $(this).parent().nextAll().children().attr("src", "../webroot/imágenes/star-fill.svg");
    },
    function(){
        $(this).attr("src", "../webroot/imágenes/star.svg");
        $(this).parent().nextAll().children().attr("src", "../webroot/imágenes/star.svg");
    });
});
