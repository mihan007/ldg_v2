$(document).ready(function () {
    window.table = $('.orders-source-grid').DataTable({
        "language": {
            "emptyTable": " "
        },
        fixedHeader: {
            headerOffset: 110
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
