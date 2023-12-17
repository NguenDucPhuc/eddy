<?php

namespace App\Http\Controllers;
// 
use App\Customer;
// 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use app\Exports\CustomerExport;
use File;
use Response;

class CustomerController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function getlist()
    {
        $i=0;
        $customer = Customer::all();
        return view('admin.customer.list',['customer'=>$customer,'i'=>$i]);
    }
    public function getadd()
    {
        return view('admin.customer.add');

    }

        public function postadd(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->fullname;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->save();
        return redirect('admin/customer/list');

    }

    public function getedit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit',['customer'=>$customer]);
    }

    public function postedit(Request $request,$id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->fullname;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->save();
        return redirect('admin/customer/list');

    }

     public function getdelete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();        
        return redirect('admin/customer/list')->with('thongbao','Bạn đã xóa thành công');

    }
     public function export() 
    {
        return Excel::download(new CustomerExport, 'customer.xlsx');
    }
}
?>