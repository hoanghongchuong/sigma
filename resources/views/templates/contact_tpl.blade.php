@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    // $about = Cache::get('about');
    $about = DB::table('about')->select()->first();
?>
@include('templates.layout.slider')
<div class="contact">
    <div class="container">
        <h2 class="tit">Liên hệ</h2>
        <div class="row"  style="margin-bottom: 20px;">
            @foreach($chinhanh as $item)
            <div class="col-md-6">
                <h3 class="contact-tit">{{$item->name}}</h3>
                <ul class="news-re">
                    <li><a href="news-detail.html" title="">{{$item->address}}</a></li>
                    <li>
                        Tel : <a href="#">{{$item->phone}}</a>
                    </li>
                    <li>Website: <a href="www.gco.vn" title="">www.gco.vn</a></li>
                </ul>
            </div>
            @endforeach
           
        </div>

        <form action="{{route('postContact')}}" method="post" class="contact-frm">
            {{ csrf_field() }}
            <h3 class="contact-tit">Form liên hệ</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" class="w-100" placeholder="Full name *" required="required">
                    <input type="email" name="email" class="w-100" placeholder="Email *" required="">
                    <input type="text" name="phone" class="w-100" placeholder="Number phone *" required="required">
                </div>
                <div class="col-md-6">
                    <textarea placeholder="Nội dung" name="content" required="required" class="w-100"></textarea>
                    <button type="submit" class="text-uppercase btn btn-send">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="map">
    <div class="container-flush map_container">
        {!! $setting->iframemap !!}
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
