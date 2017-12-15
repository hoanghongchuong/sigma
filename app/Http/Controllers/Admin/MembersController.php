<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Images;
use App\Member;
use Input, File;
use Validator;
use Auth;
use DB,Hash;
class MembersController extends Controller
{
    public function __construct(Member $members){
        $this->Member = $members;
    }
    /**
     * index action
     * @return view
     */
    public function index()
    {
        $data = Member::orderBy('id','desc')->get();
        return view('admin.members.index', compact('data'));
    }
    public function create(Request $request, $id = null){
        if($id){
            $users = $this->Member->findOrFail($id);

        }
        if($request->isMethod('GET')){

            return view('admin.members.create', compact('users','id'));
        }
        $data = $request->only($this->Member->getFieldList());
        $img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/users';
            $img_name=$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $data['photo'] = $img_name;
        }
        
        $this->Member->insertOrUpdate($data, $id);
        return redirect()->route('admin.members.index')->with('status', 'success');
    }

    public function delete($id){
        $this->Member->deleteById($id);
        return redirect()->back()->with('status','Xóa thành công');
    }

    public function getAdmin()
    {
        $id_user=Auth::guard('admin')->user()->id;
        $data = DB::table('members')->select()->where('id', $id_user)->get()->first();
        // dd($data);
        return view('admin.members.admin', compact('data'));
    }
    
}
