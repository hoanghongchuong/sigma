@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="Trang chủ">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('tin-tuc')}}" title="Tin tức">Tin tức</a></li>
        </ul>
    </div>
</div>

<div class="news-section">
    <div class="container">
        <h1 class="tit">Tin tức</h1>
        <div class="owl-carousel owl-theme carousel_news">
            @foreach($tintuc_noibat as $hotNews)
            <div class="text-center item">
                <div class="news-item">
                    <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title="{{$hotNews->name}}"><img src="{{asset('public/images/news1.jpg')}}" alt="{{$hotNews->name}}" title="{{$hotNews->name}}"></a>
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

<div class="news-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <?php $news = DB::table('news')->where('status',1)->where('com','tin-tuc')->orderBy('id','asc')->paginate(5); ?>
                @foreach($news as $n)
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$n->photo)}}" alt="" title=""></a>
                        </div>
                        <div class="col-sm-8">
                            <h2 class="news-stit"><a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title="">{{$n->name}}</a></h2>
                            <h3 class="news-time">Upload: <span>{{date('d/m/Y', strtotime($n->created_at))}}</span></h3>
                            <p class="news-cap">{{$n->mota}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="paginations">{!! $news->links() !!}</div>

                <!-- <ul class="pagi">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul> -->
            </div>

            <div class="col-sm-12 col-lg-3">
                <h2 class="news-retit text-uppercase">Tin tức mới nhất</h2>

                <div class="news-re-wrap">
                    <a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$tintuc[0]->photo)}}" alt="" title=""></a>
                    <div class="news-re-item">
                        <h3 class="news-re-tit"><a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" title="">{{$tintuc[0]->name}}</a></h3>
                        <h4 class="news-time">Upload: <span>{{date('d/m/Y', strtotime($tintuc[0]->created_at))}}</span></h4>
                    </div>

                </div>
                <!-- <ul class="">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->
                <div class="news-re-list">
                    @for($i = 1; $i< count($tintuc); $i++)
                    <h3 class=""><a href="news-detail.html" title="">{{$tintuc[$i]->name}}</a></h3>
                    @endfor
                </div>
                <a href="#" title=""><img src="{{asset('public/images/news-detail2.jpg')}}" class="mx-auto d-block" alt="" title=""></a>
            </div>
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
