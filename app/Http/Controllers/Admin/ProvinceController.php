<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Province;

class ProvinceController extends Controller
{
    //
    public function index(){
    	$province = Province::all();
    	// dd($province);
    	return view('admin.province.list',compact('province'));
    }
    public function getCreate(){

    	return view('admin.province.add');
    }
    public function postCreate(Request $request){
    	$province = new Province;
    	$province->name = $request->txtName;
    	$province->save();
    	return redirect(route('admin.province.index'))->with('mess','Thêm thành công');
    }

    public function getEdit($id){
    	$province = Province::where('id',$id)->first();
    	// dd($province);
    	return view('admin.province.edit', compact('province'));
    }
    public function postEdit(Request $request, $id){
    	$province = Province::where('id',$id)->first();
    	$province->name = $request->txtName;
    	$province->save();
    	return redirect(route('admin.province.index'));
    }

    public function delete($id){
    	$data = Province::find($id);
    	$data->delete();
    	return redirect(route('admin.province.index'))->with('mess','Xóa thành công');
    }
}
