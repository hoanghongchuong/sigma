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
                                <!-- <li class="text-uppercase"><a href="list-pro.html" title="">Sách giáo khoa</a>
                                    <ul class="text-capitalize sub-menu-list">
                                        <li><a href="list-child.html" title="">Sách - Truyện thiếu nhi</a></li>
                                        <li><a href="list-child.html" title="">Sách Toán Song Ngữ</a></li>
                                        <li><a href="list-child.html" title="">Sách toán phổ thông</a></li>
                                        <li><a href="list-child.html" title="">Sách toán tham khảo</a></li>
                                        <li><a href="list-child.html" title="">Tạp chí toán học</a></li>
                                        <li><a href="list-child.html" title="">Sách phổ thông</a></li>
                                    </ul>
                                </li>
                                <li class="text-uppercase"><a href="list-pro.html" title="">Sách giáo khoa</a>
                                    <ul class="text-capitalize sub-menu-list">
                                        <li><a href="list-child.html" title="">Sách - Truyện thiếu nhi</a></li>
                                        <li><a href="list-child.html" title="">Sách Toán Song Ngữ</a></li>
                                        <li><a href="list-child.html" title="">Sách toán phổ thông</a></li>
                                        <li><a href="list-child.html" title="">Sách toán tham khảo</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="text-uppercase"><a href="#" title="">Hotline đặt sách</a>
                                    <ul class="text-capitalize sub-menu-list">
                                        <li class="top-tel"><a href="tel:0968582838" title="">0968 582 838</a></li>
                                        <li>Email: <a href="mailto:info@gco.vn" title="" class="text-lowercase">info@gco.vn</a></li>
                                        <li>Website: <a href="www.gco.vn" title="" class="text-lowercase">www.gco.vn</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                        <li><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a></li>
                        <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
                        <li><a href="combo.html" title="">Combo</a></li>
                        <li><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="d-flex align-items-center menu-wrap-r">
                <a href="#login" data-toggle="modal" data-target="#login" title="">Đăng nhập</a>
                <a href="#" data-toggle="modal" data-target="#regis" title="">Đăng ký</a>
            </div>
        </div>
    </div>      
</div>