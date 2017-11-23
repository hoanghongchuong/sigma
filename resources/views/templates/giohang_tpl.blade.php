@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
     $about = Cache::get('about');
?>

<!-- <section class="banner">
    <a href="#"><img src="{{asset('images/bn-3.png')}}" alt="" title=""></a>
</section>

<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">
                <i class="fa fa-home"></i>
            </a>
            <a class="breadcrumb-item" href="#">
                Giỏ hàng
            </a>
           
        </nav>
    </div>
</section>
<section class="cart">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart-left">
                <form action="{{route('updateCart')}}" method="post" id="cartformpage">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <table class="table table-responsive">
                        <tbody>
                            @foreach($product_cart as $key=>$product)
                            <tr>
                                <td>
                                    <img src="{{asset('upload/product/'.$product->options->photo)}}" style="width: 100px; height: 120px;" alt="" title="">
                                </td>
                                <td>
                                    <div class="pro-i">
                                        <h4>{{$product->name}}</h4>
                                        <p class="pri">Giá: {{number_format($product->price)}} VND</p>
                                        <a class="delete" id="{{$product->rowId}}" href="{{url('xoa-gio-hang/'.$product->rowId)}}" title="Xóa">Xóa</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-number">
                                        <span class="fa fa-minus minus" aria-hidden="true"></span>
                                        <input class="qty" type="number" class="tc item-quantity" min="1" value="{{$product->qty}}" id="{{ $product->rowId }}"  name="numb[{{$key}}]">
                                        <span class="fa fa-plus add" aria-hidden="true"></span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="update-cart"><button type="submit">Cập nhật</button></div>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="end">
                    <div class="row">
                        <div class="col-md-6 col-6 pdr-0">
                            <span>Tổng tiền</span>
                        </div>
                        <div class="col-md-6 col-6 pdl-0">
                            <span>{{number_format($total)}} đ</span>
                        </div>
                        <div class="col-md-6 col-6 pdr-0">
                            <span>Thanh toán</span>
                        </div>
                        <div class="col-md-6 col-6 pdl-0">
                            <span>{{number_format($total)}} đ</span>
                        </div>
                        <div class="col-md-12">
                            <a class="buy" data-toggle="modal" data-target="#myModal" href="" title="">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('gio-hang')}}" title="">Giỏ hàng</a></li>
        </ul>
    </div>
</div>

<div class="cart">
    <div class="container">
        <h2 class="tit">Giỏ hàng</h2>
        <form class="table-responsive">
            <table class="table cart-tbl">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá thành</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th class="text-center">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th class="cart-tbl-img">
                            <a href="pro-detail.html" title=""><img src="images/b4.jpg" alt="" title=""></a>
                            <div class="cart-tbl-content">
                                <h2 class="cart-tbl-name"><a href="pro-detail.html" title="">Thủ thỉ thù thì cái gì nguy hiểm (Thơ thiếu nhi về kỹ năng sống)</a></h2>
                                <ul class="pro-rate">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </th>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="action-number">
                            <div class="d-flex align-items-center cart-wrap">
                                <i class="fa fa-minus minus count"></i> <input type="number" class="text-center qty qty-cart" value="1" min="1"> <i class="fa fa-plus add count"></i>
                            </div>
                        </td>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="text-center">
                            <button class="btn cart-btn"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <th class="cart-tbl-img">
                            <a href="pro-detail.html" title=""><img src="images/b12.jpg" alt="" title=""></a>
                            <div class="cart-tbl-content">
                                <h2 class="cart-tbl-name"><a href="pro-detail.html" title="">Thủ thỉ thù thì cái gì nguy hiểm (Thơ thiếu nhi về kỹ năng sống)</a></h2>
                                <ul class="pro-rate">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </th>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="action-number">
                            <div class="d-flex align-items-center cart-wrap">
                                <i class="fa fa-minus minus count"></i> <input type="number" class="text-center qty qty-cart" value="1" min="1"> <i class="fa fa-plus add count"></i>
                            </div>
                        </td>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="text-center">
                            <button class="btn cart-btn"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th class="cart-tbl-img">
                            <a href="pro-detail.html" title=""><img src="images/b8.jpg" alt="" title=""></a>
                            <div class="cart-tbl-content">
                                <h2 class="cart-tbl-name"><a href="pro-detail.html" title="">Thủ thỉ thù thì cái gì nguy hiểm (Thơ thiếu nhi về kỹ năng sống)</a></h2>
                                <ul class="pro-rate">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </th>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="action-number">
                            <div class="d-flex align-items-center cart-wrap">
                                <i class="fa fa-minus minus count"></i> <input type="number" class="text-center qty qty-cart" value="1" min="1"> <i class="fa fa-plus add count"></i>
                            </div>
                        </td>
                        <td class="cart-tbl-price"><span>45.000</span> vnđ</td>
                        <td class="text-center">
                            <button class="btn cart-btn"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="carttbl-tt">
                            Total Cart: <span class="cart-tpl-total">4.190.000 VNĐ</span> 
                        </td>
                        <td colspan="3" class="text-right">
                            <a href="list-pro.html" title="" class="text-uppercase btn-continue">Tiếp tục mua hàng</a>
                            <a href="checkout.html" title="" class="text-uppercase btn-confirm">Thanh toán</a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
