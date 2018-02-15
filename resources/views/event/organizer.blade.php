<div class="row" style="padding-left: 1em;">
    <div class="col-sm-12">
    <p>
    	{!! Form::text('organizer_name', null, ['class'=>'form-control no-border', 'placeholder'=>'please enter your orginazer name', 'required']) !!}
    </p>

    <p>
    	{!! Form::textarea('desc', null, ['class'=>'form-control no-border', 'placeholder'=>'please enter short description', 'required']) !!}
    </p>
    	
    </div>
    <div class="col-sm-3 pull-right">
    	{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    </div>
</div>