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
use App\models\SubCategory;
use App\models\NoticeBoard;
use App\models\viewedProduct;
use App\models\myOrder;
use Auth;
use App\models\wishList;
use App\models\Mylogic;
use App\models\Hotel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'getProductSearchData', 'supportForm', 'userSubscribe', 'myPage', 'singleProduct', 'productComment', 'myBookingPage', 'client.subcategory', 'getProductBySubCategories', 'getSingleHotelDataBySlug');

        $this->nowDate = date('Y-m-d');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*admin dashboard function*/
    public function index()
    {
        $page['page_title']       = 'mywebnepal : Admin';
        $page['page_description'] = 'Client Dashboard';
        
        $usr_id = Auth::user()->id;
        $ordr = myOrder::where('users_id', $usr_id)->orderBy('created_at', 'desc')->get();
        $ordr->transform(function($order, $key){
         $order->cart = unserialize($order->cart);
         return $order;
        });
        $myOrder = $ordr ? $ordr : '';
        return view('clientDashboard.index', compact(['page', 'myOrder']));
    }

    public function home(){
       $page['page_title']       = 'mywebnepal : Shop';
       $page['page_description'] = 'books novel, academy, loksewa, electonic laptop, acer hp, dell, mobile samsung, color gionee, nepal handcript, woolean clothers, pashmina, pure cotton, website, manpower website, school website, hotels website, consultancy website, tour and travel website gems stone radraksha, hotel booking tour and travel in nepal kathmandu';
      /* $catData = category::select('name', 'slug', 'id')->get();*/
       $notice = $this->getNoticeBoard();
       $myNotice = $notice ? $notice : '';

       $featuredPrd = $this->getFeaturedProduct();
       $myfeaturedPrd = $featuredPrd ? $featuredPrd : '';

       $latestProduct = $this->latestProduct();
       $myLatestProduct = $latestProduct ? $latestProduct :'';

       $discountProduct = $this->getDiscountProduct();
       $mydiscountProduct = $discountProduct ? $discountProduct : '';

       $category  = $this->getCategories();
       $myCat       = $category ? $category : '';

       /*appreance data*/
       $appr = $this->getAppreanceProduct();
        $myAppr = $appr ? $appr : '';
      
               // return $myCat;
       return view('client/home', compact(['page', 'myfeaturedPrd', 'myLatestProduct', 'mydiscountProduct', 'myNotice', 'myAppr'])); 
    }

    public function getProductSearchData(Request $request){ 
      $key = $request->qry;
      $data = Product::select('id', 'name', 'categories_id', 'featured_img_sm', 'status', 'product_slug', 'author_manufactural_name')->where('status', '=', 1)->where('name', 'like', 
         '%'.$key.'%')->orWhere('author_manufactural_name', 'like', '%'.$key.'%')->get();
      return $data;
    }

    /*view product*/
    public function viewedProduct($id){
    
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

     $products = collect([]);
    if ($myProduct) {
        $products = $myProduct->groupBy('sub_categories_id');
    }
    // return $products;
    $newProductListBySubCategory = [];
    if ($products->isNotEmpty()) {
        foreach($products as $key => $productCollection) {
            $tempArr = [];
            if (!$key) {
                $tempArr['subcat'] = null;
            } else {
                $tempArr['subcat'] = SubCategory::find($key);
            }
            $tempArr['products'] = $productCollection;    
            array_push($newProductListBySubCategory, $tempArr);        
        }
    }
    usort($newProductListBySubCategory, function($a, $b) {
        return strcmp($a["subcat"]->name, $b["subcat"]->name);
    });
    // return ($newProductListBySubCategory);
    /*for sidebar*/
     $latestProduct = $this->latestProduct();
    $myLatestProduct = $latestProduct ? $latestProduct : '';

    $brandName = $this->getBrandName();
    $myBrandName = $brandName ? $brandName : '';

     return view('client/page', compact(['page', 'myProduct', 'myLatestProduct', 'myBrandName', 'mySubCatName', 'newProductListBySubCategory']));
    }

    function compareByName($a, $b) {
        return strcmp($a["subcat"]->name, $b["subcat"]->name);
    } 

    private function getProductByCategory($id){
        $product = Product::select('id','sku', 'product_slug', 'name', 'featured_img_sm', 'discount', 'price', 'sub_categories_id')->where('categories_id', $id)->where('status', '=', 1)->orderBy('created_at', 'desc')->get();
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

    $latestProduct = $this->latestProduct();
    $myLatestProduct = $latestProduct ? $latestProduct : '';

    $brandName = $this->getBrandName();
    $myBrandName = $brandName ? $brandName : '';

    $page['page_title']       = $singleProduct->name;
    $page['page_description'] = $singleProduct->description;
    return view('client.single', compact(['mySingleProduct', 'myProductComment', 'myProductByCategory', 'page', 'myLatestProduct', 'myBrandName']));
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
        $featuredProduct = Product::select('id','sku', 'product_slug', 'name', 'featured_img_sm', 'discount', 'price', 'sub_categories_id', 'featured_product')->where('featured_product','=', 1)->where('status', '=', 1)->orderBy('created_at', 'desc')->get(15);
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
    public function myBookingPage(){
        dd('iam workign here');
        $page['page_title']       = 'Booking';
        $page['page_description'] = 'Booking hotel and event vanue/ in kathmandu nepal';
            return view('client.booking', compact(['page']));
    }
   
    /*getting discount product only*/
    private function getDiscountProduct(){
        $discountProduct = Product::select('id','sku', 'name', 'product_slug', 'author_manufactural_name', 'discount', 'featured_img_sm', 'price')->where('status', '=', 1)->whereNotNull('discount', '<>', 0)->get();
        return $discountProduct;
    }
    
    /*getting latest product*/
    private function latestProduct(){
        $latestProduct = Product::select('id','sku', 'name', 'product_slug', 'author_manufactural_name', 'discount', 'featured_img_sm','price', 'created_at')->where('status', '=', 1)->latest()->take(5)->get();
        return $latestProduct;
    }

    private function getAppreanceProduct(){
        $latestProduct = Product::select('id', 'name', 'product_slug', 'discount', 'featured_img_sm','price','categories_id','product_image', 'created_at')->where('status', '=', 1)->where('appreance', '=', 1)->latest()->take(4)->get();
        return $latestProduct;
    }

    /*brand band*/
    private function getBrandName(){
        $brandName = Brand::select('name', 'slug')->latest()->take(8)->get();
        return $brandName;
    }

    /*getting sub categories*/
    private function getCategories(){
        $subCat = category::select('name', 'slug', 'id')->get();
        return $subCat;
    }
    /*brand name*/
    private function getProductByBrandName($slug){
    
    }
    /*by subcategories*/

    public function getProductBySubCategories($slug){
     $subCatId = $this->getSubCategoriesId($slug);
     $page['page_title']       = $subCatId->name;
     $page['page_description'] = 'mywebnepal a pure ecommerce site in nepal kathmandu';
     $subCatPrd = Product::where('sub_categories_id', $subCatId->id)->where('status', 1)->get();

     $mySubCatData = $subCatPrd ? $subCatPrd : '';
     return view('client.page-subcategories', compact(['page', 'mySubCatData']));

    }

    
    /*notice Board*/
    private function getNoticeBoard(){
        $noticeData = NoticeBoard::where('end_date','>=', $this->nowDate)->get();
        return $noticeData;
    }
    /*order */

    /*client dahsboar*/
    public function clientOrder(){
        $page['page_title'] = 'mywebnepal : order';
        $page['page_description'] = 'List of my order';

        $ordr = myOrder::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $ordr->transform(function($order, $key){
         $order->cart = unserialize($order->cart);
         return $order;
        });
        $myOrder = $ordr ? $ordr : '';

        return view('clientDashboard.order', compact(['page', 'myOrder']));

    }
    public function wallet(){

    }
    public function clientShopping(){

    }
    public function clientWishList($id){
        $userId = Auth::user()->id;
        $chkWishList = wishList::where('users_id', '=',  $userId)->where('products_id', '=', $id)->get();

        if (count($chkWishList) > 0) {
           return back()->withMessage('you have already selected this products');
        }else{
            if ($userId) {
                $product = $this->getProductById($id);
               $save = new wishList;
               $save->users_id    = $userId;
               $save->products_id = $id;
               $save->slug        = $product['product_slug'];
               $save->img_path    = $product['featured_img_sm'];
               $save->save();
               return back()->withMessage('successfully added your wishlist');
            }else{
               return back()->withMessage('please login first to add wishList');
            }
        }
        
    }

    public function getMyWishlist(){
        $page['page_title']       = 'mywebnepal : wishlist';
        $page['page_description'] = 'my wishList';

        $wishList = wishList::where('users_id', Auth::user()->id)->get();
        $myWishList = $wishList ? $wishList : '';

        if ($myWishList) {
             return view('clientDashboard.wishlist', compact(['page', 'myWishList']));
        }else{
             return view('clientDashboard.wishlist', compact(['page']));
        }
       
    }

    /*get product by id*/
    private function getProductById($id){
     $products = Product::where('id', $id)->first();
     return $products;
    }

    private function getSubCategoriesId($slug){
    $slug = SubCategory::select('id', 'name')->where('slug', $slug)->first();
    return $slug;
    }

    public function createHotelUser(Request $request){
    
    }
    
    /*getting single hotel data only*/
    public function getSingleHotelDataBySlug($slug){
     $hotelId = $this->getHotelIdBySlug($slug);//hotel Id
     /*hotel data*/
     $hotelData = Mylogic::getSingleHotelDataById($hotelId);
     $myHotelData =  $hotelData ?  $hotelData : '';

     $page['page_title'] = 'mywebnepal :'. $hotelData->name;
     $page['page_description'] = 'mywebnepal :' .$hotelData->name;

     /*room data*/
     $hotelRoom = Mylogic::getRoomDetailsById($hotelData->id); 
     $myHotelRoom = $hotelRoom ? $hotelRoom : '';

     return view('client.single-hotel', compact(['myHotelData', 'myHotelRoom', 'page']));
    }
    /*getting hotel id from slug*/
    private function getHotelIdBySlug($slug){
     $hotel = Hotel::select('id')->where('slug', $slug)->first();
     return $hotel;
    }

}