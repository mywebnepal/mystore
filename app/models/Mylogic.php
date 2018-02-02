<?php

namespace App\models;
use App\User;
use App\models\HotelUser;
use App\models\HotelRoomType;
use App\models\HotelPolicy;
use Auth;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;
use App\models\Hotel;
class Mylogic
{
	public static function isSystemUser($email){
     $isSystemUser = User::where('email', $email)->first();
     return $isSystemUser ? 1 : 0;
	}

	public static function getUserDetails($id){
    $userDetails = User::where('id', $id)->first();
    return $userDetails;
	}

	public static function checkHotelUser(){
		$isHotelUser = HotelUser::select('hotelName', 'hotelPhone', 'hotelTel', 'user_id')->where('user_id', Auth::user()->id)->where('status', 1)->first();
		return $isHotelUser;
	}

	public static function createDateAndTime(){
		$time = date('Y-m-d h:i:s');
		return $time;
	}

	public static function cropImage($file, $sizeWidth, $sizeHeight, $path, $imageName){
      $upload = Image::make( $file )->resize( $sizeWidth, $sizeHeight )->save($path . $imageName );
      if (!$upload) {
          return false;
      }
      return true;
	}

	public static function getSingleHotelDataOfUserId($userId){
    $checkUser = Hotel::where('hotel_user_id', $userId)->first();
    return $checkUser ? $checkUser : 0;
	}

	public static function getHotelRoomByHotelId($id){
    $room = HotelRoomType::where('hotels_id', $id)->get();
    return $room ? $room : '';
	}

	public static function getHotelPolicy($id){
    $hotelPolicy = HotelPolicy::where('hotels_id', $id)->get();
    return $hotelPolicy ? $hotelPolicy : '';
	}
}