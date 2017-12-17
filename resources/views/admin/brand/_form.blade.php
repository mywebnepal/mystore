<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::text('name', null, array('placeholder'=>'Brand name', 'class'=>'form-control')) }}
	</div>
</div>

<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::text('slug', null, array('placeholder'=>'Brand slug', 'class'=>'form-control')) }}
	</div>
</div>
<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::file('brand_logo', null, array('placeholder'=>'logo', 'class'=>'form-control')) }}
	</div>
</div>