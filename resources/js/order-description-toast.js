$(document).ready(function () {
    let isToastShown = false;
    $(".js-order-description-toast").toast({
        autohide: false
    });
    $(".show-toast").click(function () {
        if (isToastShown) {
            $(".js-order-description-toast").toast('hide');
        } else {
            $(".js-order-description-toast").toast('show');
        }

        $('.js-order-description-toast').on('shown.bs.toast', function () {
            isToastShown = true;
            if ($(window).width() < 693) {
                setTimeout(function () {
                    let leftPosition = $(window).scrollLeft();
                    $('.js-order-description-toast').css("left", leftPosition + "px")
                }, 10)
            }
        });

        $('.js-order-description-toast').on('hidden.bs.toast', function () {
            isToastShown = false;
        });
    });
});


