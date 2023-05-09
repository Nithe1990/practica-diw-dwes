import('./bootstrap-datepicker.js');

$(document).ready(function(){
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy"
        // weekStart: 1,
        // language: "es",
        // keyboardNavigation: false,
        // daysOfWeekDisabled: "0,6"
    });
});