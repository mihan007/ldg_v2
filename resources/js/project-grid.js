$(document).ready(function () {
    window.table = $('.project-grid').DataTable({
        "language": {
            "emptyTable": " "
        },
        fixedHeader: {
            headerOffset: 163
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
