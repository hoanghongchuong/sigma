<section class="row advs">
    <?php $qc = DB::table('lienket')->where('status',1)->where('com','chuyen-muc')->get(); ?>
    @foreach($qc as $item)
    <section class="col-md-4 col-sm-4 col-xs-12">
        <a href="{{$item->link}}"><img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="Advs"></a>
    </section>
    @endforeach
</section>