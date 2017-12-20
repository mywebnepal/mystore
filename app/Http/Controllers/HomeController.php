<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\category;
use App\models\Brand;
use App\User;
use App\models\supportForm;
use App\models\subscribe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'book', 'electronic', 'gemStone', 'menMrt', 'womenMrt', 'website', 'getProductSearchData', 'supportForm', 'userSubscribe');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientDashboard.index');
    }

    public function home(){
       $page['page_title']       = 'mywebnepal';
       $page['page_description'] = '';

       return view('client/home', compact(['page'])); 
    }

    public function book(){
        $page['page_title']       = 'Books';
        $page['page_description'] = 'all book course, novel, programming, hacking in nepal kathmandu';

        return view('client/book', compact(['page']));
    }

    public function electronic(){
      $page['page_title']       = 'Electronic';
      $page['page_description'] = 'all electronic devices mobile, camera, laptop in nepal kathmandu';

      return view('client/electronic', compact(['page']));
    }

    public function gemStone(){
      $page['page_title']       = 'Astrology Hub';
      $page['page_description'] = 'all astorlogy goods like as stone in kathmandu nepal';

      return view('client/gemstone', compact(['page']));
    }
    public function menMrt(){
     $page['page_title']       = 'Men Market';
     $page['page_description'] = 'all man related goods like as paint shirt jacket in kathmandu nepal';

     return view('client/menmrt', compact(['page']));
    }
    public function womenMrt(){
     $page['page_title']       = 'Women Market';
     $page['page_description'] = 'all women related good are found like as paint shirt, sari in kathmandu nepal';

     return view('client/women', compact(['page']));
    }
    public function website(){
     $page['page_title']       = 'Website';
     $page['page_description'] = 'cheap website domain registration website like hotel, tour and travel in kathmandu nepal';

     return view('client/website', compact(['page']));
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
}
