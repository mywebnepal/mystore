<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\client\hotelUserValidation;
use App\Http\Requests\client\hotelFormValidation;
use Intervention\Image\Facades\Image;
use App\models\HotelUser;
use App\models\HotelPolicy;
use App\models\HotelRoomType;
use App\models\OpenRoomBooking;
use App\models\Hotel;
use AppHelper;
use File;
use Auth;
use App\models\Mylogic;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page['page_title']       = 'Mywebnepal  : Hotel Information';
        $page['page_description'] = 'Mywebnepal  : my hotel details';
        $hotelData = '';
        $hotelPolicy = '';

        $hotelUserId = Mylogic::checkHotelUser();
        if ($hotelUserId) {
            $hotelData = myLogic::getSingleHotelDataOfUserId($hotelUserId->user_id);
            $roomData = Mylogic::getHotelRoomByHotelId($hotelData->id);
            if (count($roomData) > 0) {
                foreach ($roomData as $hotelRoom) {
                  $roomFooding = [];
                  $roomFooding = unserialize($hotelRoom->fooding);
                  $roomFooding = array_column($roomFooding, 'hotelFood');
                  $roomFooding = implode(' , ', $roomFooding);
                  $hotelRoom->fooding = $roomFooding;

                }
            }
           /*hotel policy */
           if ($hotelData) {
               $hotelPolicy = myLogic::getHotelPolicy($hotelData->id);
               if (count($hotelPolicy) > 0) {
                 foreach ($hotelPolicy as $policy) {
                   $policy = [];
                   // $myPolicy = unserialize($policy->policyName);
                 }
               }
           }
            
        }

        return view('hotel.hotelProfile', compact(['page', 'hotelData', 'roomData', 'hotelPolicy']));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(hotelFormValidation $request)
    {
        $time = myLogic::createDateAndTime();
        $hotelUserId = Mylogic::checkHotelUser();
        $checkHotelUsr = myLogic::getSingleHotelDataOfUserId($hotelUserId->user_id);
        if ($checkHotelUsr == 0) {
            $save = new Hotel;
            $save->name = $request->name;
            $save->hotel_user_id = $hotelUserId->user_id;
            $save->slug          = getSlug($request->name);
            $save->cities_id     = $request->cities_id;
            $save->address       = $request->address;
            $save->postal_code   = $request->postal_code ? $request->postal_code : 'N/A';
            $save->phone         = $request->phone;
            $save->tel_phone     = $request->tel_phone;
            $save->email         = $request->email;
            $save->vedio_link    = $request->vedio_link ? $request->vedio_link : 'N/A';
            $save->desc          = $request->desc;

            if ($request->hotelServices) {
              $services = [];
              $cntSer = count($request->hotelServices);
                  for ($i=0; $i < $cntSer; $i++) { 
                      array_push($services, [
                            'hotelService' => $request->hotelServices[$i],
                          ]);
                  }
                  $save->hotelServices = serialize($services);
              }else{
              $save->hotelServices = 'N/A';
            }

            if ($request->hasFile('logo')) {
               $imgFile = $request->file('logo');
               $filename = str_replace(' ', '', $request->name).$time . '.' . $imgFile->getClientOriginalExtension();
               
               myLogic::cropImage($imgFile, 200, 200, 'hotelLogo/', $filename);
               $save->logo = 'hotelLogo/'.$filename;
            }

             if ($request->hasFile('featured_img_1')) {
               $imgFile = $request->file('featured_img_1');
               $filename = str_replace(' ', '', $request->name. 'img_1').$time . '.' . $imgFile->getClientOriginalExtension();
               
               myLogic::cropImage($imgFile, 200, 300, 'hotelFeaturedImage/', $filename);
               $save->featured_img_1 = 'hotelFeaturedImage/'.$filename;
            }

            if ($request->hasFile('featured_img_2')) {
               $imgFile = $request->file('featured_img_2');
               $filename = str_replace(' ', '', $request->name.'img_2').$time . '.' . $imgFile->getClientOriginalExtension();
               
               myLogic::cropImage($imgFile, 200, 300, 'hotelFeaturedImage/', $filename);
               $save->featured_img_2 = 'hotelFeaturedImage/'.$filename;
            }
            $save = $save->save();
            if ($save) {
                $update = HotelUser::where('user_id', Auth::user()->id)->first();
                $update->hotelName = $request->name;
                $update->hotelAddress = $request->address;
                $update->hotelTel      = $request->tel_phone;
                $update->hotelPhone    = $request->phone;
                $update->hotelEmail    = $request->email;
                $update->update();
                return redirect()->route('my-hotel-profile');
            }else{
                return back()->withMessage('Ooops try it again');
            }
        }else{
            return back()->withMessage('Sorry you have already created hotel please wait for confirmation or contact to the system admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getHotelUserForm(){
        $page['page_title']        = 'Mywebnepal : hotel user';
        $page['page_description']  = 'Mywebnepal : create hotel user';

        return view('hotel.hotelUser', compact(['page']));
    }

    public function saveHotelUserData(hotelUserValidation $request){
     $isHotelUser = Mylogic::checkHotelUser();
     if ($isHotelUser == 0) {
         $save = new HotelUser;
         $save->hotelName       = $request->hotelName;
         $save->hotelAddress    = $request->hotelAddress;
         $save->hotelTel        = $request->hotelTel;
         $save->hotelPhone      = $request->hotelPhone;
         $save->hotelEmail      = $request->hotelEmail;
         $save->user_id         = Auth::user()->id;
         $save->status          = 0;

         $save = $save->save();
         if ($save) {
             return back()->withMessage('successfully created please wait for hotel confirmation');
         }else{
            return back()->withMessage('Oops sorry try it again');
         }
     }else{
        return back()->withMessage('you have already created please wait for hotel confirmation or contact with system admin');
     }
     
    }
    /*------------------------------------*/
    public function addTermAndConditation(){

    }
    public function addHotelFacilities(){

    }
    public function addRoom(Request $request){
        $time = myLogic::createDateAndTime();
        $this->validate($request, [
               'roomName'  => 'required|min:4|max:60',
               'bedName'   => 'required',
               'fitPerson' =>'required',
               'roomPrice' => 'required',
               'roomDesc'  => 'required|min:7|max:6000',
               'roomImg1'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2548',
               'roomImg2'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2548',
               'roomImg3'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2548'
           ]);
        $save = new HotelRoomType;
        $save->hotels_id = $request->hotels_id;
        $save->roomName  = $request->roomName;
        $save->roomNumber = $request->roomNumber;
        $save->bedName   = $request->bedName;
        $save->fitPerson = $request->fitPerson;
        $save->user_id   = Auth::user()->id;
        if ($request->fooding) {
        $foods = [];
        $food = count($request->fooding);
            for ($i=0; $i < $food; $i++) { 
                array_push($foods, [
                      'hotelFood' => $request->fooding[$i],
                    ]);
            }
            $save->fooding = serialize($foods);
        }
        $save->roomPrice   = $request->roomPrice;
        $save->roomDesc    = $request->roomDesc;

        if ($request->hasFile('roomImg1')) {
           $imgFile = $request->file('roomImg1');
           $filename = str_replace(' ', '', $request->roomName.'img_1').$time . '.' . $imgFile->getClientOriginalExtension();
           
           myLogic::cropImage($imgFile, 300, 300, 'hotelRoom/', $filename);
           $save->roomImg1 = 'hotelRoom/'.$filename;
        }
        if ($request->hasFile('roomImg2')) {
           $imgFile = $request->file('roomImg2');
           $filename = str_replace(' ', '', $request->roomName.'img_2').$time . '.' . $imgFile->getClientOriginalExtension();
           
           myLogic::cropImage($imgFile, 300, 300, 'hotelRoom/', $filename);
           $save->roomImg2 = 'hotelRoom/'.$filename;
        }

        if ($request->hasFile('roomImg3')) {
           $imgFile = $request->file('roomImg3');
           $filename = str_replace(' ', '', $request->roomName.'img_3').$time . '.' . $imgFile->getClientOriginalExtension();
           
           myLogic::cropImage($imgFile, 300, 300, 'hotelRoom/', $filename);
           $save->roomImg3 = 'hotelRoom/'.$filename;
        }
        $save = $save->save();
        if ($save) {
            return back()->withMessage('successfully inserted..');
        }else{
            return back()->withMessage('oops try it again');
        }
    }

    public function deleteHotelRoom($id){
     $hotelRoom = HotelRoomType::where('id', $id)->first();
     if ($hotelRoom) {
         if (file_exists($hotelRoom->roomImg1)) {
             File::delete($hotelRoom->roomImg1);
            // unlink(asset($product->featured_img_sm));
         }

         if (file_exists($hotelRoom->roomImg2)) {
             File::delete($hotelRoom->roomImg2);
            // unlink(asset($product->featured_img_sm));
         }

         if (file_exists($hotelRoom->roomImg3)) {
             File::delete($hotelRoom->roomImg3);
            // unlink(asset($product->featured_img_sm));
         }
        $hotelRoom->delete();
        return response()->json([
          'success' => true,
          'message' => 'room successfully deleted'
         ], 200);
         
     }
     return response()->json([
          'success' => false,
          'message' => 'sorry try it again'
         ], 403);
    }

    public function addHotelPolicy(Request $request){
        if ($request->hotel_id) {
            $policy = [];
            $arrCount = count($request->hotelPolicy);
            for ($i=0; $i < $arrCount; $i++) { 
              array_push($policy, [
                  'policy' => $request->hotelPolicy[$i]
                  ]);
            }
           $save  = new HotelPolicy;
           $save->hotels_id = $request->hotel_id;
           $save->policyName = serialize($policy);
           $save->user_id    = Auth::user()->id;

           $save = $save->save();

           if ($save) {
               return back()->withMessage('add hotel policy added');
           }else{
            return back()->withMessage('oops try it again');
           }
        }else{
          return back()->withMessage('please try to submit from form');
        }
    }
    public function deleteHotelPolicy($id){
      $usr = HotelPolicy::where('user_id', Auth::user()->id)->first();
      if ($usr) {
         $del = HotelPolicy::findOrFail($id);
         if ($del) {
             $myDelete = $del->delete();
             return response()->json([
               'success' => true,
               'message' => 'room successfully deleted'
              ], 200);
         }
         return response()->json([
          'success' => false,
          'message' => 'sorry try it again'
         ], 403);
      }
    }
    public function openRoomBooking(Request $request){
       $arr = array_combine($request->roomName, $request->roomNumber);
       return $arr;
      $save = new OpenRoomBooking;
      $save->dateFrom = $request->dateFrom;
      $save->dateTo   = $request->dateTo;
     if ($request->roomName) {
        $roomName = [];
        $countRoom = count($request->roomName);
        for ($i=0; $i < $countRoom; $i++) { 
          array_push($roomName, [
                            'roomName' => $request->roomName[$i]

                          ]);
        }
        $roomNameJson = json_encode($roomName);
        $save->roomOnBooking = $roomNameJson;
     }
     $save = $save->save();

     if ($save) {
        return back()->withMessage('successfully inserted');
     }else{
      return back()->withMessage('try it again');
     }
    }

    public function updateHotelPolicy(Request $request){
     $updHotelPolicy = Hotel::findOrFail($request->id);
     if ($updHotelPolicy) {
        $updHotelPolicy->hotelPolicy = $request->hotelPolicy;
        $hotelPolicy = $updHotelPolicy->update();

        if ($hotelPolicy) {
           return back()->withMessage('successfully update hotel policy');
        }else{
          return back()->withMessage('Oops sorry try it again');
        }
     }
    }

    public function updateHotelService(Request $request){
    $hotelSer = Hotel::findOrFail($request->id);
    if ($hotelSer) {
       $hotelSer->hotelServices = $request->hotelServices;
       $hotelPolicy = $hotelSer->update();

       if ($hotelPolicy) {
          return back()->withMessage('successfully update hotel policy');
       }else{
         return back()->withMessage('Oops sorry try it again');
       }
    }
    }

    public function getRoomNumberById($id){
     $roomNum = HotelRoomType::select('name', 'roomNumber')->where('id', $id)->first();
     if ($roomNum) {
       return response()->json([
             'success' => true,
             'message' => 'product delete'
            ], 200);
     }else{
      return response()->json([
             'success' => false,
             'message' => 'data not found'
            ], 204);
     }

    }
}
