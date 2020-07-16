$(document).ready(function () {
    window.table = $('.orders-source-grid').DataTable({
        fixedHeader: {
            headerOffset: 110
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        order: [[ 0, 0 ]],

    })
})
