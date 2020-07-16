$(document).ready(function () {
    window.table = $('.ad-detailed-grid').DataTable({
        fixedHeader: {
            headerOffset: 170
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        ordering: false
    })
})
