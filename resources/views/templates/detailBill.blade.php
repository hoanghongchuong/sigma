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
            <li class="breadcrumb-item"><a href="#" title="">Chi tiết đơn hàng</a></li>
        </ul>
    </div>
</div>

<div class="ctd">
    <div class="container">
        <h1 class="ctd-tit"><a href="chi-tiet-don.html">Chi tiết đơn hàng {{$bill->code}}</a></h1>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="ctd-img">
                    <h2 class="ctd-stit">Thông tin sản phẩm</h2>
                    @foreach($detailBill as $item)
                    <div class="row mb-3">
                        <div class="col-4">
                            <div class="ctd-img-wrap">
                                <a href="{{url('san-pham/'.$item->slug.'.html')}}" target="_blank" title=""><img src="{{asset('upload/product/'.$item->product_img)}}" title="" alt=""></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <h3 class="ctd-name"><a href="{{url('san-pham/'.$item->slug.'.html')}}" target="_blank" title="">{{$item->product_name}}</a></h3>
                            <ul class="mt-2 rate">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>


                            <h4 class="ctd-price"><span>{{number_format($item->product_price)}}</span> VNĐ</h4>
                            <h5 class="ctd-quan">Số lượng: <span>{{$item->product_numb}}</span> cuốn</h5>
                        </div>
                    </div>
                    @endforeach
                    <p class="ctd-tprice">Tổng giá trị đơn hàng: <span>{{number_format($bill->total)}}</span> VNĐ</p>
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <h2 class="ctd-stit">Thông tin đặt hàng</h2>
                <ul class="ctd-order">
                    <li>Họ tên người đặt hàng: <strong class="text-uppercase">{{$bill->full_name}}</strong></li>
                    <li><i class="fa fa-map-marker"></i> Địa chỉ: {{$bill->address}}</li>
                    <li>
                        <span><i class="fa fa-envelope-o"></i> <a href="mailto:{{$bill->email}}">{{$bill->email}}</a></span>
                        <span><i class="fa fa-phone"></i> <a href="tel:{{$bill->phone}}">{{$bill->phone}}</a></span>
                    </li>
                </ul>
                <!-- <p>Ghi chú:</p>
                <p>Những nguyên tắc chung nhằm khuyến nghị nhà quản trị...</p> -->
                <h2 class="ctd-stit">Tình trạng đơn hàng: <span class="ctd-check"><i class="fa fa-check"></i>
                    <?php
                        switch ($bill->status) {
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
                </span></h2>
                <h2 class="ctd-stit">Phương thức thanh toán: <span class="ctd-payment">
                    <?php 
                        if($bill->payment == 0) echo"Thanh toán khi giao hàng";
                        if($bill->payment == 1) echo"Chuyển khoản qua ngân hàng";
                      ?>
                </span></h2>
                <h2 class="ctd-stit">Đã mua ngày: <span>{{date('d/m/Y', strtotime($bill->created_at))}}</span></h2>
                <p class="ctd-tb">Thời gian nhận sản phẩm từ 2 - 3 ngày sau khi Sigma nhận được thông báo đã chuyển khoản, kiểm tra email và tin nhắn SMS sau khi chuyển khoản.</p>
                <p class="text-lg-left text-center">
                   <a href="javascript: history.go(-1)" title=""> <span class="btn ctd-btn">Quay lại</span> </a>
                    <!-- <span type="submit" class="btn ctddel-btn">Xóa đơn hàng</span> -->
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
