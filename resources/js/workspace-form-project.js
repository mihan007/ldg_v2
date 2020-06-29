$(document).ready(function() {
    $.fn.select2.defaults.set( "theme", "bootstrap" );
    $('.js-project-select').select2({
        placeholder: "Выберите из списка"
    });
});

