$(document).ready(function(){
    $("button img").hover(function(){
      $(this).attr("src", "./webroot/imágenes/star-fill.svg");
      $(this).parent().prevAll().children().attr("src", "./webroot/imágenes/star-fill.svg");
    },
    function(){
      $(this).attr("src", "./webroot/imágenes/star.svg");
      $(this).parent().prevAll().children().attr("src", "./webroot/imágenes/star.svg");
    });
  
    $("button").click(function(){
      $(this).children(":only-child").attr("src", "./webroot/imágenes/star-fill.svg");
      $(this).prevAll().children(":only-child").attr("src", "./webroot/imágenes/star-fill.svg");
      
      $("button img").off("mouseenter mouseleave");
      
      setTimeout(function(){
        $("button img").hover(function(){
          $(this).attr("src", "./webroot/imágenes/star-fill.svg");
          $(this).parent().prevAll().children().attr("src", "./webroot/imágenes/star-fill.svg");
        },
        function(){
          $(this).attr("src", "./webroot/imágenes/star.svg");
          $(this).parent().prevAll().children().attr("src", "./webroot/imágenes/star.svg");
        });
      }, 500);
    });
  });