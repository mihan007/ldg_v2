$(document).ready(function(){
    $(".show-toast").click(function(){
        $("#myToast").toast({
            delay: 3000
        });
        $("#myToast").toast('show');
    });
});
