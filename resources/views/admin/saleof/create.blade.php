@extends('admin.master')
@section('content')
@section('controller','Giảm giá')
@section('action','')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   	@yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
    	@include('admin.messages_error')
        <div class="box-body">
        	
        	<form name="frmAdd" method="post" action="{{ isset($id) ? route('admin.saleof.edit', $id) : route('admin.saleof.create') }}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	      		
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
									<div class="form-group">
										<label>Cấp</label>
										<input type="text" name="name" class="form-control" value="{{ isset($sale->name) ? $sale->name : '' }}">
									</div>
									<div class="form-group">
										<label>Giá trị</label>
										<input type="number" name="total_value" class="form-control" value="{{ isset($sale->total_value) ? $sale->total_value : '' }}">
									</div>
									<div class="form-group">
										<label>Giảm (%)</label>
										<input type="number" min="0" max="100" name="value_sale" class="form-control" value="{{ isset($sale->value_sale) ? $sale->value_sale : '' }}">
									</div>
								</div>
							</div>
							
							<div class="clearfix"></div>
	                  	</div>
	                  	
	                </div>
	            </div>
	            <div class="clearfix"></div>
			   
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/users'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->
@endsection()
