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
            <li class="breadcrumb-item"><a href="#" title="">Tìm kiếm</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
        <p class="news-social">
            <img src="images/social.jpg" alt="" title="">
        </p>
        <div class="row">
            <aside class="col-md-12 col-lg-3">
                @include('templates.filter')
            </aside>
            <div class="col-md-12 col-lg-9">
                <h1 class="ndetail-tit"><a href="news-detail.html" title="">Kết quả tìm kiếm cho: "{{$search}}"</a></h1>
                    
                <div class="propage">
                    @if(count($products) > 0)
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
                    </div>
                    @else <h2 style="font-size: 24px; font-weight: bold">Không có kết quả</h2>
                    @endif
                </div>
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
