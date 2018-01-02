@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row" style="padding-top:1em;">
	<div class="container">
		<div class="col-sm-12 col-md-12" style="background: #F5F5F5;">
		<li class="pull-left booking-heading"><h4>Secure your booking today</h4></li>
			<ul class="nav nav-tabs pull-right" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#hotel" role="tab">Hotel Booking</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#event_vanue" role="tab">
			    	Tour & travel
			    </a>
			  </li>
			</ul>
		</div>		

			<!-- Tab panes -->
			<div class="clearfix"></div>
		<div class="col-sm-12 col-md-12" style="background: #FFF">
			<div class="tab-content">
			  <div class="tab-pane active" id="hotel" role="tabpanel">
			  <div class="row">
			  	<div class="col-sm-12" style="padding-top: 1em; ">
				  	  {!! Form::open(['id'=>'frmSearchHotel', 'route'=>'searchHotel', 'method'=>'GET']) !!}
				     	<span class="input-group-btn">
				     	  <select name="cities_id" class="form-control col-sm-2" title="select city" required>
				     	 
				     	  	<option value="">Select City Name</option>
				     	  	@if($myCity)
	                            @foreach($myCity as $city)
	                                <option value="{{ $city->id }}">{{ $city->name }}</option>
	                            @endforeach
				     	  	@endif
				     	  </select>

				     	  <select name="room_types_id" class="form-control col-sm-2" title="Select hotel star" required>
				     	  	<option value="">Hotel type</option>

				     	  	@if($myHotel)
	                            @foreach($myHotel as $hotel)
	                                <option value="{{ $hotel->id }}">
	                                	{{ $hotel->name }}
	                                </option>
	                            @endforeach
				     	  	@endif
				     	  </select>
	                        <button class="btn btn-light" type="submit">
	                            <i class="fa fa-search"></i>
	                        </button>
	                </span><hr>
	                   {!! Form::close() !!}   
	                   <div class="searchHotelInfo"></div> 
			     </div>
			  </div>
			  <div class="row searchResult" style="display: none;">
			  	gfdsgfdgs
			  </div>
			       @if($myHotelBooking)
                        @foreach($myHotelBooking as $hotel)
                    <div class="panel panel-success">
				  	  <div class="panel-head">
				  	     <h4><a href="#">{{ $hotel->name }}</a></h4>
				  	     
                          <small class="text-muted"><b>Hotel:</b> {{ $hotel->rooms->name }}&nbsp; <b>City:</b>{{ $hotel->cities->name }} </small>
				  	  </div>
				  	  <div class="panel-body">
				  	    <div class="row">
				  	    	   <div class="col-sm-3">
				  	    	   	<img src="{{ asset($hotel->img_path) }}" class="img img-thumbnail">
				  	    	   </div>
				  	    	   <div class="col-sm-9">
				  	    		   <p>{!! $hotel->desc !!}</p>
				  	    	   </div>
				  	    </div>
				  	  </div>
				  	  <div class="panel-footer">
				  	  <p class="pull-left">
				  	    <i class="fa fa-money" aria-hidden="true">
				  	       &nbsp;<small>Rs. {{ $hotel->price }}</small>&nbsp;&nbsp;
				  	    </i>
				  	  	<i class="fa fa-map-marker">
				  	  		<small>{{ $hotel->address }}</small>
				  	  	</i>

				  	  </p>
				  	     <p class="pull-right">
				  	     	
                            <a href="tel:18475555555" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Call us now">
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
                        @endforeach
			       @endif
				  	</div>

			  <!--  -->
			  <div class="tab-pane" id="event_vanue" role="tabpanel">
			  	<div class="panel panel-success">
				  	  <div class="panel-head">
				  	     <h4><a href="#"> Underconstruction </a></h4><hr>
				  	  </div>
				  	  <div class="panel-body">
				  	  	 <p>we will come with best tour package soon..</p>
				  	  </div>
				  	  <div class="panel-footer">
				  	  <p class="pull-left">
				  	  	<i class="fa fa-map-marker">
				  	  		<small></small>
				  	  	</i>

				  	  </p>
				  	     <p class="pull-right">
				  	     	<span>
				  	     	 <button class="btn btn-success btn-sm">enquiry</button>
                            </span>
                            <span>
                            	 <button class="btn btn-success btn-sm">book now</button>
                            </span>
				  	     </p>
				  	  </div>
				 </div>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});
	/*------------------------------------*/
var frmSearchHotel = $('#frmSearchHotel');
var searchHotelInfo = $('.searchHotelInfo');
var searchResult    = $('.searchResult');
frmSearchHotel.on('submit', function(e){
   e.preventDefault();
   var url = $(this).attr('action');
   var data = $(this).serialize();
   $.ajax({
   	      'type' : 'GET',
         'url'  : url,
         'data' : data,
          timeout : 3000,
         beforeSend :function(){
	         searchHotelInfo.fadeIn(2000);
	         searchHotelInfo.addClass('alert alert-info');
	         searchHotelInfo.text('your search is processing please wait....');

             searchResult.css('display', 'block');
             searchResult.empty();
         },
         success:function(response){
          searchHotelInfo.fadeOut();
          searchResult.append(response);
         }
   });
});
</script>
@endsection