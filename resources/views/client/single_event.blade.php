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
	     <i class="fa fa-eye text-success">&nbsp;{{ getEventViewCount($eventBySlug->id) }}</i>&nbsp;&nbsp;&nbsp;
	     <i class="fa fa-comment text-success">&nbsp;{{ getEventCommentCount($eventBySlug->id) }}</i>
		
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
                        @if(Session::has('message'))
                           {{ Session::get('message') }}
                        @endif
                        <div class="">
                            <p class="mb-2">
                                <small><strong>Event Details</strong></small>
                            </p>
                            <p class="mb-2">
                            	@if($eventBySlug->event_tax)
                            	 <small>
                            	 	Tax:-{{ $eventBySlug->event_tax }}%
                            	 </small>
                            	@endif
                            </p>
                            <div class="row">
                            	<div class="col-xs-12 col-sm-8">
                            		<p class="lead">
                            		  {{ $eventBySlug->event_desc }}
                            		</p>
                                <p class="pull-left" style="margin-bottom: 6em; ">
                               @if($eventBySlug->event_ticket_type =='Ticket')
                                      @if($eventBySlug->event_ticket_name)
                                      @foreach($eventBySlug->event_ticket_name as $ticket)
                                      <i class="fa fa-money">&nbsp; {{$ticket['name']}}:- Rs. {{$ticket['price']}}</i>&nbsp;
                                      @endforeach
                                    @endif
                                    @endif
                                   </p><br><hr>
                            	</div>
                              <div class="col-sm-4 col-xs-12" style="margin-top: -5em; background: #3eb143;">
                              @if(Session::has('errors'))
                                     <ul>
                                        @foreach ($errors->all() as $error)
                                         <div class="alert alert-danger alert-dismissable" style="text-align: center">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                           <li>{{ $error }}</li>
                                         </div>
                                      @endforeach
                                      </ul>
                                   @endif
                              <h4 align="center">Book now...</h4>
                                 {!! Form::open(['route'=>'client.event.booking', 'method'=>'post', 'name'=>'client_event_booking']) !!}
                                 <fieldset>
                                 {{ Form::hidden('event_id', $eventBySlug->id) }}
                                 {{ Form::hidden('event_type', $eventBySlug->event_ticket_type) }}
                                @include('partial.commanField')
                            	@if($eventBySlug->event_ticket_type =='Ticket')
                              <div class="row">
                    						<section class="col col-12">
                    						  <label class="col col-12">
          		                     <select name='event_ticket[]' class='frmEventTicket form-control'>
          		                        <option value=''>Please select ticket name</option>@foreach($eventBySlug->event_ticket_name as $ticket)
                                       <option value="{{ $ticket['name'] }}" data-seat="{{ $ticket['seat'] }}" data-price="{{ $ticket['price'] }}">
                                         {{$ticket['name']}} &nbsp;-- Rs.{{$ticket['price']}}
                                       </option>
                                     @endforeach
                                   </select>
                    						</section>
                    					</div>
                    				    <hr class="col col-sm">
                    				    @if($eventBySlug->event_ticket_type =='Ticket')
                    				    <div class="row addTicket"></div>
                                         <div class="addMoreEventTicket">
                                           <a href="javascript:void(0)" class="btn btn-success btn-sm pull-right addMoreTicket">Add more ticket</a>
                                         </div>
                                          
                    				   @endif
                               @else
                               <div class="row">
                                   <section class="col col-12">
                                       <label class="col col-12">
                                       {!! Form::text('profession', null, ['placeholder'=>'please enter your profession', 'class'=>'form-control profession', 'title'=>'Please enter your profession']) !!}
                                       </label>
                                   </section>
                               </div>
                            	@endif
                                 </fieldset>
                                 <p align="center">{{ Form::submit('Book now..', ['class'=>'btn btn-success btn-md']) }}</p>
                                 {!! Form::close() !!}
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-offers-items" role="tabpanel" aria-labelledby="pills-offers-items-tab">
                    <div class="row">
                      <div class="col col-6">
                        <div class="">
                            {!! Form::open(['url'=>route('client.event.comment'), 'name'=>'eventComment', 'id'=>'frmEventComment', 'method'=>'post']) !!}
                                 {!! Form::hidden('event_id', $eventBySlug->id) !!}
                                 @include('partial.comment_field')
                                  <div class="form-group float-label-control">
                                     <p align="center">{{ Form::submit('Share your comment..', ['class'=>'btn btn-success btn-md']) }}</p>
                                  </div>
                            {!! Form::close() !!}
                        </div>
                      </div>
                      <div class="col col-6">
                        @if(count($eventComment) > 0)
                            @foreach($eventComment as $comment)
                                <dl>
                                  <dt>
                                  <span>
                                      <div class="userNickName"><i class="fa fa-user-o" aria-hidden="true">&nbsp;{{ $comment->nickName }}</i></div>
                                  </span></dt>
                                  <dd>
                                    <div class="userComment">
                                      <i class="fa fa-comment">&nbsp; {{ $comment->event_comment }}</i>
                                    </div>
                                  </dd>
                                </dl>
                            @endforeach
                        @endif
                              <dl>
                                <dt>
                                <span>
                                    <div class="userNickName"><i class="fa fa-user-o" aria-hidden="true">&nbsp;</i></div>
                                </span></dt>
                                <dd>
                                  <div class="userComment">
                                    <i class="fa fa-comment"></i>
                                  </div>
                                </dd>
                              </dl>
                      </div>
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
      	   var file = "@include('partial.ticketselect')";
           $('.addTicket').append(file);
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
        'event_ticket[]': {
          required: true,
          minlength: 1
        }, 
	      nickName :{
	      	required  : true,
	      	minlength : 4,
	      	maxlength  : 20
	      },
	      email : {
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
	      nickName: "nick name must be more than 4 character",
	      email: "email address is not correct",
	      phone     : "mobile number must be 10 digit with unique",
	      event_ticket_first : "select ticket"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
	});


  $(function() {
    var siteInfoMsg = $('.siteInfoMsg');
    $("form[name='eventComment']").validate({
      rules: {
        nickName :{
          required  : true,
          minlength : 4,
          maxlength  : 20
        },
        email : {
          required :true,
          email    : true
        },
        phone      : {
          required : true,
          number: true,
          minlength:10,
          maxlength : 10
        },
        event_comment :{
          required : true,
          minlength:5,
          maxlength : 100
        }
      },
      messages: {
        nickName: "nick name must be more than 4 character",
        email: "email address is not correct",
        phone     : "mobile number must be 10 digit with unique",
        event_comment : "please share your views at least 10 character"
      },
      submitHandler: function(form) {
        var url  = $('#frmEventComment').attr('action');
        var data = $('#frmEventComment').serialize();
        $.ajax({
           'type' : 'POST',
           'url'  : url,
           'data' : data,
           success: function(response){;
             if (response.success == true) {
                siteInfoMsg.css('display', 'block').fadeOut(5000);
                siteInfoMsg.append(response.message);
                $('.userNickName').append(response.nickName);
                $('.userComment').append(response.comment);
            }else{
                siteInfoMsg.css('display', 'block').addClass('alert alert-danger').fadeOut(5000);
                siteInfoMsg.append(response.message);
            }
           },
           complete :function(){
            $('#frmEventComment').trigger('reset');
           }
        });
        return false;
      }
    });
  });
</script>
@endsection