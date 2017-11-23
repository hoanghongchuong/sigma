@extends('index')
@section('content')
<div class="wrap-breadcrumb">
    <div class="clearfix container">
        <div class="row main-header">                           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li><a href="{{url('')}}" target="_self">Trang chủ</a></li>
                    <li><a href="#" target="_self">Tìm kiếm</a></li>
                    <!-- <li class="active"><span>Tất cả sản phẩm</span></li> -->
                </ol>
            </div>
        </div>
    </div>                          
</div>
<section id="content" class="clearfix container">  
    <div class="row">
      @foreach($products as $product)
        <div class="col-md-4  col-sm-6 col-xs-12 pro-loop">
            <div class="product-block product-resize">
                <div class="product-img image-resize view view-third">
                    <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="Xe trượt HDL">
                        <img class="first-image  has-img" alt=" {{$product->name}} " src="{{asset('upload/product/'.$product->photo)}}"  /> <?php @$image = DB::table('images')->where('product_id', $product->id)->orderBy('id','asc')->first();
                          
                         ?>     
                        <img  class ="second-image" src="{{asset('upload/hasp/'.@$image->photo)}}"  alt="{{$product->name}}" />
                    </a>
                    <div class="actionss">
                        <!-- <div class="btn-cart-products">
                            <a href="javascript:void(0);" onclick="add_item_show_modalCart(1009814358)">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="view-details">
                            <a href="{{url('san-pham/'.$product->alias.'.html')}}" class="view-detail" > 
                                <span><i class="fa fa-clone"> </i></span>
                            </a>
                        </div>
                        <div class="btn-quickview-products">
                            <a href="javascript:void(0);" class="quickview" data-handle="detail.html"><i class="fa fa-eye"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="product-detail clearfix">
                    <!-- sử dụng pull-left -->
                    <h3 class="pro-name"><a href="{{url('san-pham/'.$product->alias.'.html')}}" title="{{$product->name}}">{{$product->name}} </a></h3>
                    <div class="pro-prices">    
                        <p class="pro-price">{{number_format($product->price)}} ₫</p>
                        <p class="pro-price-del text-left"></p> 
                    </div>
                </div>
            </div>  
        </div> 
        @endforeach   
    </div>
</section>
@endsection
