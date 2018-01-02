<div class="widget-body no-padding">
		<header>Hotel Booking</header>
			<fieldset>					
				<div class="row">
					<section class="col col-4">
					    {!! Form::label('name', 'Name') !!}
					    <label class="input">
					    {!! Form::text('name', null, ['placeholder'=>'hotel name', 'class'=>'hotel_name']) !!}
					    </label>
					</section>
					<section class="col col-4">
						{!! Form::label('slug', 'Slug') !!}
                        <label class="input">
						{!! Form::text('slug', null, ['placeholder'=>'hotel slug', 'class'=>'hotel_slug']) !!}
						</label>
					</section>
					<section class="col col-4">
                        {!! Form::label('type', 'Type') !!}
                        <label class="input">
                        <!-- {!! Form::select('type', ['one_star'=>'One_star','two_star'=> 'Two_star', 'three_star'=>'Three_star', 'four_star'=>'Four_star', 'five_star'=>'Five_star'], null) !!} -->

                        <?php $room = getRoomType();   ?>
                        <select name="room_types_id">
                             <option value="">select room type</option>

                             @if($room)
                                 @foreach($room as $roomType)
                                    <option value="{{ $roomType->id }}">
                                    	{{ $roomType->name }}
                                    </option>
                                 @endforeach
                             @endif
                        </select>
						</label>
					</section>
				</div>
				<!--  -->

				<div class="row">
					<section class="col col-4">
					    {!! Form::label('city', 'City') !!}
                        <label class="input">
                        <?php $city = getCity();   ?>
                        <!-- {!! Form::select('city', ['kathmandu'=>'kathmandu','butwal'=>'butwal', 'pokhara'=>'pokhar'], null) !!} -->
                        <select class="hotel_city" name="cities_id">
                             <option value="">Select city</option>
                             @if($city)
                                  @foreach($city as $myCity)
                                     <option value="{{ $myCity->id }}">{{ $myCity->name }}</option>
                                  @endforeach
                             @endif
                        </select>
						</label>
					</section>
					<section class="col col-4">
						{!! Form::label('address', 'Address') !!}
                        <label class="input">
						{!! Form::text('address', null, ['placeholder'=>'hotel address', 'class'=>'hotel_address']) !!}
						</label>
					</section>
					<section class="col col-4">
                        {!! Form::label('phone', 'Phone') !!}
                        <label class="input">
						{!! Form::text('phone', null, ['placeholder'=>'hotel phone number', 'class'=>'hotel_phone']) !!}
						</label>
					</section>
				</div>
				<!--  -->

				<div class="row">
					<section class="col col-4">
					    {!! Form::label('price', 'Price') !!}
                        <label class="input">
                        {!! Form::text('price', null, ['placeholder'=>'hotel price', 'class'=>'hotel_price']) !!}
						</label>
					</section>

					<section class="col col-4">
						{!! Form::label('vedio_link', 'vedio_link') !!}
                        <label class="input">
						{!! Form::text('vedio_link', null, ['placeholder'=>'vedio_link', 'class'=>'hotel_vedio']) !!}
						</label>
					</section>
					<section class="col col-4">
                        {!! Form::label('hotel image', 'Hotel Image') !!}
                        <img src="" width="100" height="100" class="hotel_img">
                        <label class="input">
						{!! Form::file('img_path') !!}
						</label>
					</section>

					<section class="col col-4">
                        {!! Form::label('email', 'Email') !!}
                        <label class="input">
						{!! Form::text('email', null, ['placeholder'=>'hotel email', 'class'=>'hotel_email']) !!}
						</label>
					</section>
				</div>
				
				<section>
					<label class="label">Message</label>
					<label class="textarea">
					{!! Form::textarea('desc', null, ['class'=>'summernote', 'rows'=>'4']) !!}
					</label>
				</section>
			</fieldset>					
	</div>