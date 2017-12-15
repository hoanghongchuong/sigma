<?php 
    $setting = Cache::get('setting');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sách điện tử</title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/owl.carousel.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/owl.theme.default.min.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/jquery.mmenu.css')}}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/css/jquery.mmenu.widescreen.css')}}" rel="stylesheet" media="(min-width: 1025px)">
    <link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css'>
</head>
<body>
    
    <section class="tbanner">
        <div class="container-flush">
            <img src="{{asset('public/images/banner2.jpg')}}" title="" alt="">
        </div>
    </section>

    <header class="nheader">
        <div class="nheader-first">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start nheader-l">
                            <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" title="" alt=""></a>
                            
                            <div class="addthis_toolbox addthis_default_style" style="margin-top:10px;">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="d-flex align-items-center justify-content-lg-end justify-content-center w-100 h-100 nheader-r">
                            <li>Sigma là ai?</li>
                            <li><a href="#login" data-toggle="modal" data-target="#login" title="">Đăng nhập</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login" title="" class="btn btn-regis">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="nheader-menu">
            <div class="container">
                <div class="owl-carousel owl-theme carousel_menu">
                    @foreach($cateEBook as $c)
                    <div class="item"><a href="{{url('sach-dien-tu/'.$c->alias)}}" title="">{{$c->name}}</a></div>
                    @endforeach
                </div>
                <!-- <ul class="nheader-menu-wrap">
                    <li><a href="danh-sach.html" title="">Sách nói</a></li>
                    <li><a href="danh-sach.html" title="">Kinh doanh</a></li>
                    <li><a href="danh-sach.html" title="">Ngôn tình</a></li>
                    <li><a href="danh-sach.html" title="">Kỹ năng</a></li>
                    <li><a href="danh-sach.html" title="">Tác phẩm kinh điển</a></li>
                    <li><a href="danh-sach.html" title="">Tủ sách gia đình</a></li>
                    <li><a href="danh-sach.html" title="">Văn học</a></li>
                    <li><a href="danh-sach.html" title="">Nhân vật - Sự kiện</a></li>
                    <li><a href="danh-sach.html" title="">Văn hóa - Xã hội</a></li>
                    <li><a href="danh-sach.html" title="">Khoa học - Công nghệ</a></li>
                    <li><a href="danh-sach.html" title="">Thiếu nhi</a></li>
                </ul> -->
            </div>
        </div>
    </header>

    <section class="search">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12">
                    <form action="{{ route('searchEbook') }}" method="post" class="d-flex align-items-center w-100 nsearch-frm">
                        {{ csrf_field() }}
                        <select name="cateEbook" id="" class="search-cate">
                            <option value="">Danh mục sách</option>
                            @foreach($cateEBook as $ebook)
                            <option value="{{$ebook->id}}">{{$ebook->name}}</option>
                            @endforeach
                        </select>
                        <div class="d-flex w-100 align-items-center">
                            <input type="text" name="search_ebook" placeholder="Tìm kiếm sách..." class="w-100">
                            <button type="submit" class="btn nsearch-btn"><img src="{{asset('public/images/search.png')}}" alt=""></button>
                        </div>
                    </form>
                    <!-- <p class="text-center search-tip">Gợi ý: Tư duy nhà giàu, Dạy con làm giàu. Cơn mưa dưới huyết trì</p> -->
                </div>
            </div>
        </div>
        <p class="text-center search-up">
            Hơn 100 thành viên GCO Group luôn nỗ lực không ngừng hướng đến mục tiêu trở thành công ty Công nghệ và Truyền thông hàng đầu cả nước, vươn ra tầm khu vực
        </p>
    </section>

    <section class="rbook">
        <div class="container">
            <h2 class="text-center rbook-btit">Sách đọc nhiều</h2>
            <div class="owl-carousel owl-theme rbook-slider">
                @foreach($hotEbook as $hotE)
                <div class="item">
                    <div class="rbook-slider-item">
                        <div class="row no-gutters">
                            <div class="col-sm-5">
                                <div class="rbook-img">
                                    <a href="{{url('sach-dien-tu/'.$hotE->alias.'.html')}}"><img src="{{asset('upload/product/'.$hotE->photo)}}" title="" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-7 pl-3">
                                <h3 class="rbook-tit"><a href="{{url('sach-dien-tu/'.$hotE->alias.'.html')}}" title="{{$hotE->name}}">{{$hotE->name}}</a></h3>
                                <?php $tg = DB::table('tacgia')->where('id', $hotE->tacgia_id)->first(); ?>
                                <h4 class="rbook-author">Tác giả: {{@$tg->name}} <span></span></h4>

                                <ul class="rate">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <div class="rbook-cap">
                                    {!!$hotE->mota!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="thk">
        <div class="container">
            <p class="text-center thk-tit">Cảm ơn các bạn đã tin tưởng chọn Sigma đọc sách. Sự ủng hộ của các bạn là động lực giúp Sigma không ngừng cải tiến và phát triển!</p>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="text-center thk-wrap">
                        <img src="{{asset('public/images/i6.png')}}" title="" alt="">
                        <h2>Đọc ở mọi lúc mọi nơi</h2>
                        <p class="text-center">Sigma dùng được trên máy vi tính, di động, máy tính bảng của bạn.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center thk-wrap">
                        <img src="{{asset('public/images/i7.png')}}" title="" alt="">
                        <h2>Không quảng cáo</h2>
                        <p class="text-center">Tất cả các sách bạn đọc đều không có quảng cáo.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center thk-wrap">
                        <img src="{{asset('public/images/i8.png')}}" title="" alt="">
                        <h2>Đa dạng nhiều thể loại</h2>
                        <p class="text-center">Sigma dùng được trên máy vi tính, di động, máy tính bảng của bạn.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="text-center thk-wrap">
                        <img src="{{asset('public/images/i10.png')}}" title="" alt="">
                        <h2>Đọc sách siêu rẻ</h2>
                        <p class="text-center">Sigma dùng được trên máy vi tính, di động, máy tính bảng của bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nbook">
        <div class="container">
            <h2 class="text-center nbook-btit">Sách mới nhất</h2>
            <div class="row">
                @foreach($ebooks as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="nbook-wrap">
                        <a href="{{url('sach-dien-tu/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/product/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
                    </div>
                    <div class="nbook-tit">
                        <h3><a href="{{url('sach-dien-tu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                    </div>
                    <div class="nbook-info">
                        <ul class="rate">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                         <?php $tg = DB::table('tacgia')->where('id', $item->tacgia_id)->first(); ?>
                        <h4 class="rbook-author">Tác giả: <span>{{@$tg->name}}</span></h4>
                    </div>
                </div>
                @endforeach
                
            </div>

            <p class="text-center load-more"><a href="#">Xem thêm các sách khác</a></p>
        </div>
    </section>

    <footer class="ft">
        <div class="container">
            <h2 class="text-uppercase ft-tit">Từ khóa tìm kiếm</h2>
            <div class="ftmenu-wrap">
                <ul class="ft-menu">
                    @foreach($cateEBook as $ebook)
                    <li><a href="#" title="">{{$ebook->name}}</a></li>
                    @endforeach
                    
                </ul>
            </div>
            <!-- <div class="d-flex flex-md-row flex-column align-items-center justify-content-between ft-card"> -->
            <div class="ft-bcard">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ft-card-l">
                            <!-- <div class="align-items-center">
                                <span class="mr-2">Chấp nhận thanh toán qua:</span> <a href="#" title=""><img src="images/cart_01.jpg" title="" alt=""></a> <a href="#" title=""><img src="images/cart_02.jpg" title="" alt=""></a> <a href="#" title=""><img src="images/cart_03.jpg" title="" alt=""></a> <a href="#" title=""><img src="images/cart_02.jpg" title="" alt=""></a> <a href="#" title=""><img src="images/cart_03.jpg" title="" alt=""></a>
                            </div> -->
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end ft-card-r">
                            <span class="mr-2">Chia sẻ với chúng tôi:</span> 

                            <ul class="ft-social">
                                <li><a href="{{$setting->facebook}}" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$setting->twitter}}" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$setting->google}}" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{{$setting->instagram}}" title=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-last">
                <h2>© 2017 Công ty Cổ phần Công nghệ và Truyền thông GCO</h2>

                <p>Địa chỉ: <span>{{$setting->address}}</span></p>
                <p>Điện thoại : <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> - Website: <a href="{{$setting->website}}" target="_blank" >{{$setting->website}}</a></p>
            </div>
        </div>
    </footer>

    <!-- modal login -->
    <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h2 class="tit text-center w-100 text-uppercase">Đăng nhập hệ thống</h2> -->
                    <ul class="w-100 bold d-flex align-items-center justify-content-start nav nav-pills mb-3 text-center newfilm-tab-menu" id="pills-tab" role="tablist">
                        <li class="nav-item w-50">
                            <a class="nav-link active" id="login" data-toggle="pill" href="#login-frm1" role="tab" aria-controls="pills-info" aria-selected="false">Đăng nhập</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link" id="regis" data-toggle="pill" href="#regis-frm2" role="tab" aria-controls="pills-info" aria-selected="false">Đăng ký tài khoản </a>
                        </li>
                    </ul>

                    <button type="button" class="d-block d-sm-none close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-content film-tab-content" id="login-frmwrap">
                        <div id="login-frm1" class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                            <form action="{{route('postLogin')}}" method="post" id="tutorial" class="form-group login-frm">
                                {{ csrf_field() }}
                                <div class="frm-wrap">
                                    <input type="text" placeholder="Tài khoản" id="email" name="username" required="required" class="w-100">
                                    <input type="password" placeholder="Mật khẩu" id="password" name="password" required="required" class="w-100">
                                    <div class="success" style="display:none;"></div>
                                    <p class="d-flex align-items-center mb-3 login-choice-wrap"><span class="login-choice"></span> Mua hàng không cần đăng nhập</p>
                                    <p class="text-center mt-4 mb-1">
                                        <a href="{{url('')}}" title=""><img src="{{asset('public/images/logo.png')}}" alt="" title=""></a>
                                    </p>
                                </div>
                                <button type="button" id="btn-login" class="w-100 text-uppercase font-weight-bold btn login-btn">Đăng nhập</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="regis-frm2" role="tabpanel" aria-labelledby="pills-info-tab">
                            <form action="{{ route('postSignup') }}" method="post" id="formDemo" class="form-group login-frm formDemo">
                                {{ csrf_field() }}
                                <div class="frm-wrap">
                                    <input type="text" placeholder="Tên tài khoản" required name="username"  class="w-100">
                                    <input type="email" placeholder="Email đăng ký" required name="email" class="w-100">
                                    <input id="passwords" class="w-100" name="password" type="password"  placeholder="Vui lòng nhập Password" required>
                                    <input name="confirm_password" id="confirm_password" class="w-100" type="password" placeholder="Vui lòng nhập lại Password" required>
                                    <p class="text-center mt-4 mb-1">
                                        <a href="#"><img src="{{asset('public/images/logo.png')}}" alt="logo" title=""></a>
                                    </p>
                                </div>
                                <button type="submit" class="w-100 text-uppercase font-weight-bold btn login-btn">Đăng ký ngay</button>
                            </form>
                        </div>
                    </div>
                </div><!-- end modal body -->
            </div>
        </div>
    </div>

    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/owl.carousel.js')}}"></script>
    <script src="{{asset('public/js/jquery.mmenu.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('public/js/jquery.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('public/js/custom.js')}}"></script> -->
    <script src="{{asset('public/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        window.token = '{{ csrf_token() }}';
        // window.urlAddCart = '{{ route("addProductToCartAjax") }}';
        // window.getRate = '{{ route("rating") }}';
   </script>
   <script type="text/javascript">
        $('#btn-login').click(function(){

          var password = $('#password').val();
          var email = $('#email').val();
          // alert(email);
          $.ajax({
              type: "POST",
              url: baseUrl()+"/login", 
              data: {
                username : email,
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
    <script type="text/javascript">
        $('.rbook-slider').owlCarousel({
            navText: [ '<img src="'+ baseUrl() +'/public/images/l.png">', '<img src="'+ baseUrl() +'/public/images/r.png">' ],
            rewind:true,
            margin:20,
            dots:false,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true,
                }
            }
            /*animateOut: 'slideOutDown',*/
            /*animateIn: 'rotateIn'*/
        });
    </script>
    <script type="text/javascript">
        $('.carousel_menu').owlCarousel({
            rewind:true,
            margin:15,
            autoWidth:true,
            loop:true,
            dots:false,
            autoplay:true,
            autoplayTimeout:1200,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:4,
                    nav:false
                },
                1000:{
                    items:11,
                    nav:false,
                }
            },
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
    </script>
</body>
</html>