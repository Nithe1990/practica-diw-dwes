$(document).ready(function(){
    $(".cinco").mouseenter(function(){
        $(this).find('img').attr("src", "../web root/imágenes/star-fill.svg");
        $(".cuatro").find('img').attr("src", "../web root/imágenes/star-fill.svg");
    });
});