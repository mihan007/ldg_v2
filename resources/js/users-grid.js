$(document).ready(function () {
    window.table = $('.users-grid').DataTable({
        fixedHeader: {
            headerOffset: 173
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
