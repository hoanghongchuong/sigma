<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\RegisterAdminRequest;
use DB,Hash;
class SignupController extends Controller
{
    public function __construct(){
         $this->middleware(function($request, $next) {
            if (Auth::check()) {
                View::share('nguoidung', Auth::user());
            }
            return $next($request);
        });
    }
    public function signup(){

    	return view('templates.signup');
    }
    public function postSignup(Request $request){
    	
        $checkUsername = DB::table('users')->where('username', $request->username)->first();
        if($checkUsername){
             echo "<script type='text/javascript'>
                alert('Tài khoản đã tồn tại !');
                window.location = '" . url('/') . "' </script>";
        }
    	$thanhvien = new Users;

        $thanhvien->username = $request->username;
        // $thanhvien->name = $request->name;
        $thanhvien->email = $request->email;
        $thanhvien->level = 2;
        $thanhvien->password = Hash::make($request->password);
        $thanhvien->remember_token = $request->_token;
        $thanhvien->save();
        echo "<script type='text/javascript'>
                alert('Bạn đã đăng kí thành công !');
                window.location = '" . url('/') . "' </script>";
        // return redirect()->route('index');

    }
    
}
