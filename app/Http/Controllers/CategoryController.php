<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList()
    {
    	$category = Category::all();
    	return view('admin.category.list',['category'=>$category]);
    }

    public function getadd()
    {
    	return view('admin.category.add');

    }

        public function postadd(Request $request)
    {
    	$category = new Category;
        $category->name = $request->name; 
        $category->status = $request->status;
        $category->save();
        return redirect('admin/category/list');

    }

    public function getedit($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit',['category'=>$category]);
    }

    public function postedit(Request $request,$id)
    {
    	$category = Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect('admin/category/list');

    }

     public function getdelete($id)
    {
    	$category = Category::find($id);
        $product=Product::where('cat_id','=',$id);
        $product->delete();
    	$category->delete();
    	
    	return redirect('admin/category/list')->with('thongbao','Bạn đã xóa thành công');

    }
}
