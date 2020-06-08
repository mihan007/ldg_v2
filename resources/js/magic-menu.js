$(document).on('click', function (event) {
    let $this = $(event.target)
    $('.nav-item').removeClass('show')
    $('.dropdown-menu').removeClass('show')
    if ($this.closest('.navbar-nav').length > 0) {
        $this.closest('.magic-menu').addClass('show');
        $this.closest('.magic-menu').find('.dropdown-menu').addClass('show');
        if ($(window).width()<693) {
            $('.scrollmenu').css('overflow', 'visible')
            $('.magic-hide').hide()
        }
    } else {
        if ($(window).width()<693) {
            $('.scrollmenu').css('overflow', 'auto')
            $('.magic-hide').show()
        }
    }
})
