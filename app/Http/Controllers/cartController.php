<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\cart;
use Session;

class cartController extends Controller
{
    public function addCart(Request $request, $id){
     $product   = Product::findOrFail($id);
     $oldCart = Session::has('cart') ? Session::get('cart') : '';
     $cart = new cart($oldCart);
     $cart->addToCart($product, $product->id);
     $request->session()->put('cart', $cart);

     return response()->json([
         'success'    => true,
         'message'    => 'your product has been successfully added in cart',
         'productQty' => Session::get('cart')->totalQty
     	], 200);
    }

    public function getCartPage(){

    	if (!Session::has('cart')) {
    		return view('client.cart');
    	}else{
    		$oldCart = Session::get('cart');
    		$cart    = new cart($oldCart);
    		return view('client.cart', ['products'=> $cart->items,
    		                            'totalPrice'=>$cart->totalPrice]);
    	}
    }

    public function removeCart($id){
     $oldCart = Session::has('cart') ? Session::get('cart') : null;
     $cart    = new cart($oldCart);
     $cart->removeSingleCart($id);

     Session::put('cart', $cart);
     return back();
    }
    public function removeAllCart(){

    }
}
