<?php
	$slider = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
@if(isset($slider))
    <div class="slider">
		<div class="container-flush">
			<div class="owl-carousel owl-theme carousel_top">
				@foreach($slider as $key => $item)
	            <div class="item">
					<a href="{{$item->link}}" title=""><img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="slider" title=""></a>
	            </div>
	            @endforeach
	        </div>
		</div>
	</div>
@endif