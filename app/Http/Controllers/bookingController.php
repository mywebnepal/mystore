<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function getBooking(){
    $page['page_title']       = 'Booking';
    $page['page_description'] = 'Booking hotel and event vanue/ in kathmandu nepal';
    	return view('client.booking', compact(['page']));
    }
}
