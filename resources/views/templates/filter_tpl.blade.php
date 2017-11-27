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
            <li class="breadcrumb-item"><a href="list-pro.html" title="">Tìm kiếm</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
        
        <div class="row">
            <aside class="col-md-12 col-lg-3">
                <div class="aside-wrap">
                    
                    @include('templates.filter')
                    <a href="#" title="" class="d-lg-block d-none"><img src="{{asset('public/images/banner1.jpg')}}" alt="" title=""></a>
                </div>
            </aside>
            <div class="col-md-12 col-lg-9">
                <div class="propage">
                    <div class="row flex-wrap no-gutters curent-book-row">
                        @foreach($result as $product)
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="text-center text-uppercase item"> -->
                                <div class="carousel_detail-item">
                                    <a href="{{url('san-pham/'.$product->productAlias.'.html')}}" title=""><img src="{{asset('upload/product/'.$product->productPhoto)}}" alt="{{$product->productName}}" title="{{$product->productName}}" class="img-responsive img "></a>
                                   <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="product_id" value="{{ $product->pID }}"> 
                                        <input id="quantity" type="number" name="product_numb" min="1" value="1" class="tc item-quantity" style="display: none" />  
                                    <button type="submit" class="btn btn-buy">MUA NGAY</button>
                                    </form>
                                    <div class="text-center carousel_content">
                                        <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$product->productAlias.'.html')}}" title="">{{$product->productName}}</a></h3>
                                        <p class="text-center pro-price">{{number_format($product->productPrice)}} <span>VNĐ</span></p>
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
                    <div class="paginations" style="margin-top: 40px;">{!! $result->links() !!}</div>
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
