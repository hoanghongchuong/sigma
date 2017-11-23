@extends('index')
@section('content')
@include('templates.layout.slider')

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h2 style="margin-bottom: 30px; color: #a55c06;">{{$product_cate->name}}</h2></div>
            <div class="col-md-9">
                <div class="list text-center">
                    <div class="row">
                        @foreach($product as $item)
                        <div class="col-md-4 col-md-custom">
                            <div class="item">
                                <a href="{{url('san-pham/'.$item->alias.'.html')}}" class="photo-img"><img src="{{asset('upload/product/'.$item->photo)}}" alt="" title=""></a>
                                <div class="product-content">
                                    <h4 class="product-title">
                                        <a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a>
                                    </h4>
                                    <p class="price-wrap">{{number_format($item->price)}} VND</p>
                                    <div class="actions">
                                        <button class="btn-custom btn-addcartx">thêm vào giỏ hàng<span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                                        <input type="hidden" name="product_id{{ $item->id }}" id="product_id{{ $item->id }}" value="{{ $item->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="paginations">
                        {!! $product->links() !!}
                    </div>
                    <!-- <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="pro-r">
                    <h4>sản phẩm giảm giá</h4>
                    <ul>
                        @foreach($saleProduct as $sale)
                        <li>
                            <img src="{{asset('upload/product/'.$sale->photo)}}" alt="{{$sale->name}}" title="{{$sale->name}}">
                            <div class="pro-in">
                                <h5><a href="{{url('san-pham/'.$sale->alias.'.html')}}" title="">{{$sale->name}}</a> </h5>
                                <p class="price-i">{{number_format($sale->price) }} VND</p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="pro-r">
                    <h4>sản phẩm nổi bật</h4>
                    <ul>
                        @foreach($hotProducts as $hot)
                        <li>
                            <img src="{{asset('upload/product/'.$hot->photo)}}" alt="{{$hot->name}}" title="{{$hot->name}}">
                            <div class="pro-in">
                                <h5><a href="{{url('san-pham/'.$hot->alias.'.html')}}" title="{{$hot->name}}">{{$hot->name}}</a> </h5>
                                <p class="price-i">{{number_format($hot->price) }} VND</p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <a href="" title="">
                    <img src="{{asset('public/images/adv.png')}}" alt="" title="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
