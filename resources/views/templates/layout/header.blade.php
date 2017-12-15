<?php
    $setting = Cache::get('setting');
    $menu_top = Cache::get('menu_top');
    $cateProducts = Cache::get('cateProducts');
?>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-9">
                <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="Logo" title=""></a>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 order12">
                <form action="{{route('search')}}" method="get" class="form-group h-100 d-flex align-items-center search-frm">
                    {{csrf_field()}}
                    <input type="text" required="required" class="w-100 search-ip" name="txtSearch" placeholder="Đánh thức tài năng Toán học, Những cuộc phiêu lưu của những người thích đếm,...">
                    <button type="submit" class="btn text-uppercase search-btn">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-xl-1 col-lg-2 col-md-2 col-3 text-center">
                <div class="top-cart h-100 d-flex align-items-center flex-column justify-content-center">
                    <a href="{{url('gio-hang')}}" title=""><img src="{{asset('public/images/cart.png')}}" title="Giỏ hàng" alt="Giỏ hàng">
                        <span class="quan">{{Cart::count()}}</span>
                    </a>
                    <div class="cart-tit">GIỎ HÀNG</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="menu">
    <div class="container">
        <div class="d-flex w-100 justify-content-between menu-wrap">
            <div class="d-flex menu-wrap-l">
                <a href="#" id="menu-button"><i class="fa fa-bars menu-open"></i></a>
                <div id="my-menu">
                    <ul class="flex-column flex-md-row menu-list">
                        <li><a href="#" title="">Danh mục sách</a>
                            <ul class="sub-menu">
                                @foreach($cateProducts as $cate)
                                <li class="text-uppercase"><a href="#" title="{{$cate->name}}">{{$cate->name}}</a>
                                    <?php $cateChild = DB::table('product_categories')->where('status',1)->where('parent_id',$cate->id)->get(); ?>

                                    <ul class="text-capitalize sub-menu-list">
                                    @foreach($cateChild as $cate2)
                                        <li><a href="{{url('san-pham/'.$cate2->alias)}}" title="">{{$cate2->name}}</a></li>
                                    @endforeach    

                                    </ul>
                                </li>
                                @endforeach
                                
                                <li class="text-uppercase"><a href="#" title="">Hotline đặt sách</a>
                                    <ul class="text-capitalize sub-menu-list">
                                        <li class="top-tel"><a href="tel:0968582838" title="">0968 582 838</a></li>
                                        <!-- <li>Email: <a href="mailto:info@gco.vn" title="" class="text-lowercase">info@gco.vn</a></li>
                                        <li>Website: <a href="www.gco.vn" title="" class="text-lowercase">www.gco.vn</a></li> -->
                                    </ul>
                                </li> 
                            </ul>
                        </li>
                        <li><a href="{{url('')}}" title="Trang chủ">Trang chủ</a></li>
                        <li><a href="{{url('gioi-thieu')}}" title="Giới thiệu">Giới thiệu</a></li>
                        <li><a href="{{url('tin-tuc')}}" title="TTin tức">Tin tức</a></li>
                        <li><a href="{{url('combo')}}" title="Combo">Combo</a></li>
                        <li><a href="{{url('sach-dien-tu')}}" title="">Sách điện tử</a></li>
                        <li><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="d-flex align-items-center pb-1 menu-r">
                @if(isset($nguoidung))
                    <!-- <a href="{{ url('tai-khoan/'.$nguoidung->id) }}" >{{$nguoidung->username}}</a>
                    <a href="{{route('logout')}}" title="Đăng xuất">Đăng xuất</a> -->
                    <a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title=""><img src="{{asset('upload/users/'.$nguoidung->photo)}}" style="width: 43px; height: 43px;" title="" alt=""></a>
                    <div class="ml-2 menu-acc">
                        <h1 class="text-capitalize menu-acc-tit"><a href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">{{$nguoidung->username}}</a></h1>
                        <!-- <p class="menu-acc-xu">Hiện có <span>12345</span> xu</p> -->
                    </div>
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ url('tai-khoan/'.$nguoidung->id) }}" title="">Quản lý tài khoản</a>
                        <a class="dropdown-item" href="{{url('lich-su-mua-hang/'.$nguoidung->id)}}" title="">Lịch sử mua hàng</a>
                        <a href="{{route('logout')}}" class="dropdown-item btn text-center text-uppercase exit-btn">Thoát</a>
                    </div>
                @else
                <a href="#login" data-toggle="modal" data-target="#login" style="margin-right: 5px;" title="Đăng nhập">Đăng nhập</a>
                <a href="#" data-toggle="modal" data-target="#login" title="Đăng kí">Đăng ký</a>
                @endif
            </div>
        </div>
    </div>      
</div>