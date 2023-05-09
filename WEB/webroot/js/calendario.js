const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
const esBisiesto = (ano) => {
    return (ano % 400 === 0) ? true :
    (ano % 100 === 0) ? false :
    ano % 4 === 0;
};
$(document).ready(function(){
    // pone el mes y año actuales
    $("span").text(meses[new Date().getMonth()] + " " + new Date().getFullYear());

});