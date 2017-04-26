$(document).ready(function() {
    $('.modal').modal();
    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 100,
        min: [1900,01,01],
        max: [2099,12,31]
    });
});

(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
