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
			<li class="breadcrumb-item"><a href="{{url('thanh-toan')}}" title="">Thanh toán</a></li>
		</ul>
	</div>
</div>
<div class="chkout">
	<div class="container">
		<h2 class="tit">Thanh toán</h2>
		<form action="{{route('postOrder')}}" method="post">
			{{csrf_field()}}
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<h3 class="chk-tit">
						<span class="chk-quan">1</span><span class="chk-cap">Thông tin người nhận</span>
					</h3>
					<div class="chk-info">
						<div class="row chkcart-wrap">
							<div class="col-md-6 col-lg-4">
								<input type="email" required="required" name="email" placeholder="Địa chỉ email">
							</div>
							<div class="col-md-6 col-lg-4">
								<input type="text" required="required" name="full_name" placeholder="Họ tên người nhận">
							</div>
							<div class="col-md-6 col-lg-4">
								<input type="tel" required="required" name="phone" placeholder="Số điện thoại">
							</div>
							<div class="col-md-6 col-lg-4">
								<select name="province" id="province_id">
									<option value="">Tỉnh/Thành phố</option>
									@foreach($province as $pro)
                                        <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
								</select>
							</div>
							<div class="col-md-6 col-lg-4">
								<select name="district" id="district_id">
									<option value="">Quận/Huyện</option>
									
								</select>
							</div>
							<div class="col-md-6 col-lg-4">
								<input type="text" name="address" required="required" placeholder="Địa chỉ">
							</div>
						</div>
					</div>
					<h3 class="chk-tit">
						<span class="chk-quan">2</span><span class="chk-cap">Hình thức thanh toán</span>
					</h3>
					<div class="chk-ship">
						<input type="text" hidden=""  name="payment_method" value="1" id="payment_method">
						<ul class="nav nav-pills chk-ship-list" id="pills-tab" role="tablist">
								
							<li class="d-flex align-items-center nav-item">
								<a  class="nav-link active" data-id="1" name="" id="bank-menu" data-toggle="pill" href="#bank" role="tab" aria-controls="pills-profile" aria-selected="false"> Chuyển khoản ngân hàng</a>	
							</li>
							<li class="d-flex align-items-center nav-item">
								<a  class="nav-link " data-id="0" name="" id="cod-menu" data-toggle="pill" href="#cod" role="tab" aria-controls="pills-contact" aria-selected="false"> Ship COD</a>
							</li>
							
						</ul>
						

						<div class="tab-content" id="pills-tabContent">
					  		<div class="tab-pane fade show active bank-content-tab" id="bank" role="tabpanel" aria-labelledby="pills-profile-tab">
								<p class="chk-info-text">Lưu ý: Bạn cần phải đăng ký dịch vụ Internet Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi tiếp tục.</p>
								<p class="chk-info-text">Chúng tôi giúp bạn thanh toán qua chuyển khoản ngân hàng với các ngân hàng dưới đây.</p>
								<div class="chk-info-choice">
									<div class="row">
										@foreach($bank as $b)
										<div class="col-md-6 col-lg-6 text-center">
											<div class="col-md-push-4 col-xs-4">
												<img src="{{asset('upload/hinhanh/'.$b->img)}}" alt="" title="">
											</div>
											<div class="col-md-8 taikhoan-info">
												{!! $b->info !!}
											</div>
										</div>
										@endforeach
										
									</div>
								</div>
					  		</div><!-- end chuyển khoản -->
					  		<div class="tab-pane fade bank-content-tab" id="cod" role="tabpanel" aria-labelledby="pills-contact-tab">
								<p class="chk-info-text">Thanh toán khi giao hàng</p>
					  		</div><!-- end cod -->
					  	</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<h2 class="chkcart-tit">Giỏ hàng của bạn</h2>
					<div class="chk-cart-item">

						@foreach($product_cart as $item)
						<div class="chk-cart-sitem">
							<div class="row">
								
								
								<div class="col-4">
									<a href="{{url('san-pham/'.$item->options->alias.'.html')}}" title=""><img src="{{asset('upload/product/'.$item->options->photo)}}" alt="{{$item->name}}" title="{{$item->name}}"></a>
								</div>
								<div class="col-8">
									<h3 class="chk-cart-item-tit"><a href="{{url('san-pham/'.$item->options->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h3>
									<ul class="pro-rate">
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<h4 class="chk-cart-item-price"><span>{{number_format($item->price)}}</span> vnđ x <span class="chk-cart-item-qty">{{$item->qty}}</span></h4>
								</div>
							</div>
						</div>
						@endforeach
						

						<div class="chk-total">
							<p class="chk-total-p">Giảm giá: <span>{{number_format(@$money_sale)}}</span> VNĐ</p>
							<p class="chk-total-p">Tổng thanh toán: <span>{{number_format(@$money_pay)}}</span> VNĐ</p>

							<p class="text-right">
								<a href="{{url('gio-hang')}}" title="" class="btn btn-chk-see">Xem giỏ hàng</a>
							</p>
						</div>
						
						<button type="submit" class="text-uppercase w-100 btn btn-chkcart">Thanh toán</button>
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
@section('script')
    <script>
        $(document).ready(function(){
           
            $('#province_id').change(function(){
                var pro_id = $(this).val();
             
                $.get("ajax/province/"+pro_id, function(data){
                    // alert(data);
                    $('#district_id').html(data);
                });
            });
        });
    </script>
@endsection