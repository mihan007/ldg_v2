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

    $(document).on('click', '[data-toggle="click-leave-tooltip"]', function (e) {
        e.preventDefault()
        e.stopPropagation()
        $(this).tooltip('show')
    })
        .on('mouseout', function(e) {
            $('[data-toggle="click-leave-tooltip"]').tooltip('hide')
        })
});
