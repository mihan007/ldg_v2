$(document).ready(function () {
    let staffColumns = [
        { 'orderSequence': ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { 'orderSequence': ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderable": false }
    ];

    let clientColumns = [
        { 'orderSequence': ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { 'orderSequence': ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        { "orderSequence": ['desc', 'asc'] },
        // { "orderable": false },
        { "orderSequence": ['desc', 'asc']  }
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
