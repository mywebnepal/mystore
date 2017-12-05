// dropdown inside navbar dropdown menus clickable
$('.dropdown-nav-tabs').find('.nav-link').hover(function() {
    if (!$(this).hasClass('active'))
        $(this).addClass('theme-color');
}, function() {
    if (!$(this).hasClass('active'))
        $(this).removeClass('theme-color');
});
$('.nav.nav-pills a').on('click', function() {
    $(this).tab('show');
    $('.dropdown-nav-tabs').find('.bg-light.theme-color').removeClass('bg-light theme-color');
    $('.dropdown-nav-tabs').find('a.active').addClass('bg-light theme-color');
    return false;
});
// end dropdown  inside navbar dropdown menus clickable

// tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
// end tooltip




$('.owl-carousel.hot-deals').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInY',
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('.owl-carousel.second-sec-main-banner').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});
var tabContent = $('.owl-carousel').closest('.tab-content');
tabContent.parent('div').find('.nav a').click(function() {
    tabContent.find('.active').removeClass('active');
});



$('.owl-carousel.new-arrivals-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})



$('.owl-carousel.featured-products').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

$('.owl-carousel.brands-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
});




// sticky
$(document).ready(function(){
        $(".fix-to-top").sticky({topSpacing:0, zIndex: '999'});
    });