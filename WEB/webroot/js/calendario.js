import('./bootstrap-datepicker.js');

$(document).ready(function(){
    $('.datepicker').datepicker({
        language: "es",
        daysOfWeekDisabled: "0,6"
    });
});