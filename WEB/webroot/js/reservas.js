$(document).ready(function(){
    $('.form-check-input').each(function() {
        $(this).prev().text($(this).prop('checked') ? 'Cancelar reserva' : 'Reservar');
      });
        
    $(".form-check-input").change(function(){
        $(this).prev().text($(this).prop('checked') ? "Cancelar reserva" : "Reservar");
    });
  });