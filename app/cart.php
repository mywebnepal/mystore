<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart 
{
    public $items       = null;
    public $totalQty    = 0;
    public $totalPrice  = 0;
    public $discount    = 0;
    public $grandTotal  = 0;

    public function __construct($oldCart){
    	if ($oldCart) {
    		$this->items      = $oldCart->items;
    		$this->totalQty   = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
            $this->discount   = $oldCart->discount;
            $this->grandTotal = $oldCart->grandTotal;
    	}
    }

    public function addToCart($item, $id){
    	$storeItem = ['qty'=>0, 'price'=>$item->price, 'item' => $item, 'discount'=>$item->discount,'grandTotal'=>0];
    	if ($this->items) {
    		if (array_key_exists($id, $this->items)) {
    			$storeItem = $this->items[$id];
    		}
    	}
    	$storeItem['qty'] ++;
    	$storeItem['price'] = $item->price * $storeItem['qty'];
        $storeItem['discount'] = $item->discount * $storeItem['discount'];
    	$this->items[$id] = $storeItem;
    	$this->totalQty ++;
    	$this->totalPrice += $item->price;
        $this->grandTotal += $item->price;
    }

    public function removeSingleCart($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items['id']);
        }
    }

    public function removeAllCart($id){
    $this->totalQty -= $this->items[$id]['qty'];
    $this->totalPrice -= $this->items[$id]['price'];
    unset($this->items[$id]);
    }
}
