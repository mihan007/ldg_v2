$(document).ready(function(){
    $(".show-save-toast").click(function(){
        $(".js-saved-toast").toast({
            delay: 3000
        });
        $(".js-saved-toast").toast('show');
    });
});
