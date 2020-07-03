$(document).on('click', '.js-save-show-result', function (e) {
    e.preventDefault()
    e.stopPropagation()
    let resultModalClass = $(this).data('result')
    var resultModalSelector = '.' + resultModalClass
    $('.modal')
        .modal('hide')
        .on('hidden.bs.modal', function () {
            if (!$(this).hasClass(resultModalClass)) {
                $(resultModalSelector).modal('show')
            }
        })
})
