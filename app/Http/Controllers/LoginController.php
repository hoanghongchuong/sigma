<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class LoginController extends Controller
{
    public function getLogin(){
    	return view('templates.login');
    }
    public function postLogin(Request $request){
    	$this->validate($request, 
    		[
	    		'username' => 'required',
	    		'password' => 'required'
	    	],
	    	[
	    		'username.required' => 'Bạn chưa nhập username',
	    		'password.required' => 'Bạn chưa nhập password'
	    	]
	    );
	   
	    
	    if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password, 'level'=>2]))
	    {
	    	return 1;
	    	// return redirect()->route('index');
	    }
	    else
	    {
	    	// return redirect()->back()->with('mess','Email hoặc mật khẩu không chính xác');
	    	return 0;
	    }
    }
    public function logout(){
    	Auth::logout();
    	return redirect(route('index'));
    }
}
