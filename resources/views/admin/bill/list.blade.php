@extends('admin.master')
@section('content')
@section('controller','Orders List')
@section('action','List')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 style="margin-bottom: 30px;">
    <div class="pull-left">@yield('controller')
    <small>@yield('action')</small></div>
    <div class="form-search-order pull-left" style=" margin-left: 30px;">
      <form action="{{route('seachOrder')}}" method="get" accept-charset="utf-8">
        <select name="searchorder" class="search-order pull-left" style="width: 250px; height: 34px; font-size: 16px;">
             <option value="">-- Trạng thái --</option>
             <option value="0">Mới đặt</option>
             <option value="1">Xác nhận</option>
             <option value="2">Đang giao hàng</option>
             <option value="3">Hoàn thành</option>
             <option value="4">Hủy</option>
         </select>
         <div class="btn-seach-order pull-left" style="margin-left: 10px;"><button type="submit" class="btn btn-primary">Tìm kiếm</button></div> 
      </form>
    </div>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        @if (session('status'))
        <div class="box-header">
            <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>
        </div>
        @endif
        <!--<div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>-->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <!-- <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th> -->
                <th class="text-center with_dieuhuong">Stt</th>
                <th>Mã hóa đơn</th>
                <th>Họ tên</th>
                <th>Tổng tiền thanh toán</th>
                <th>Phương thức thanh toán</th>
                <th>Ngày đặt hàng</th>
                <th>Trạng thái</th>
                <th class="text-center with_dieuhuong">Sửa</th>
                <th class="text-center with_dieuhuong">Xóa</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $k=>$item)
              <tr>
                <!-- <td><input type="checkbox" name="chon" id="chon" value="{{$item->id}}" class="chon" /></td> -->
                <td class="text-center with_dieuhuong">{{$k+1}}</td>
                <td>{{$item->code}}</td>
                <td>{{$item->full_name}}</td>
                <td>{{ number_format($item->money_pay)}}</td>
                <td>
                  <?php 
                    if($item->payment == 0) echo"Thanh toán khi giao hàng";
                    if($item->payment == 1) echo"Chuyển khoản qua ngân hàng";
                  ?>
                </td>
                <td>{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</td>
                <td>
                  <?php
                      switch ($item->status) {
                        case '0':
                          echo "Mới đặt";
                          break;
                        case '1':
                          echo "Xác nhận";
                          break;
                        case '2':
                          echo "Đang giao hàng";
                          break;
                        case '3':
                          echo "Hoàn thành";
                          break;
                        case '4':
                          echo "Hủy";
                          break;
                        default:
                          echo "Mới đặt";
                          break;
                      }
                  ?>
                </td>
                <!-- <td class="text-center with_dieuhuong">
                  @if($item->status>0)
                    <a href="admin/orders/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Bật</a>
                  @else
                    <a href="admin/orders/edit?id={{$item->id}}&hienthi={{ time() }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Tắt</a>
                  @endif
                </td> -->
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="{{asset('backend/orders/edit/'.$item->id)}}">Chi tiết</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="{{ asset('backend/orders/delete/'.$item->id )}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
          <div class="col-md-6">
            <!-- <input type="button" onclick="javascript:window.location='admin/orders/add'" value="Thêm" class="btn btn-primary" /> -->
            <!-- <button type="button" id="xoahet" class="btn btn-success">Xóa</button> -->
            <input type="button" value="Thoát" onclick="javascript:window.location='backend'" class="btn btn-danger" />

          </div>
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection()
