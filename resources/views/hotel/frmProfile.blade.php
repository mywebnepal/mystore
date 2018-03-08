<div class="row">
 <div class="col-sm-2 pull-left">
 	<img src="{{ asset($hotelData->logo ? $hotelData->logo : '') }}" class="img img-responsive" width="100%">
 </div>
 	<div class="col-sm-10 pull-right" style="background: #DDD; width: 100%; max-height: 300px;">
 	<p class="pull-right">
 		 <button class="btn btn-success btn-sm">Update</button>
   </p>
      <div class="profileHotelName" style="margin: 7em 2em 0em 2em;">
     	<h4>{{ $hotelData->name ? $hotelData->name : '' }}</h4>
     </div>
   </div>
</div>
<div class="row" style="background: #3eb143;">
	<ul class="nav nav-pills" role="tablist">
	    <li class="nav-item">
	      <a class="nav-link active" data-toggle="pill" href="#home">Add room</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" data-toggle="pill" href="#booking">Booking</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" data-toggle="pill" href="#hotelServices">Add hotel services</a>
	    </li>

	    <li class="nav-item">
	      <a class="nav-link" data-toggle="pill" href="#hotelPolicy">Hotel Policy</a>
	    </li>
	  </ul>
</div>
<!--  -->
<div class="row">
	<div class="tab-content" style="background: #FFF; width: 100% !important;">
	    <div class="infoDiv"></div>
	    <div id="home" class="container tab-pane active"><br>
	      <h3>Add room</h3>
	      @if ($errors->any())
	          <div class="alert alert-danger">
	              <ul>
	                  @foreach ($errors->all() as $error)
	                      <li>{{ $error }}</li>
	                  @endforeach
	              </ul>
	          </div>
	      @endif	
	      @include('hotel.listRoom')
	      <p class="pull-right">
	      	<button class="btn btn-success btn-sm btnRoomForm">
	      	  <i class="fa fa-plus">Add Room</i>
	      	 </button>
	      </p>
	      <div class="row col-sm-12 frmHotelRoom" style="display: none;">
	          {!! Form::open(['route'=>'addHotelRoom', 'method'=>'post', 'name'=>'hotelRoomForm', 'files'=>true]) !!}
	          <p align="center"><h3>Create room..</h3></p><hr>
	      	      @include('hotel.frmRoom')
	      	      <p class="pull-right">
	      	        {!! Form::hidden('hotels_id', $hotelData->id) !!}
	      	      	{!! Form::submit('Add room', ['class'=>'btn btn-success']) !!}
	      	      </p>
	      	  {!! Form::close() !!}
	          
	      </div>
	    </div>
        
        <!-- booking panel -->
	    <div id="booking" class="container tab-pane fade"><br>
	        @include('hotel.roomOnBooking')
	    </div>

	    <div id="hotelServices" class="container tab-pane fade"><br>
	      <h3>Add hotel services</h3><br><hr>
	      @php  $hotelservice = isset($hotelData) ? $hotelData->hotelServices : 'null' @endphp
                {!! Form::open(['route'=>'addHotelServices', 'method'=>'post', 'name'=>'hotelServicesForm']) !!}
                    {{ Form::hidden('id', $hotelData->id ? $hotelData->id : '') }}
                    {{ Form::textarea('hotelServices', $hotelservice, ['class'=>'form-control summernote']) }}

                    <p class="pull-right">{{ Form::submit('save policy', ['class'=>'btn btn-success btn-sm']) }}</p>
  	      	   {!! Form::close() !!}
	      
	    </div>
        <!-- hotel policy -->
	    <div id="hotelPolicy" class="container tab-pane fade"><br>
	      <h3>Add hotel policy</h3><hr>
	      @php $hotelPolicyUpdate = $hotelData->hotelPolicy ?  $hotelData->hotelPolicy : 'null'   @endphp
	     	      	   
	   	      	   {!! Form::open(['route'=>'addHotelPolicy', 'method'=>'post', 'name'=>'hotelPolicyForm']) !!}
	                     {{ Form::hidden('id', $hotelData->id ? $hotelData->id : '') }}
	                     {{ Form::textarea('hotelPolicy', $hotelPolicyUpdate, ['class'=>'summernote']) }}

	                     <p class="pull-right">{{ Form::submit('save policy', ['class'=>'btn btn-success btn-sm']) }}</p>
	   	      	   {!! Form::close() !!}
	     
	      <div class="clearfix"></div>
	    </div>
	  </div>
</div>