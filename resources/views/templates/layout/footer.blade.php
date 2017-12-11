<?php
    $setting = Cache::get('setting');
    $about = Cache::get('about');
    $cateProducts = Cache::get('cateProducts');
?>
<footer class="ft">
    <div class="container">
        <h2 class="text-uppercase ft-tit">Từ khóa tìm kiếm</h2>
        <div class="ftmenu-wrap">
            <ul class="ft-menu">
                <li><a href="#" title="">Truyện thiếu nhi</a></li>
                <li><a href="#" title="">Sác toán học</a></li>
                <li><a href="#" title="">Sách văn học</a></li>
                <li><a href="#" title="">Sách lý học</a></li>
                <li><a href="#" title="">Sách giải</a></li>
                <li><a href="#" title="">Đánh thức tài năng toán học</a></li>
                <li><a href="#" title="">Toán tài năng</a></li>
            </ul>
        </div>
        <!-- <div class="d-flex flex-md-row flex-column align-items-center justify-content-between ft-card"> -->
        <div class="ft-bcard">
            <div class="row">
                <div class="col-md-6">
                    <div class="ft-card-l">
                        <!-- <div class="align-items-center">
                            <span class="mr-2">Chấp nhận thanh toán qua:</span> 
                            <a href="#" title=""><img src="{{asset('public/images/cart_01.jpg')}}" title="" alt="">
                            </a>
                            <a href="#" title=""><img src="{{asset('public/images/cart_02.jpg')}}" title="" alt=""></a> 
                            <a href="#" title=""><img src="{{asset('public/images/cart_03.jpg')}}" title="" alt=""></a> 
                            <a href="#" title=""><img src="{{asset('public/images/cart_02.jpg')}}" title="" alt=""></a> 
                            <a href="#" title=""><img src="{{asset('public/images/cart_03.jpg')}}" title="" alt=""></a>
                        </div> -->
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end ft-card-r">
                        <span class="mr-2">Chia sẻ với chúng tôi:</span> 
                        <ul class="ft-social">
                            <li><a target="_blank" href="{{$setting->facebook}}" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="{{$setting->twitter}}" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="{{$setting->google}}" title=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" href="{{$setting->instagram}}" title=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-last">
            <h2>© 2017 Công ty Cổ phần Công nghệ và Truyền thông GCO</h2>

            <p>Địa chỉ: <span>{{$setting->address}}</span></p>
            <p>Điện thoại : <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> - Website: <a href="{{$setting->website}}">{{$setting->website}}</a></p>
        </div>
    </div>
</footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>