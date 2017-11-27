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
        count : 1
    });

    $('rate_row').click(function(){
        var productID = $('.productId').val();
        console.log(productID);
        var rate = $('.get_rate').val();
        $.ajax({
          url: 'a',
          type: 'GET',
          data : {
            productID: productID,
            rate: rate,
            // ip_address: ip_address
          },
          success: function(data){
            if(data){
                $('.mess-rate').html(data);
            }
          }

        });
    });

});