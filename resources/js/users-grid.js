$(document).ready(function () {
    window.table = $('.users-grid').DataTable({
        "language": {
            "emptyTable": " "
        },
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
