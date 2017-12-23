<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\category;
use App\models\Brand;
use App\User;
use App\models\supportForm;
use App\models\subscribe;
use App\models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'book', 'electronic', 'gemStone', 'menMrt', 'womenMrt', 'website', 'getProductSearchData', 'supportForm', 'userSubscribe', 'myPage', 'singleProduct', 'productComment');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*admin dashboard function*/
    public function index()
    {
        return view('clientDashboard.index');
    }

    public function home(){
       $page['page_title']       = 'mywebnepal';
       $page['page_description'] = '';
      /* $catData = category::select('name', 'slug', 'id')->get();*/
       $featuredPrd = $this->getFeaturedProduct();
       $myfeaturedPrd = $featuredPrd ? $featuredPrd : '';
       return view('client/home', compact(['page', 'myfeaturedPrd'])); 
    }

    public function getProductSearchData(Request $request){ 
      $data = Product::select('id', 'name', 'categories_id', 'featured_img_sm')->where('status', '1')->where('name', 'LIKE', '%'.$request.'%')->get();
      return $data;
    }

    public function supportForm(Request $request){
       $sp_form = new supportForm;
       $userEmail = '';
       $userPhone ='';
        if ($request->usr_id) {
            $usrDat = $this->getUserDetails($request->usr_id);
            $userEmail = $usrData['email'];
            $userPhone = $usrData['phone'];
        }
        $sp_form->email = isset($request->user_email) ? $request->user_email: $userEmail;
        $sp_form->phone = isset($request->user_phone) ? $request->user_phone : $userPhone;
        $sp_form->subject = $request->user_subject;
        $sp_form->message = $request->user_message;
        $saveData = $sp_form->save();

        if ($saveData) {
            return response()->json([
              'success' =>true,
              'message' =>'your request has been successfully submitted'
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Oops sorry try it again!'
        ], 401);

    }

    private function getUserDetails($usr_id){
      $usrData = User::select('email', 'phone', 'name')->where('id', $usr_id)->first();
      return $usrData;
    }

    public function userSubscribe(Request $request){
     $subscribe = new subscribe;
     $subscribe->email = $request->subscribe_email;
     $subSave = $subscribe->save();

     if ($subSave) {
         return response()->json([
            'success'=> true,
            'message' => 'successfully subscribe'
            ], 200);
     }
     return response()->json([
            'success' => false,
            'message' => 'Oops sorry try it again!'
        ], 401);
    }

    public function myPage($slug){
     $getCatId = $this->getCategoryId($slug);
     $productDetails = $this->getProductByCategory($getCatId->id);
     $myProduct = $productDetails ? $productDetails : '';
     $page['page_title']       = $getCatId->name;
     $page['page_description'] = $getCatId->description;

     return view('client/page', compact(['page', 'myProduct']));
    }

    private function getProductByCategory($id){
        $product = Product::select('id', 'product_slug', 'name', 'featured_img_sm', 'discount', 'price', 'sub_categories_id')->where('categories_id', $id)->where('status', '=', 1)->orderBy('created_at', 'desc')->get();
        return $product;
    }

    private function getCategoryId($slug){
     $catId = category::select('id', 'name', 'description')->where('slug', $slug)->first();
     return $catId;
    }

    /*single product*/
    public function singleProduct($slug){
    $singleProduct = $this->getSingleProductDetails($slug);
    $mySingleProduct = $singleProduct ? $singleProduct : '';

    $productComment = $this->getProductComment($singleProduct->id);
    $myProductComment =  $productComment ?  $productComment : '';

    $productByCategory = $this->getProductByCategory($singleProduct->categories_id);
    $myProductByCategory = $productByCategory ? $productByCategory : '';

    $page['page_title']       = $singleProduct->name;
    $page['page_description'] = $singleProduct->description;
    return view('client.single', compact(['mySingleProduct', 'myProductComment', 'myProductByCategory', 'page']));
    }

    private function getSingleProductDetails($slug){
     $singleProductDetails = Product::where('product_slug', $slug)->where('status', '=', 1)->first();
     return $singleProductDetails;
    }

    private function getProductComment($id){
     $getProductComment = Comment::where('products_id', $id)->where('status', '=', 0)->orderBy('created_at', 'desc')->get();
     return $getProductComment;
    }

    /*featured product*/
    private function getFeaturedProduct(){
        $featuredProduct = Product::select('id', 'product_slug', 'name', 'featured_img_sm', 'discount', 'price', 'sub_categories_id', 'featured_product')->where('featured_product','=', 1)->where('status', '=', 1)->orderBy('created_at', 'desc')->get(15);
        return $featuredProduct;
    }

    public function productComment(Request $request){
        if (isset($request->product_id)) {
            $saveComment = new Comment;
            if (isset($request->usr_id)) {
               $usrData = $this->getUserDetails($request->usr_id);
               $saveComment->email = $usrData['email'];
            }else{
                $saveComment->email = $request->user_email;
            }

            $saveComment->products_id = $request->product_id;
            $saveComment->comment    = $request->comment;
            $saveComment->status     = 0;

            $saveData = $saveComment->save();

            if ($saveData) {
               return response()->json([
                'success' => true,
                'message' => 'your comment has been post successfully'
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Oops try it again you comment has not post'
                    ], 401);
            }
        }else{
            return response()->json([
                 'success' => false,
                 'message' => 'Oops sorry try it again'
                ], 401);
        }
     
    }
}
