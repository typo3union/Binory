$(document).ready(function () {

    $('address.email p > *').unwrap();

    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('.main-menu').addClass("stick");
        }
        else {
            var w = $(window).width();
            if (w >= 768 && w <= 1024) {
                $('.main-menu').addClass("stick");
            } else {
                $('.main-menu').removeClass("stick");
            }
        }
    });
    $(window).resize(function () {
        arrow();
        var w = $(window).width();

        if (w >= 768 && w <= 1024) {
            $('.main-menu').addClass("stick");
        }
        else {
            $('.main-menu').removeClass("stick");
        }
    });

    $(window).load(function () {
        var w = $(window).width();
        if (w >= 768 && w <= 1024) {
            $('.main-menu').addClass("stick");
        }
        else {
            $('.main-menu').removeClass("stick");
        }
    });



    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            400: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: true
            }
        }
    })

    $('.owl-carousel').each(function () {
        if ($(this).find('.owl-item.active').length <= 4)
        {
            $('.owl-controls').css('display', 'none');
        }
        else {
            $('.owl-controls').css('display', 'block');
            $('.owl-controls').find('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
             $('.owl-controls').find('.owl-next').html('<i class="fa fa-chevron-right"></i>');
        }
    });


    $('.menu-img .img-responsive').each(function () {

        var menuimg = $(this).attr('src');
        var menu_img = menuimg.split('/');
        var fmenu = menu_img[3];

        if (fmenu == '') {
            $(this).parent('.menu-img').remove();
        }

    });

    $('.navbar-toggle').click(function () {
        $('.navbar-toggle').toggleClass('side_menu');

    });

    $('.cropimg img').resizecrop({
        width: '941',
        height: '398'
    });
});


function arrow(){
    
    setTimeout(function(){
       
         $('.owl-carousel').each(function () {
        if ($(this).find('.owl-item.active').length <= 5)
        {
            $('.owl-controls').css('display', 'none');
        }
        else {
            $('.owl-controls').css('display', 'block');
            $('.owl-controls').find('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
             $('.owl-controls').find('.owl-next').html('<i class="fa fa-chevron-right"></i>');
        }
    });
        
    },500);
    
   

}