<?php

namespace App\Http\Controllers;
use App\ProductDetail;
use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
     public function getlist()
    {
        $product_detail = ProductDetail::all();
        return view('admin.product_detail.list',['product_detail'=>$product_detail]);
    }
    public function getadd()
    {
        $product=Product::all();
        return view('admin.product_detail.add',['product'=>$product]);
    }
    public function postadd(Request $request)
    {
        $product_detail = new ProductDetail;        
        $product_detail->id_pro = $request->id_pro;
        $product_detail->size = $request->size;
        $product_detail->quantity = $request->quantity;
        $product_detail->status = $request->status;
        $product_detail->save();
        return redirect('admin/product_detail/list');

    }

    public function getedit($id)
    {
         $product=Product::all();
        $product_detail = ProductDetail::find($id);
        return view('admin.product_detail.edit',['product_detail'=>$product_detail,'product'=>$product]);
    }

    public function postedit(Request $request,$id)
    {
        $product_detail = ProductDetail::find($id);
        $product_detail->id_pro = $request->id_pro;
        $product_detail->size = $request->size;
        $product_detail->color = $request->color;
        $product_detail->quantity = $request->quantity;
        $product_detail->status = $request->status;
        $product_detail->save();
        return redirect('admin/product_detail/list');

    }

     public function getdelete($id)
    {
        $product_detail = ProductDetail::find($id);
        $product_detail->delete();     
        return redirect('admin/product_detail/list')->with('thongbao','Bạn đã xóa thành công');
    }
}
