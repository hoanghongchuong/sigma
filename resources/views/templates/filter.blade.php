<form action="{{route('filter')}}" method="get" accept-charset="utf-8">
    {{ csrf_field() }}    
    
    <div class="pro-filter">           
        <select name="theloai" id="" class="w-100 pro-filter-type">
            <option value="">-- Thể loại --</option>
            <?php $theloais = DB::table('theloai')->orderBy('id','desc')->get(); ?>
            @foreach($theloais as $tl)
            <option value="{{$tl->id}}" @if($tl->id == @$theloai) {{"selected"}} @endif >{{$tl->name}}</option>
            @endforeach
        </select>

        <select name="tacgia" id="" class="w-100 pro-filter-author">
            <option value="">-- Tác giả --</option>
            <?php $tacgias = DB::table('tacgia')->orderBy('id','desc')->get(); ?>
            @foreach($tacgias as $tg)
            <option value="{{$tg->id}}" @if($tg->id == @$tacgia) {{"selected"}} @endif >{{$tg->name}}</option>
            @endforeach
        </select>

        <select name="nxb" id="" class="w-100 pro-filter-publish">
            <option value="">-- Nhà xuất bản --</option>
            <?php $nxbs = DB::table('nxb')->orderBy('id','desc')->get(); ?>
            @foreach($nxbs as $n)
            <option value="{{$n->id}}" @if($n->id == @$nxb) {{"selected"}} @endif >{{$n->name}}</option>
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
