$(document).ready(function () {
    $.fn.dataTableExt.afnFiltering.push(
        function( oSettings, aData, iDataIndex ) {
            var row = oSettings.aoData[iDataIndex].nTr;
            return $(row).hasClass('template') ? false : true;
        }
    );
    window.table = $('.data-grid').DataTable({
        fixedHeader: {
            headerOffset: 140
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false
    });
    $('.dataTables_length').addClass('bs-select');
});
