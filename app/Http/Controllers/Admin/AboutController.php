<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use App\Images;
use Input, File;
use Validator;
use Auth;

class AboutController extends Controller
{
    public function index()
    {  
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        else if($_GET['type']=='tuyen-dung') $trang='tuyển dụng';
        else if($_GET['type']=='dich-vu') $trang='dịch vụ';
        $data = About::all();
        return view('admin.about.index', compact('data','trang'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function getList(Request $request){
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        
        else $trang = "bài viết";
        // $data = About::get();

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        // dd($com);
        $data = About::select()->get();
        // dd($data);
        return view('admin.about.list', compact('data','trang'));
        
    }
    public function getAdd(){
        if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
       
        else $trang = "bài viết";

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = About::select()->where('com' , $com)->get();
        return view('admin.about.add', compact('data','trang'));
    }
    public function postAdd(Request $request){
        $com= $request->txtCom;
        $about = new About;
        $about->name = $request->txtName;
        if($request->txtAlias){
            $about->alias = $request->txtAlias;
        }else{
            $about->alias = changeTitle($request->txtName);
        }
        $about->mota = $request->txtDesc;
        $about->content = $request->txtContent;
        $about->title = $request->txtTitle;
        $about->keyword = $request->txtKeyword;
        $about->description = $request->txtDescription;
        $about->save();
        return redirect('backend/about?type='.$com);
    }
    public function getEdit(Request $request)
    {
        if($_GET['type']=='gioi-thieu') $trang='Giới thiệu';
        else $trang= 'Bài viết';


        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }

        $data = About::select()->get()->first();
        if(empty($data)){ 
            $data = new About;
            $data->com = $com;

            $data->user_id = Auth::user()->id;

            if($data->save()){
                $data = About::select()->where('com' , $com)->get()->first();
            }
            
        }
        return view('admin.about.edit',compact('data','trang'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        if($_GET['type']=='gioi-thieu') $trang='Giới thiệu';
        
        else $trang= 'Bài viết';

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = About::select()->get()->first();
        if(!empty($data)){
            
            $data->name = $request->txtName;
            $data->alias = changeTitle($request->txtName);
            
            $data->mota = $request->txtDesc;
            $data->title = $request->txtTitle;
            $data->content = $request->txtContent;
            $data->keyword = $request->txtKeyword;
            $data->description = $request->txtDescription;
            $data->com = $request->txtCom;
            $data->status = 1;
            // if($request->status=='on'){
            //     $news->status = 1;
            // }else{
            //     $news->status = 0;
            // }
            // $data->user_id   = Auth::user()->id;

            $data->save();
            return redirect('backend/about/edit?type='.$com)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }

    public function getDelete($id){
       if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $about = About::findOrFail($id);
        $about->delete();
        File::delete('upload/about/'.$about->photo);
        return redirect('backend/about?type='.$com)->with('status','Xóa thành công');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    
}
