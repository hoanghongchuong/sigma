@extends('admin.master')
@section('content')
@section('controller','Thành viên')
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
        	
        	<form name="frmAdd" method="post" action="{{ isset($id) ? route('admin.users.edit', $id) : route('admin.users.create') }}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	      		
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
		                  			<div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
										<div class="form-group">
											<img src="{{ asset('upload/users/'.@$users->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
												
											<input type="hidden" name="img_current" value="{!! @$users->photo !!}">
											@if(!empty($data->photo))
												<a href="{!! asset('backend/users/edit?id='.$id.'&delete_bg='.@$users->photo) !!}" class="img_bg"><img src="{!! asset('public/admin_assets/images/del.png') !!}" alt="Xóa hình"></a>
											@endif
										</div>
										<label for="file">Chọn File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<p class="help-block">Width:225px - Height: 162px</p>
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" class="form-control" value="{{ isset($users) ? $users->username : '' }}">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" value="{{ isset($users) ? $users->password : '' }}">
									</div>
							    	<div class="form-group @if ($errors->first('name')!='') has-error @endif">
								      	<label for="ten">Họ tên</label>
								      	<input type="text" name="name" id="txtName" value="{{ isset($users) ? $users->name : '' }}" required="required" class="form-control" />
								      	@if ($errors->first('name')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group @if ($errors->first('phone')!='') has-error @endif">
								      	<label for="alias">phone</label>
								      	<input type="text" name="phone" id="txtPhone" value="{{ isset($users) ? $users->phone : '' }}"  class="form-control" />
								      	@if ($errors->first('phone')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtPhone'); !!}</label>
								      	@endif
									</div>
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" name="email" class="form-control" value="{{ isset($users) ? $users->email : '' }}">
									</div>
									<div class="form-group">
										<label for="">Địa chỉ</label>
										<input type="text" name="address" class="form-control" value="{{ isset($users) ? $users->address : '' }}">
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
