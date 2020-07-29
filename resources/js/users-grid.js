$(document).ready(function () {
    window.table = $('.users-grid').DataTable({
        fixedHeader: {
            headerOffset: 150
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
