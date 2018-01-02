<div class="widget-body no-padding">
		<header>City Details</header>
			<fieldset>					
				<div class="row">
					<section class="col col-4">
					    {!! Form::label('name', 'Name') !!}
					    <label class="input">
					    {!! Form::text('name', null, ['placeholder'=>'city name', 'class'=>'room_name']) !!}
					    </label>
					</section>
					<section class="col col-4">
						{!! Form::label('slug', 'Slug') !!}
                        <label class="input">
						{!! Form::text('slug', null, ['placeholder'=>'city slug', 'class'=>'room_slug']) !!}
						</label>
					</section>
				</div>
				<section>
					<label class="label">Message</label>
					<label class="textarea">
					{!! Form::textarea('desc', null, ['class'=>'room_desc', 'rows'=>'4']) !!}
					</label>
				</section>
			</fieldset>					
	</div>