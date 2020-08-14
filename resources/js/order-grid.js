$(document).ready(function () {
    let staffColumns = [
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
    ];

    let clientColumns = [
        { 'orderSequence': ['desc', 'asc'] },
        { "orderable": false },
        { 'orderSequence': ['desc', 'asc'] },
        { "orderable": false },
        { 'orderSequence': ['desc', 'asc'] },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false }
    ];

    window.table = $('.order-grid').DataTable({
        fixedHeader: {
            headerOffset: 144
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        order: [[ 0, 'desc' ]],
        columns: $('.order-grid-staff:visible').length > 0 ? staffColumns : clientColumns
    })
})
