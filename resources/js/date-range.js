$(function () {
    moment.locale('ru');
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Применить",
            "cancelLabel": "Отмена",
            "fromLabel": "От",
            "toLabel": "До",
            "customRangeLabel": "Свой период",
            "opens": "right",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пт",
                "Сб"
            ],
            "monthNames": [
                "январь",
                "февраль",
                "март",
                "апрель",
                "май",
                "июнь",
                "июль",
                "август",
                "сентябрь",
                "октябрь",
                "ноябрь",
                "декабрь"
            ],
            "firstDay": 1
        }
    }, cb);

    $('#reportrange').on('showCalendar.daterangepicker', function (ev, picker) {
        if ($(window).width() < 693) {
            setTimeout(function () {
                let leftPosition = $(window).scrollLeft();
                $('.daterangepicker').css("right", "-" + leftPosition + "px")
            }, 1)
        }
    });

    cb(start, end);

});
