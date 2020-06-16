$(function () {
    moment.locale('ru');
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('.js-date-range .js-date-range-span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
    }

    $('.js-date-range').daterangepicker({
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

    $('.js-date-range').on('showCalendar.daterangepicker', function (ev, picker) {
        if ($(window).width() < 693) {
            setTimeout(function () {
                let leftPosition = $(window).scrollLeft();
                $('.daterangepicker').css("right", "-" + leftPosition + "px")
            }, 1)
        }
    });

    cb(start, end);

});
