<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
     public function getlist()
    {
        $product = Product::all();
        return view('admin.product.list',['product'=>$product]);
    }
    public function getadd()
    {
        $category=Category::all();
        return view('admin.product.add',['category'=>$category]);
    }
    public function postadd(Request $request)
    {
        $product = new Product;
        $images="";
        if ($request->has('images')) {
            $images=$request->images;
            $images->move(base_path('/uploads/product/'),$images->getClientOriginalName());
            $images=$images->getClientOriginalName();
        }
        $product->name = $request->name;
        $product->image = $images;
        $product->description = $request->description;
        $product->cat_id = $request->category;
        $product->price = $request->price;
        $product->sale_price = $request->sale_of;
        $product->status = $request->status;
        $product->save();
        return redirect('admin/product/list');

    }

    public function getedit($id)
    {
         $category=Category::all();
        $product = Product::find($id);
        return view('admin.product.edit',['product'=>$product,'category'=>$category]);
    }

    public function postedit(Request $request,$id)
    {
        $product = Product::find($id);
        $images=$product->image;
        if ($request->has('images')) {
            $images=$request->images;
            $images->move(base_path('/uploads/product/'),$images->getClientOriginalName());
            $images=$images->getClientOriginalName();
        }
        $product->name = $request->name;
        $product->image = $images;
        $product->description = $request->description;
        $product->cat_id = $request->category;
        $product->price = $request->price;
        $product->sale_price = $request->sale_of;
        $product->status = $request->status;
        $product->save();
        return redirect('admin/product/list');

    }

     public function getdelete($id)
    {
        $Product = Product::find($id);
        $Product->delete();     
        return redirect('admin/product/list')->with('thongbao','Bạn đã xóa thành công');
    }
}
