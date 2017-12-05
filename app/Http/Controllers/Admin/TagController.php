<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Http\Requests\TagRequest;

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
    public function create(TagRequest $request, $id = null)
    {
        if ($id) {
            $tag = $this->Tag->findOrFail($id);
        }
    	if ($request->isMethod('GET')) {
            
    		return view('admin.tag.create', compact('tag', 'id'));
    	}
    	$data = $request->only($this->Tag->getFieldList());
        $this->Tag->insertOrUpdate($data, $id);
    	return redirect()->back()->with(['status' => 'success']);
    }

    /**
     * delete action
     * @param  integer $id
     * @return mixed
     */
    public function delete($id){
        $this->Tag->deleteById($id);
        return redirect()->route('admin.tag.index')->with('status','Xóa thành công');
    }

    /**
     * search ajax
     * @return JSON
     */
    public function search(Request $request)
    {
        if (!$request->ajax()) {
            return redirect()->back();
        }
        return response()->json($this->Tag->searchByName(trim($request->term)));
    }
}
