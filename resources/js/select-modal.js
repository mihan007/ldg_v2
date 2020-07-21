$(document).ready(function () {
    $(document).on('change', '.js-open-modal', function () {
        var modalClass = $(this).find(':selected').data('modal')
        $('.' + modalClass).modal('show')
        $(this).val(0)
    })
})
