$(document).on('click', '.js-save-show-result', function (e) {
    e.preventDefault()
    e.stopPropagation()
    let resultModalClass = $(this).data('result')
    var resultModalSelector = '.' + resultModalClass
    $(resultModalSelector).data('prev', $(this).data('prev'))
    window.needOpenNext = $(resultModalSelector)
    $('.modal')
        .modal('hide')
        .on('hidden.bs.modal', function () {
            let prevModal = $(this).data('prev');
            if (prevModal) {
                window.needOpenNext = $('.' + prevModal)
            }
            if (window.needOpenNext) {
                window.needOpenNext.modal('show')
                window.needOpenNext = false
            }
        })
})
