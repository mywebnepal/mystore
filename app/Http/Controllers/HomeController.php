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
        $this->middleware('auth')->except('home', 'book', 'electronic', 'gemStone', 'menMrt', 'womenMrt', 'website', 'getProductSearchData', 'supportForm', 'userSubscribe', 'myPage', 'singleProduct');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('clientDashboard.index');
    }*/

    public function home(){
       $page['page_title']       = 'mywebnepal';
       $page['page_description'] = '';
      /* $catData = category::select('name', 'slug', 'id')->get();*/
       return view('client/home', compact(['page'])); 
    }

    public function book(){
        $page['page_title']       = 'Books';
        $page['page_description'] = 'all book course, novel, programming, hacking in nepal kathmandu';

        $productData = $this->productDetails();
        return view('client/book', compact(['page', 'productData']));
    }

    public function electronic(){
      $page['page_title']       = 'Electronic';
      $page['page_description'] = 'all electronic devices mobile, camera, laptop in nepal kathmandu';
      $productData = $this->productDetails();

      return view('client/electronic', compact(['page', 'productData']));
    }

    public function gemStone(){
      $page['page_title']       = 'Astrology Hub';
      $page['page_description'] = 'all astorlogy goods like as stone in kathmandu nepal';
      $productData = $this->productDetails();
      return view('client/gemstone', compact(['page', 'productData']));
    }
    public function menMrt(){
     $page['page_title']       = 'Men Market';
     $page['page_description'] = 'all man related goods like as paint shirt jacket in kathmandu nepal';
     $productData = $this->productDetails();
     return view('client/menmrt', compact(['page', 'productData']));
    }
    public function womenMrt(){
     $page['page_title']       = 'Women Market';
     $page['page_description'] = 'all women related good are found like as paint shirt, sari in kathmandu nepal';
     $productData = $this->productDetails();
     return view('client/women', compact(['page', 'productData']));
    }
    public function website(){
     $page['page_title']       = 'Website';
     $page['page_description'] = 'cheap website domain registration website like hotel, tour and travel in kathmandu nepal';
     $productData = $this->productDetails();
     return view('client/website', compact(['page', 'productData']));
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
            $usrData = User::select('email', 'phone')->where('id', $request->usr_id)->first();
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
        $product = Product::select('id', 'product_slug', 'name', 'featured_img_sm', 'discount', 'price')->where('categories_id', $id)->where('status', '=', 1)->orderBy('created_at', 'desc')->get();
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
     $getProductComment = Comment::where('products_id', $id)->orderBy('created_at', 'desc')->get();
     return $getProductComment;
    }
}
