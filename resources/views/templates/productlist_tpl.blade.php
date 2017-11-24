@extends('index')
@section('content')
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="list-pro.html" title="">Sách thiếu nhi</a></li>
        </ul>
    </div>
</div>

<div class="list-pro">
    <div class="container">
        <h1 class="ndetail-tit"><a href="news-detail.html" title="">Sách thiếu nhi</a></h1>
        <p class="news-social">
            <img src="images/social.jpg" alt="" title="">
        </p>
        <div class="row">
            <aside class="col-md-12 col-lg-3">
                <div class="aside-wrap">
                    <ul class="pro-menu"><!-- list-child.html -->
                        <li class="active"><a href="list-pro.html" title="">Toán tài năng</a></li>
                        <li><a href="list-pro.html" title="">Đánh thức: trẻ thơ</a></li>
                        <li><a href="list-pro.html" title="">Sách giáo khoa</a></li>
                        <li><a href="list-pro.html" title="">Toán Tiểu học 1</a></li>
                        <li><a href="list-pro.html" title="">Toán Tiểu học 2</a></li>
                        <li><a href="list-pro.html" title="">Toán Tiểu học 3</a></li>
                        <li><a href="list-pro.html" title="">Toán Tiểu học 4</a></li>
                        <li><a href="list-pro.html" title="">Toán Tiểu học 5</a></li>
                    </ul>
                    @include('templates.filter')
                    <a href="#" title="" class="d-lg-block d-none"><img src="{{asset('public/images/banner1.jpg')}}" alt="" title=""></a>
                </div>
            </aside>
            <div class="col-md-12 col-lg-9">
                <div class="newspage-content">
                    <p>Mua sách online tại Bansachtructuyen.com, bạn được tận hưởng chính sách hỗ trợ miễn phí đổi trả hàng, giao hàng nhanh – tận nơi – miễn phí*, thanh toán linh hoạt - an toàn.</p>

                    <p>Chỉ với 3 cú click chuột, chưa bao giờ trải nghiệm mua sách online lại dễ chịu và nhẹ nhàng như vậy. Còn chần chờ gì nữa, đặt mua ngay những tựa sách hay cùng hàng ngàn sản phẩm chất lượng khác tại Bansachtructuyen.com!</p>
                </div>
                <div class="banner pro-banner">
                    <a href="#" title=""><img src="images/banner.jpg" alt="" title=""></a>
                </div>
                
                <div class="propage">
                    <div class="row flex-wrap no-gutters curent-book-row">
                        <div class="col-md-6 col-lg-3">
                            <!-- <div class="text-center text-uppercase item"> -->
                                <div class="carousel_detail-item">
                                    <a href="pro-detail.html" title=""><img src="images/book1.jpg" alt="" title="" class="img-responsive img "></a>
                                    <button class="btn btn-buy">MUA NGAY</button>
                                    <div class="text-center carousel_content">
                                        <h3 class="text-center pro-name"><a href="pro-detail.html" title="">Ngữ pháp Tiếng Anh</a></h3>
                                        <p class="text-center pro-price">120.000 <span>VNĐ</span></p>
                                        <ul class="pro-rate">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                        
                    </div><!-- end row -->
                    <ul class="pagi">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul>
                </div><!-- end propage -->
            </div><!-- end col-10 -->
        </div>
    </div>
</div>

<div class="khach">
    <img src="images/khachbg.jpg" title="" alt="">
    <div class="container khach-con">
        <div class="owl-carousel owl-theme carousel_khach">
            <div class="item">
                <div class="khach-wrap">
                    <div class="text-center khach-img">
                        <img class="mx-auto khach-item" src="images/khach1.jpg" alt="" title="">
                        <i class="fa fa-quote-left khach-decor"></i>
                    </div>
                    <ul class="text-center khach-rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <p class="text-center">Nguyễn Phương Mai</p>
                    <blockquote class="font-weight-bold text-center">Việc like một fanpage hay tham gia một group trên mạng xã hội thường làm cho các bạn lo lắng về độ phiền toái nhất định của nó. Cũng như nhiều group khác khi mới được thành lập.</blockquote>
                </div>
            </div>
            <div class="item">
                <div class="khach-wrap">
                    <div class="text-center khach-img">
                        <img class="mx-auto khach-item" src="images/khach1.jpg" alt="" title="">
                        <i class="fa fa-quote-left khach-decor"></i>
                    </div>
                    <ul class="text-center khach-rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <p class="text-center">Nguyễn Phương Mai</p>
                    <blockquote class="font-weight-bold text-center">Việc like một fanpage hay tham gia một group trên mạng xã hội thường làm cho các bạn lo lắng về độ phiền toái nhất định của nó. Cũng như nhiều group khác khi mới được thành lập. Việc like một fanpage hay tham gia một group trên mạng xã hội thường làm cho các bạn lo lắng về độ phiền toái nhất định của nó. Cũng như nhiều group khác khi mới được thành lập. Việc like một fanpage hay tham gia một group trên mạng xã hội thường làm cho các bạn lo lắng về độ phiền toái nhất định của nó. Cũng như nhiều group khác khi mới được thành lập.</blockquote>
                </div>
            </div>
            <div class="item">
                <div class="khach-wrap">
                    <div class="text-center khach-img">
                        <img class="mx-auto khach-item" src="images/khach1.jpg" alt="" title="">
                        <i class="fa fa-quote-left khach-decor"></i>
                    </div>
                    <ul class="text-center khach-rate">
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <p class="text-center">Nguyễn Phương Mai</p>
                    <blockquote class="font-weight-bold text-center">Việc like một fanpage hay tham gia một group trên mạng xã hội thường làm cho các bạn lo lắng về độ phiền toái nhất định của nó. Cũng như nhiều group khác khi mới được thành lập.</blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <h class="text-uppercase btit">Nhà sách trực tuyến Sigmabooks</h>
        <p>Nhà sách online Edufly hội tụ đầy đủ và cập nhật nhanh nhất các tựa sách đủ thể loại với mức giảm 5 – 15%. Qua nhiều năm, không chỉ là địa chỉ tin cậy để bạn mua sách trực tuyến, Edufly còn có quà tặng, văn phòng phẩm, vật dụng gia đình,…với chất lượng đảm bảo, chủng loại đa dạng, chế độ bảo hành đầy đủ và giá cả hợp lý từ hàng trăm thương hiệu uy tín trong và ngoài nước. Đặc biệt, bạn có thể chọn những mẫu sổ tay handmade hay nhiều món quà tặng sinh nhật độc đáo chỉ có tại Edufly.</p>

        <p>Mua sách online tại Edufly, bạn được tận hưởng chính sách hỗ trợ miễn phí đổi trả hàng, giao hàng nhanh – tận nơi – miễn phí*, thanh toán linh hoạt - an toàn, đặc biệt giảm thêm trên giá bán khi sử dụng BBxu giúp bạn mua sách online giá 0đ!</p>

        <p>Chỉ với 3 cú click chuột, chưa bao giờ trải nghiệm mua sách online lại dễ chịu và nhẹ nhàng như vậy. Còn chần chờ gì nữa, đặt mua ngay những tựa sách hay cùng hàng ngàn sản phẩm chất lượng khác tại Edufly!</p>
    </div>
</div>
@endsection
