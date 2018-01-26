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
        @if(count($myEvent) > 0)
         @foreach($myEvent as $evnt)

		    <div class="row event-class">
		    	<div class="col-xs-3 col-sm-3 col-md-3">
		    		<a href="{{ route('client.event.single', $evnt->event_slug) }}" class="frmViewCount" data-id="{{ $evnt->id }}">
		    		  <img src="{{ asset($evnt->event_featured_img) }}" class="img img-responsive"  height="180" width="100%">
		    		</a>
		    	</div>
		    	<div class="col-xs-9 col-sm-9 col-md-9">
		    		<a href="{{ route('client.event.single', $evnt->event_slug) }}" class="frmViewCount" data-id="{{ $evnt->id }}"><h4>{{ $evnt->event_title }}
		    		<span class="badge badge-warning badge-sm">{{ $evnt->event_ticket_type }}</span></h4></a>
		    		<div class="row">
		    			<div class="col-sm-6">
		    			  <i class="fa fa-map-marker text-success">&nbsp;
		    			  <span class="text-mute">{{ $evnt->event_vanue_addr }}</span></i><br>
		    			  <i class="fa fa-comment text-success">&nbsp;{{ getEventCommentCount($evnt->id) }}</i>&nbsp;&nbsp;&nbsp;

		    			  <i class="fa fa-eye text-success">&nbsp;{{ getEventViewCount($evnt->id) }}</i>
		    			</div>

		    			<div class="col-sm-6 pull-right">
		    				<span class="text-mute">
			    				<i class="fa fa-calendar text-success">
			    				   Start Date:-{{ $evnt->event_start_date }}
			    				 </i>&nbsp;&nbsp;
			    				<i class="fa fa-calendar text-success">
			    				  End Date:-{{ $evnt->event_end_date }}
			    				 </i>
		    				</span>
		    			</div>
		    		</div>
		    		<hr>
		    		<div class="col-sm-12">
		    		  <p>
		    		    {{ 
		    		       str_limit($evnt->event_desc, $limit = 100)
		    		    }}
	                  </p>
		    	      </div>

		    	      <div class="col-sm-12">
		    	         <p class="pull-left">
		    	         	@if($evnt->event_ticket_name)
		    	         	@foreach($evnt->event_ticket_name as $ticket)
		    	         	<i class="fa fa-money">&nbsp; {{$ticket['name']}}:- Rs. {{$ticket['price']}}</i>&nbsp;
		    	         	@endforeach
		    	         	@endif
		    	         </p>
		    	      <p class="pull-right">
		    	      	<a href="{{ route('client.event.single', $evnt->event_slug) }}" class="frmViewCount" data-id="{{ $evnt->id }}"><button class="btn btn-success btn-sm">Booking...</button></a>
		    	      </p>
		    	      </div>
		    	      
		    	</div><hr>
		    </div>
		 @endforeach
		 <div class="col col-12">
		     {{ $myEvent->links() }}	  	
		 </div>
            @else
            <h3 class="alert alert-info">Oops sorry there is no event</h3>
	    @endif
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

/*view count*/
var frmViewCount = $('.frmViewCount');
frmViewCount.on('click', function(e){
var event_id  	= $(this).data('id')
var url  		= "{{URL::to('/')}}" + "/event-save-view/view-count/"+event_id;
   $.ajax({
   	     'type' : 'get',
         'url'  : url,
          timeout : 3000,
   });
});
</script>
@endsection