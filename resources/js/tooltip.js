$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({});
    $(document).on('click', '[data-toggle="click-tooltip"]', function () {
        $(this).tooltip('toggle')
    // }).on('mouseleave', '[data-toggle="click-tooltip"]', function () {
    //     $(this).tooltip('hide')
    })
});
