<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Hotel;
use App\models\City;
use App\models\Product;
use App\models\roomType;
use App\models\Event;
use App\models\EventBooking;
use App\models\Mylogic;

class bookingController extends Controller
{
    public function getHotelBooking(){
    $page['page_title']       = 'Booking';
    $page['page_description'] = 'Booking hotel and tour and travel in kathmandu nepal';

    $hotelData = Hotel::orderBy('name', 'desc')->paginate(15);
     $myHotelBooking = $hotelData ? $hotelData : 0;

     $hotel = roomType::select('id', 'name')->get();
     $myHotel = $hotel ? $hotel : '';

     $city  = City::select('id', 'name')->get();
     $myCity = $city ? $city : '';

    	return view('client.booking', compact(['page', 'myHotelBooking', 'myHotel', 'myCity']));
    }

    public function getHotel(Request $request){
    	$hotelType = $request->room_types_id;
    	$hotelCity = $request->cities_id;

    	$datas = Hotel::where('room_types_id','=',$hotelType)->where('cities_id','=',$hotelCity)->get();

    	if (count($datas) > 0) {
    		foreach ($datas as $data) {?>
		<div class="col-sm-12" style="padding: 1em; background: #D5D5D5;">
    		<div class="panel panel-success">
			  	  <div class="panel-head">
                      <h4><a href="#"><?php echo $data->name; ?></a></h4>
				  	     
                          <small class="text-muted"><b>Hotel:</b> <?php echo  $data->rooms->name ?> &nbsp; <b>City:</b><?php  echo $data->cities->name;?> </small>
			  	  </div>

			  	  <div class="panel-body">
				  	    <div class="row">
				  	    	   <div class="col-sm-3">
				  	    	   	<img src="<?php echo asset($data->img_path) ?>" class="img img-thumbnail">
				  	    	   </div>
				  	    	   <div class="col-sm-9">
				  	    		   <p><?php echo $data->desc ?></p>
				  	    	   </div>
				  	    </div>
				</div>

				<div class="panel-footer">
				  	  <p class="pull-left">
				  	    <i class="fa fa-money" aria-hidden="true">
				  	       &nbsp;<small>Rs. <?php echo  $data->price ?></small>&nbsp;&nbsp;
				  	    </i>
				  	  	<i class="fa fa-map-marker">
				  	  		<small><?php echo $data->address ?></small>
				  	  	</i>

				  	  </p>
				  	     <p class="pull-right">
				  	     	
                            <a href="tel:9807573751" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Call us now">
                                <i class="fa fa-phone"></i>
                            </a>

                             <button type="button" class="btn btn-success"  data-placement="top" title="" data-original-title="Email" data-toggle="modal" data-target="#customerForm">
                                <i class="fa fa-envelope"></i>
                            </button>
				  	     </p>
				  	  </div>
		    </div>	
		    <hr class="my-4 hr-lg">
		    <div class="clearfix"></div>
		</div>	  	  
    	<?php
        }
    	}else{?>
    		<div class="alert alert-info">Oops data not found</div>
    	<?php
        }
    }

    public function getProductSearchData(Request $request){ 
      $key = $request->qry;
      $datas = Product::select('id', 'name', 'categories_id', 'featured_img_sm', 'status', 'product_slug', 'author_manufactural_name')->where('status', '=', 1)->where('name', 'like', 
         '%'.$key.'%')->orWhere('author_manufactural_name', 'like', '%'.$key.'%')->get();
      
      if (count($datas) > 0) {
        foreach($datas as $data){?>
           <div class="row">
              <div class="col-sm-2">
                 <img src="<?php echo asset($data->featured_img_sm)  ?>" width="80" height="50"class="img img-thumbnail" />
              </div>
              <div class="col-sm-9 text-left">
                <h4><a href="<?php echo route('product.single', $data->product_slug) ?>" class="product-title"><?php  echo $data->name;   ?></a></h4>
                <small><?php  echo $data->categories->name;   ?></small>
              </div>
          </div> <hr class="my-4 hr-sm" style="padding: 0px; margin: 0px;">
       <?php
        }
       }else{?>
          <p class="text-info">Oops data not found</p>
      <?php
       }
    }

    public function eventBooking(Request $request){
    $this->validate($request, [
           'nickName'           => 'required|min:4|max:50',
           'email'              => 'required|email',
           'phone'              => 'required|numeric',
           'event_id'           => 'required|numeric'
       ]);
     $eventName = $this->getSingleEventDetails($request->event_id); //all event data comes
     if ($eventName) {
        $checkBooking =$this->checkBookingByPhone($request->event_id, $request->phone);
        if ($checkBooking == 0) {
          $save = new EventBooking;
          $save->event_id      = $request->event_id;
          $save->event_type    = $request->event_type;
          $save->nickName      = $request->nickName;
          $save->email         = $request->email;
          $save->phone         = $request->phone;
          $save->bookingCode   = getCode($eventName->event_title);
          $save->isUser        = Mylogic::isSystemUser($request->email);

          if ($eventName->event_ticket_type == 'Ticket') {
            if ($request->has('event_ticket')) {
                $tickets = [];
                $ticketCount = count($request->event_ticket);
                foreach ($eventName->event_ticket_name as $allTicket) {
                    for ($i = 0; $i < $ticketCount; $i++) {
                        if ($request->event_ticket[$i] === $allTicket['name']) {
                            array_push($tickets, $allTicket);
                        }
                    }
                    $save->ticket = serialize($tickets);
            }
           }else{
            $this->validate($request, [
             'profession' => 'required'
            ]);
            $save->profession    = $request->profession;
          }
        }
          $save->tax = $eventName['event_tax'];
          $save->payId = 'N/A';
          $save->status = 0;
          $save->save();
           if ($save) {
              
              return back()->withMessage('successfully inserted');
           }else{
              return back()->withMessage('OOps sorry try it again');
           }

        }else{
          return back()->withMessage('already booked by this number please change you phone number');
        }
        
     }else{
      return back()->withMessage('sorry event not found');
     }
  }

  public function getSingleEventDetails($id){
   $event = Event::where('id', $id)->first();
   $event->event_ticket_name = unserialize($event->event_ticket_name);
   return $event ? $event : '';
  }

  public function getPriceRate($id, $search){
   $event = Event::where('id', $id)->first();
   $event->event_ticket_name = unserialize($event->event_ticket_name);
  }
  public function checkBookingByPhone($id, $phone){
   $checkBooking = EventBooking::select('phone')->where('phone', $phone)->where('event_id', $id)->first();
   return $checkBooking ? 1 : 0;
  }
}
