<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
        $setting = Cache::get('setting'); 
        $product_list = Cache::get('product_list');
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />

    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />

    <link href="{{asset('public/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/owl.carousel.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/owl.theme.default.min.css')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/css/ion.rangeSlider.css')}}">
    <link href="{{asset('public/css/jquery.mmenu.css')}}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{asset('public/css/jquery.mmenu.widescreen.css')}}" rel="stylesheet" media="(min-width: 769px)">
    <link rel="stylesheet" href="{{asset('public/css/starwars.css')}}" type="text/css" />
    <link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css'>
    <!--link js-->
    <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
   
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        window.token = '{{ csrf_token() }}';
        window.urlAddCart = '{{ route("addProductToCartAjax") }}';
        window.getRate = '{{ route("rating") }}';
   </script>
   <script src="{{asset('public/js/jquery/jquery-2.1.3.min.js')}}"></script>
</head>
<body class="">
    <div class="popup" style="display: none">
        <div class="container">
            <div class="popup-warp">
                <i class="fa fa-times popup-close"></i>
                <h2 class="popup-tit">Giảm giá 15% trong lần đặt sách tiếp theo</h2>
                <p class="popup-content">Sử dụng mã code giảm giá GCO2810 để được giảm giá khi thanh toán.</p>
            </div>
        </div>
    </div>
    
        @include('templates.layout.header')
        @yield('content')
        @include('templates.layout.footer')
    
    <!-- modal login -->
    <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="tit text-center w-100 text-uppercase">Đăng nhập hệ thống</h2>
                    <button type="button" class="d-block d-sm-none close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('postLogin')}}" method="post" id="tutorial" class="form-group login-frm">
                        {{ csrf_field() }}
                        <input type="email" placeholder="Tài khoản" id="email" name="email" required="required" class="w-100">
                        
                        <input type="password" placeholder="Mật khẩu" id="password" name="password" required="required" class="w-100">

                        <!-- <p class="d-flex align-items-center mb-3 login-choice-wrap"><span class="login-choice"></span> Mua hàng không cần đăng nhập</p> -->
                        <div class="success" style="display:none;"></div>
                        <button type="button" id="btn-login" class="w-100 text-uppercase font-weight-bold btn login-btn">Đăng nhập</button>
                        <p class="text-center mt-4 mb-1">
                            <a href="index.html" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title=""></a>
                        </p>
                    </form>
                </div><!-- end modal body -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#btn-login').click(function(){
          var password = $('#password').val();
          var email = $('#email').val();
          // alert(password);
          $.ajax({
              type: "POST",
              url: baseUrl()+"/login", 
              data: {
                email : email,
                password : password,
                _token : window.token
              },
              success: function(res){  
                if(res == 0){
                    
                    $('div.success').fadeIn();
                    $('div.success').html('<p class="mess-login">Username hoặc password không đúng !</p>');                  
                }else{
                    location.reload();  
                }
                   
            }
                
          });
       });
    </script>

    <!-- setup jquery -->
    <!-- <script src="{{asset('public/js/jquery.min.js')}}"></script> -->
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/owl.carousel.js')}}"></script>

    <script src="{{asset('public/js/jquery.mmenu.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('public/js/jquery.js')}}"></script>
    <script src="{{asset('public/js/ion.rangeSlider.js')}}"></script>
    <script src="{{asset('public/js/jquery.elevatezoom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="{{asset('public/js/custom.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('public/js/starwarsjs.js ')}}"></script> -->
    <script src="{{asset('public/js/starwarsjs.js')}}"></script>

    <script>
        $('.carousel_top, .carousel_khach').owlCarousel({
            items:1,
            nav: false,
            margin:20,
            dots:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            autoHeight: true,
            /*animateOut: 'slideOutDown',
            animateIn: 'rotateIn'*/
        });
    </script>
    <script type="text/javascript">
        $('.carousel_detail').owlCarousel({
            navText: [ '<img src="'+ baseUrl() + '/public/images/l.png">', '<img src="'+ baseUrl() + '/public/images/r.png">' ],
            margin:20,
            dots:false,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            rewind:true,
            responsiveClass:true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1500: {
                    items: 6
                }
            }
            /*animateOut: 'slideOutDown',*/
            /*animateIn: 'rotateIn'*/
        });
    </script>
    <script type="text/javascript">
        $('.carousel_partner').owlCarousel({
            margin:20,
            dots:false,
            nav:false,
            autoplay:true,
            autoplayTimeout:1500,
            rewind:true,
            autoplayHoverPause:true,
            mouseDrag: true,
            touchDrag: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                },
                600:{
                    items:4,
                },
                1000:{
                    items:6
                }
            }
            /*animateOut: 'slideOutDown',*/
            /*animateIn: 'rotateIn'*/
        });
    </script>
    <script type="text/javascript">
        $('.carousel_news').owlCarousel({
            // navText: [ '<img src="images/l.png">', '<img src="images/r.png">' ],
            margin:20,
            dots:true,
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
                    items:3,
                    nav:false,
                }
            }
            /*animateOut: 'slideOutDown',*/
            /*animateIn: 'rotateIn'*/
        });
    </script>
    {{ $setting->codechat }}
    {{ $setting->analytics }}
    @yield('script')
</body>
</html>