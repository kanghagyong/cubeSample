$(document).ready(function(){
    
    // header mouseover시 하위 메뉴 full drop 
    $(".nav_wrap").mouseover(function(){
            $(".menu_bg").stop(true,true).slideDown(350);
            $(".depth").stop(true,true).slideDown(350);
            $('.depth, .menu_bg').css('display', 'block');
            $('.nav_wrap').addClass('on');
        });
        $(".nav_wrap").mouseleave(function(){
        $(".depth").stop(true,true).slideUp(350);
        $(".nav_wrap .menu_bg").stop(true,true).slideUp(350);
        $('.nav_wrap').removeClass('on');
    }); 
    $(".depth").mouseover(function(){
            $(".nav_wrap .menu_bg").stop(true,true).slideDown(350);
            $(".depth").stop(true,true).slideDown(350);
        });
        $(".nav_wrap .menu_bg").mouseleave(function(){
            $(".depth").stop(true,true).slideUp(350);
            $(".nav_wrap .menu_bg").stop(true,true).slideUp(350);
    });

    // sitemap 레이어 선언 
    $(".hamburgur_btn").click(function(e){
        e.preventDefault();
        $(".site_map_layer").fadeIn(400);
    });
    $(".site_map_layer span").click(function(e){
        e.preventDefault();
        $(".site_map_layer").fadeOut(400);
    });



});