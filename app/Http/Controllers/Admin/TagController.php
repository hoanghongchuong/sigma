<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
	/**
	 * constructor
	 */
    public function __construct(Tag $tag)
    {
    	$this->Tag = $tag;
    }

    /**
     * index action 
     * @return view
     */
    public function index()
    {
    	$data = Tag::all();
    	return view('admin.tag.index', compact('data'));
    }

    /**
     * create tag action
     * @param  Request $request
     * @param  integer  $id
     * @return view|mixed
     */
    public function create(Request $request, $id = null)
    {
    	if ($request->isMethod('GET')) {
    		return view('admin.tag.create');
    	}

    	$this->validate($request, [
    		'name' => 'required|unique:tags,name'
    	]);

    	$data = $request->only(['name']);
    	$data['slug'] = str_slug($data['name']);
    	$this->Tag->updateOrCreate(['id' => $id, $data]);
    	return redirect()->back()->with(['status' => 'success']);
    }
}
