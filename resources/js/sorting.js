$(document).ready(function () {
    window.table = $('.company-grid').DataTable({
        fixedHeader: {
            headerOffset: 52
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        columns: [
            { 'orderSequence': ['asc', 'desc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
        ]
    })
    $('.dataTables_length').addClass('bs-select')
})
