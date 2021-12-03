
// pageable 선언
new Pageable("#container");




// swiper 선언
const swiper = new Swiper('.swiper-container', {            
    direction: 'horizontal',
    effect: 'fade',
    touchEventsTarget: 'wrapper',
    slidesPerView: 1,
    debugger: true,
    mousewheel: false,
    loop: true,
    autoplay: {        
        delay: 5000, // slide 회전 초수 
        disableOnInteraction: true,
    },
    pagination : { 
        el : '.swiper-pagination',
        clickable : true, 
    },
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: false,
    },
});

$(document).ready( function(){

    // main_01 folding toggle 기능 선언
    $('.water_mark').click( function() {
        $('.folding').slideToggle(400, 'linear');
        $('.water_mark').toggleClass('active');
        
    });

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

    $('ul.tab_ li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tab_ li').removeClass('active');
        $('.tab-contents').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    })

    
});