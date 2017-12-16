@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
$banner = DB::table('banner_content')->where('position',1)->get();
?>
@include('templates.layout.slider')
<div class="new-book">
    <div class="container-flush">
        <h2 class="text-center tit">Sách bán chạy</h2>

        <div class="owl-carousel owl-theme carousel_detail carousel-index">
            @foreach($productSale as $hotProduct)
            <div class="text-center text-uppercase item">
                <div class="text-center carousel_detail-item">
                    <a href="{{url('san-pham/'.$hotProduct->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$hotProduct->photo)}}" alt="{{$hotProduct->name}}" title="{{$hotProduct->name}}" class="img-responsive img "></a>
                     <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                        {!! csrf_field() !!}
                        <input type="hidden" name="product_id" value="{{ $hotProduct->id }}"> 
                        <input id="quantity" type="number" name="product_numb" min="1" value="1" class="tc item-quantity" style="display: none" />  
                    <button type="submit" class="btn btn-buy">MUA NGAY</button>
                    </form>

                    <div class="text-center carousel_content">
                        <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$hotProduct->alias.'.html')}}" title="{{$hotProduct->name}}">{{$hotProduct->name}}</a></h3>
                        <p class="text-center pro-price">{{number_format($hotProduct->price)}} <span>VNĐ</span></p>
                        <ul class="pro-rate">
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="banner">
    <div class="container-flush">
        <?php $banner = DB::table('banner_content')->where('position',1)->first(); ?>
        <img src="{{asset('upload/banner/'.$banner->image)}}" class="w-100 mx-auto" title="" alt="">
    </div>
</div>

<div class="curent-book container-padding">
    <div class="container-flush">
        <h2 class="text-center tit">Sách Mới</h2>
        <div class="row">
            <div class="col-lg-2 col-md-6 d-lg-block d-none">
                <?php $banners = DB::table('banner_content')->where('position',3)->get(); ?>
                <a href="{{$banners[0]->link}}" title=""><img src="{{asset('upload/banner/'.$banners[0]->image)}}" title="" alt="" title=""></a>
            </div>

            <div class="col-md-12 col-lg-8">
                <div class="row flex-wrap no-gutters curent-book-row ">
                    @foreach($news_product as $newProduct)
                    <div class="col-6 col-xl-3 col-lg-6">
                        <!-- <div class="text-center text-uppercase item"> -->
                            <div class="text-center text-center carousel_detail-item">
                                <a href="{{url('san-pham/'.$newProduct->alias.'.html')}}" title="{{$newProduct->name}}"><img src="{{asset('upload/product/'.$newProduct->photo)}}" alt="{{$newProduct->name}}" title="{{$newProduct->name}}" class="img-responsive img "></a>
                                <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="product_id" value="{{ $newProduct->id }}"> 
                                    <input id="quantity" type="number" name="product_numb" min="1" value="1" class="tc item-quantity" style="display: none" />  
                                <button type="submit" class="btn btn-buy">MUA NGAY</button>
                                </form>
                                <div class="text-center carousel_content">
                                    <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$newProduct->alias.'.html')}}" title="{{$newProduct->name}}">{{$newProduct->name}}</a></h3>
                                    <p class="text-center pro-price">{{number_format($newProduct->price)}} <span>VNĐ</span></p>
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
            </div>

            <div class="col-lg-2 col-md-6 d-lg-block d-none">
                <a href="{{$banners[1]->link}}" title=""><img src="{{asset('upload/banner/'.$banners[1]->image)}}" title="" alt="" title=""></a>
            </div>
        </div><!-- end row -->  
    </div>
</div>

<div class="curent-book">
    <div class="container">
        <h2 class="text-center tit">Sách sắp phát hành</h2>
            <div class="row flex-wrap no-gutters curent-book-row ">
                @foreach($hot_product as $hotProduct)
                <div class="col-6 col-xl-3 col-lg-6">
                    <!-- <div class="text-center text-uppercase item"> -->
                        <div class="text-center text-center carousel_detail-item">
                            <a href="{{url('san-pham/'.$hotProduct->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$hotProduct->photo)}}" alt="" title="" class="img-responsive img "></a>
                             <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                                {!! csrf_field() !!}
                                <input type="hidden" name="product_id" value="{{ $hotProduct->id }}"> 
                                <input id="quantity" type="number" name="product_numb" min="1" value="1" class="tc item-quantity" style="display: none" />  
                            <button type="submit" class="btn btn-buy">MUA NGAY</button>
                            </form>
                            <div class="text-center carousel_content">
                                <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$hotProduct->alias.'.html')}}" title="">{{$hotProduct->name}}</a></h3>
                                <p class="text-center pro-price">{{number_format($hotProduct->price)}} <span>VNĐ</span></p>
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

        </div><!-- end row -->  
    </div>
</div>

<div class="brand">
    <div class="container">
        <div class="owl-carousel owl-theme carousel_partner">
            <?php $partners = DB::table('partner')->get(); ?>
            @foreach($partners as $p)
            <div class="text-center text-uppercase item">
                <a href="#" title=""><img src="{{asset('upload/banner/'.$p->photo)}}" title="" alt=""></a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="news">
    <div class="container">
        <h2 class="tit">Tin tức - Sự kiện</h2>
        <div class="row flex-wrap">
            @foreach($hot_news as $hotNews)
            <div class="col-md-12 col-lg-4">
                <div class="news-item">
                    <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title="{{$hotNews->name}}"><img src="{{asset('upload/news/'.$hotNews->photo)}}" alt="{{$hotNews->name}}" title="{{$hotNews->name}}"></a>
                </div>
                <div class="news-content">
                    <h3 class="text-uppercase text-center news-tit"><a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title="{{$hotNews->name}}">{{$hotNews->name}}</a></h3>
                    <p class="des-news">{{$hotNews->mota}}</p>
                </div>
            </div>
            @endforeach
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
