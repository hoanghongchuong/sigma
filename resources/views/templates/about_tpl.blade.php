@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a></li>
            <!-- <li class="breadcrumb-item"><a href="news-detail.html" title="">Làm thế nào để hoạt động ngoại khoá không làm ảnh hưởng tới việc học?</a></li> -->
        </ul>
    </div>
</div>

<div class="news-section news-detail">
    <div class="container">
        <!-- <h1 class="ndetail-tit"><a href="news-detail.html" title="">Làm thế nào để hoạt động ngoại khoá không làm ảnh hưởng tới việc học?</a></h1> -->
        <!-- <p class="news-social">
            <img src="{{asset('public/images/social.jpg')}}" alt="" title="">
        </p> -->
        <div class="newspage-content">
            {!! $about->content !!}
        </div>
        
        <div class="fb-comments" data-href="{{url('gioi-thieu')}}" data-width="100%" data-numposts="5"></div>
        
        <div class="news-re-list ndetail-re-list">
            <h2 class="news-re-list-tit">Tin tức mới</h2>
            <?php $tintuc = DB::table('news')->where('com','tin-tuc')->where('status',1)->take(6)->orderBy('id','desc')->get(); ?>
            @foreach($tintuc as $item)
            <h3><a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></h3>
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
