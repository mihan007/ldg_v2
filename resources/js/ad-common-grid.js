$(document).ready(function () {
    window.table = $('.ad-common-grid').DataTable({
        "language": {
            "emptyTable": " "
        },
        fixedHeader: {
            headerOffset: 187
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
