<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bill;
class BillController extends Controller
{
    public function __construct(Bill $bill){
        $this->Bill = $bill;
    }
    public function getList(){
    	$data = Bill::orderBy('id', 'desc')->get();
    	return view('admin.bill.list', compact('data'));
    }    
    public function getEdit($id){
        $data = Bill::where('id',$id)->first();
        // dd($data);
        $detail = json_decode($data->detail);
        // dd($detail);
        // $sale = Bill::leftJoin('campaign_cards', 'bills.card_code', '=', 'campaign_cards.card_code')
        //         ->join('campaigns', 'campaign_cards.campaign_id', '=', 'campaigns.id')
        //         ->select('campaigns.campaign_value')
        //         ->first();
    	return view('admin.bill.edit',compact('data','detail'));
    }
    public function update(Request $req, $id){
        $data = Bill::where('id',$id)->first();
        $data->status = $req->status;
        $data->save();
        return redirect(route('admin.bill.index'));
    }
    public function getDelete($id){
    	$order = Bill::find($id);
    	$order->delete();
    	return redirect()->back()->with('status','Xóa thành công');
    }
    public function seachOrder(Request $request){
        $search = (int)($request->searchorder);
        // $data = Bill::where('status', $search)->get();
        $data = $this->Bill->search($search);
        return view('admin.search_order', compact('data','search'));
    }
}
