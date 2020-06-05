$(document).ready(function () {
    $.fn.dataTableExt.afnFiltering.push(
        function( oSettings, aData, iDataIndex ) {
            var row = oSettings.aoData[iDataIndex].nTr;
            return $(row).hasClass('template') ? false : true;
        }
    );
    window.table = $('.company-grid').DataTable({
        fixedHeader: {
            headerOffset: 52
        },
        paging: false,
        searching: false,
        info: false,
        autoWidth: false,
        // columns: [
        //     { "width": "250px" },
        //     { "width": "67px" },
        //     { "width": "80px" },
        //     { "width": "91px" },
        //     { "width": "91px" },
        //     { "width": "100px" },
        //     { "width": "91px" },
        //     { "width": "91px" },
        //     { "width": "91px" },
        //     { "width": "91px" },
        //     { "width": "91px" },
        //     { "width": "91px" }
        // ]
    });
    $('.dataTables_length').addClass('bs-select');
});
