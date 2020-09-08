$(document).ready(function () {
    $.fn.dataTable.moment = function ( format, locale ) {
        var types = $.fn.dataTable.ext.type;
        // Add type detection
        types.detect.unshift( function ( d ) {
            return moment( d, format, locale, true ).isValid() ?
                'moment-'+format :
                null;
        } );
        // Add sorting method - use an integer for the sorting
        types.order[ 'moment-'+format+'-pre' ] = function ( d ) {
            return moment( d, format, locale, true ).unix();
        };
    };
    $.fn.dataTable.moment('DD.MM.YYYY HH:mm');
    window.table = $('.finance-grid').DataTable({
        fixedHeader: {
            headerOffset: gridOffset
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        order: [[ 0, 'desc' ]],
        columns: [
            { 'orderSequence': ['desc', 'asc'] },
            { "orderable": ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] },
            { "orderable": ['desc', 'asc'] },
            { 'orderSequence': ['desc', 'asc'] }
        ]
    })
})
