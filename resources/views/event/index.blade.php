@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
   <div class="container">
           @if(Session::has('message'))
              <div class="alert alert-info client-info">
                {{ Session::get('message') }}
              </div>
           @endif
       <div class="row">
           <div class="col-md-4 col-lg-3">
               @include('clientDashboard.sidebar')
           </div>
           <div class="col-md-8 col-lg-9">
               <div class="jumbotron">
                   @if(count($usr) > 0)
                     @if($usr->status == 0)
                        <p>your event user <span class="text-success">{{ $usr->organizer_name }}</span> is not varified 
                        Please contact to system admin 
                        <strong class="text-success">Contact Email:- dipeshbanjade@gmail.com</strong> Or wait for 24 hour to varified</p>
                     @endif
                   @else
                     <p>Sorry we do not have your organizer name please create organizer name first to create your event</p>
                     {!! Form::open(['route'=>'client.create.organizer', 'method'=>'post']) !!}
                        @include('event.organizer')
                     {!! Form::close() !!}
                   @endif
                   <!--  -->
               <div class="row">
                 @if($usr->user_id == Auth::user()->id && $usr->status == 1)
                   <div class="col-sm-12">
                     <p class="pull-right">
                          <button class="btn btn-success btn-sm btnCreateEvent">
                            <i class="fa fa-calendar">&nbsp;Create Event</i>
                          </button>
                     </p>
                     
                   </div>
                   <!--  -->
                   <div class="col-sm-12 eventFrm" style="display: none;">
                   {!! Form::open(['route'=>'client.event.create', 'method'=>'post', 'files'=>true, 'name'=>'eventForm']) !!}
                     @include('event.form')
                     <hr>
                      <div class="row ticketDiv"></div>
                      <section class="col col-4 divCreateTicket" style="display: none;">
                          {!! Form::label('event_type', 'Create multiple ticket') !!}
                          <label class="input">
                              <button class="btn btn-info btn-sm createEventTicket" title="click me to create more ticket">
                                <i class="fa fa-plus">Create Ticket</i>
                              </button>
                            </label>

                      </section>
                     <div class="col col-12">
                       <footer class="pull-right">
                          {{ Form::submit('Create event', ['class'=>'btn btn-success btn-lg']) }}
                       </footer>
                     </div>
                   {!! Form::close() !!}
                   </div>

                   <div class="col-sm-12">
                     <hr>
                     @if(count($evnt) > 0)
                        <table class="table table-responsive table-striped">
                          <caption>List of my event</caption>
                          <thead>
                              <tr>
                                <th>sn</th>
                                <th>image</th>
                                <th>event type</th>
                                <th>name</th>
                                <th>booking</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <div class="infoDiv"></div>
                          <tbody>
                          @php $count = 1  @endphp
                          @foreach($evnt as $event)
                            <tr>
                              <td>{{ $count++ }}</td>
                              <td>
                                <a href="{{ route('client.show.event.details', $event->id) }}">
                                   <img src="{{ asset($event->event_featured_img) }}" width="50" height="50" />
                                </a>
                                 </td>
                              <td>{{ $event->event_ticket_type }}</td>
                              <td>
                                 <a href="{{ route('client.show.event.details', $event->id) }}">
                                   {{ $event->event_title }}
                                 </a>
                               </td>
                             
                              <td>number of booking</td>
                              <td>
                                 <span>
                                    <a href="{{ route('client.event.edit', $event->id) }}" title="edit my event">
                                      <i class="fa fa-edit text-info"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="javascript:void(0)" data-name="{{ $event->event_title }}" data-url="{!! route('client.delete.event', $event->id) !!}" class="deleteMe">
                                      <i class="fa fa-trash text-danger" title="Do you want to delete ?"></i>
                                    </a>
                                </span>
                                
                 <span>
                    <a href="#" data-url="{{ route('client.event.boookingStatus') }}"  data-status = "{{ $event->event_status }}" data-id = "{{ $event->id }}" class="eventBookingStatus" title="change your booking status">
                         <button class="<?php echo $event->event_status==1 ? 'btn btn-danger btn-sm': 'btn btn-success btn-sm'   ?>">
                          <?php 
                          echo  $event->event_status==1 ? 'openBooking' : 'closeBooking'     
                          ?>
                         </button>
                    </a>
                    </span>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                     @endif
                   </div>
                 @endif
               </div>
            </div>
           </div>
       </div>
   </div>
