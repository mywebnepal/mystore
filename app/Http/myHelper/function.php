<?php
use App\models\SubCategory; 
use App\models\category;
use App\models\Product;
use App\models\City;
use App\models\roomType;
use App\models\Brand;
use App\models\HomeSlider;
use App\models\EventUser;
use App\models\EventViewCount;
use App\models\EventComment;
use App\models\HotelUser;
function getDiscountPrice($prdAmt, $per){
	 $disPrice = $prdAmt * $per / 100;
	 $disAmount = $prdAmt - $disPrice;
	 return $disAmount;
}

function getCategoryName(){
	$catViewData = category::select('id', 'name', 'slug')->orderBy('name', 'asc')->get();
	return $catViewData;
}

function getSubCatName($productId){
  $subCatNam = SubCategory::distinct('name', 'id')->where('id', $productId)->distinct()->get();
  return $subCatNam;
}

function getGetSideBarMenu(){
	$myCat = getCategoryName();
	 if ($myCat) {
           foreach ($myCat as $cat) {
               $cat->subcats = SubCategory::select('name', 'slug')->where('categories_id', $cat->id)->get();
           }
       }
       return $myCat;
}

function getMyOrderCode(){
  $date   = date('Y-m-d');
  $random = rand();

  $orderCode = 'myOrder_'.$date .'_'.$random;
  return $orderCode;
}

function latestProduct(){
  $myLatestProduct = Product::select('id', 'name','sku', 'product_slug', 'author_manufactural_name', 'discount', 'featured_img_sm','price', 'created_at')->where('status', '=', 1)->latest()->take(5)->get();
  return $myLatestProduct;
}

function getBrandName(){
  $brandName = Brand::select('name', 'slug')->latest()->take(8)->get();
   return $brandName;
}

function getCity(){
  $city = City::select('id', 'name')->get();
  return $city;
}

function getRoomType(){
  $room = roomType::select('id', 'name')->get();
  return $room;
}

function getProductUniqueId(){
  $rand = rand ( 10000, 99999);
  $productId = $rand;
  return $productId;
}

function getProductSlug($productname){
  $rand = rand ( 10000, 99999);
  $product = str_replace(' ', '_', $productname);
  $slug = $product.$rand;
  return $slug;
}

function getHomeSlider(){
  $slider = HomeSlider::select('img_path', 'img_caption', 'call_action')->orderBy('created_at', 'desc')->get();
  return $slider;

}

function getSlug($name){
  $rand = rand ( 10000, 99999);
  $name = str_replace(' ', '_', $name);
  $slug = $name.'_'.$rand;
  return $slug;
}
/*getting organizer name*/
function getOrganizerName(){
  $usr = EventUser::select('organizer_name', 'status', 'user_id')->where('user_id', Auth::user()->id)->first();
  if (!$usr) {
    return null;
  }
  return $usr;
}
/*get today date and time*/
function getTodayDateTime(){
  $my_date = date("Y-m-d"); 
  return $my_date;
}
/*get code*/
function getCode($name){
  $my_date = date("Y-m-d"); 
  $rand = rand ( 10000, 99999);
  $name = str_replace(' ', '_', $name);
  $code = $name.'_'.$my_date.'_'.$rand;
  return $code;
}
function getEventViewCount($eventId){
 $eventCount = EventViewCount::where('event_id', $eventId)->get();
 $viewCount = count($eventCount);
 return $viewCount ? $viewCount : '';
}

function getEventCommentCount($eventId){
 $eventCount = EventComment::where('event_id', $eventId)->get();
 $viewCount = count($eventCount);
 return $viewCount ? $viewCount : 'N/A';
}

function getHotelUser(){
  $usr = HotelUser::where('user_id', Auth::user()->id)->first();
  return $usr ? $usr : '';
}

function checkValidateHotelUser(){
  $usr = HotelUser::where('user_id', Auth::user()->id)->where('status', 1)->first();
  return $usr ? 1 : 0;
}

