var flag=false;
$(document).ready(function () {
    $(".nav a").mouseenter(function () {
        $(this).css({"background-color":"#FFFFFF","color":"#000000"});
        $(this).siblings(".nav_2").css("display","block");
        $(this).parents(".nav").siblings(".nav").children(".nav_2").css("display","none");
    });
    $(".nav a").mouseleave(function () {
        $(this).css({"background-color":"#000000","color":"#FFFFFF"});
    });
    $(".nav_2").mouseleave(function () {
        $(this).css("display","none");
    });
    $("#login a").mouseenter(function () {
       $("#form1").fadeIn(300);
    });
    $("#login a").mouseleave(function () {
        setTimeout(function () {
            $("#form1").mouseenter(function () {
                flag=true;
            });
            if(!flag) {
                $("#form1").fadeOut(300);
            }
        },300);
        flag=false;
    });
    $("#form1").mouseleave(function () {
       $(this).fadeOut(300);
    });

});
