const responsive = {
    0: {
        items: 1,
        nav: false
    },
    600: {
        items: 2,
        nav: false

    },
    1000: {
        items: 3,
        nav: false
    }
} 


$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20 ){
           $('.navbar').addClass("sticky");
        } else {
           $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scrollBtnTop').addClass("show");
        } else {
            $('.scrollBtnTop').removeClass("show");
        }  
    });

    //slide-up script
    $('.scrollBtnTop').click(function(){
        $('html body').animate({
            scrollTop: 0
        }, "slow");
    });

    //toggle navbar
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active") 
        $('.menu-btn i').toggleClass("active") 
    });

    //owl carousl
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTime: 3000,
        autoplayHoverPause: true,
        responsive: responsive
    });

    //typing animation  
    var typed = new Typed(".typing", {
        strings: ["Web developer", "freelancer", "designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["Web developer", "freelancer", "designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
});