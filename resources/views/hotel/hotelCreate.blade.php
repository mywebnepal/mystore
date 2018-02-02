<div class="row" style="padding-left: 1em;">
@php  $hotelData = getHotelUser()  @endphp
    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
        	{!! Form::text('name', $hotelData ? $hotelData->hotelName : null, ['class'=>'form-control no-border', 'placeholder'=>'Hotel name', 'required']) !!}
        </p>
    </div>

     <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            <?php $city = getCity();   ?>
            <select class="form-control no-border" name="cities_id">
                 <option value="{{ isset($editEvent) ? $editEvent->event_city_id : '' }}">{{ isset($editEvent) ? $editEvent->event_city_id : 'select city name' }}</option>
                 @if($city)
                      @foreach($city as $myCity)
                         <option value="{{ $myCity->id }}">{{ $myCity->name }}</option>
                      @endforeach
                 @endif
            </select>
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('address', $hotelData ? $hotelData->hotelAddress : null, ['class'=>'form-control no-border', 'placeholder'=>'Hotel address', 'required']) !!}
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('postal_code', null, ['class'=>'form-control no-border', 'placeholder'=>'postal code 44600', 'required']) !!}
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('tel_phone', $hotelData ? $hotelData->hotelTel : null, ['class'=>'form-control no-border', 'placeholder'=>'tel no 01 44321', 'required']) !!}
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('phone', $hotelData ? $hotelData->hotelPhone : null, ['class'=>'form-control no-border', 'placeholder'=>'mobile number 9807573751', 'required']) !!}
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('email', $hotelData ? $hotelData->hotelEmail : null, ['class'=>'form-control no-border', 'placeholder'=>'hotel email address', 'required']) !!}
        </p>
    </div>

    <div class="col-xs-12 col-sm-8 col-md-8">
        <p>
            {!! Form::text('vedio_link', null, ['class'=>'form-control no-border', 'placeholder'=>'hotel vedio link']) !!}
        </p>
    </div>

   <!--  <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            {!! Form::text('email', null, ['class'=>'form-control no-border', 'placeholder'=>'hotel email address abc@gmail.com', 'required']) !!}
        </p>
    </div> -->

    <!--  -->
     <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            <label>Hotel logo</label>
            <img src="{{ asset(isset($editEvent) ? $editEvent->event_featured_img : '')  }}" width="180" height="180" class="img img-thumbnail" id="hotel_logo">
            <input name="logo" type='file' onchange="readEventFeaturedImage(this, 'hotel_logo');" title="select event featured image" />
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            
            <label>hotel featured image 1</label>
            <img src="{{ asset(isset($editEvent) ? $editEvent->event_featured_img : '')  }}" width="180" height="180" class="img img-thumbnail" id="hotel_featured_img1">
            <input name="featured_img_1" type='file' onchange="readEventFeaturedImage(this, 'hotel_featured_img1');" title="select event featured image" />
        </p>
    </div>

    <div class="col-xs-6 col-sm-4 col-md-4">
        <p>
            <label>hotel featured image 2</label>
            <img src="{{ asset(isset($editEvent) ? $editEvent->event_featured_img : '')  }}" width="180" height="180" class="img img-thumbnail" id="hotel_featured_img2">
            <input name="featured_img_2" type='file' onchange="readEventFeaturedImage(this, 'hotel_featured_img2');" title="select event featured image" />
        </p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <p>
            {!! Form::textarea('desc', null, ['class'=>'form-control no-border', 'placeholder'=>'hotel short description', 'required']) !!}
        </p>
    </div>
    </div>