<?php

namespace App\Http\Controllers;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList()
    {
    	$Order = Order::all();
    	return view('admin.order.list',['Order'=>$Order]);
    }

    // public function getadd()
    // {
    // 	return view('admin.order.add');

    // }

    //     public function postadd(Request $request)
    // {
    // 	$Order = new Order;
    //     $images="";
    //     if ($request->has('image')) {
    //         $images=$request->image;
    //         $images->move(base_path('/uploads/Order/'),$images->getClientOriginalName());
    //         $images=$images->getClientOriginalName();
    //     }
    //     $Order->title = $request->title;
    //     $Order->name = $request->name;
    //     $Order->image = $images;
    //     $Order->status = $request->status;
    //     $Order->save();
    //     return redirect('admin/order/list');

    // }

    public function getedit($id)
    {
    	$Order = Order::find($id);
        $OrderD = OrderDetail::where('id_order','=',$id)->get();
        // dd( $OrderD);
    	return view('admin.order.edit',['or'=>$Order,'od'=>$OrderD]);
    }

    public function postedit(Request $request,$id)
    {
    	$Order = Order::find($id);
        $Order->name = $request->name;
        $Order->email = $request->email;
        $Order->address = $request->address;
        $Order->phone = $request->phone;
        $Order->note = $request->note;
        $Order->status = $request->status;
        $Order->save();
        return redirect('admin/order/list');

    }

    //  public function getdelete($id)
    // {
    // 	$Order = Order::find($id);
    // 	$Order->delete();
    	
    // 	return redirect('admin/order/list')->with('thongbao','Bạn đã xóa thành công');

    // }
}
