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
  $('[data-toggle="tooltip"]').tooltip();
});
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
});

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
});



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
$(function () {
  var customer_form = $('#customer_form');
  var customer_modal_form = $('#customerForm');
  var siteInfoMsg         = $('.siteInfoMsg');
  customer_form.on('submit', function(e){
    e.preventDefault();
    var url  = $('.supportFormUrl').val();
    var data = $(this).serialize();
    $.ajax({
        'type' : 'POST',
        'url'  : url,
        'data' : data,
        success:function(response){
            customer_modal_form.modal('hide');
            siteInfoMsg.css('display', 'block').addClass('alert alert-success').fadeOut(5000);
            siteInfoMsg.append(response.message);
        },
        complete : function(){
            customer_form.trigger('reset');
        }
    });
  });

  /*search form*/
  var searchProductDetails = $('.searchProductDetails');
  var searchResultData     = $('.searchResultData');
  searchProductDetails.on('keyup', function(e){
    var text = searchProductDetails.val();
    var url  = $(this).data('url');
    var data = $(this).serialize();
    // alert(url);
    if (text.length >=4) {
        var item = '';
        $.ajax({
          'type'    :'GET',
          'url'     : url,
          'data'    : {qry : text},
            success: function(response){
                searchResultData.css('display', 'block');
                    var serachResult = "<ul>"
                   for(var i =1; i < response.length; i++)
                   {
                     item = response[i];
                     serachResult +='<li>'+item.name+'<span><img src=""></span></li>';
                   }
                   serachResult += "</ul>";
                   searchResultData.html(serachResult);
            }
        });
    }else{
        searchResultData.fadeOut();
        item = '';
    }
  });

  /*subcribe */
  var subscribeFrm  = $('#subscribeFrm');
  subscribeFrm.on('submit', function(e){
   e.preventDefault();
   var subscibe_url    = $('.subscribe_url').val();
   var data            = $(this).serialize();
   var subscribe_email = $('.subscribe_email');
   $.ajax({
        'type' : 'POST',
        'url'   : subscibe_url,
        'data'  : data,
        success :function(response){
         if (response.success == true) {
            siteInfoMsg.css('display', 'block').fadeOut(5000);
            siteInfoMsg.append(response.message);
         }else{
            siteInfoMsg.css('display', 'block').addClass('alert alert-danger').fadeOut(5000);
            siteInfoMsg.append(response.message);
         }
        },complete:function(){
          subscribeFrm.trigger('reset');
        }
   });
  });

var prdComment = $('#prdComment');
prdComment.on('submit', function(e){
e.preventDefault();
var url  = $(this).attr('action');
var data = $(this).serialize();
alert(data);

$.ajax({
   'type' : 'POST',
   'url'  : url,
   'data' : data,
   success: function(response){
    console.log(response);
     if (response.success == true) {
        siteInfoMsg.css('display', 'block').fadeOut(5000);
        siteInfoMsg.append(response.message);
    }else{
        siteInfoMsg.css('display', 'block').addClass('alert alert-danger').fadeOut(5000);
        siteInfoMsg.append(response.message);
    }
   },
   complete :function(){
    prdComment.trigger('reset');
   }
});
});

/*add to cart*/
var btnAddToCart = $('.btnAddToCart');
var myCartCount   = $('#myCartCount');
btnAddToCart.on('click', function(){
var url = $(this).data('url');
$.ajax({
    'url' : url,
    success:function(response){
    console.log(response);
        siteInfoMsg.css('display', 'block').fadeOut(5000);
          siteInfoMsg.append(response.message);
          $('.myCartCount').text(response.productQty);
    },
    complete : function(response){
     // location.reload();
     // $('#myCartCount').append(response.message);
     
    }
});
});

});