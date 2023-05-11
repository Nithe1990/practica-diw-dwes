$(document).ready(function(){
    $('.form-check-input').each(function() {
        $(this).prev().text($(this).prop('checked') ? 'Registrado' : 'No registrado');
      });
        
    $(".form-check-input").change(function(){
        $(this).prev().text($(this).prop('checked') ? "Registrado" : "Sin registrar");
    });
});