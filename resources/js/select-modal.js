// $(document).ready(function(){
//     $(".openmodal").on("change", function () {
//     if($(this).val() === 'openmodaloption'){
//         $('.js-roistat-phone-modal').modal('show');
//     }
// });
// });
$(document).ready(function(){
    $(".openmodal").on("change", function () {
        var modalClass = $(this).find(':selected').data('modal');
        $('.' + modalClass).modal('show')
    });
});
