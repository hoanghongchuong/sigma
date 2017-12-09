<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use DB,Cache,Mail, Request;
use Cart;
use App\Bill;
class PostOrderController extends Controller
{
    public function __construct(){
    	$setting = DB::table('setting')->select()->where('id',1)->get()->first();
    	 Cache::forever('setting', $setting);
    }
     protected function getTotalPrice()
    {
        $cart = Cart::content();
        $total = 0;
        foreach ($cart as $key) {
            $total += $key->price * $key->qty;
        }
        return $total;
    }
    public function postOrder(Request $req)
    {
        
        $cart = Cart::content();
        $bill = new Bill;
        $bill->full_name = Request::input('full_name');
        $bill->email = Request::input('email');
        $bill->phone = Request::input('phone');
        $bill->note = Request::input('note');
        $bill->address = Request::input('address');
        $bill->code = str_random(8);
        // $bill->payment = (int)($req->payment_method);
        $bill->payment = (int)(Request::input('payment_method'));
        $bill->province = Request::input('province');
        $bill->district = Request::input('district');
        $total = $this->getTotalPrice();
        $bill->total = $total;
        // $order['price'] = $this->getTotalPrice();
        // if ($req->card_code) {
        // 	$price = $this->checkCard($req);
        // 	if (!$price) {
        // 		return redirect()->back()->with('Mã giảm giá không đúng');
        // 	}
        // 	$bill->card_code = $req->card_code;
        // 	$tongtien = $this->checkCard($req);
        // 	$bill->total = ((Int)str_replace(',', '', $tongtien));
        // }
        $detail = [];
        foreach ($cart as $key) {
            $detail[] = [
                'product_name' => $key->name,
                'product_numb' => $key->qty,
                'product_price' => $key->price,
                'product_img' => $key->options->photo,
                'product_code' => $key->options->code
            ];
        }
        $bill->detail = json_encode($detail);
        if ($total > 0) {
            $bill->save();
        } else {
            echo "<script type='text/javascript'>
				alert('Giỏ hàng của bạn rỗng!');
				window.location = '" . url('/') . "' 
			</script>";
        }
        try {
        	
            $data = [
                'hoten' => Request::input('full_name'),
                'diachi' => Request::input('address'),
                'dienthoai' => Request::input('phone'),
                'email' => Request::input('email'),
                'total' => $total	 
                // 'noidung' => $request->get('noidung')
            ];
            Mail::send('templates.guidonhang_tpl', $data, function ($msg) {
                $setting = Cache::get('setting');
                $msg->from(Request::input('email'),  $setting->name);
                $msg->to($setting->email, 'HoangChuong')->subject('Đơn đặt hàng');
                // $msg->to(Request::input('email'), Request::input('full_name'))->subject('Đơn đặt hàng');
            });
            Mail::send('templates.sendCustom_tpl', $data, function ($msg) {
                $setting = Cache::get('setting');
                $msg->from($setting->email, $setting->name);
                $msg->to(Request::input('email'), Request::input('full_name'))->subject('Đơn đặt hàng');
            });
        } catch (Exception $e) {
            echo " khong gui dc email";
        }
        Cart::destroy();
        echo "<script type='text/javascript'>
				alert('Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn sớm nhất!');
				window.location = '" . url('/') . "' 
			</script>";
    }
}
