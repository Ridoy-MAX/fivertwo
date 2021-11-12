$(function() {


    //side bar appear disappear

    $('.more_side_bar').bind('click', function(){
        $('.pc_side_nav').addClass('nav_move');
    });

    $('.side_nav_wrap .btn button').bind('click', function(){
        $('.pc_side_nav').removeClass('nav_move');
    });

    $('.nav_toggler').bind('click', function(){
        $('.mobile_side_nav').addClass('nav_move');
    });

    $('.mobile_side_nav .side_nav_wrap .btn button').bind('click', function(){
        $('.mobile_side_nav').removeClass('nav_move');
    });

    //testimonial section slider initialize

    $('.testimonial_main').slick({

        arrows: false,
        autoplay: true,
        speed: 2000,
        pauseOnHover: true,
    });

    //back to top appear

    $(window).bind('scroll', function(){
        var scrollamount = $(this).scrollTop();
        if(scrollamount > 100) {
            $('.back_to_top').addClass('bttop-show');
        }

        if(scrollamount < 100) {
            $('.back_to_top').removeClass('bttop-show');
        }
    })

    //back to top click

    $('.back_to_top').bind('click', function(){
        $('html,body').animate({'scrollTop' : 0}, 1000);
    });

    //Smooth scroll on banner initialization
    var scrollLink = $('.scrollink');
    $(scrollLink).on('click', function(event){
        event.preventDefault();
        $('html, body').animate({scrollTop : $(this.hash).offset().top }, 1000);
    });

})

window.onload = function() {
    let myiFrame = document.getElementById("substackiframe");
    let doc = myiFrame.contentDocument;
    doc.body.innerHTML = doc.body.innerHTML + '* { display: none !important; }';
 }