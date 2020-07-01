// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip({});
//     $(document).on('click', '[data-toggle="click-tooltip"]', function () {
//         $(this).tooltip('toggle')
//     })
// });

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({});
    $(document).on('click', '[data-toggle="click-tooltip"]', function (e) {
        e.preventDefault()
        e.stopPropagation()
        $(this).tooltip('toggle')
    })
        .on('click', function(e) {
            $('[data-toggle="click-tooltip"]').tooltip('hide')
        })
});
