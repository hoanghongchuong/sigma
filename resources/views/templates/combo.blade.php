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
            <li class="breadcrumb-item"><a href="{{url('combo')}}" title="">Combo</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
       
        <div class="row">
            <aside class="col-md-12 col-lg-3">
                <div class="aside-wrap">
                    
                    @include('templates.filter')

                    <?php $qc = DB::table('banner_content')->where('position', 5)->get(); ?>
                    @foreach(@$qc as $q)
                    <a href="{{$q->link}}" title="" class="d-lg-block d-none"><img src="{{asset('upload/banner/'.$q->image)}}" alt="" title=""></a>
                    @endforeach
                </div>
            </aside>
            <div class="col-md-12 col-lg-9">
                <h1 class="ndetail-tit"><a href="#" title="Combo">Combo</a></h1>
                
                <div class="propage">
                    <div class="row flex-wrap no-gutters curent-book-row">
                        @foreach($combos as $product)
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="text-center text-uppercase item"> -->
                                <div class="carousel_detail-item">
                                    <a href="{{url('san-pham/'.$product->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$product->photo)}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive img "></a>
                                   <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"> 
                                        <input id="quantity" type="number" name="product_numb" min="1" value="1" class="tc item-quantity" style="display: none" />  
                                    <button type="submit" class="btn btn-buy">MUA NGAY</button>
                                    </form>
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
                    <div class="paginations">{!! $combos->links() !!}</div>
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
