<div class="widget-body no-padding">
		<header>Create Home Slider</header>
			<fieldset>					
				<div class="row">
					<section class="col col-4">
					    {!! Form::label('img_caption', 'SLider name') !!}
					    <label class="input">
					    {!! Form::text('img_caption', null, ['placeholder'=>'Slider name caption', 'class'=>'slider_img_caption', 'required']) !!}
					    </label>
					</section>

					<section class="col col-4">
					    {!! Form::label('call_action', 'Call Action button') !!}
					    <label class="input">
					    {!! Form::text('call_action', null, ['placeholder'=>'give to redirect action', 'class'=>'slider_call_action']) !!}
					    </label>
					</section>

                    <section class="col col-4">
                    	{!! Form::label('img_path', 'Select slider') !!}
                    	{!! Form::file('img_path') !!}

                    </section>
				</div>
			</fieldset>					
	</div>