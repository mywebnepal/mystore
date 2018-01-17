@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row" style="padding-top:1em;">
	<div class="container">
		<div class="col-sm-12 col-md-12" style="background: #F5F5F5;">
			 <div class="page-heading">
			   <h3> {{ $page['page_heading'] }}</h3>
			 </div>
	    </div>

	    <div class="row event-class">
	    	<div class="col-sm-3">
	    		<a href=""><img src="{{ asset('event/event.jpeg') }}" class="img img-responsive"  height="180" width="100%"></a>
	    	</div>
	    	<div class="col-sm-9">
	    		<a href=""><h4>Event name goes here
	    		<span class="badge badge-success badge-sm">Free</span></h4></a>
	    		<div class="row">
	    			<div class="col-sm-6">
	    			  <i class="fa fa-map-marker text-success">&nbsp;<small class="text-mute">Lainchour kathmandu</small></i>
	    			</div>

	    			<div class="col-sm-6 pull-right">
	    				<small class="text-mute">
		    				<i class="fa fa-calendar text-success">Start Date:-</i>
		    				<i class="fa fa-calendar text-success">End Date:-</i>
	    				</small>
	    			</div>
	    		</div>
	    		<hr>
	    		<div class="col-sm-12">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
	    	      <div class="col-sm-12">
	    	         <p class="pull-right">
	    	         	<i class="fa fa-money">&nbsp;Normal:- Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;Standard:-Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;VIP:- Rs. 500</i>&nbsp;
	    	         </p>
	    	      </div>
	    	      </div>
	    	</div><hr>
	    </div>

	    <div class="row event-class">
	    	<div class="col-sm-3">
	    		<img src="{{ asset('event/event.jpeg') }}" class="img img-responsive"  height="180" width="100%">
	    	</div>
	    	<div class="col-sm-9">
	    		<h4>Event name goes here
	    		<span class="badge badge-success">Free event</span></h4>
	    		<div class="row">
	    			<div class="col-sm-6">
	    			  <i class="fa fa-map-marker text-success">&nbsp;<small class="text-mute">Lainchour kathmandu</small></i>
	    			</div>

	    			<div class="col-sm-6 pull-right">
	    				<small class="text-mute">
		    				<i class="fa fa-calendar text-success">Start Date:-</i>
		    				<i class="fa fa-calendar text-success">End Date:-</i>
	    				</small>
	    			</div>
	    		</div>
	    		<hr>
	    		<div class="col-sm-12">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
	    	      <div class="col-sm-12">
	    	         <p class="pull-right">
	    	         	<i class="fa fa-money">&nbsp;Normal:- Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;Standard:-Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;VIP:- Rs. 500</i>&nbsp;
	    	         </p>
	    	      </div>
	    	      </div>
	    	</div><hr>
	    </div>

	    <div class="row event-class">
	    	<div class="col-sm-3">
	    		<img src="{{ asset('event/event.jpeg') }}" class="img img-responsive"  height="180" width="100%">
	    	</div>
	    	<div class="col-sm-9">
	    		<h4>Event name goes here
	    		<span class="badge badge-success">Free event</span></h4>
	    		<div class="row">
	    			<div class="col-sm-6">
	    			  <i class="fa fa-map-marker text-success">&nbsp;<small class="text-mute">Lainchour kathmandu</small></i>
	    			</div>

	    			<div class="col-sm-6 pull-right">
	    				<small class="text-mute">
		    				<i class="fa fa-calendar text-success">Start Date:-</i>
		    				<i class="fa fa-calendar text-success">End Date:-</i>
	    				</small>
	    			</div>
	    		</div>
	    		<hr>
	    		<div class="col-sm-12">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
	    	      <div class="col-sm-12">
	    	         <p class="pull-right">
	    	         	<i class="fa fa-money">&nbsp;Normal:- Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;Standard:-Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;VIP:- Rs. 500</i>&nbsp;
	    	         </p>
	    	      </div>
	    	      </div>
	    	</div><hr>
	    </div>

	    <div class="row event-class">
	    	<div class="col-sm-3">
	    		<img src="{{ asset('event/event.jpeg') }}" class="img img-responsive"  height="180" width="100%">
	    	</div>
	    	<div class="col-sm-9">
	    		<h4>Event name goes here
	    		<span class="badge badge-success">Free event</span></h4>
	    		<div class="row">
	    			<div class="col-sm-6">
	    			  <i class="fa fa-map-marker text-success">&nbsp;<small class="text-mute">Lainchour kathmandu</small></i>
	    			</div>

	    			<div class="col-sm-6 pull-right">
	    				<small class="text-mute">
		    				<i class="fa fa-calendar text-success">Start Date:-</i>
		    				<i class="fa fa-calendar text-success">End Date:-</i>
	    				</small>
	    			</div>
	    		</div>
	    		<hr>
	    		<div class="col-sm-12">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
	    	      <div class="col-sm-12">
	    	         <p class="pull-right">
	    	         	<i class="fa fa-money">&nbsp;Normal:- Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;Standard:-Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;VIP:- Rs. 500</i>&nbsp;
	    	         </p>
	    	      </div>
	    	      </div>
	    	</div><hr>
	    </div>

	    <!--  -->
	    <div class="row event-class">
	    	<div class="col-sm-3">
	    		<img src="{{ asset('event/event.jpeg') }}" class="img img-responsive"  height="220" width="100%">
	    	</div>
	    	<div class="col-sm-9">
	    		<h4>Event name goes here
	    		<span class="badge badge-success">Free event</span></h4>
	    		<div class="row">
	    			<div class="col-sm-6">
	    			  <i class="fa fa-map-marker text-success">&nbsp;<small class="text-mute">Lainchour kathmandu</small></i>
	    			</div>

	    			<div class="col-sm-6 pull-right">
	    				<small class="text-mute">
		    				<i class="fa fa-calendar text-success">Start Date:-</i>
		    				<i class="fa fa-calendar text-success">End Date:-</i>
	    				</small>
	    			</div>
	    		</div>
	    		<hr>
	    		<div class="col-sm-12">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	    	      <div class="col-sm-12">
	    	         <p class="pull-right">
	    	         	<i class="fa fa-money">&nbsp;Normal:- Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;Standard:-Rs. 500</i>&nbsp;
	    	         	<i class="fa fa-money">&nbsp;VIP:- Rs. 500</i>&nbsp;
	    	         </p>
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