@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<!-- hotel booking page -->
<div class="row">
	<div class="container">
		<div class="clearfix"></div>
		<div class="col-sm-12 col-md-12">    
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
			  <div class="row searchResult" style="display: none;"></div>
              <?php 
                 echo '<pre>';
                      // print_r($myHotelBooking);
                 echo '</pre>';

              ?>
			       @if($myHotelBooking)
                        @foreach($myHotelBooking as $hotel)
                            <!--  -->
                             	    <div class="row event-class">
                             	    	<div class="col-xs-3 col-sm-3 col-md-3">
                             	    		<a href="{{ route('getSingleHotelDataBySlug', $hotel->slug) }}" class="frmViewCount" data-id="">
                             	    		  <img src="{{ asset($hotel->featured_img_1) }}" class="img img-responsive" width="100%" height="200">
                             	    		</a>
                             	    	</div>
                             	    	<div class="col-xs-9 col-sm-9 col-md-9">
                             	    		<a href="{{ route('getSingleHotelDataBySlug', $hotel->slug) }}" class="frmViewCount" data-id=""><h4>{{ $hotel->name }}
                             	    		</a>
                             	    		<span class="badge badge-warning badge-sm">5<i class="fa fa-star" aria-hidden="true"></i></span>
                             	    		<span class="pull-right btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">RoomType 3</span></h4>
                             	    		<div class="row">
                             	    			<div class="col-sm-6">
                             	    			  <i class="fa fa-map-marker text-success">&nbsp;
                             	    			  <span class="text-mute">{{ $hotel->address }}</span></i><br>
                             	    			  <i class="fa fa-comment text-success">&nbsp;1</i>&nbsp;&nbsp;&nbsp;

                             	    			  <i class="fa fa-eye text-success">&nbsp;3</i>
                             	    			</div>
                             	    		</div>
                             	    		
                             	    		<div class="col-sm-12">
                             	    		  <p>
                             	    		    {!!
                             	    		       str_limit($hotel->desc, $limit = 200)
                             	    		    !!}
                                               </p>
                             	    	      </div>

                             	    	      <div class="col-sm-12">
                             	    	         <p class="pull-left alert-success">
                             	    	         	NPRS. 1500 <small>Breakfast luch included....</small>
                             	    	         </p>

                             	    	         <p class="pull-right alert-danger">
                                                    Room already booked try with other
                             	    	         </p>
                             	    	      </div>
                             	    	      
                             	    	</div><hr>
                             	    </div>
                        @endforeach
			       @endif
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