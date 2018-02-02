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
        if (selectVal == 'Free') {
          $('.divCreateTicket').hide();
          $('.eventTaxDiscount').hide();
          ticketDiv.html('');
        }
        if(selectVal == 'Ticket'){
          $('.divCreateTicket').show();
          $('.eventTaxDiscount').show();
        }
        
     });
});

/*displaying ticket box*/
var btnCreateTicket = $('.createEventTicket');
  var counter = 1;
  btnCreateTicket.on('click', function(e){
    counter = $(document).find('.event-ticket').length;
  e.preventDefault();
  if (counter < 3) {
     var ticket = "<div class='row event-ticket'><div class='col col-4'>Ticket name"+ "<input type='text' name='event_ticket_name[]'>" +"</div>"+"<div class='col col-4'>Ticket price"+ "<input type='text' name='event_ticket_price[]'></div>"+"<div class='col col-3'>Total ticket"+ "<input type='text' name='event_ticket_seat[]'></div><button type='button' name='remove'  class='btn btn-danger btn_remove btn-sm'>X</button></div>";
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

  $(function(){
    $("form[name='organizer']").validate({
     rules:{
      organizer_name : {
        minlength : 6,
        maxlength : 20
      },
      desc : {
        minlength : 10
      },
     },
     messages: {
       organizer_name : "Please choose your organizer name up to 6 character",
       desc           : "please enter organizer details at least 10 character"
     }

    });
  });

  $(function() {
    $("form[name='eventForm']").validate({
      rules: {
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
           required  : false,
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