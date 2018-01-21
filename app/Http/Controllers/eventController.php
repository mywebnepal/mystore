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
        $this->middleware('auth')->except('getEventDetail', 'getSingleEventBySlug', 'clientEventBooking');
    }

    public function store(eventValidation $request)
    {
        $time = date('Y-m-d h:i:s');
        $tickets = [];
        if ($request->has('event_ticket_name')) {
            $ticketName = $request->event_ticket_name;
            $ticketPrice = $request->event_ticket_price;
            $ticketSeat = $request->event_ticket_seat;
            $ticketCount = count($ticketName);
            for ($i=0; $i < $ticketCount; $i++) { 
                array_push($tickets, [
                    'name' => $ticketName[$i],
                    'price' => $ticketPrice[$i],
                    'seat' => $ticketSeat[$i]
                ]);
            }
        }
        $save = new Event;
        $save->event_users = Auth::user()->id;
        $save->event_title = $request->event_title;
        $save->event_code  = getCode($request->event_title);
        $save->event_slug  = getSlug($request->event_title);
        $save->event_start_date = $request->event_start_date;
        $save->event_end_date = $request->event_end_date;
        $save->event_tel         = $request->event_tel;
        $save->event_phone       = $request->event_phone;
        $save->event_email       = $request->event_email;

        $save->event_city_id       = $request->event_city;
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
        // $save->event_discount = $request->event_discount;
        $save->event_status   = 0;
        $save->event_google_map = 'N/A';
        $save->event_ticket_name = serialize($tickets);

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

      $singleEvent->event_ticket_name = unserialize($singleEvent->event_ticket_name);
        
      return view('event.show', compact(['page', 'singleEvent']));
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

       $tickets = unserialize($edit->event_ticket_name);

       $editEvent = $edit ? $edit : '';
       $page['page_title']       = $edit->event_title ? 'mywebnepal:- edit'.$edit->event_title : 'mywebnepal:-'.'No event fount';
       $page['page_description'] = 'mywebnepal:-'.$edit->event_desc ? $edit->event_desc : 'No event fount';

       if ($edit) {
           return view('event.edit', compact(['page', 'editEvent', 'tickets']));
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
        $this->validate($request, [
               'event_title' => 'required|min:8|max:200',
               'event_city'  => 'required',
               'event_phone' => 'required',
               'event_start_date' => 'required',
               'event_end_date'   => 'required',
               'event_desc'       => 'required|min:10|max:6000',
               'event_ticket_type'  =>'required'
           ]);

        $update = Event::findOrFail($id);
        if ($update) {
            $update->event_title        = $request->event_title;
            $update->event_city_id         = $request->event_city;
            $update->event_email        = $request->event_email;
            $update->event_vanue_addr   = $request->event_vanue_addr;
            $update->event_postal_code  = $request->event_postal_code;
            $update->event_phone        = $request->event_phone;
            $update->event_tel          = $request->event_tel;
            $update->event_start_date   = $request->event_start_date;
            $update->event_end_date     = $request->event_end_date;
            $update->event_desc         = $request->event_desc;
            
            if ($request->hasFile('event_featured_img')) {

                if ($update->event_featured_img) {
                    File::delete($update->event_featured_img);
                }
               $eventImage      = $request->file('event_featured_img');

               $chngEventImgNam = str_replace(' ', '', $request->event_title).$time.'.'.$eventImage->getClientOriginalExtension();

               Image::make($eventImage )->resize(480, 300 )->save('event/' . $chngEventImgNam );
               $save->event_featured_img = 'event/'.$chngEventImgNam;
            }
            if ($request->has('event_ticket_name')) {
                $tickets = [];
                $ticketName = $request->event_ticket_name;
                $ticketPrice = $request->event_ticket_price;
                $ticketSeat = $request->event_ticket_seat;
                $ticketCount = count($ticketName);
                for ($i=0; $i < $ticketCount; $i++) { 
                    array_push($tickets, [
                        'name' => $ticketName[$i],
                        'price' => $ticketPrice[$i],
                        'seat' => $ticketSeat[$i]
                    ]);
                }
                $update->event_ticket_name = serialize($tickets);
            }
            // if ($request->has('event_discount')) {
            //     $update->event_discount = $request->event_discount;
            // }

            if ($request->has('event_tax')) {
                $update->event_tax = $request->event_tax;
            }

            $update->event_ticket_type = $request->event_ticket_type;

            $updateEvent = $update->update();

            if ($updateEvent) {
               return redirect()->route('client.event.form')->withMessage('successfully update your event');
            }else{
                return back()->withMessage('Oops event is not updated please try it again');
            }

        }
        
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
       
        
        $evnt = Event::where('event_users', Auth::user()->id)->orderby('created_at', 'desc')->paginate(15);
        $myEvent = $evnt ? $evnt : '';
        return view('event.index', compact(['page', 'evnt']));
    }

    public function getEventDetail(){
        $page['page_title']       = 'mywebnepal : event';
        $page['page_description'] =  'all event details of nepal';
        $page['page_heading']     = 'Event list';
        $allEvent = $this->getEventData();
        foreach ($allEvent as $event) {
            $event->event_ticket_name = unserialize($event->event_ticket_name);
        }
        $myEvent = $allEvent ? $allEvent : '';

        return view('client.event', compact(['page', 'myEvent']));  
    }

    public function getSingleEventBySlug(Request $request){
        if ($request->slug) {
           $eventBySlug = $this->getEventData($request->slug);
           if ($eventBySlug) {
               $page['page_title'] = $eventBySlug ? 'mywebnepal:'.$eventBySlug->event_title : '';
               $page['page_description'] = $eventBySlug ? 'mywebnepal:'.$eventBySlug->event_desc : '';

               $eventBySlug->event_ticket_name = unserialize($eventBySlug->event_ticket_name);
               return view('client.single_event', compact(['eventBySlug', 'page']));
           }
           
        }
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


    private function getEventIdBySlug($slug){
       if (!$slug) {
           return null;
       }
       $eventId = Event::where('event_slug', $slug)->where('event_status', 1)->get();
       return $eventId;
    }

    private function getEventData($slug = null){
        $date = getTodayDateTime();
        if ($slug) {
            $evnt = Event::orderby('created_at', 'desc')->where('event_slug', $slug)->first();
        }else{
             $evnt = Event::orderby('created_at', 'desc')->where('event_start_date', '>=', $date)->where('event_status', 1)->paginate(15);
        }
        return $evnt;
    }

    public function clientEventBooking(){
        dd('i am in right place');
    }
}