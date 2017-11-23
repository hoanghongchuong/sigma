jQuery(document).ready(function($){
    $("#preloader").delay(5000).slideUp("slow");
    $("#load").delay(5000).fadeOut("slow");

    var w = $(window).width();
    if(w <= 768) {
        $("#my-menu").mmenu({
            extensions: ["widescreen"],
            navbar      : {
            title       : "<p class='d-flex justify-content-center'><i class='fa fa-phone'></i> <a href='tel:0968582838' title='Call now!'>0968 582 838</a></p>"
            },
            navbars     : [{
                height  : 2,
                content : [ 
                    '<a href="#/" class="fa fa-phone"></a>',
                    '<img src="../mimages/logo.png" />',
                    '<a href="#/" class="fa fa-envelope"></a>'
                ]
            }]
        });
        var API = $("#my-menu").data("mmenu");

        $("#menu-button").click(function(){
            API.open();
        });
    }

    $(window).resize(function(event) {
        /* Act on the event */
        var w = $(window).width();
        if(w <= 768) {
            $("#my-menu").mmenu({
                extensions: ["widescreen"]
            });
            var API = $("#my-menu").data("mmenu");

            $("#menu-button").click(function(){
                API.open();
            });
        }
    });

	$('.login-choice-wrap').on('click', function(){
        $('.login-choice').toggleClass('active');
    });
    $(window).scroll(function(){
        var anchor = $('.menu').offset().top;
        /*var ft_pos = $('.ft').offset().top;
        var btn_pos = $('.link-btn').offset().top;*/
        console.log('scroll', anchor);
        if(anchor > 211) {
            $('.menu').addClass('change');
        }
        else {
            $('.menu').removeClass('change');
        }
    });
    $('.popup-close').on('click', function(event) {
        $('.popup').hide('slow');
    });
    $('.add').on('click',function(){
        var $qty=$(this).closest('.action-number').find('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.minus').on('click',function(){
        var $qty=$(this).closest('.action-number').find('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });

    $("button, .btn, .owl-prev, .owl-next, .news-tit").click(function (e) {
  
      // Remove any old one
      $(".ripple").remove();

      // Setup
      var posX = $(this).offset().left,
          posY = $(this).offset().top,
          buttonWidth = $(this).width(),
          buttonHeight =  $(this).height();
      
      // Add the element
      $(this).prepend("<span class='ripple'></span>");

      
     // Make it round!
      if(buttonWidth >= buttonHeight) {
        buttonHeight = buttonWidth;
      } else {
        buttonWidth = buttonHeight; 
      }
      
      // Get the center of the element
      var x = e.pageX - posX - buttonWidth / 2;
      var y = e.pageY - posY - buttonHeight / 2;
      
     
      // Add the ripples CSS and start the animation
      $(".ripple").css({
        width: buttonWidth,
        height: buttonHeight,
        top: y + 'px',
        left: x + 'px'
      }).addClass("rippleEffect");
    });

    $('.info-tab-btn').on('click', function(){
        console.log('fdfds');
        $('.pdetail-content-wrap').toggleClass('th');
    });

    /*var h = $('.flipbook').height() + 200;
    $('.flipbook-viewport').css('height', h);
    console.log(h);*/
    $(window).resize(function(){
        var h = $('.flipbook').height() + 200;
        console.log(h);
        $('.flipbook-viewport').css('height', h);
    });
});