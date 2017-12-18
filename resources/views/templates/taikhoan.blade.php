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
            <li class="breadcrumb-item"><a href="#" title="">Quản lý tài khoản</a></li>
        </ul>
    </div>
</div>

<div class="acc">
    <div class="container">
        <h1 class="acc-tit">Quản lý tài khoản</h1>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="">
                     <!-- <img src="{{ asset('upload/users/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" class="img-responsive"  alt="NO PHOTO" />
                     <input type="hidden" name="img_current" value="{!! @$data->photo !!}"> -->
                    <!-- <img src="{{asset('public/images/user2.jpg')}}" title="" class="acc-avatar" alt=""> -->
                    <img src="{{ asset('upload/users/'.$data->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" id = "showImages" style="max-witdh:200px; max-height:200px" />
                </div>
                
                    <!-- 
                    <label for="ip5" class="acc-frm-upload">
                        <img src="{{asset('public/images/i4.png')}}" title="" alt=""> <span>Thay ảnh đại diện</span>
                        <input type="file" id="ip5" name="fImages" class="acc-ip5">
                    </label> -->
                
                
                <div class="acc-info" style="margin-top: 10px; ">
                    <h2 class="mb-4 acc-stit" style="margin-bottom: 10px !important;">Thông tin tài khoản</h2>
                    <ul class="mb-2 acc-info-list">
                        <li>Tên tài khoản: <a href="#" title="">{{ $data->username }}</a></li>
                        <li>Mật khẩu: <span>*********</span></li>
                        <li><img src="{{asset('public/images/i5.png')}}" title="" alt="">
                            Mức độ: 
                            @if($data->total_money >= $saleOf[0]->total_value)    
                            <span class="acc-level">{{$saleOf[0]->name}}</span>
                            @elseif($data->total_money >= $saleOf[1]->total_value && $data->total_money < $saleOf[0]->total_value)
                            <span class="acc-level">{{$saleOf[1]->name}}</span>
                            @elseif($data->total_money >= $saleOf[2]->total_value && $data->total_money < $saleOf[1]->total_value)
                            <span class="acc-level">{{$saleOf[2]->name}}</span>
                            @else <span class="acc-level">New member</span>
                            @endif
                        </li>
                        <!-- <li>Trạng thái: <span class="acc-status">Đã kích hoạt</span></li> -->
                    </ul>
                    <a href="{{ route('updateInfoUser', $data->id) }}" title="" class="btn mb-2 w-75 btn-update">Cập nhật thông tin</a>
                    <a href="{{url('lich-su-mua-hang/'.$data->id)}}" title="" class="btn w-75 mb-2 btn-update">Lịch sử mua hàng</a>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="acc-content">
                    <h2 class="text-capitalize mb-3 acc-name">{{ isset($data->name)? $data->name : $data->username }}</h2>
                    <ul class="acc-contact">
                        <li><i class="fa fa-envelope-o"></i> <a href="#">{{$data->email}}</a></li>
                        <li><i class="fa fa-phone"></i> <a href="tel:{{$data->phone}}">{{$data->phone}}</a></li>
                    </ul>
                    <h3 class="acc-add"><i class="fa fa-map-marker"></i> {{$data->address}}</h3>
                    <!-- <p class="mb-3">Những nguyên tắc chung nhằm khuyến nghị nhà quản trị thương hiệu nên xem xét trước khi đưa ra các quyết định, đó là: Khác biệt, Cộng tác, Đổi mới,Công nhận…</p> -->
                    <!-- <a href="#" class="see-more">Xem thêm</a> -->

                    <div class="acc-buy-his">
                        <h3 class="acc-bh-tit">Lịch sử mua hàng</h3>
                        <p class="mb-3">Tổng số lượng đơn hàng mà tài khoản <a href="#" title="" class="acc-his">{{$data->username}}</a> đã mua từ <span class="acc-time">{{date('d/m/Y', strtotime($data->created_at))}}</span> đến nay:</p>

                        <div class="acc-tbl">
                            <div class="row acc-tbl-header">
                                <!-- <div class="col-lg-1 text-center">STT</div>
                                <div class="col-lg-4 text-center">Sản phẩm</div>
                                <div class="col-lg-1 text-center">SL</div>
                                <div class="col-lg-2 text-center">Ngày mua</div>
                                <div class="col-lg-2 text-center">Tổng tiền</div>
                                <div class="col-lg-2 text-center"></div> -->
                                <div class="col-lg-1 text-center">STT</div>
                                <div class="col-lg-2 text-center">Mã đơn hàng</div>
                                <div class="col-lg-2 text-center">Ngày mua</div>
                                <div class="col-lg-3 text-center">trạng thái</div>
                                <div class="col-lg-2 text-center">Tổng tiền</div>
                                <div class="col-lg-2 text-center"></div>
                            </div>
                            <div class="row">
                                <?php $key = 0 ?>
                                @foreach($bills as $item)
                              
                                    <div class="col-lg-1 text-center">{{$key = $key+1}}</div>

                                    <div class="col-lg-2"> {{$item->code}}
                                       
                                    </div>
                                    <div class="col-lg-2 text-center">{{ date('d/m/Y', strtotime($item->created_at)) }}</div>
                                    <div class="col-lg-3 text-center">
                                        <?php
                                            switch ($item->status) {
                                                case '0':
                                                  echo "Mới đặt";
                                                  break;
                                                case '1':
                                                  echo "Xác nhận";
                                                  break;
                                                case '2':
                                                  echo "Đang giao hàng";
                                                  break;
                                                case '3':
                                                  echo "Hoàn thành";
                                                  break;
                                                case '4':
                                                  echo "Hủy";
                                                  break;
                                                default:
                                                  echo "Mới đặt";
                                                  break;
                                              }
                                        ?>  
                                      </div>
                                    <div class="col-lg-2 text-center">{{number_format($item->total)}}</div>
                                    <div class="col-lg-2 text-center font-italic"><a href="{{url('chi-tiet-don-hang/'.$item->id)}}">Xem đơn hàng</a></div>
                                
                                @endforeach
                            </div>
                        </div>
                        <p class="text-lg-left text-center mt-3"><a href="{{url('lich-su-mua-hang/'.$data->id)}}" title="" class="see-more font-italic">Xem thêm</a></p>
                    </div>
                </div>
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
