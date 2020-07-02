$(document).on('click', '.js-save-show-result', function() {
    var resultModalSelector = '.' + $(this).data('result')
    $('.modal').modal('hide');
    $('.modal').on('hidden', function () {
        $(resultModalSelector).modal('show')
    });
});
