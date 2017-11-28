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
            <li class="breadcrumb-item"><a href="{{url('gio-hang')}}" title="Giỏ hàng">Giỏ hàng</a></li>
        </ul>
    </div>
</div>

<div class="cart">
    <div class="container">
        <h2 class="tit">Giỏ hàng</h2>
        <div class="table-responsive">
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
                <form action="{{route('updateCart')}}" method="post" id="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <tbody>
                        @foreach($product_cart as $key=>$product)
                        <tr>
                            <th class="cart-tbl-img">
                                <img src="{{asset('upload/product/'.$product->options->photo)}}" alt="{{$product->name}}" title="{{$product->name}}">
                                <div class="cart-tbl-content">
                                    <h2 class="cart-tbl-name">{{$product->name}}</h2>
                                    <ul class="pro-rate">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </th>
                            <td class="cart-tbl-price"><span>{{number_format($product->price)}}</span> VND</td>
                            <td class="action-number">
                                <div class="d-flex align-items-center cart-wrap">
                                    <i class="fa fa-minus minus count"></i> 
                                    <!-- <input type="number" value="{{$product->qty}}" id="{{ $product->rowId }}"  name="numb[{{$key}}]" class="text-center qty qty-cart"  min="1">  -->
                                     <input class="text-center qty qty-cart" type="number"  min="1" value="{{$product->qty}}" id="{{ $product->rowId }}"  name="numb[{{$key}}]">
                                    <i class="fa fa-plus add count"></i>
                                </div>
                            </td>
                            <td class="cart-tbl-price"><span>{{number_format($product->price * $product->qty)}}</span> VND</td>
                            <td class="text-center">
                               <a class="delete-cart" id="{{$product->rowId}}" href="{{url('xoa-gio-hang/'.$product->rowId)}}" title=""> <button class="btn cart-btn" type="button"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" class="carttbl-tt">
                                Total Cart: <span class="cart-tpl-total">{{number_format($total)}} VND</span> 
                            </td>
                            <td colspan="3" class="text-right">
                                <button type="submit" class="text-uppercase btn-update">Cập nhật</button>
                                <a href="{{url('')}}" title="" class="text-uppercase btn-continue">Tiếp tục mua hàng</a>

                                <a href="{{url('thanh-toan')}}" title="" class="text-uppercase btn-confirm">Thanh toán</a>

                            </td>
                        </tr>
                    </tbody>
                </form>
            </table>
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
