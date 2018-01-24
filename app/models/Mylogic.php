<?php

namespace App\models;
use App\User;
class Mylogic
{
	public static function isSystemUser($email){
     $isSystemUser = User::where('email', $email)->first();
     return $isSystemUser ? 1 : 0;
	}
}