@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
    @if($eventBySlug)
    <div class="col col-12 event-title">
    	<h4 align="center" class="text text-success">{{ $eventBySlug->event_title }}</h4>
    	<p align="center">
    	    &nbsp;Event Code: &nbsp;{{ $eventBySlug->event_code }}&nbsp;<br>
    	    <i class="fa fa-map-marker">
    	    &nbsp;{{ $eventBySlug->cities->name }}&nbsp;
    	    {{ $eventBySlug->event_vanue_addr }}</i><br>
    	    Organizer: {{ $eventBySlug->eventUsers->name }}
    	</p>
    </div>
</div>
<div class="row text-success">
	<div class="col col-6">
	     <i class="fa fa-phone"> &nbsp;{{ $eventBySlug->event_phone }}</i>
	     <i class="fa fa-envelope">&nbsp;{{ $eventBySlug->event_email }}</i>
	     <br>
	     <i class="fa fa-user text-success">&nbsp;Interested:10</i>&nbsp;&nbsp;&nbsp;
	     <i class="fa fa-comment text-success">&nbsp;3</i>
		
	</div>
	<div class="col col-6">
		<i class="fa fa-calendar pull-right">Start date:- {{ $eventBySlug->event_start_date }} &nbsp;&nbsp; {{$eventBySlug->event_end_date }}</i>
	</div>
</div>
<hr class="mt-3 hr-lg">
<div class="row">
	<div class="col col-12">
		<img src="{{ asset($eventBySlug->event_featured_img) }}" width="100%" height="350">
	</div>
</div>
<!--  -->
<article class="cstm-horizontal-nav-pills">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="second-content position-relative">
                <ul class="nav nav-pills mb-3 bg-white" id="pills-tab" role="tablist">
                    <li class="nav-item nav-justified">
                        <a class="nav-link active" id="pills-new-description-tab" data-toggle="pill" href="#pills-new-description" role="tab" aria-controls="pills-new-description" aria-expanded="true">
                            description
                        </a>
                    </li>
                    <li class="nav-item nav-justified">
                        <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#pills-offers-items" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
                            Comment
                        </a>
                    </li>
                </ul>
                <div class="tab-content bg-white mb-sm-2 mb-md-4" id="first-pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-new-description" role="tabpanel" aria-labelledby="pills-new-description-tab">
                        <div class="">
                            <p class="mb-2">
                                <small><strong>Event Details</strong></small>
                            </p>
                            <p class="mb-2">
	                            <!-- @if($eventBySlug->event_discount)
	                                <small>
	                                	Discount:-{{ $eventBySlug->event_discount }}%
	                                </small>
	                            @endif -->
                            	@if($eventBySlug->event_tax)
                            	 <small>
                            	 	Tax:-{{ $eventBySlug->event_tax }}%
                            	 </small>
                            	@endif
                            </p>
                            <div class="row">
                            	<div class="col col-8">
                            		<p class="lead">
                            		  {{ $eventBySlug->event_desc }}
                            		</p>
                            	</div>
                            	@if($eventBySlug->event_ticket_type =='Ticket')
                            	<div class="col col-4" style="margin-top: -5em; background: #3eb143;">
                            	<h4 align="center">Book now...</h4>
                    		         {!! Form::open(['route'=>'client.event.booking', 'method'=>'post', 'name'=>'client_event_booking']) !!}
                    		         <fieldset>
                    		              <div class="row">
                    						<section class="col col-12">
                    						    <label class="col col-12">
                    						    {!! Form::text('nick_name', null, ['placeholder'=>'please enter you nick name', 'class'=>'form-control nick_name', 'title'=>'your nick name that display']) !!}
                    						    </label>
                    						</section>
                    					</div>
                    					<div class="row">
                    						<section class="col col-12">
                    						    <label class="col col-12">
                    						    {!! Form::text('email_addr', null, ['placeholder'=>'your email address', 'class'=>'form-control email_addr', 'title'=>'your email address']) !!}
                    						    </label>
                    						</section>
                    					</div>
                    					<div class="row">
                    						<section class="col col-12">
                    						    <label class="col col-12">
                    						    {!! Form::text('phone', null, ['placeholder'=>'please enter your phone number', 'class'=>'form-control phone', 'title'=>'your mobile number']) !!}
                    						    </label>
                    						</section>
                    					</div>
                    					<div class="row">
                    						<section class="col col-12">
                    						  <label class="col col-12">
                    		                     <select name='event_ticket_first' class='event_ticket_first form-control'>
                    		                     <option class=''>Please select ticket name</option>@foreach($eventBySlug->event_ticket_name as $ticket)<option value='{{$ticket['name']}}'>{{$ticket['name']}} &nbsp; Rs.{{$ticket['price']}}</option>@endforeach</select>
                    						</section>
                    					</div>
                    				    <hr class="col col-sm">
                    				    @if($eventBySlug->event_ticket_type =='Ticket')
                    				    <div class="row addTicket"></div>
                                          <a href="javascript:void(0)" class="btn btn-success btn-sm pull-right addMoreTicket">Add more ticket</a>
                    				   @endif
                    		         </fieldset>
                    		         <p align="center">{{ Form::submit('Book now..', ['class'=>'btn btn-success btn-md']) }}</p>
                    		         {!! Form::close() !!}
                            	</div>
                            	@endif
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col col-6 pull-left">
                                   <p class="pull-left">
                        		   @if($eventBySlug->event_ticket_type =='Ticket')
	                                   	@if($eventBySlug->event_ticket_name)
	                                   	@foreach($eventBySlug->event_ticket_name as $ticket)
	                                   	<i class="fa fa-money">&nbsp; {{$ticket['name']}}:- Rs. {{$ticket['price']}}</i>&nbsp;
	                                   	@endforeach
                                   	@endif
                                   </p>
                        	</div>
                		  @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-offers-items" role="tabpanel" aria-labelledby="pills-offers-items-tab">
                           <dl>
                             <dt>
                             <span>
                                 <i class="fa fa-user-o" aria-hidden="true"></i>
                             </span>sdfds</dt>
                             <dd>asdfds</dd>
                           </dl>
                        <div class="">
                            {!! Form::open(['url'=>route('product.comment'), 'id'=>'prdComment']) !!}
                              
                                 @if (Auth::check())
                                    <div class="form-group float-label-control">
                                         <h4>Hai, {{ Auth::user()->name }} 
                                         <small>Please comment this Event</small>
                                         </h4>
                                    </div>
                                    {!! Form::hidden('usr_id', Auth::user()->id, ['class'=>'form-control']) !!}

                                 @else
                                      <div class="form-group float-label-control">
                                       {!! Form::text('user_email', null, ['class'=>'form-control', 'placeholder'=>'Your email address']) !!}
                                    </div>          
                                 @endif
                                 
                                 <div class="form-group float-label-control">
                                  {!! Form::textarea('comment', null, ['class'=>'form-control', 'placeholder'=>'Your comment', 'rows'=>'3']) !!}
                                  </div>

                                  <div class="form-group float-label-control">
                                     <p class="pull-right">
                                         {!! Form::submit('submit', ['class'=>'btn btn-info btn-sm']) !!}
                                     </p>
                                  </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </article>
