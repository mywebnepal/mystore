<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\cart;
use Session;
use App\models\myOrder;
use Auth;
use App\models\wishList;

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
     return response()->json([
         'success'    => true,
         'message'    => 'one item remove successfully',
         'productQty' => Session::get('cart')->totalQty
        ], 200);
    }


    public function removeByAllCart($id){
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart    = new cart($oldCart);
    $cart->removeAllCart($id);

    Session::put('cart', $cart);
    return response()->json([
        'success'    => true,
        'message'    => 'one item remove successfully',
        'productQty' => Session::get('cart')->totalQty
       ], 200);
    }

    public function myOrder(Request $request){
        /*$validatedData = $request->validate([
        'fname'          => 'required||max:5',
        'address'        => 'required|max:10',
        'phoneNumber'    => 'required'
       ]);*/
       $myOrder = new myOrder;
       $myCart  = Session::get('cart');
       if ($myCart) {
             $myOrder->order_id      = $request->myOrderCode;
             $myOrder->cart          = serialize($myCart);
             $myOrder->price         = $request->billing;
             $myOrder->users_id       = Auth::user()->id;
             $myOrder->address       = $request->address;
             $myOrder->phone         = $request->phoneNumber;

             $myOrder->save();
             Session::forget('cart');
             return redirect()->route('home')->withMessage('successfully place you order');
       }else{
        return back()->withMessage('Oops there is no product in your cart');
       }
    }

    public function getMyOrder(){
        $page['page_title']       = 'mywebnepal';
        $page['page_description'] = 'Client Dashboard';
        $order = $this->myOrderList(Auth::user()->id);
        $myOrder = $order ? $order : '';

        return view('clientDashboard.order', compact(['page', 'myOrder']));
    }

    private function myOrderList($userId){
    $order = myOrder::where('users_id', '=', $userId)->paginate(10);
    return $order;
    }

    public function clientWishList($id){
        $userId = Auth::user()->id;
        $chkWishList = wishList::where('users_id', '=',  $userId)->where('products_id', '=', $id)->get();

        if (count($chkWishList) > 0) {
            return response()->json([
                'success' => false,
                'message' => 'you have already selected this products'
                ], 401);
        }else{
            if ($userId) {
                $product = $this->getProductById($id);
               $save = new wishList;
               $save->users_id    = $userId;
               $save->products_id = $id;
               $save->slug        = $product['product_slug'];
               $save->img_path    = $product['featured_img_sm'];
               $save->save();
               return response()->json([
                'success' => true,
                'message' => 'successfully added your wishlist'
                ], 401);
            }else{
               return response()->json([
                'success' => false,
                'message' => 'Please login first to add your wishlist'
                ], 401);
            }
        }
        
    }

    public function getMyWishlist(){
        $page['page_title']       = 'mywebnepal';
        $page['page_description'] = 'my wishList';

        $wishList = wishList::all();
        $myWishList = $wishList ? $wishList : '';
        return view('clientDashboard.wishlist', compact(['page', 'myWishList']));
    }

    /*get product by id*/
    private function getProductById($id){
     $products = Product::where('id', $id)->first();
     return $products;
    }
}
