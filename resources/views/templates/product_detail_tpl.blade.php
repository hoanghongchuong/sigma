@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">
                <i class="fa fa-home"></i>
            </a>
            <a class="breadcrumb-item" href="{{url('san-pham/'.$cateProduct->alias)}}">
                {{$cateProduct->name}}
            </a>
            <span class="breadcrumb-item active">{{$product_detail->name}}</span>
        </nav>
    </div>
</section>
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-img">
                    <div class="fotorama"
                         data-nav="thumbs">
                        @if(count($album_hinh) > 0)
                            @foreach($album_hinh as $a)
                            <a href="images/pr-a.png" title=""><img src="{{asset('upload/hasp/'.$a->photo)}}" alt="" title=""></a>
                            @endforeach
                        @else <a href="images/pr-a.png" title=""><img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="" title=""></a>
                        @endif
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h1>{{$product_detail->name}}</h1>
                    <p class="price">{{number_format($product_detail->price)}} VNĐ</p>
                    <p>{!!$product_detail->mota!!}</p>
                    <ul>
                       <?php $properties = explode('###', $product_detail->properties);
                       // dd(count($properties));
                       ?>
                        @for($i=0; $i< count($properties); $i++)
                        <li>+ {{$properties[$i]}}</li>
                        @endfor
                        
                    </ul>
                    <form action="{{ route('addProductToCart') }}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                        <button type="submit" class="add-cart">Thêm vào giỏ hàng
                        </button>        
                    </form>    
                    

                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-sale mr-bottom-40">
    <div class="container">
        <div class="sale-title page-title text-center">
            <span>Sản phẩm liên quan</span>
        </div>
        <div class="product-item text-center">
            <div class="row">
                @foreach($productSameCate as $item)
                <div class="col-md-3 col-md-custom">
                    <div class="item">
                        <a href="{{url('san-pham/'.$item->alias.'.html')}}" class="photo-img"><img src="{{asset('upload/product/'.$item->photo)}}" alt="" title=""></a>
                        <div class="product-content">
                            <h4 class="product-title">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a>
                            </h4>
                            <p class="price-wrap">{{number_format($item->price)}} VNĐ</p>
                            <div class="actions">
                                <button class="btn-custom btn-addcart">thêm vào giỏ hàng<span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
@endsection
