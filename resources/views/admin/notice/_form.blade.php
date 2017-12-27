<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::text('name', null, array('placeholder'=>'Notice Title', 'class'=>'form-control brand_name', 'title'=> 'notice Board title')) }}
	</div>
</div>

<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::text('slug', null, array('placeholder'=>'notice Board slug', 'class'=>'form-control brand_slug', 'title'=> 'notice board slug')) }}
	</div>
</div>

<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::textarea('desc', null, array('placeholder'=>'short desc of notice board', 'class'=>'form-control brand_slug', 'title'=> 'notice description')) }}
	</div>
</div>

<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::file('img_path', ['class'=>'form-control']) }}
	</div>
</div>
<div class="col-sm-4">
	<div class="form-group col-sm-12">
	    {{ Form::date('end_date', null, ['placeholder'=>'notice board end date', 'class'=>'form-control notice_endDate']) }}
	</div>
</div>