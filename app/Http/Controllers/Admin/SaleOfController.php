<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SaleOf;
class SaleOfController extends Controller
{
	public function __construct(SaleOf $saleof)
	{
		$this->SaleOf = $saleof;
	}
    public function index()
    {
    	$data = $this->SaleOf::orderBy('id','desc')->get();
    	return view('admin.saleof.index', compact('data'));
    }

    public function create(Request $request, $id = null){
    	if($id){
    		$sale = $this->SaleOf->findOrFail($id);
    	}
    	if($request->isMethod('GET')){
    		return view('admin.saleof.create', compact('sale', 'id'));
    	}
    	$data = $request->only($this->SaleOf->getFieldList());
    	$this->SaleOf->insertOrUpdate($data, $id);
    	return redirect()->route('admin.saleof.index')->with('status', 'Success');
    }
    public function delete($id)
    {
    	$this->SaleOf->deleteById($id);
    	return redirect()->back()->with('status','Xóa thành công');
    }
}
