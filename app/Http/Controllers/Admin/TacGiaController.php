<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TacGia;
class TacGiaController extends Controller
{
    public function index(){
		$data = TacGia::orderBy('id','desc')->get();
		return view('admin.tacgia.index', compact('data'));
	}
	public function getCreate(){

		return view('admin.tacgia.create');
	}
	public function postCreate(Request $request){
		$data = new TacGia;
		$data->name = $request->txtName;
		$data->save();
		return redirect()->route('admin.tacgia.index')->with('status','Thêm thành công');
	}
	public  function getEdit($id){
		$data = TacGia::find($id);
		return view('admin.tacgia.edit', compact('data'));
	}
	public function postEdit(Request $request, $id){
		$data = TacGia::find($id);
		$data->name = $request->txtName;
		$data->save();
		return redirect()->back()->with('status', 'Sửa thành công');
	}
	public function delete($id){
		$data = TacGia::find($id);
		$data->delete();
		return redirect()->back()->with('status','Xoá thành công');
	}
}
