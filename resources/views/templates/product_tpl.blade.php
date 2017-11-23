@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
?>
<div class="wrap-breadcrumb">
    <div class="clearfix container">
        <div class="row main-header">                           
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li><a href="{{url('')}}" target="_self">Trang chủ</a></li>
                    <li><a href="{{url('san-pham')}}" target="_self">Sản phẩm</a></li>
                    <li class="active"><span>Tất cả sản phẩm</span></li>
                </ol>
            </div>
        </div>
    </div>                          
</div>
<section id="content" class="clearfix container">
    <div class="row">
        <div id="collection" class="content-pages collection-page" data-sticky_parent>
    
    <!-- Begin collection info -->
    <!-- Content--> 
    <div class="col-lg-12 visible-sm visible-xs">
        <div class="visible-sm visible-xs">
            <h1 class="title-sm" >
                Tất cả sản phẩm
            </h1>
        </div>
        
        <div class="filter-by-wrapper">
            <div class="filter-by" >
                
                <div class="sort-filter-option navbar-inactive" id="navbar-inner">
                    <div class="filterBtn txtLeft btn-navbar-collection">
                        <span class="list-coll">
                            <i class="fa fa-server" aria-hidden="true"></i>
                            Danh mục 
                        </span>
                    </div>
                </div>
                
                
                <div class="sort-filter-option js-promoteTooltip" >
                    <!-- <div class="filterBtn txtLeft showOverlay" >
                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <span  class="custom-dropdown custom-dropdown--white">
                            <select class="sort-by custom-dropdown__select custom-dropdown__select--white">
                                <option value="price-ascending">Giá: Tăng dần</option>
                                <option value="price-descending">Giá: Giảm dần</option>
                                <option value="title-ascending">Tên: A-Z</option>
                                <option value="title-descending">Tên: Z-A</option>
                                <option value="created-ascending">Cũ nhất</option>
                                <option value="created-descending">Mới nhất</option>
                                <option value="best-selling">Bán chạy nhất</option>
                            </select>
                        </span>
                    </div> -->
                </div>
                        
            </div>
        </div>
    </div>
    <div class=" col-md-3 col-sm-12 col-xs-12 leftsidebar-col" data-sticky_column >
        <div class="group_sidebar">

            <div class="list-group navbar-inner ">
                    
                <div class="mega-left-title btn-navbar title-hidden-sm">
                    <h3 class="sb-title">Danh mục </h3>
                </div>
                
                <ul class="nav navs sidebar menu" id='cssmenu'>   
                    @foreach($cate_pro as $key=>$cate)
                        <?php $cateChilds = DB::table('product_categories')->where('parent_id',$cate->id)->get(); ?>
                    <li class='item has-sub active first'>
                        <a href="{{url('danh-muc/'.$cate->alias)}}">
                            <span class="lbl">{{$cate->name}}</span>
                            @if(count($cateChilds) > 0)
                            <span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-{{$key}}" class="sign drop-down"></span>
                            @endif
                        </a>
                        <ul class="nav children collapse" id="sub-item-{{$key}}">
                            @if($cateChilds)
                                @foreach($cateChilds as $cateChild)
                                <li class="first">
                                    <a href="{{url('danh-muc/'.$cateChild->alias)}}" title="{{$cateChild->name}}">
                                        <span>{{$cateChild->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Banner quảng cáo -->
                <div class="list-group_l banner-left hidden-sm hidden-xs">
                    <a href="">
                        <img src="{{asset('public/images/left_image_ad.jpg')}}" >
                    </a>
                </div>
        </div>
        <script>
        $(document).ready(function(){
            //$('ul li:has(ul)').addClass('hassub');
            $('#cssmenu ul ul li:odd').addClass('odd');
            $('#cssmenu ul ul li:even').addClass('even');
            $('#cssmenu > ul > li > a').click(function() {
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');
                var checkElement = $(this).nextS();
                if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });

            $('.drop-down').click(function(e){      
                if ( $(this).parents('li').hasClass('has-sub') ){
                    e.preventDefault();
                    if($(this).hasClass('open-nav')){
                        $(this).removeClass('open-nav');
                        $(this).parents('li').children('ul.lve2').slideUp('normal').removeClass('in');
                    }else {
                        $(this).addClass('open-nav');
                        $(this).parents('li').children('ul.lve2').slideDown('normal').addClass('in');
                    }
                }else {

                }
            });

        });
        $("#list-group-l ul.navs li.active").parents('ul.children').addClass("in");
        </script>
    </div>
    <div class="content-col col-md-9 col-sm-12 col-xs-12" data-sticky_column>
        <div class="row">
            <div class="main-content">
                <div class="col-md-12 hidden-sm hidden-xs">
                    <div class="sort-collection">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h1>
                                    Tất cả sản phẩm
                                </h1>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="browse-tags">
                                    <span>Sắp xếp theo:</span>
                                    <span  class="custom-dropdown custom-dropdown--white">
                                        <select class="sort-by custom-dropdown__select custom-dropdown__select--white">
                                            <option value="">Sắp xếp</option>
                                            option
                                            @foreach($sortType as $type => $value)
                                            <option value="{{ $type }}" @if($type == $selected) {{"selected"}} @endif >{{ $value['text'] }}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>              
                <div class="col-md-12 col-sm-12 col-xs-12 content-product-list">
                    <div class="row product-list">
                        @foreach($products as $key=>$product)
                        <div class="col-md-4  col-sm-6 col-xs-12 pro-loop">
                            <div class="product-block product-resize">
                                <div class="product-img image-resize view view-third">
                                    <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="Xe trượt HDL">
                                        <img class="first-image  has-img" alt=" {{$product->name}} " src="{{asset('upload/product/'.$product->photo)}}"  /> <?php @$image = DB::table('images')->where('product_id', $product->id)->orderBy('id','asc')->first(); ?>     
                                        <img  class ="second-image" src="{{asset('upload/hasp/'.@$image->photo)}}"  alt="{{$product->name}}" />
                                    </a>
                                    <div class="actionss">
                                        <!-- <div class="btn-cart-products">
                                            <a href="javascript:void(0);" onclick="add_item_show_modalCart(1009814358)">
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            </a>
                                        </div> -->
                                        <div class="view-details">
                                            <a href="{{url('san-pham/'.$product->alias.'.html')}}" class="view-detail" > 
                                                <span><i class="fa fa-clone"> </i></span>
                                            </a>
                                        </div>
                                        <div class="btn-quickview-products">
                                            <a href="#item{{$key}}" data-toggle="modal" data-target="#item{{$key}}" data-handle="detail.html"><i class="fa fa-eye"></i></a>
                                        </div>
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

                        <div class="vk-shop-modal__list">
                            @foreach($products as $key=>$p)
                            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item{{$key}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header clearfix" style="width:100%">
                                            <a href="{{url('san-pham/'.$p->alias.'.html')}}" class="quickview-title text-left" title="{{$p->name}}"><h4 class="p-title modal-title">{{$p->name}}</h4></a>
                                            <div class="quickview-close">
                                                <!-- <a href="javascript:void(0);"><i class="fa fa-times"></i></a> -->
                                                 <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="vk-shop-detail vk-shop-detail--quickview">
                                            <div class="">
                                                <div class="row">
                                                    <div class="vk-shop-detail__left col-lg-6">
                                                        <div class="vk-shop-detail__thumbnail-wrapper">
                                                            <div class="vk-shop-detail__thumbnail">
                                                            <?php $product_detail = DB::table('products')->select()->where('status',1)->where('alias',$p->alias)->get()->first();
                                                                $album_hinh = DB::table('images')->select()
                                                                ->where('product_id',$product_detail->id)
                                                                ->orderby('id','asc')->get();
                                                            ?>
                                                                <!-- <div class="vk-slider__for carousel" data-slider="slider-for">
                                                                 @foreach($album_hinh as $album)
                                                                    <div class="vk-img vk-img--mw100">
                                                                        <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                                                    </div>
                                                                 @endforeach       
                                                                </div> -->
                                                                 <img src="{{asset('upload/product/'.$p->photo)}}" class="img-responsive" alt="">
                                                            </div> 
                                                            <!-- <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                                <div class="vk-slider__nav carousel" data-slider="slider-nav">
                                                                @foreach($album_hinh as $album)
                                                                    <div class="vk-img vk-img--mw100">
                                                                        <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                                                    </div>
                                                                 @endforeach
                                                                </div>
                                                            </div> --> 
                                                        </div> 
                                                    </div> 
                                                    <div class="vk-shop-detail__right col-lg-6">
                                                        <div class="vk-shop-detail__brief">
                                                            <div class="vk-shop-detail__box">
                                                                <p class="product-price vk-text--red-1"><span>{{number_format($p->price)}}</span> ₫ </p>
                                                                <div class="quickview-description">Mô tả tóm tắt:</div>
                                                                <div class="vk-button">
                                                                    <form action="{{ route('addProductToCart') }}" method="post">
                                                                        {!! csrf_field() !!}
                                                                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                                                                        <div class="form-input ">
                                                                            <label>Số lượng</label>
                                                                            <input id="quantity-quickview" name="product_numb" type="number" min="1" value="1">
                                                                        </div>
                                                                        <!-- <button type="submit" style="margin-top: 4px;" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</button> -->
                                                                        <button type="submit" class="btn-detail  btn-color-add btn-min-width btn-mgt btn-addcart" style="display: block;">Thêm vào giỏ</button>
                                                                    </form>
                                                                   
                                                                    <div class="qv-readmore">
                                                                        <span> hoặc </span><a class="read-more p-url" href="{{url('san-pham/'.$p->alias.'.html')}}" role="button">Xem chi tiết</a>
                                                                    </div>
                                                                </div>
                                                            </div> <!--./vk-shop-detail__box-->
                                                        </div> <!--./vk-shop-detail__brief-->
                                                    </div><!-- /.vk-shop-detail__right -->
                                                </div>
                                            </div>
                                            <!-- /.container -->
                                        </div> <!--./vk-shop-detail-->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>                    
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="clearfix">
                        <div id="pagination" class="">
                            <div class="paginations">
                                {{ $products->links() }}
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End collection info -->
    <!-- Begin no products -->

    
    <!-- End no products -->
</div>
</div>

</section>
@endsection
