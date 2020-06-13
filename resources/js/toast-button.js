$(document).ready(function () {
    let isToastShown = false;
    $("#myToast-button").toast({
        autohide: false
    });
    $(".show-toast").click(function () {
        if (isToastShown) {
            $("#myToast-button").toast('hide');
        } else {
            $("#myToast-button").toast('show');
        }

        $('#myToast-button').on('shown.bs.toast', function () {
            isToastShown = true;
            if ($(window).width() < 693) {
                setTimeout(function () {
                    let leftPosition = $(window).scrollLeft();
                    $('#myToast-button').css("left", leftPosition + "px")
                }, 10)
            }
        });

        $('#myToast-button').on('hidden.bs.toast', function () {
            isToastShown = false;
        });
    });
});


