/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
    $("#head_li").removeClass("active");        // ”дал€ем активную главную страницу при переходе на другие страницы
    var url = locationHref();                   // вычисл€ем текущий href
    if (url ==="http://kateskitchen.ru/" ||url ==="http://kateskitchen.ru/en/"){   //ѕровер€ем на главной мы или нрет
        $("#head_li").addClass("active");       // если да то подсвечиваем меню
    }

    $(".current_page_item").addClass("active");
    $("#navbar  li").click(function(){
        $("#head_li").removeClass("active");
        $("#navbar li ").removeClass("active");
        $(this).addClass("active");

    });
    $('.carousel').carousel({
        interval: 6000
    });
    $(".button_head_menu").click(function(){
        $("#navbar").addClass("nav-stacked");
    });
    $(window).on('load resize',windowSize);
    $("#button_left_menu").click(function(){
        $("#recepty").slideToggle(600);
    });
    function windowSize(){
        if($(window).width()>=750){
            $("#navbar").removeClass("nav-stacked");
            $("#title_recepty").removeClass("dysplay_none");
            $("#button_left_menu").addClass("dysplay_none").css("display","none");
            $("#recepty").slideDown(0).removeClass("dysplay_none");
        }else {
            $("#navbar").addClass("nav-stacked");
            $("#title_recepty").addClass("dysplay_none");
            $("#button_left_menu").removeClass("dysplay_none").css("display","block");
            $("#recepty").slideUp(0).addClass("dysplay_none");
        }
    }
    function locationHref(){
        var url = window.location.href;
        return url;
    }

});