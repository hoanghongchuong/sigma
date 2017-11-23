@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<div class="content-cart">
	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-12 col-md-12">
				<ul class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="{{url('gio-hang')}}">Giỏ hàng</a>
					</li>
		            
				    <li class="breadcrumb-item breadcrumb-item-current"> Thông tin giao hàng </li>
				    <li class="breadcrumb-item "> Phương thức thanh toán </li>
				</ul>
			</div>

			<div class="col-md-6 col-xs-12">
				<form class="form-group cart-info-frm" method="post" action="{{route('postOrder')}}">
            		<input type="hidden" name="_token" value="{{csrf_token()}}">
					<h3>Thông tin giao hàng</h3>
					<div class="form-group">
						<input type="text" required="required" name="full_name" class="form-control" placeholder="Họ và tên">
					</div>
					<div class="form-group">
						<input type="email" required="required" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" required="required" name="phone" class="form-control" placeholder="Số điện thoại">
					</div>
					<div class="form-group">
						<input type="text" required="required" name="address" class="form-control" placeholder="Địa chỉ">
					</div>
					
					<div class="form-group">
                   	 	<textarea name="note" id="" class="form-control" placeholder="Nội dung đặt hàng"></textarea>
                    </div>
                    <div class="pull-right"><button type="submit" class="btn btn-primary">Gửi đơn hàng</button></div>
				</form>
			</div>
			<div class="col-md-6 col-xs-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
							<th scope="col"><span class="visually-hidden">Số lượng</span></th>
							<th scope="col"><span class="visually-hidden">Giá</span></th>
						</tr>
					</thead>
					<tbody>
						@foreach($product_cart as $item)
						<tr>
							<td><img src="{{asset('upload/product/'.$item->options->photo)}}" style="width: 4.6em; height: 4.6em" ></td>
							<td>{{$item->qty}}</td>
							<td>{{number_format($item->price)}}</td>
						</tr>
						@endforeach						
					</tbody>
				</table>
				<p class="pull-right" style="font-size: 1.71429em; font-weight: 500; color: #4b4b4b; line-height: 1em;">Tổng tiền: {{number_format($total)}} đ</p>
			</div>
			
		</div>
	</div>
</div>
@endsection