@endsection
@section('custom_script')
<script type="text/javascript">
  $('.client-info').fadeOut(5000);

  $('.btnCreateEvent').on('click', function(){
     $('.eventFrm').toggle();
  });

var infoDiv  = $('.infoDiv');
/*select box ticket button show and hide*/
var ticketDiv = $('.ticketDiv');
$(document).ready(function() {
   var evt_type = $('.event_type');
   evt_type.change(function(){

       var selectVal = evt_type.val();
        if (selectVal == 'onFree') {
          $('.divCreateTicket').hide();
          $('.eventTaxDiscount').hide();
          ticketDiv.html('');
        }
        if(selectVal == 'onTicket'){
          $('.divCreateTicket').show();
          $('.eventTaxDiscount').show();
        }
        
     });
});

/*displaying ticket box*/
var btnCreateTicket = $('.createEventTicket');
  var counter = 1;
  btnCreateTicket.on('click', function(e){
  e.preventDefault();
  if (counter <= 3) {
     var ticket = "<div class='row'><div class='col col-4'>Ticket name"+ "<input type='text' name='event_ticket_name[]'>" +"</div>"+"<div class='col col-4'>Ticket price"+ "<input type='text' name='event_ticket_price[]'></div>"+"<div class='col col-3'>Total ticket"+ "<input type='text' name='event_ticket_seat[]'></div><button type='button' name='remove'  class='btn btn-danger btn_remove btn-sm'>X</button></div>";
      $('.ticketDiv').append(ticket);
     counter ++;
  }else{
    alert('you cannot create ticket more than 3');
  }
});

  /*removing code*/
   $(document).on('click', '.btn_remove', function(){  
           $(this).parent().remove(); 
           counter  = counter - 1; 
      }); 

$('#eventTax').on('mousemove', function(){
 $('.event_tax_rangeValue').text($(this).val()+'%');
});

$('#eventDiscount').on('mousemove', function(){
  $('.event_discount_rangeValue').text($(this).val()+'%');
});

/*upload image show*/
  function readEventFeaturedImage(input){
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#event_image')
              .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
  }

  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='eventForm']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        event_start_date: "required",
        event_end_date   : "required",
        event_city       : "required",
        event_vanue      : "required",
        event_vanue_addr : "required",
        event_tel: {
           minlength: 7,
           maxlength:7,
           number: true
        },
        event_title:{
           required: true,
           minlength: 8,
           maxlength:200,
        },
        event_phone :{
           required  : true,
           minlength: 10,
           maxlength:10,
           number: true
        },
        event_email : {
           required  : true,
           email: true
        },
        event_featured_img:{
           required  : true,
        },
        event_desc:{
          required : true,
          minlength : 10,
          maxlength : 6000
        },
        event_ticket_type:{
          required :true,
        },
        event_ticket_price:{
          required : true,
          number: true,
        },
        event_ticket_name:{
          required : true,
        }
      },
      // Specify validation error messages
      messages: {
        event_title: "event title required",
        event_start_date: "event start date required",
        event_end_date: "event end date required",
        event_city: "event city required",
        event_vanue_addr: "event vanue required",
        event_tel       : "telephone must be 7 digit",
        event_phone     : "mobile number must be ten digit",
        event_featured_img  :"event featured image required",
        event_desc          : "event description is requied min 10",
        event_ticket_type   : "event ticket type is required",
        event_ticket_price  : "event ticket price is required",
        event_ticket_name   : "event ticket name is required"
        
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });

  var eventBooking = $('.eventBookingStatus');

  eventBooking.on('click', function(e){
    e.preventDefault();
    if (confirm("Are you sure your want to change Booking status  ?")) {
    var url    = $(this).data('url');
    var id = $(this).data('id');
    var status = $(this).data('status');
    var data   = {id : id, status:status};
    $.ajax({
          'type'  : 'GET',
          'url'   : url,
          'data'  : data,

          success:function(response){
           infoDiv.text(response.message).addClass('alert alert-info').fadeOut(10000);
          },
          complete:function(){
           window.location.reload();
          }
    });
  }else{
    return false;
  }
  });
</script>
@endsection