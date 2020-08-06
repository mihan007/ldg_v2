$(document).on('shown.bs.modal', function(e) {
    $('textarea:visible:enabled:first', e.target).focus();
    $('input:visible:enabled:first', e.target).focus();
});
