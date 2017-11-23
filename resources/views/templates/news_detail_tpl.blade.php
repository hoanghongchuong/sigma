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
            <li class="breadcrumb-item"><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
            <li class="breadcrumb-item"><a href="{{url('tin-tuc/'.$news_detail->alias.'.html')}}" title="">{{$news_detail->name}}</a></li>
        </ul>
    </div>
</div>

<div class="news-section news-detail">
    <div class="container">
        <h1 class="ndetail-tit"><a href="{{url('tin-tuc/'.$news_detail->alias.'.html')}}" title="">{{$news_detail->name}}</a></h1>
        <p class="news-social">
            <!-- <img src="{{asset('public/images/social.jpg')}}" alt="" title=""> -->
            <div class="addthis_toolbox addthis_default_style" style="margin-top:10px;">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>
        </p>
        <div class="newspage-content">
            {!! $news_detail->content !!}
        </div>
        
        <div class="fb-comments" data-href="{{url('tin-tuc/'.$news_detail->alias.'.html')}}" data-width="100%" data-numposts="5"></div>
        
        <div class="news-re-list ndetail-re-list">
            <h2 class="news-re-list-tit">Các bài viết liên quan khác</h2>
            @foreach($tintuc_moinhat_detail as $item)
            <h3><a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h3>
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
