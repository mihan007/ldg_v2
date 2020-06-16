$(document).ready(function(){
    $(".show-toast").click(function(){
        $(".js-update-toast").toast({
            delay: 3000
        });
        $(".js-update-toast").toast('show');
    });
});
