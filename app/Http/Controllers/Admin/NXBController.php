<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NXB;
class NXBController extends Controller
{
    public function index(){
		$data = NXB::orderBy('id','desc')->get();
		return view('admin.nhaxuatban.index', compact('data'));
	}
	public function getCreate(){

		return view('admin.nhaxuatban.create');
	}
	public function postCreate(Request $request){
		$data = new NXB;
		$data->name = $request->txtName;
		$data->save();
		return redirect()->route('admin.nhaxuatban.index')->with('status','Thêm thành công');
	}
	public  function getEdit($id){
		$data = NXB::findOrFail($id);
		return view('admin.nhaxuatban.edit', compact('data'));
	}
	public function postEdit(Request $request, $id){
		$data = NXB::find($id);
		$data->name = $request->txtName;
		$data->save();
		return redirect()->back()->with('status', 'Sửa thành công');
	}
	public function delete($id){
		$data = NXB::find($id);
		$data->delete();
		return redirect()->back()->with('status','Xoá thành công');
	}
}