@endif
@endsection
@section('custom_script')
<script type="text/javascript">
    var counter = 1;
    var infoDiv = $('.siteInfoMsg');
	$('.addMoreTicket').on('click', function(e){
      e.preventDefault();
      if (counter <= 3) {
      	   var file = "@include('inc.ticketselect')";
      	   var myTicket = "<div class='row'><span class='text-danger btnRemoveTicket'>X</span><div class='col col-5'><input type='text' name='event_booking_phone[]' class='form-control' placeholder='mobile number up to 10 digit'></div><div class='col col-6'>"+ file +"</div></div>";
          $('.addTicket').append(myTicket);
          counter ++;
      }else{
      	infoDiv.append('Oops you cannot buy three ticket with same email address').add('alert alert-danger');
      }
	});

	/*removing code*/
   $(document).on('click', '.btnRemoveTicket', function(){  
           $(this).parent().remove(); 
           counter  = counter - 1; 
      }); 
    

    /*---------*/
	$(function() {
	  $("form[name='client_event_booking']").validate({
	    rules: {
	      nick_name :{
	      	required  : true,
	      	minlength : 4,
	      	maxlength  : 20,
	      },
	      email_addr : {
	      	required :true,
	      	email    : true
	      },
	      phone      : {
	      	required : true,
	      	number: true,
	      	minlength:10,
	      	maxlength : 10
	      },
	      event_ticket_first : "required",
	    },
	    messages: {
	      nick_name: "nick name must be more than 4 character",
	      email_addr: "email address is not correct",
	      phone     : "mobile number must be 10 digit with unique",
	      event_ticket_first : "select ticket"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
	});
</script>
@endsection