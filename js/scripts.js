$(document).ready(function () {

    // Menu responsive
    $(".burger").sidr({
        source: ".main-menu",
        displace: false,
    });

    $('body').click(function () {
        $.sidr('close', 'sidr');
    });

    // Carousel
    $(".owl-sejour").owlCarousel({
        loop: true,
        dots: false,
        margin: 15,
        navText: ['Précédent', 'Suivant'],
    
        responsive:{
            0:{
                items:1,
                nav: false,
            },
            768:{
                items:4,
                nav:true
            }
        }
    });
    $(".owl-dest").owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        margin: 15,
        navText: [
            'Précédent', 'Suivant'],
    
        responsive:{
            0:{
                items:1,
                nav:false
            },
            768:{
                items:3,
                nav:false
            },
            960:{
                items:5,
                nav:false
            }
        }
    });

});