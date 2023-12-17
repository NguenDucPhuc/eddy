<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function getList()
    {
    	$slide = Slide::all();
    	return view('admin.slide.list',['slide'=>$slide]);
    }

    public function getadd()
    {
    	return view('admin.slide.add');

    }

        public function postadd(Request $request)
    {
    	$Slide = new Slide;
        $images="";
        if ($request->has('image')) {
            $images=$request->image;
            $images->move(base_path('/uploads/slide/'),$images->getClientOriginalName());
            $images=$images->getClientOriginalName();
        }
        $Slide->title = $request->title;
        $Slide->name = $request->name;
        $Slide->image = $images;
        $Slide->status = $request->status;
        $Slide->save();
        return redirect('admin/slide/list');

    }

    public function getedit($id)
    {
    	$Slide = Slide::find($id);
    	return view('admin.slide.edit',['sl'=>$Slide]);
    }

    public function postedit(Request $request,$id)
    {
    	$Slide = Slide::find($id);
        $images=$Slide->image;
        if ($request->has('image')) {
            $images=$request->image;
            $images->move(base_path('/uploads/slide/'),$images->getClientOriginalName());
            $images=$images->getClientOriginalName();
        }
        $Slide->title = $request->title;
        $Slide->name = $request->name;
        $Slide->image = $images;
        $Slide->status = $request->status;
        $Slide->save();
        return redirect('admin/slide/list');

    }

     public function getdelete($id)
    {
    	$Slide = Slide::find($id);
    	$Slide->delete();
    	
    	return redirect('admin/slide/list')->with('thongbao','Bạn đã xóa thành công');

    }
}
