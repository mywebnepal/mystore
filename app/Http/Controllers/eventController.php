<?php

namespace App\Http\Controllers;
use App\Http\Requests\client\eventValidation;

use Illuminate\Http\Request;
use Auth;
use App\models\EventUser;
use App\models\Event;
use Intervention\Image\Facades\Image;
use AppHelper;
use File;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('getEventDetail');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(eventValidation $request)
    {
        $time = date('Y-m-d h:i:s');
        $save = new Event;
        $save->event_users = Auth::user()->id;
        $save->event_title = $request->event_title;
        $save->event_slug  = getSlug($request->title);
        $save->event_start_date = $request->event_start_date;
        $save->event_end_date = $request->event_end_date;
        $save->event_tel         = $request->event_tel;
        $save->event_phone       = $request->event_phone;
        $save->event_email       = $request->event_email;

        $save->event_city       = $request->event_city;
        $save->event_vanue_addr = $request->event_vanue_addr;
        $save->event_postal_code = $request->event_postal_code ? $request->event_postal_code : '';

        if ($request->hasFile('event_featured_img')) {
           $eventImage      = $request->file('event_featured_img');

           $chngEventImgNam = str_replace(' ', '', $request->event_title).$time.'.'.$eventImage->getClientOriginalExtension();

           Image::make($eventImage )->resize(480, 300 )->save('event/' . $chngEventImgNam );
           $save->event_featured_img = 'event/'.$chngEventImgNam;
        }
        $save->event_desc = $request->event_desc;
        $save->event_tax  = $request->event_tax;
        $save->event_discount = $request->event_discount;
        $save->event_status   = 0;
        $save->event_google_map = 'N/A';

        $save->event_ticket_name   = $request->event_ticket_name ? serialize($request->event_ticket_name) : 'N/A';

        $save->event_ticket_price  = $request->event_ticket_price ? serialize($request->event_ticket_price) : '';

        $save->event_ticket_seat    = $request->event_ticket_seat ? serialize($request->event_ticket_seat) : '';

       $save->event_ticket_type = $request->event_ticket_type;

       $save = $save->save();
       if ($save) {
           return back()->withMessage('successfully created your event');
       }else{
        return back()->withMessage('Oops sorry try it again something goes wrong')->withInput();
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
      $evnt = Event::findOrFail($id);
      $singleEvent = $evnt ? $evnt : '';
      $page['page_title']       = $evnt->event_title ? 'mywebnepal:-'.$evnt->event_title : 'mywebnepal:-'.'No event fount';
      $page['page_description'] = 'mywebnepal:-'.$evnt->event_desc ? $evnt->event_desc : 'No event fount';

      if ($evnt) {
          return view('event.show', compact(['page', 'singleEvent']));
      }else{
        return view('event.show', compact(['page', 'singleEvent']));
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit = Event::findOrFail($id);
       $editEvent = $edit ? $edit : '';
       $page['page_title']       = $edit->event_title ? 'mywebnepal:- edit'.$edit->event_title : 'mywebnepal:-'.'No event fount';
       $page['page_description'] = 'mywebnepal:-'.$edit->event_desc ? $edit->event_desc : 'No event fount';

       if ($edit) {
           return view('event.edit', compact(['page', 'editEvent']));
       }else{
         return view('event.edit', compact(['page', 'editEvent']));
       }
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
        $event = Event::where('id', $id)->first();
        if ($event) {
            if (file_exists($event->event_featured_img)) {
                File::delete($event->event_featured_img);
               // unlink(asset($product->featured_img_sm));
            }
            
           $event->delete();

           return response()->json([
             'success' => true,
             'message' => 'product delete'
            ], 200);
            
        }
        return response()->json([
             'success' => false,
             'message' => 'sorry product is not delete'
            ], 403);
    }

    public function getEventForm(){
        $page['page_title']       = 'mywebnepal : create event';
        $page['page_description'] =  'event all over nepal';
        $usr = EventUser::select('organizer_name', 'status', 'user_id')->where('user_id', Auth::user()->id)->first();

        $evnt = Event::where('event_users', Auth::user()->id)->orderby('created_at', 'desc')->paginate(15);
        $myEvent = $evnt ? $evnt : '';
        return view('event.index', compact(['page', 'usr', 'evnt']));
    }

    public function getEventDetail(){
        $page['page_title']       = 'mywebnepal : event';
        $page['page_description'] =  'all event details of nepal';
        $page['page_heading']     = 'Event list';
        return view('client.event', compact(['page']));
    }

    public function createOrganizerName(Request $request){
         $usr = EventUser::where('organizer_name', 'like',  '%'.$request->organizer_name.'%')->first();
         if ($usr) {
             return back()->withMessage('$request->organizer_name user already have');
         }
        $this->validate($request, [
               'organizer_name' => 'required|min:6|max:20'
           ]);
        EventUser::create([
         'user_id'        => Auth::user()->id,
         'organizer_name' => $request->organizer_name,
         'status'         => 0,
        ]);
       return $this->getEventForm();

    }
    public function bookingChangeStatus(Request $request){
      $id  = $request->id;
      $status = $request->status==1 ? 0 : 1;

      $event  = Event::findOrFail($id);
      if ($event) {
         $event->event_status = $status;
          $event->update();
          return response()->json([
             'success' => true,
             'message' => 'your have changed your booking status'
            ], 200);
      }else{
        return response()->json([
          'success' => false,
            'message' => 'event status could not changed'
        ], 401);
      }
    }
}
