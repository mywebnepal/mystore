 <fieldset>
    <div class="form-group col-sm-4">
        {{ Form::text('name', null, array('placeholder'=>'Category Name', 'class'=>'form-control cat_name')) }}
    </div>
    <div class="form-group col-sm-4">
        {{ Form::text('slug', null, array('placeholder'=>'category slug', 'class'=>'form-control cat_slug')) }}
    </div>

    <div class="form-group col-sm-4">
       {{ Form::text('description', null, array('placeholder'=>'Short description', 'class'=>'form-control cat_desc')) }}
   </div>
</fieldset>