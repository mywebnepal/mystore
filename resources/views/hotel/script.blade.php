<script type="text/javascript">
    $('.btnRoomForm').on('click', function(){
     $('.frmHotelRoom').toggle();
    });



    var btnAddHotelPolicy = $('.btnAddHotelPolicy');
    btnAddHotelPolicy.on('click', function(){
    $('.frmHotelPolicy').toggle();
    });



    /**/
    $('.addPolicyTextBox').on('click', function(e){
     e.preventDefault();
     var txtPolicy = "<div class='row dynamictextareaField'><div class='col-sm-11'><input type='textarea' class='form-control no-border' name='hotelPolicy[]' placeholder='add another hotel policy' rows='7'></div><button class='btn btn-danger deleteDynamicField'>Remove</button></div>";
     $('.insertHotelPolicyText').append(txtPolicy);

    });
    /*removing code*/
   $(document).on('click', '.deleteDynamicField', function(){  
           $(this).parent().remove();
      });
    $(function() {
	  $("form[name='hotelPolicyForm']").validate({
	    rules: {
	      'hotelPolicy[]': {
	      	 required : true,
	         minlength: 1
	      }
	    },
	    // Specify validation error messages
	    messages: {
	      roomName: "please enter hotel policy here"
	    },
	    submitHandler: function(e) {
	    	e.preventDefault();
	    	alert('workign as aspected');
	      $.ajax({
              'type' : "post",
               'url'  : $this.attr('action'),
              success:function(response){
                console.log(response.message);
                if (response.success == true) {
                   infoDiv.addClass('alert alert-success').append(response.message).fadeOut(5000);
                   $(node).closest('tr').remove();
                }else{
                  infoDiv.addClass('alert alert-danger').append(response.message).fadeOut(5000);
                }
              }
        });
	      return false;
	    }
	  });
	  });
    /**/
    $(function() {
	  $("form[name='hotelRoomForm']").validate({
	    rules: {
	      roomName: {
	         minlength: 7,
	         maxlength:50
	      },
	      bedName:{
	         required: true
	      },
	      fitPerson :{
	         required  : true
	      },
	      roomPrice :{
	         required  : true,
	         number: true
	      },
	      roomDesc : {
	         required  : true,
	         minlength : 7,
	         maxlength : 6000
	      },
	      roomImg1 :{
	      	required :true
	      }
	    },
	    // Specify validation error messages
	    messages: {
	      roomName: "room name greater than 7 character",
	      bedName: "please select bed",
	      fitPerson: "please select fit person in this room",
	      roomPrice: "room price",
	      roomDesc: "room description at least more than 7 character"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
	});

	$(function() {
	  $("form[name='hotelUserForm']").validate({
	    rules: {
	      hotelName: {
	         minlength: 7,
	         maxlength:50
	      },
	      hotelAddress:{
	         required: true,
	         minlength: 8,
	         maxlength:60,
	      },
	      hotelTel :{
	         required  : true,
	         minlength: 7,
	         maxlength:7,
	         number: true
	      },
	      hotelPhone :{
	         required  : true,
	         minlength: 10,
	         maxlength:10,
	         number: true
	      },
	      hotelEmail : {
	         required  : true,
	         email: true
	      }
	    },
	    // Specify validation error messages
	    messages: {
	      hotelName: "hotel name must be greater than 7 character",
	      hotelAddress: "hotel address ",
	      hotelTel: "valid telphone number with seven digit",
	      hotelPhone: "valid phone number with 10 digit",
	      hotelEmail: "valid email address"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
	});

function readEventFeaturedImage(input, divId){
	var divId = divId;
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#'+divId)
              .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
  }
  /*hotel form validation*/
  $(function() {
	  $("form[name='frmCreateHotel']").validate({
	    rules: {
	      name: {
	         minlength: 7,
	         maxlength:50
	      },
	      cities_id:{
	         required: true
	      },
	      address:{
	      	required : true,
	      	minlength : 10,
	      	maxlength : 100
	      },
	      tel_phone :{
	         required  : true,
	         minlength: 7,
	         maxlength:7,
	         number: true
	      },
	      phone :{
	         required  : true,
	         minlength: 10,
	         maxlength:10,
	         number: true
	      },
	      featured_img_1:{
	      	required  : true
	      },
	      email : {
	         required  : true,
	         email: true
	      },
	      logo : {
	      	required  : true
	      }
	    },
	    // Specify validation error messages
	    messages: {
	      name: "hotel name must be greater than 7 character",
	      cities_id : "select cities",
	      address: "hotel address ",
	      tel_phone: "valid telphone number with seven digit",
	      phone: "valid phone number with 10 digit",
	      email: "valid email address",
	      logo : "select image",
	      featured_img_1 : "select featured image"
	    },
	    submitHandler: function(form) {
	      form.submit();
	    }
	  });
	});
</script>