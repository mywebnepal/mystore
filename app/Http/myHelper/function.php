<?php

   use App\models\SubCategory; 
    use App\models\category;

function getDiscountPrice($prdAmt, $per){
	 $disPrice = $prdAmt * $per / 100;
	 $disAmount = $prdAmt - $disPrice;
	 return $disAmount;
}

function getCalCartDiscount($per, $prdAmt){
	 $disPrice = $per / $prdAmt * 100 * $prdAmt;
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
