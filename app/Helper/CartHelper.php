<?php 
namespace App\Helper;
/**
 * 
 */
class CartHelper
{
	public $item=[];
	public $total_price=0;
	public $total_quantity=0;
	public function __construct()
	{
		$this->item=session('cart') ? session('cart') : [];
		$this->total_quantity=$this->get_total_quantity();
		$this->total_price=$this->get_total_price();
	}
	public function add($product,$quantity=1)
	{
		$item=[
			'id'=>$product->id,
			'name'=>$product->name,
			'price'=>$product->sale_price>0?($product->price-($product->price*$product->sale_price)/100):+$product->price,
			'image'=>$product->image,
			'quantity'=>+$quantity,
		];
		if(isset($this->item[$product->id])){
			$this->item[$product->id]['quantity']+=$quantity;
		}
		else{
			$this->item[$product->id]=$item;

		}
		session(['cart'=>$this->item]);
	}
	public function update($id,$quantity=1)
	{
		if(isset($this->item[$id])){
			$this->item[$id]['quantity']=$quantity;
		}
		session(['cart'=>$this->item]);
	}
	public function delete($id)
	{		
		if(isset($this->item[$id])){
			unset($this->item[$id]);
		}
		session(['cart'=>$this->item]);
	}
	public function clear()
	{				
		session(['cart'=>'']);

	}
	public function count()
    {
        $item = $this->getItems();
        return $items->count();
    }

    private function get_total_quantity()
    {
    	$sum=0;
    	foreach ($this->item as $value ) {
    		$sum += $value['quantity'];
    	}
    	return $sum;
    }
    private function get_total_price()
    {
    	$sum=0;
    	foreach ($this->item as $value ) {
    		$sum += $value['quantity'] * $value['price'] ;
    	}
    	return $sum;
    }
}


 ?>