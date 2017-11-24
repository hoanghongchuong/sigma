<form action="" method="get" accept-charset="utf-8">
    {{ csrf_field() }}    
    
    <div class="pro-filter">           
        <select name="" id="" class="w-100 pro-filter-type">
            <option value="">-- Thể loại --</option>
            <?php $theloai = DB::table('theloai')->orderBy('id','desc')->get(); ?>
            @foreach($theloai as $tl)
            <option value="{{$tl->id}}">{{$tl->name}}</option>
            @endforeach
        </select>

        <select name="" id="" class="w-100 pro-filter-author">
            <option value="">-- Tác giả --</option>
            <?php $tacgia = DB::table('tacgia')->orderBy('id','desc')->get(); ?>
            @foreach($tacgia as $tg)
            <option value="{{$tg->id}}">{{$tg->name}}</option>
            @endforeach
        </select>

        <select name="" id="" class="w-100 pro-filter-publish">
            <option value="">-- Nhà xuất bản --</option>
            <?php $nxb = DB::table('nxb')->orderBy('id','desc')->get(); ?>
            @foreach($nxb as $n)
            <option value="{{$n->id}}">{{$n->name}}</option>
            @endforeach
        </select>

        <h2 class="pro-filter-tit">Giá</h2>
        <div class="widget-info filter-price" style="position: relative;">
            <div>
                <input type="text" id="range" value="" name="range" />
            </div>
            <div class="filter-btn">
                <button class="btn w-100 text-uppercase btn-filter" type="submit">Lọc sản phẩm</button>
            </div>
        </div>
    </div>
</form>
