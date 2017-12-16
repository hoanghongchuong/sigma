@extends('admin.master')
@section('content')
@section('controller','Product')
@section('action','Add')
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
        	
        	<form name="frmAdd" method="post" action="{!! route('admin.product.postAdd') !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
	      		
      			<div class="nav-tabs-custom">
	                <ul class="nav nav-tabs">
	                  	<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>
	                  	
	                  	<li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Nội dung</a></li>
	                  	<li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Album hình</a></li>
	                  	<li><a href="#tab_4" data-toggle="tab" aria-expanded="true">File đọc thử</a></li>
	                  	<li><a href="#tab_3" data-toggle="tab" aria-expanded="true">SEO</a></li>
	                </ul>
	                <div class="tab-content">
	                  	<div class="tab-pane active" id="tab_1">
	                  		<div class="row">
		                  		<div class="col-md-6 col-xs-12">
			                    	@if (count($errors) > 0)
						        		<div class="form-group has-error">
						        			@foreach ($errors->all() as $error)
						        			<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $error !!}</label><br>
						        			@endforeach
						        		</div>
						        	@endif
									<div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
										<label for="file">File ảnh</label>
								     	<input type="file" id="file" name="fImages" >
								    	<p class="help-block">Width:225px - Height: 162px</p>
								    	@if ($errors->first('fImages')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
								      	@endif
									</div>

									<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
									<div class="clearfix"></div>
									@if($_GET['type']=='san-pham')
									<div class="form-group">
								      	<label for="ten">Danh mục cha</label>
								      	<select name="txtProductCate" class="form-control">
								      		<option value="0">Chọn danh mục</option>
								      		<?php cate_parent($parent,0,"--",0) ?>
								      	</select>
									</div>
									@endif	
									@if($_GET['type'] == 'sach-dien-tu')
										<div class="form-group">
									      	<label for="ten">Danh mục cha</label>
									      	<select name="txtProductCate" class="form-control">
									      		<option value="0">Chọn danh mục</option>
									      		<?php $cate = DB::table('product_categories')->where('com','sach-dien-tu')->get(); ?>
									      		@foreach($cate as $cateS)
									      		<option value="{{$cateS->id}}">{{$cateS->name}}</option>
												@endforeach
									      	</select>
										</div>
									@endif
							    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
								      	<label for="ten">Tên</label>
								      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
								      	@if ($errors->first('txtName')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
								      	@endif
									</div>
									<div class="form-group @if ($errors->first('txtAlias')!='') has-error @endif">
								      	<label for="alias">Đường dẫn tĩnh</label>
								      	<input type="text" name="txtAlias" id="txtAlias" value=""  class="form-control" />
								      	@if ($errors->first('txtAlias')!='')
								      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtAlias'); !!}</label>
								      	@endif
									</div>
									@if($_GET['type']=='san-pham' || $_GET['type'] =='combo')
									<div class="form-group">
								      	<label for="ten">Giá bán</label>
								      	<input type="text" name="txtPrice"  onkeyup="FormatNumber(this);"  onKeyPress="return isNumberKey(event)" value=""  class="form-control" />
									</div>
									<div class="form-group">
								      	<label for="ten">Giá bìa</label>
								      	<input type="text" name="txtPriceOld"  onkeyup="FormatNumber(this);"  onKeyPress="return isNumberKey(event)" value=""  class="form-control" />
									</div>
									@endif
									@if($_GET['type']=='san-pham' || $_GET['type'] =='sach-dien-tu')
									<div class="form-group">
								      	<label for="ten">Thể loại</label>
								      	<select name="theloai" class="form-control">
								      		<option value="0">Chọn thể loại</option>
								      		@foreach($theloai as $tl)
								      		<option value="{{$tl->id}}">{{$tl->name}}</option>
								      		@endforeach
								      	</select>
									</div>
									<div class="form-group">
								      	<label for="ten">Tác giả</label>
								      	<select name="tacgia" class="form-control">
								      		<option value="0">Chọn tác giả</option>
								      		@foreach($tacgia as $tg)
								      		<option value="{{$tg->id}}">{{$tg->name}}</option>
								      		@endforeach
								      	</select>
									</div>
									<div class="form-group">
								      	<label for="ten">Nhà xuất bản</label>
								      	<select name="nxb" class="form-control">
								      		<option value="0">Chọn Nhà xuất bản</option>
								      		@foreach($nxb as $n)
								      		<option value="{{$n->id}}">{{$n->name}}</option>
								      		@endforeach
								      	</select>
									</div>
									@endif	
									
								</div>
								
								<script type="text/javascript">
								    $(document).ready(function() {
								        var availableTags = '{{$availableTags}}'.split(',');
								        $("#myTags").tagit({
								            availableTags: availableTags,
								            autocomplete: {
								                source: function(req, res) {
								                    $.ajax({
								                        url: '{{route("admin.tag.search")}}',
								                        type: 'GET',
								                        data: {
								                            term: req.term
								                        },
								                        success: function(data) {
								                            res(data);
								                        }
								                    });
								                },
								                delay: 500,
								                select: function(event, ui) {
								                    var arr = $('#tags').val() == '' ? [] : JSON.parse($('#tags').val());
								                    var exist = false;
								                    for (var i = 0; i < arr.length; i++) {
								                        if (arr[i].id == ui.item.value) {
								                            exist = true;
								                            break;
								                        }
								                    }
								                    if (!exist) {
								                        arr.push({
								                            name: ui.item.label,
								                            id: ui.item.value
								                        });
								                        $('#tags').val((JSON.stringify(arr)));
								                        $("#myTags").tagit("createTag", ui.item.label);
								                    }
								                    return false;
								                }
								            },
								            allowSpaces: true,
								            singleField: true,
								            singleFieldNode: $("#single"),
								            afterTagRemoved: function(event, ui) {
								                var arr = JSON.parse($('#tags').val());
								                arr = arr.filter(function(item) {
								                    return item.name.trim() != ui.tagLabel.trim();
								                })
								                $('#tags').val((JSON.stringify(arr)));
								            },
								            beforeTagAdded: function(event, ui) {
								                if ($.inArray(ui.tagLabel, availableTags) == -1) {
								                    return false;
								                }
								            }
								        });
								    });
								</script>

								<!-- <ul id="myTags"></ul> -->
								@if($_GET['type']=='san-pham' || $_GET['type'] =='combo')
								<label for="desc">Tag</label>
								<input class="form-control" name="mytags" id="myTags" />
								<input  id="tags" hidden="" name="tag" value="[]">
								@endif	
								<div class="col-md-6 col-xs-12">					
								<!-- <div class="form-group">
							      	<label for="ten">Mã SP</label>
							      	<input type="text" name="txtCode"  value=""  class="form-control" />
								</div> -->
								<!-- <div class="form-group">
									<label for="">Thuộc tính</label>
									<div id="a">
									</div>
									<input id="btnAdd"  class="add-properties" type="button" value="Add" />
								</div> -->
								<div class="form-group">
							      	<label for="desc">Mô tả</label>
							      	<textarea name="txtDesc" rows="5" id="txtContent" class="form-control"></textarea>
								</div>
								
							</div>
							</div>
							
							
							<div class="clearfix"></div>
	                  	</div><!-- /.tab-pane -->
	                  	<div class="tab-pane" id="tab_2">
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Giới thiệu sản phẩm</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="txtHuongdan" rows="5" id="txtContent" class="form-control"></textarea>
				        		</div>
				        	</div>
	                  		<div class="box box-info">
				                <div class="box-header">
				                  	<h3 class="box-title">Thông tin sản phẩm</h3>
				                  	<div class="pull-right box-tools">
					                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
					                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
					                </div>
				                </div>
				                <div class="box-body pad">
				        			<textarea name="txtContent" id="txtContent" cols="50" rows="5"></textarea>
				        		</div>
				        	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                	<div class="tab-pane" id="tab_5">
	                		<div class="form-group">
	                  			<label class="control-label">Chọn ảnh</label>
                      			<input id="input-2" name="detailImg[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif"]'>
	                  		</div>
	                  	</div>
	                  	<div class="tab-pane" id="tab_4">
	                		<div class="form-group">
	                  			<label class="control-label">Chọn file</label>
                      			<input id="input-3" name="fileRead[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["pdf"]'>
	                  		</div>
	                  	</div>
	                	<div class="tab-pane" id="tab_3">
	                  		<div class="row">
		                    	<div class="col-md-6 col-xs-12">
		                    		<div class="form-group">
								      	<label for="keyword">Keyword</label>
								      	<textarea name="txtKeyword" rows="5" class="form-control"></textarea>
									</div>
									<div class="form-group">
								      	<label for="description">Description</label>
								      	<textarea name="txtDescription" rows="5" class="form-control"></textarea>
									</div>
		                    	</div>
	                    	</div>
	                    	<div class="clearfix"></div>
	                	</div><!-- /.tab-pane -->
	                </div><!-- /.tab-content -->
	            </div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group hidden">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;">
				    </div>
				    
				    <div class="form-group">
					    <label>
				        	<input type="checkbox" name="status" checked="checked"> Hiển thị
				    	</label>
				    </div>
				   	<!-- <div class="form-group">
					    <label>
				        	<input type="checkbox" checked="checked" name="tinhtrang"> Còn hàng
				    	</label>
				    </div> -->
					@if($_GET['type']=='san-pham')
			    	<div class="form-group">
					    <label>
				        	<input type="checkbox" name="noibat"> Sắp phát hành
				    	</label>
				    </div>
				    <div class="form-group">
					    <label>
				        	<input type="checkbox" name="spbc"> Bán chạy
				    	</label>
				    </div>
					@endif
					@if($_GET['type']=='sach-dien-tu')
						<div class="form-group">
					    <label>
				        	<input type="checkbox" name="noibat"> Sách đọc nhiều
				    	</label>
				    </div>
					@endif
			    </div>
			    <div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/product'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
