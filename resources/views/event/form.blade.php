<div class="widget-body no-padding">
		<header>
		   <h3>Create Event:- 
		   @php $usr = getOrganizerName()  @endphp
		   <small class="text-success">@if($usr->organizer_name){{ $usr->organizer_name }} @endif</small>
		   </h3>
		 </header>
			<fieldset>					
				<div class="row">
					<section class="col-xs-6 col-sm-4 col-md-4">
					    {!! Form::label('name', 'Name') !!}
					    <label class="input">
					    {!! Form::text('event_title', null, ['placeholder'=>'Please enter event title', 'class'=>'form-control event_title']) !!}
					    </label>
					</section>
					<section class="col-xs-6 col-sm-4 col-md-4">
						{!! Form::label('event_start_date', 'Event start date') !!}
                        <label class="input">
						{!! Form::date('event_start_date', null, ['placeholder'=>'event start date', 'class'=>'event_start_date form-control']) !!}
						</label>
					</section>

					<section class="col-xs-6 col-sm-4 col-md-4">
						{!! Form::label('event_start_date', 'Event end date') !!}
                        <label class="input">
						{!! Form::date('event_end_date', null, ['placeholder'=>'event end date', 'class'=>'event_end_date']) !!}
						</label>
					</section>
				</div>
				<!--  -->
				<div class="row">
				    <section class="col-xs-6 col-sm-4 col-md-4">
					    {!! Form::label('event_city', 'Select event city') !!}
                        <label class="input">
                        <?php $city = getCity();   ?>
                        <select class="hotel_city form-control" name="event_city">
                             <option value="{{ isset($editEvent) ? $editEvent->event_city_id : '' }}">{{ isset($editEvent) ? $editEvent->event_city_id : 'select city name' }}</option>
                             @if($city)
                                  @foreach($city as $myCity)
                                     <option value="{{ $myCity->id }}">{{ $myCity->name }}</option>
                                  @endforeach
                             @endif
                        </select>
						</label>
					</section>

					<section class="col-xs-6 col-sm-4 col-md-4">
						{!! Form::label('event_vanue_addr', 'Event Vanue') !!}
                        <label class="input">
						{!! Form::text('event_vanue_addr', null, ['placeholder'=>'event vanue address', 'class'=>'form-control event_vanue_addr']) !!}
						</label>
					</section>

					<section class="col-xs-6 col-sm-4 col-md-4">
					    {!! Form::label('event_postal_code', 'Postal Code') !!}
					    <label class="input">
					    {!! Form::text('event_postal_code', null, ['placeholder'=>'event postal code', 'class'=>'form-control event_postal_code']) !!}
					    </label>
					</section>
				</div>
				<!--  -->
				<div class="row">
				     <section class="col-xs-6 col-sm-4 col-md-4">
					    {!! Form::label('event_tel', 'Telephone no') !!}
					    <label class="input">
					    {!! Form::text('event_tel', null, ['placeholder'=>'event contact  tel no.', 'class'=>'form-control event_tel']) !!}
					    </label>
					</section>

				    <section class="col-xs-6 col-sm-4 col-md-4">
						{!! Form::label('event_phone', 'Mobile no') !!}
                        <label class="input">
						{!! Form::text('event_phone', null, ['placeholder'=>'Mobile number up to 10 digit', 'class'=>'form-control event_phone']) !!}
						</label>
					</section>

					<section class="col-xs-6 col-sm-4 col-md-4">
						{!! Form::label('event_email', 'Event Email') !!}
                        <label class="input">
						{!! Form::text('event_email', null, ['placeholder'=>'event email address', 'class'=>'form-control event_email']) !!}
						</label>
					</section>
				</div>

				<div class="row">
				    <section class="col-xs-12 col-sm-4 col-md-4">
				   
				    <img src="{{ asset(isset($editEvent) ? $editEvent->event_featured_img : '')  }}" width="180" height="180" class="img img-thumbnail">

				    <input name="event_featured_img" type='file' onchange="readEventFeaturedImage(this);" title="select event featured image" />
					</section>

					<section class="col-xs-12 col-sm-8 col-md-8">
					    {!! Form::label('event_desc', 'Event short description') !!}
					    <label class="input">
					    {!! Form::textarea('event_desc', null, ['placeholder'=>'event short description', 'class'=>'form-control']) !!}
					    </label>
					</section>

                     <section class="col-xs-6 col-sm-4 col-md-4">
                        {!! Form::label('event_type', 'Select event type') !!}
					    <select class="form-control event_type" name="event_ticket_type">
					    	<option class="">select event type</option>
					    	<option value="Free" {{ (isset($editEvent->event_ticket_type) && $editEvent->event_ticket_type = 'Free')? ' selected' : ''}}>free event</option>

					    	<option value="Ticket" {{ (isset($editEvent->event_ticket_type) && $editEvent->event_ticket_type = 'Ticket')? ' selected' : ''}}>ticket event</option>
					    </select>
					</section>

					@php
						$show = "display:none;";
						if ((isset($editEvent->event_ticket_type) && $editEvent->event_ticket_type = 'Ticket')) {
							$show = "display:block;";
						}
					@endphp
					 <section class="col-xs-6 col-sm-4 col-md-4 eventTaxDiscount" style="{{ $show }}">
					    {!! Form::label('event_capacity', 'Tax percentage') !!}
					    <label class="input">
					       <input type="range" name="event_tax" id="eventTax" value="{{ isset($editEvent) ? $editEvent->event_tax : 0 }}" min="0" max="100" class="text-success" step="2">
						    <span class="event_tax_rangeValue"></span>
					    </label>
					    
					</section>
					<!--  -->
				</div>
			</fieldset>					
	</div>