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
            <li class="breadcrumb-item"><a href="{{ url('tai-khoan/'.$data->id) }}" title="">Quản lý tài khoản</a></li>
        </ul>
    </div>
</div>

<div class="acc udacc">
    <div class="container">
    <form action="{{ route('postUpdateInfo', $data->id) }}" method="post" enctype="multipart/form-data" class="ud-frm">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="acc-img acc-ud-img">
                    <img src="{{ asset('upload/users/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" class="img-responsive"  alt="NO PHOTO" />
                    <input type="hidden" name="img_current" value="{!! @$data->photo !!}">
                </div>
               
                    <label for="ip5" class="acc-frm-upload" style="margin-top: 10px;">
                        <img src="{{asset('public/images/i4.png')}}" title="" alt=""> <span>Thay ảnh đại diện</span>
                        <input type="file" id="ip5" name="fImages" class="acc-ip5">
                    </label>
                
                <div class="acc-info">
                    <h2 class="mb-4 acc-stit">Thông tin tài khoản</h2>
                    <ul class="mb-2 acc-info-list">
                        <li>Tên tài khoản: <a href="tai-khoan.html" title="">{{$data->username}}</a></li>
                        <li>Mật khẩu: <span>*********</span></li>
                        <li><img src="{{asset('public/images/i5.png')}}" title="" alt=""> Mức độ: <span class="acc-level">New-members</span></li>
                        <!-- <li>Trạng thái: <span class="acc-status-none">Chưa kích hoạt</span></li> -->
                    </ul>
                    
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                 @if(session('status'))
                <div class="alert alert-success">
                    <span>{{session('status')}}</span>
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="udacc-tit">Thông tin cá nhân</h2>

                       
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" required="required" name="username" class="form-control" value="{{ isset($data) ? $data->username : '' }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Họ và tên</label>
                                    <input type="text" required="required" name="name" class="form-control" value="{{ isset($data) ? $data->name : '' }}" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Số điện thoại</label>
                                    <input type="tel" required="required" name="phone" class="form-control" value="{{ isset($data) ? $data->phone : '' }}" >
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Email đăng ký</label>
                                    <input type="email" required="required" name="email" class="form-control" value="{{ isset($data) ? $data->email : '' }}" >
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-sm-6">
                                    <label for="">Tỉnh/Thành phố</label>
                                    <select class="form-control">
                                        <option>Thành phố Hà Nội</option>
                                        <option>Thành phố Đà Nẵng</option>
                                        <option>Thành phố Hồ Chí Minh</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Quận/Huyện</label>
                                    <select class="form-control">
                                        <option>Quận Thanh Xuân</option>
                                        <option>Quận Hoàng Mai</option>
                                        <option>Quận Hai Bà Trưng</option>
                                    </select>
                                </div> -->
                                <div class="col-sm-12">
                                    <label for="">Địa chỉ</label>
                                    <input required="required" name="address" class="form-control" value="{{ isset($data) ? $data->address : '' }}" type="text">
                                    <p class="acc-note">Ghi rõ số nhà, ngõ, thôn, xóm, phường, xã nơi bạn ở.</p>

                                    <p>
                                        <label class="d-flex align-items-center" for="">
                                            <input type="checkbox">
                                            <span>Tôi đồng ý với quy định, quy chế của hệ thống.</span>
                                        </label> </p>

                                    <p class="text-sm-left text-center">
                                        <button type="submit" class="btn acc-btn">Xác nhận thay đổi</button>
                                    </p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-lg-3 text-center qc"><a href="#" title=""><img src="{{asset('public/images/banner4.jpg')}}" title="" alt=""></a></div>
                </div>
            </div>
        </div>
    </form>
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
