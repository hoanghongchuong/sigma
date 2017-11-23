@extends('index')
@section('content')
<section class="vk-content">
    <div class="vk-page product product-list">
        <div class="vk-product">
            <div class="container">

                <div class="vk-ads-wide left">
                    <div class="vk-ads-wide__frame">
                        <a href="#" title="">
                            <img src="{{asset('public/images/ads/ads-1.jpg')}}" class="img-fluid" alt="">
                        </a>

                    </div>
                </div>

                <div class="vk-ads-wide right">
                    <div class="vk-ads-wide__frame">
                        <a href="#" title="">
                            <img src="{{asset('public/images/ads/ads-2.jpg')}}" class="img-fluid" alt="">
                        </a>

                    </div>
                </div>

                <nav class="vk-breadcrumb">
                    <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                        <li><a href="index.html">Trang chủ</a></li>

                        <li class="active">Sản phẩm</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->

                <div class="vk-product-about">
                    <h1 class="vk-heading text-uppercase style-1">Iphone</h1>
                    <div class="vk-product-about-detail">
                        <p>
                            Với mục đích nâng cao chất lượng phục vụ ngày càng tốt hơn, Siêu thị điện máy Pico mong muốn
                            nhận được những ý kiến đóng góp phản ánh của quý khách về chất lượng sản phẩm, dịch vụ khi
                            mua hàng tại Pico. Sau khi nhận được ý kiến đóng góp chúng tôi sẽ chuyển thông tin đến các
                            bộ phận có liên quan để giải quyết và trả lời lời Quý khách trong thời gian sớm nhất.
                        </p>
                    </div> <!--./vk-product-about-detail-->

                </div> <!--./vk-product-about-->

                <div class="vk-product__mid">
                    <div class="row">
                        <?php $productNew = DB::table('products')->orderBy('id','desc')->first();?>
                        <div class="col-lg-4">
                            <div class="vk-product__newest">
                                <div class="vk-img-frame">
                                    <a href="{{url('san-pham/'.$productNew->alias.'.html')}}" title="">
                                        <img src="{{asset('upload/product/'.$productNew->photo)}}" alt="">
                                    </a>
                                </div>
                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="{{url('san-pham/'.$productNew->alias.'.html')}}" title="">{{$productNew->name}}</a></h3>
                                    <p class="vk-product__id"><span>{{$productNew->code}}</span></p>
                                    <p class="vk-product__price">{{number_format($productNew->price)}} VNĐ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="vk-product__slider vk-slider-arrow-style-1" data-slider="product-banner">
                                <?php $sliders = DB::table('slider')->where('com','gioi-thieu')->get(); ?>
                                @foreach($sliders as $slider)
                                <div class="vk-img-frame">
                                    <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> <!--./vk-product__newest-->
                <div class="vk-product-show">
                    <div class="row">
                        <div class="col-lg-2 vk-right-content order-2 order-lg-1">
                            <div class="vk-inner-content">
                                <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                    <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-1.jpg')}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                    <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-2.jpg')}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="vk-product-sale-off">
                                    <h3 class="vk-heading style-2 inverse text-uppercase">Tin công nghệ</h3>
                                    <div class="vk-product-list">
                                        @foreach($tintucs as $tintuc)
                                        <div class="vk-news-item-4">
                                            <div class="vk-img-frame">
                                                <a href="{{url('tin-tuc/'.$tintuc->alias.'.html')}}" class="vk-img">
                                                    <img src="{{asset('upload/news/'.$tintuc->photo)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="vk-news-item-brief">
                                                <h3 class="vk-title"><a href="{{url('tin-tuc/'.$tintuc->alias.'.html')}}">{{$tintuc->name}}</a></h3>
                                                <div class="vk-published">{{date('d/m/Y', strtotime($tintuc->created_at))}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div> <!--./vk-product-list-->
                                </div> <!--./vk-product-sale-off-->
                            </div> <!--./vk-inner-content-->
                        </div> <!--./vk-right-content-->
                        <div class="col-lg-10 order-1 order-lg-2">
                           <div class="vk-product-list-box">
                                    <div class="vk-product-list vk-product-list--mod-1  row no-gutters">
                                        @foreach($products as $product)
                                        <div class="col-sm-2 col-md-4 vk-col-lg item">
                                            <div class="vk-shop-item">
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="{{url('san-pham/'.$product->alias.'.html')}}">
                                                        <img src="{{asset('upload/product/'.$product->photo)}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item-brief">
                                                    <h3 class="vk-title"><a href="{{url('san-pham/'.$product->alias.'.html')}}">{{$product->name}}</a></h3>
                                                    <p class="vk-price">Giá: {{number_format($product->price)}} VNĐ</p>
                                                </div>
                                            </div> <!--./vk-shop-item-->
                                        </div> <!--./item-->
                                        @endforeach

                                    </div> <!--./vk-product-list-->
                                </div> <!--./vk-product-list-box-->


                                <div class="paginations">{!! $products->links() !!}</div>
                                
                        </div>
                    </div>
                </div>

            </div> <!-- /.container -->
        </div> <!--./vk-product-->
    </div><!--./vk-page-->
</section>
@endsection