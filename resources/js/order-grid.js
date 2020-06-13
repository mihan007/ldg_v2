$(document).ready(function () {
    window.table = $('.order-grid').DataTable({
        fixedHeader: {
            headerOffset: 140
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        order: [[ 0, 'desc' ]],
        columns: [
            { 'orderSequence': ['desc', 'asc'] },
            { "orderable": false },
            { 'orderSequence': ['desc', 'asc'] },
            { "orderable": false },
            { 'orderSequence': ['desc', 'asc'] },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false }
        ]
    })
})
