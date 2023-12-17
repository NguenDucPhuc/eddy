<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductDetail;
// use App\CartHelper;
use App\Helper\CartHelper;

class CartController extends Controller
{
    public function add( CartHelper $cart, $id)
    {
        $product = Product::find($id);
        $cart->add($product);
        return redirect()->back();
    }
    public function update(CartHelper $cart,Request $req)
    {
        $id=$req->id;
        $quantity=$req->quantity;
        $cart->update($id,$quantity);
        
        return redirect()->route('shoping-cart'); 
    }
    public function delete(CartHelper $cart, $id)
    {
    	$cart->delete($id);
    	return redirect()->back(); 
    }
    public function deleteAll(CartHelper $cart)
    {
        $cart->clear();
        return redirect()->back(); 
    }
    
}
