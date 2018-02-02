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
	      <div class="clearfix"></div>
	      
	    </div>
	    <!--  -->
	    <div id="hotelServices" class="container tab-pane fade"><br>
	      <h3>Booking</h3>
	      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	    <div id="hotelServices" class="container tab-pane fade"><br>
	      <h3>Add hotel services</h3>
	      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	    </div>

	    <div id="hotelPolicy" class="container tab-pane fade"><br>
	      <h3>Add hotel policy</h3><hr>
	      @include('hotel.hotelPolicyList')
	      <p>
	        <button class="btn btn-success btn-sm pull-right btnAddHotelPolicy">
	      	   <i class="fa fa-plus">Add Hotel policy</i>
	      </button></p>
	      <div class="clearfix"></div>
	      <div class="col-sm-12 frmHotelPolicy" style="display: none;">
               <h3><small>Add hotel policy</small></h3><hr>
	      	   {!! Form::open(['route'=>'addHotelPolicy', 'method'=>'post', 'name'=>'hotelPolicyForm']) !!}
	      	      <div class="col-sm-12">
                  	     @include('hotel.hotelPolicyTextForm')
                  	     {!! Form::hidden('hotel_id', $hotelData->id ? $hotelData->id : '') !!}
                  	     <div class="insertHotelPolicyText"></div><br>
                  	    <p align="right">
                  	    	<button class="btn btn-default btn-sm addPolicyTextBox">Add more policy</button>
                  	    </p>
                  </div>
                  {!! Form::submit('Add hotel Policy', ['class'=>'btn btn-success']) !!}
	      	   {!! Form::close() !!}
	      </div>
	      
	    </div>
	  </div>
</div>
