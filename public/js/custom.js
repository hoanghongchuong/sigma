$("#range").ionRangeSlider({
      hide_min_max: true,
      keyboard: true,
      min: 10000,
      max: 500000,
      from: 1000,
      to: 4000000,
      type: 'double',
      step: 10,
      prefix: "",
      postfix: " VNĐ",
      grid: true
});
 //initiate the plugin and pass the id of the div containing gallery images 
    $("#zoom_01").elevateZoom({ gallery: 'gal1', cursor: "crosshair", galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: baseUrl()+ '/public/images/spinner.svg' });
    //pass the images to Fancybox 
    $("#zoom_01").bind("click", function (e) { var ez = $('#zoom_01').data('elevateZoom'); $().fancybox(ez.getGalleryList()); return false; });
    $('.carousel_detail').owlCarousel({
      navText: [ '<img src="'+ baseUrl() +'/public/images/l.png">', '<img src="'+ baseUrl() +'/public/images/r.png">' ],
    margin:0,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    rewind:true,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
        }
    }
    /*animateOut: 'slideOutDown',*/
/*animateIn: 'rotateIn'*/
});

$( document ).ready(function() {
    $('.rate_row').starwarsjs({
        stars : 5,
        count : 1,
        on_select : function(rate){
          var productID = $('.productId').val();
          $.ajax({
            url : window.getRate,
            type: 'POST',
            data: {
              productID : productID,
              rate : rate,
              _token : window.token
            },
            success: function(res){
              if(res == 1){
                $('.mess-rate').html("Cảm ơn bạn đã đánh giá");
              }
            }
          }); 
          
        }
    });

  $(".nav-link").on('click',function(e){
    $("#payment_method").attr('value', $(this).data('id'));
    return -1;
  })

});