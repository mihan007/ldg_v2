$(document).ready(function(){
    // $('.workspace-form input').on('change', function () {
    //     $(".js-saved-toast").toast('show');
    // })
    $(".show-save-toast").click(function(){
        $(".js-saved-toast").toast({
            delay: 3000
        });
        $(".js-saved-toast").toast('show');
    });
});
