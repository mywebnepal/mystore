<div class="widget-body no-padding">
		<header>
		   <h3>Create Event:- 
		   <small class="text-success">@if($usr->organizer_name){{ $usr->organizer_name }} @endif</small>
		   </h3>
		 </header>
			<fieldset>					
				<div class="row">
					<section class="col col-4">
					    {!! Form::label('name', 'Name') !!}
					    <label class="input">
					    {!! Form::text('event_title', null, ['placeholder'=>'Please enter event title', 'class'=>'event_title']) !!}
					    </label>
					</section>
					<section class="col col-4">
						{!! Form::label('event_start_date', 'Event start date') !!}
                        <label class="input">
						{!! Form::date('event_start_date', null, ['placeholder'=>'event start date', 'class'=>'event_start_date']) !!}
						</label>
					</section>

					<section class="col col-4">
						{!! Form::label('event_start_date', 'Event end date') !!}
                        <label class="input">
						{!! Form::date('event_end_date', null, ['placeholder'=>'event end date', 'class'=>'event_end_date']) !!}
						</label>
					</section>
				</div>
				<!--  -->
				<div class="row">
				    <section class="col col-4">
					    {!! Form::label('event_city', 'Select event city') !!}
                        <label class="input">
                        <?php $city = getCity();   ?>
                        <select class="hotel_city form-control" name="event_city">
                             <option value="">Select event city</option>
                             @if($city)
                                  @foreach($city as $myCity)
                                     <option value="{{ $myCity->id }}">{{ $myCity->name }}</option>
                                  @endforeach
                             @endif
                        </select>
						</label>
					</section>

					<section class="col col-4">
						{!! Form::label('event_vanue_addr', 'Event Vanue') !!}
                        <label class="input">
						{!! Form::text('event_vanue_addr', null, ['placeholder'=>'event vanue address', 'class'=>'event_vanue_addr']) !!}
						</label>
					</section>

					<section class="col col-4">
					    {!! Form::label('event_postal_code', 'Postal Code') !!}
					    <label class="input">
					    {!! Form::text('event_postal_code', null, ['placeholder'=>'event postal code', 'class'=>'event_postal_code']) !!}
					    </label>
					</section>
				</div>
				<!--  -->
				<div class="row">
				     <section class="col col-4">
					    {!! Form::label('event_tel', 'Telephone no') !!}
					    <label class="input">
					    {!! Form::text('event_tel', null, ['placeholder'=>'event contact  tel no.', 'class'=>'event_tel']) !!}
					    </label>
					</section>

				    <section class="col col-4">
						{!! Form::label('event_phone', 'Mobile no') !!}
                        <label class="input">
						{!! Form::text('event_phone', null, ['placeholder'=>'Mobile number up to 10 digit', 'class'=>'event_phone']) !!}
						</label>
					</section>

					<section class="col col-4">
						{!! Form::label('event_email', 'Event Email') !!}
                        <label class="input">
						{!! Form::text('event_email', null, ['placeholder'=>'event email address', 'class'=>'event_email']) !!}
						</label>
					</section>

				</div>
				<div class="row">
				    <section class="col col-4">
						<img id="event_image" class="img img-thumbnail" src="http://placehold.it/180" alt="event featured image"/>
						<input name="event_featured_img" type='file' onchange="readEventFeaturedImage(this);" title="select event featured image" />
					</section>

					<section class="col col-8">
					    {!! Form::label('event_desc', 'Event short description') !!}
					    <label class="input">
					    {!! Form::textarea('event_desc', null, ['placeholder'=>'event short description']) !!}
					    </label>
					</section>

                     <section class="col col-4">
                        {!! Form::label('event_type', 'Select event type') !!}
					    <select class="form-control event_type" name="event_ticket_type">
					    	<option class="">select event type</option>
					    	<option value="onFree">free event</option>
					    	<option value="onTicket">ticket event</option>
					    </select>
					</section>

					 <section class="col col-4 eventTaxDiscount" style="display: none;">
					    {!! Form::label('event_capacity', 'Tax percentage') !!}
					    <label class="input">
					       <input type="range" name="event_tax" id="eventTax" value="0" min="0" max="100" class="text-success" step="2">
						    <span class="event_tax_rangeValue"></span>
					    </label>
					    {!! Form::label('event_discount', 'Discount percentage') !!}
					    <label class="input">
					       <input type="range" name="event_discount" id="eventDiscount" value="0" min="0" max="100" class="text-success" step="2">
						    <span class="event_discount_rangeValue"></span>
					    </label>
					</section>
					<!--  -->
				</div>
				<div class="row">
					
				</div>
			</fieldset>					
	</div>