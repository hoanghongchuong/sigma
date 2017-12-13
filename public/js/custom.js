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
  $(".nav-link").on('click',function(e){
    $("#payment_method").attr('value', $(this).data('id'));
    return -1;
  })

});



  $(document).ready(function() {
    
    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formDemo").validate({
          rules: {
            username: "required",
            password: {
              required: true,
              minlength: 5
            },
            confirm_password: {
              required: true,
              minlength: 5,
              equalTo: "#passwords"
            },
            email: {
              required: true,
              email: true
            },
            
          },
          messages: {
            username: {
              required: 'Vui lòng nhập tên đăng nhập'
            },
            password: {
              required: 'Vui lòng nhập mật khẩu',
              minlength: 'Vui lòng nhập ít nhất 5 kí tự'
            },
            confirm_password: {
              required: 'Vui lòng nhập lại mật khẩu',
              minlength: 'Vui lòng nhập ít nhất 5 kí tự',
              equalTo: 'Mật khẩu không trùng'
            },
            // email: {
            //   required: "Please provide a password",
            //   minlength: "Your password must be at least 5 characters long",
            //   equalTo: "Please enter the same password as above"
            // },
            email: "Vui lòng nhập Email",
          }
        });

    

  });

