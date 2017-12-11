<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use App\Images;
use Input, File;
use Validator;
use Auth;
use DB,Hash;

class UsersController extends Controller
{
    public function __construct(Users $users){
        $this->Users = $users;
    }
    /**
     * index action
     * @return view
     */
    public function index()
    {
        $data = $this->Users::where('level',2)->where('status',1)->get();
        return view('admin.users.index', compact('data'));
    }
    public function create(Request $request, $id = null){
        if($id){
            $users = $this->Users->findOrFail($id);
        }
        if($request->isMethod('GET')){
            return view('admin.users.create', compact('users','id'));
        }
        $data = $request->only($this->Users->getFieldList());
        $img = $request->file('fImages');
        if(!empty($img)){
            $path_img='upload/users';
            $img_name=$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $data['photo'] = $img_name;
        }
        
        $this->Users->insertOrUpdate($data, $id);
        return redirect()->route('admin.users.index')->with('status', 'success');
    }

    public function delete($id){
        $this->Users->deleteById($id);
        return redirect()->back()->with('status','Xóa thành công');
    }

    public function getAdmin()
    {
        $id_user=Auth::guard('admin')->user()->id;
        $data = DB::table('users')->select()->where('id', $id_user)->get()->first();
        // dd($data);
        return view('admin.users.admin', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateinfo(Request $request)
    {
        $this->validate($request,
            [
                "txtName" => "required",
                // "txtPassword" => "required",
                //'txtPasswordNew' => 'min:8|confirmed'
            ],
            [
                "txtName.required" => "Bạn chưa nhập tên",
                //"txtPasswordNew.length" => "Mật khẩu ít nhất 8 ký tự",
                // "txtPassword.required" => "Bạn chưa nhập lại mật khẩu"
            ]
        );
        $id_user = Auth::guard('admin')->user()->id;
        //$user = DB::table('users')->select('id',$id_user)->first();
        $data = Users::find($id_user);
        if(!empty($data)){
            $img = $request->file('fImages');

            if(!empty($img)){
                $path_img='upload/users';
                $img_name=$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $data->photo = $img_name;
            }
            $data->name = $request->txtName;
            if(!empty($request->txtPasswordNew)){
                $data->password = Hash::make($request->txtPasswordNew);
            }
            
            $data->address = $request->txtAddress;
            $data->phone = $request->txtPhone;
            $data->email = $request->txtEmail;

            // if($request->status=='on'){
            //     $product->status = 1;
            // }else{
            //     $product->status = 0;
            // }
             // dd($data);
            $data->save();

            return redirect('backend/users/info')->with('status','Cập nhật thành công');
        }else{
            return redirect('backend')->with('status','Cập nhật dữ liệu lỗi');
        }
    }
}
