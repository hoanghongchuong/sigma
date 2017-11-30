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
            <li class="breadcrumb-item"><a href="{{url('san-pham/'.@$cateProduct->alias)}}" title="">{{@$cateProduct->name}}</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
        <div class="row">
            <aside class="col-md-12 col-lg-3 mt-4">
                <div class="aside-wrap">
                    <ul class="pro-menu">
                       
                    </ul>
                    @include('templates.filter')
                    <?php $qc = DB::table('banner_content')->where('position', 5)->get(); ?>
                    @foreach(@$qc as $q)
                    <a href="{{$q->link}}" title="" class="d-lg-block d-none"><img src="{{asset('upload/banner/'.$q->image)}}" alt="" title=""></a>
                    @endforeach
                </div>
            </aside>
            <div class="col-md-12 col-lg-9">
                
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <img id="zoom_01" src="{{asset('upload/product/'.$product_detail->photo)}}" data-zoom-image="{{asset('upload/product/'.$product_detail->photo)}}" />
                        <!-- <a href="pro-detail.html" title=""><img src="images/b5.jpg" alt="" title=""></a> -->
                        <div id="gal1">
                            @if(count($album_hinh) > 0)
                            @foreach($album_hinh as $a)
                            <a href="#" data-image="{{asset('upload/hasp/'.$a->photo)}}" data-zoom-image="{{asset('upload/hasp/'.$a->photo)}}">
                                <img id="zoom_01" src="{{asset('upload/hasp/'.$a->photo)}}" />
                            </a>
                            @endforeach
                            @else    
                            <a href="#" data-image="{{asset('upload/product/'.$product_detail->photo)}}" data-zoom-image="{{asset('upload/product/'.$product_detail->photo)}}">
                                <img id="zoom_01" src="{{asset('upload/product/'.$product_detail->photo)}}" />
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 pdetail-intro">
                        <h1 class="ndetail-tit"><a href="{{url('san-pham/'.$product_detail->alias.'.html')}}" title="{{$product_detail->name}}">{{$product_detail->name}}</a></h1>
                        <p class="news-social">
                           <div class="addthis_toolbox addthis_default_style" style="margin-top:10px;">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                                <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>
                        </p>
                        <!-- <h2 class="p-status">Tình trạng: <span>Còn hàng</span></h2> -->
                        
                        <div class="rate_row"></div><p>(Đánh giá sản phẩm)</p>
                        <div class="mess-rate" style="margin-top: 5px; color: #1ba056"></div>
                        <input type="hidden" name="productId" class="productId" value="{{ $product_detail->id }}"> 
                        <h3 class="p-price">Giá: <span>{{number_format($product_detail->price)}}</span> VNĐ</h3>
                        <h3 class="p-o-price"><del>Giá bìa: <span>{{number_format($product_detail->price_old)}}</span> đ</del></h3>
                        <p>{!! $product_detail->mota !!}</p>
                        <form action="{{ route('addProductToCart') }}" method="post" class="p-qty-frm">
                            {{ csrf_field() }}
                            <div class="form-inline text-uppercase">
                                <input type="hidden" name="product_id" value="{{ $product_detail->id }}"> 
                                <input type="number" name="product_numb" min="1" required="required" value="1">
                                <button type="submit" class="btn text-uppercase btn-pbuy">Mua ngay</button>
                                <a href="reader.html" title="" class="btn btn-read">Đọc thử</a>
                            </div>
                        </form>
                        
                    </div>
                </div><!-- end row -->
                
                <div class="pdetail-it">
                    <h2 class="text-uppercase pdetail-intro-tit">Giới thiệu sách</h2>
                    <p>{!! $product_detail->content !!}</p>
                </div>

                <div class="p-rate-point">
                    <h2 class="prate-point-tit">Đánh giá từ khách hàng</h2>
                    <div class="rate-wrap">
                        <ul class="pro-rate">
                            @for($i = 1; $i <= 5; $i++)
                            <li><i class="fa fa-star-o"></i></li>
                            @endfor
                        </ul>
                        <span>{{$numbRates}} lượt đánh giá - {{$rateGood}}/{{$numbRates}} lượt đánh giá tốt</span>
                    </div>
                </div>

                <h2 class="prate-point-tit">
                    <span class="mr-4">Tag: </span>
                    <ul class="p-tags">
                        <li><a href="#" title="">Toán tài năng</a></li>
                        <li><a href="#" title="">Toán tuổi thơ</a></li>
                        <li><a href="#" title="">Em yêu toán học</a></li>
                        <li><a href="#" title="">Toán tài năng</a></li>
                        <li><a href="#" title="">Toán tuổi thơ</a></li>
                        <li><a href="#" title="">Em yêu toán học</a></li>
                    </ul>
                </h2>


                <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-width="100%" data-numposts="5"></div>
                <!-- product re -->
                <h2 class="ndetail-tit"><a href="news-detail.html" title="">Sách liên quan</a></h2>

                <div class="owl-carousel owl-theme carousel_detail carousel-re-pro">
                    @foreach($productSameCate as $item)
                    <div class="text-center text-uppercase item">
                        <div class="carousel_detail-item">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" title="{{$item->name}}" class="img-responsive img "></a>
                            <form id="add-item-form" action="{{ route('addProductToCart') }}" method="post" class="variants clearfix"> 
                                {!! csrf_field() !!}
                                    <input type="hidden" name="product_id" value="{{ $item->id }}"> 
                                    <input id="quantity" type="number" name="product_numb" min="1" value="" class="tc item-quantity" style="display: none" />
                                <button type="submit" class="btn btn-buy">MUA NGAY</button>
                            </form>
                            <div class="text-center carousel_content">
                                <h3 class="text-center pro-name"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></h3>
                                <p class="text-center pro-price">{{number_format($item->price)}} <span>VNĐ</span></p>
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
