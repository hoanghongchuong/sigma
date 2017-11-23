<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TheLoai;
class TheLoaiController extends Controller
{
	public function index(){
		$data = TheLoai::orderBy('id','desc')->get();
		return view('admin.theloai.index', compact('data'));
	}
	public function getCreate(){

		return view('admin.theloai.create');
	}
	public function postCreate(Request $request){
		$data = new TheLoai;
		$data->name = $request->txtName;
		$data->save();
		return redirect()->route('admin.theloai.index')->with('status','Thêm thành công');
	}
	public  function getEdit($id){
		$data = TheLoai::find($id);
		return view('admin.theloai.edit', compact('data'));
	}
	public function postEdit(Request $request, $id){
		$data = TheLoai::find($id);
		$data->name = $request->txtName;
		$data->save();
		return redirect()->back()->with('status', 'Sửa thành công');
	}
	public function delete($id){
		$data = TheLoai::find($id);
		$data->delete();
		return redirect()->back()->with('status','Xoá thành công');
	}
}
