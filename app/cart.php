<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart 
{
    public $items       = null;
    public $totalQty    = 0;
    public $totalPrice  = 0;
    public $sizes       = [];

    public function __construct($oldCart){
    	if ($oldCart) {
    		$this->items      = $oldCart->items;
    		$this->totalQty   = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
            $this->sizes      = $oldCart->sizes;
    	}
    }

    public function addToCart($item, $size){
    	$storeItem = ['qty'=>0, 'price'=>$item->price, 'item' => $item];
    	if ($this->items) {
    		if (array_key_exists($item->id, $this->items)) {
    			$storeItem = $this->items[$item->id];
    		}
    	}
        $storeItem['sizes'][] = $size;
    	$storeItem['qty'] ++;
    	$storeItem['price'] = $item->price * $storeItem['qty'];
    	$this->items[$item->id] = $storeItem;
    	$this->totalQty ++;
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
