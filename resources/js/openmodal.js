$(document).ready(function(){
    $(".openmodal").on("change", function () {
        var modalClass = $(this).find(':selected').data('modal');
        if (modalClass) {
            $('.' + modalClass).modal('show')
        }
    });
});
