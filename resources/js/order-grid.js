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
        { "orderable": ['desc', 'asc'] },
        // { 'orderSequence': ['desc', 'asc'] },
        { "orderable": ['desc', 'asc'] },
        { 'orderSequence': ['desc', 'asc'] },
        { "orderable": ['desc', 'asc'] },
        { "orderable": ['desc', 'asc'] },
        // { "orderable": false },
        { "orderable": ['desc', 'asc']  }
    ];

    window.table = $('.order-grid').DataTable({
        "language": {
            "emptyTable": " "
        },
        fixedHeader: {
            headerOffset: gridOffset
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        order: [[ 0, 'desc' ]],
        columns: $('.crm-table-staff:visible').length > 0 ? staffColumns : clientColumns
    })
})
