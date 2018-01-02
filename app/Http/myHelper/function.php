<?php

   use App\models\SubCategory; 
   use App\models\category;
   use App\models\Product;
   use App\models\City;
   use App\models\roomType;
   use App\models\Brand;

    

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
  $myLatestProduct = Product::select('id', 'name', 'product_slug', 'author_manufactural_name', 'discount', 'featured_img_sm','price', 'created_at')->where('status', '=', 1)->latest()->take(5)->get();
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

