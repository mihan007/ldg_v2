$(document).ready(function(){
    $(".show-toast").click(function(){
        $("#myToast-button").toast({
            autohide: false
        });
        $("#myToast-button").toast('show');
    });
});


