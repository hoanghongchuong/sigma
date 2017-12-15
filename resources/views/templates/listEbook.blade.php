
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $setting = Cache::get('setting'); 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
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
                            <ul class="ml-4 nheader-social">
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-stumbleupon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        @if(isset($nguoidung))
                            <!-- 
                            <a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title=""><img src="{{asset('upload/users/'.$nguoidung->photo)}}" style="width: 43px; height: 43px;" title="" alt=""></a>
                            <div class="ml-2 menu-acc">
                                <h1 class="text-capitalize menu-acc-tit"><a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">{{$nguoidung->username}}</a></h1>
                                <p class="menu-acc-xu">Hiện có <span>12345</span> xu</p>
                            </div>
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">Quản lý tài khoản</a>
                                <a class="dropdown-item" href="{{url('lich-su-mua-hang/'.$nguoidung->id)}}" title="">Lịch sử mua hàng</a>
                                <a href="{{route('logout')}}" class="dropdown-item btn text-center text-uppercase exit-btn">Thoát</a>
                            </div> -->
                            <ul class="d-flex align-items-center justify-content-lg-end justify-content-center w-100 h-100 nheader-r">
                                <li><a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title=""><img src="{{asset('upload/users/'.$nguoidung->photo)}}" style="width: 43px; height: 43px;" title="" alt=""></a></li>
                                <li>
                                    <div class="ml-2 menu-acc">
                                        <h1 class="text-capitalize menu-acc-tit"><a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">{{$nguoidung->username}}</a></h1>
                                        <p class="menu-acc-xu">Hiện có <span>12345</span> xu</p>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">Quản lý tài khoản</a>
                                        <a class="dropdown-item" href="{{url('lich-su-mua-hang/'.$nguoidung->id)}}" title="">Lịch sử mua hàng</a>
                                        <a href="{{route('logout')}}" class="dropdown-item btn text-center text-uppercase exit-btn">Thoát</a>
                                    </div>
                                </li>
                            </ul>
                        @else
                        <ul class="d-flex align-items-center justify-content-lg-end justify-content-center w-100 h-100 nheader-r">
                            <li>Sigma là ai?</li>
                            <li><a href="#login" data-toggle="modal" data-target="#login" title="">Đăng nhập</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login" title="" class="btn btn-regis">Đăng ký</a></li>
                        </ul>
                        @endif
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

    <section class="bdetail">
        <div class="container">
            <div class="pt-4 pb-3 list-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <h2 class="list-type">{{$cate->name}}</h2>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="owl-carousel owl-theme carousel_btype">
                            @foreach($cateEBook as $ebook)
                            <div class="item"><a href="{{url('sach-dien-tu/'.$ebook->alias)}}">{{$ebook->name}}</a></div>
                            @endforeach
                        </div>
                        <!-- <div class="bdetail-list-bwrap">
                            <ul class="d-flex align-items-center justify-content-between bdetail-list-wrap">
                                <li class="active"></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="list-decap">
                <p>{!! $cate->mota !!}</p>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="nbook-wrap">
                        <a href="{{url('sach-dien-tu/'.$product->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$product->photo)}}" title="" alt=""></a>
                    </div>
                    <div class="nbook-tit">
                        <h3><a href="{{url('sach-dien-tu/'.$product->alias.'.html')}}" title="">{{$product->name}}</a></h3>
                    </div>
                    <div class="nbook-info">
                        <ul class="rate">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <?php $tg = DB::table('tacgia')->where('id', $product->tacgia_id)->first(); ?>
                        <h4 class="rbook-author">Tác giả: <span>{{@$tg->name}}</span></h4>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- <p class="text-center load-more">Xem thêm các sách khác</p> -->
        </div>
    </section>

    <footer class="ft">
        <div class="container">
            <h2 class="text-uppercase ft-tit">Từ khóa tìm kiếm</h2>
            <div class="ftmenu-wrap">
                <ul class="ft-menu">
                    @foreach($cateEBook as $cate)
                    <li><a href="{{url('sach-dien-tu/'.$cate->alias)}}" title="{{$cate->name}}">{{$cate->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- <div class="d-flex flex-md-row flex-column align-items-center justify-content-between ft-card"> -->
            <div class="ft-bcard">
                <div class="row">
                    
                
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end ft-card-r">
                            <span class="mr-2">Chia sẻ với chúng tôi:</span> 
                            <ul class="ft-social">
                                <li><a href="{{$setting->facebook}}" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$setting->twitter}}" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$setting->google}}" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{{$setting->instagram}}" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-last">
                <h2>© 2017 Công ty Cổ phần Công nghệ và Truyền thông GCO</h2>

                <p>Địa chỉ: <span>{{$setting->address}}</span></p>
                <p>Điện thoại : <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> - Website: <a href="{{$setting->website}}">{{$setting->website}}</a></p>
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
                            <a class="nav-link active" id="login" data-toggle="pill" href="#login-frm" role="tab" aria-controls="pills-info" aria-selected="false">Đăng nhập</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link" id="regis" data-toggle="pill" href="#regis-frm" role="tab" aria-controls="pills-info" aria-selected="false">Đăng ký tài khoản </a>
                        </li>
                    </ul>

                    <button type="button" class="d-block d-sm-none close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-content film-tab-content" id="login-frmwrap">
                        <div id="login-frm" class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                            <form action="" class="form-group login-frm">
                                <div class="frm-wrap">
                                    <input type="text" placeholder="Tài khoản" required="required" class="w-100">
                                    <input type="password" placeholder="Mật khẩu" required="required" class="w-100">
                                    <p class="d-flex align-items-center mb-3 login-choice-wrap"><span class="login-choice"></span> Mua hàng không cần đăng nhập</p>
                                    <p class="text-center mt-4 mb-1">
                                        <a href="index.html" title=""><img src="{{asset('public/images/logo.png')}}" alt="" title=""></a>
                                    </p>
                                </div>
                                <button type="submit" class="w-100 text-uppercase font-weight-bold btn login-btn">Tiếp tục</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="regis-frm" role="tabpanel" aria-labelledby="pills-info-tab">
                            <form action="" class="form-group login-frm regis-frm">
                                <div class="frm-wrap">
                                    <input type="text" placeholder="Tên tài khoản" required="required" class="w-100">
                                    <input type="email" placeholder="Email đăng ký" required="required" class="w-100">
                                    <input type="password" class="w-100" required="required" placeholder="Mật khẩu">
                                    <input type="password" class="w-100" required="required" placeholder="Nhập lại mật khẩu">
                                    
                                    <p class="text-center mt-4 mb-1">
                                        <a href="index.html" title=""><img src="{{asset('public/images/logo.png')}}" alt="" title=""></a>
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
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
       
   </script>
    <script type="text/javascript">
        $('.carousel_btype').owlCarousel({
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
                    items:7,
                    nav:false,
                }
            },
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
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