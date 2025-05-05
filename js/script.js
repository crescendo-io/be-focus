$(window).on('load',function(){
    $('.burger-menu').click(function(){
       $('.main-menu').slideToggle(100);
    });

    $('.arrow-sub').click(function(){
        var el = $(this);

        el.parent().find('.submenu').slideToggle(100);
    })

    $('.filter-buttons-toggle').click(function(){
       $('.filters-form').slideToggle();
    });

    $('.filters-form').on('change', function(){
        $('.filters-form').submit();
    });

    $('.loader svg').addClass('active');
    setTimeout(function(){
        $('.loader').fadeOut();
    },1200);

});


$('.popin-contact .close').click(function(){
    $('.popin-contact').slideUp();
});

$('a').click(function(event){
   var el = $(this);

   if(el.attr('href') == "#devis"){
       event.preventDefault();
       $('.popin-contact').slideDown();
   }
});

$(window).scroll(function(){
    var scrollValue = $(window).scrollTop();
    if(scrollValue > 200){
        $('.header').addClass('scroll');
    }else{
        $('.header').removeClass('scroll');
    }

    if($('.fixed-bar').length){
        var scrollHeight = $('.container-single').innerHeight();
        var heightScreen = $(window).height();
        var scrollPercent = (scrollValue / (scrollHeight - heightScreen)) * 100;

        $('.progress-bar-posttype').css('width', scrollPercent + '%');

        if(scrollValue > 200){
            $('.fixed-bar').addClass('scroll');
        }else{
            $('.fixed-bar').removeClass('scroll');
        }
    }
});
