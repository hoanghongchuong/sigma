@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="list-pro.html" title="">{{$product_cate->name}}</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
        <!-- <h1 class="ndetail-tit"><a href="news-detail.html" title="{{$product_cate->name}}">{{$product_cate->name}}</a></h1> -->
        <p class="news-social">
            <img src="images/social.jpg" alt="" title="">
        </p>
        <div class="row">
            <aside class="col-md-12 col-lg-3">
                <div class="aside-wrap">
                    <ul class="pro-menu"><!-- list-child.html -->
                        @if(!empty($cate_pro))
                        @foreach($cate_pro as $catechild)
                        <li class="@if($product_cate->id == $catechild->id) active @endif"><a href="{{url('san-pham/'.$catechild->alias)}}" title="{{$catechild->name}}">{{$catechild->name}}</a></li>
                        @endforeach
                        @endif
                    </ul>
                    @include('templates.filter')
                    <a href="#" title="" class="d-lg-block d-none"><img src="{{asset('public/images/banner1.jpg')}}" alt="" title=""></a>
                </div>
            </aside>
            <div class="col-md-12 col-lg-9">
                <h1 class="ndetail-tit"><a href="news-detail.html" title="{{$product_cate->name}}">{{$product_cate->name}}</a></h1>
                <div class="newspage-content">
                    <p>Mua sách online tại Bansachtructuyen.com, bạn được tận hưởng chính sách hỗ trợ miễn phí đổi trả hàng, giao hàng nhanh – tận nơi – miễn phí*, thanh toán linh hoạt - an toàn.</p>

                    <p>Chỉ với 3 cú click chuột, chưa bao giờ trải nghiệm mua sách online lại dễ chịu và nhẹ nhàng như vậy. Còn chần chờ gì nữa, đặt mua ngay những tựa sách hay cùng hàng ngàn sản phẩm chất lượng khác tại Bansachtructuyen.com!</p>
                </div>
                <div class="banner pro-banner">
                    <a href="#" title=""><img src="images/banner.jpg" alt="" title=""></a>
                </div>
                
                <div class="propage">
                    <div class="row flex-wrap no-gutters curent-book-row">
                        @foreach($products as $product)
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="text-center text-uppercase item"> -->
                                <div class="carousel_detail-item">
                                    <a href="{{url('san-pham/'.$product->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$product->photo)}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive img "></a>
                                    <button class="btn btn-buy">MUA NGAY</button>
                                    <div class="text-center carousel_content">
                                        <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$product->alias.'.html')}}" title="">{{$product->name}}</a></h3>
                                        <p class="text-center pro-price">{{number_format($product->price)}} <span>VNĐ</span></p>
                                        <ul class="pro-rate">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                        @endforeach
                    </div><!-- end row -->
                    <div class="paginations">{!! $products->links() !!}</div>
                </div><!-- end propage -->
            </div><!-- end col-10 -->
        </div>
    </div>
</div>

<div class="khach">
    <img src="{{asset('public/images/khachbg.jpg')}}" title="" alt="">
    <div class="container khach-con">
        <div class="owl-carousel owl-theme carousel_khach">
            <?php $feedback = DB::table('feedback')->get(); ?>
            @foreach($feedback as $f)
            <div class="item">
                <div class="khach-wrap">
                    <div class="text-center khach-img">
                        <img class="mx-auto khach-item" src="{{asset('upload/hinhanh/'.$f->photo)}}" alt="" title="">
                        <i class="fa fa-quote-left khach-decor"></i>
                    </div>
                    <ul class="text-center khach-rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <p class="text-center">{{$f->name}}</p>
                    <blockquote class="font-weight-bold text-center">{!! $f->content !!}</blockquote>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <h1 class="text-uppercase btit">Nhà sách trực tuyến Sigmabooks</h1>
        <p{!! $about->mota !!}</p>
    </div>
</div>
@endsection
