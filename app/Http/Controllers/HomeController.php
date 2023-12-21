<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\CartHelper;
use App\Category;
use App\Product;
use App\ProductDetail;
use App\Slide;
use App\Order;
use App\OrderDetail;
use App\Customer;
use Mail;

class HomeController extends Controller
{
    function __construct()
    {
        $category = Category::where('status','1')->orderBy('name','asc')->get();  
        view()->share('category',$category);
    }

    function index()
    {
        $product = Product::where('status','1')->limit(15)->get();
        $slide=Slide::where('status','1')->get();
        return view('pages.shop.home',compact('product','slide'));

    }
    function product()
    {
        $product = Product::where('status','1')->orderBy('id','asc')->get();
        return view('pages.shop.product',compact('product'));

    }
    function product_detail($id)
    {
        $cat=Category::all();
        $pr = Product::find($id);
        $rltv= Product::where('cat_id',$pr->cat_id)->orderBy('id','asc')->get();
        return view('pages.shop.product-detail',compact('pr','cat','rltv'));

    }

    public function getInfor($id)
    {
     $pro = Product::find($id);
     return json_encode($pro);
 }

 public function checkout()
 {
    return view('checkout');
}
public function postcheckout(CartHelper $cart,Request $req)
{   
    // $cs=Customer::where('name',$req->name)->first();
    // $c=count($cs);
    // if((int)$cs>=1){
    //     $or = Order::create([
    //         'name'=>$req->name,
    //         'email'=>$req->email,
    //         'address'=>$req->address,
    //         'phone'=>$req->phone,
    //         'note'=>$req->note
    //     ]);
    //     foreach ($cart->item as  $value) {
    //      $ord = OrderDetail::create([
    //         'id_order'=>$or->id,
    //         'id_cus'=>$cs->id,
    //         'id_product'=>$value['id'],
    //         'quantity'=>$value['quantity'],
    //         'price'=>$value['price']
    //         // price
    //     ]);
    //  }   }     
    //  else{
        $cus = Customer::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone
        ]);
        $or = Order::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'note'=>$req->note
        ]);
        foreach ($cart->item as  $value) {
         $ord = OrderDetail::create([
            'id_order'=>$or->id,
            'id_cus'=>$cus->id,
            'id_product'=>$value['id'],
            'quantity'=>$value['quantity'],
            'price'=>$value['price']
            // price
        ]);
     }
     $data=[
        'name'=>$req->name,
        'email'=>$req->email
    ];
    $email=[
    
        $data['email'],
        'quandang1508@gmail.com'
    ];
    Mail::send('viewmail', $data, function ($message) use ($data,$email) {
        $message->from('buiquyen303@gmail.com');
        
        $message->to($email, 'viewmail');
        
        // tieu đề thư
        $message->subject('Cảm ơn');
    });
    $cart->clear();
    return ('Thành công');
}
}
