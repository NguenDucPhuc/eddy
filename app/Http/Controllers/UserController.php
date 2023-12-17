<?php

namespace App\Http\Controllers;
// 
use App\User;
// 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use File;
use Response;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function getlist()
    {
        $i=0;
        $user = User::all();
        return view('admin.user.list',['user'=>$user,'i'=>$i]);
    }
    public function getInfor($id)
    {
       $user = User::find($id);
        return json_encode($user);
    }

    // public function getadd()
    // {
    //     return view('admin.user.add');

    // }

    //     public function postadd(Request $request)
    // {
    //     $user = new User;
    //     $image="";
    //     if ($request->has('avatar')) {
    //         $image=$request->avatar;
    //         $image->move(base_path('/uploads/avt/'),$image->getClientOriginalName());
    //         $image=$image->getClientOriginalName();
    //     }
    //     $user->username = $request->user; 
    //     $user->password = md5($request->pass);
    //     $user->fullname = $request->fullname;
    //     $user->avatar = $image;
    //     $user->phone = $request->phone;
    //     $user->email = $request->email;
    //     $user->gender = $request->gender;
    //     $user->birthday = $request->birthday;
    //     $user->address = $request->address;
    //     $user->note = $request->note;
    //     $user->role = $request->role;
    //     $user->status = $request->status;
    //     $user->save();
    //     return redirect('admin/user/list');

    // }

    public function getedit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postedit(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        return redirect('admin/user/list');

    }

     public function getdetete($id)
    {
        $user = User::find($id);
        $user->delete();        
        return redirect('admin/user/list')->with('thongbao','Bạn đã xóa thành công');

    }
    public function detete($id)
    {
        $user = User::find($id);
        $user->delete();        
        return redirect('admin/user/list')->with('thongbao','Bạn đã xóa thành công');

    }
    public function profile($id) {
        $user = User::find($id);
        return view('admin.layout.profile',['user'=>$user]);
    }
}
?>