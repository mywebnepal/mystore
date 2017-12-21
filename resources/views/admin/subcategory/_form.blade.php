 <fieldset>
    <div class="form-group col-sm-4">
	    <select name="categories_id" class="form-control">
	    	<option value="">Select Category</option>
	    	@if(isset($cat))
	    	@foreach($cat as $category)
               <option value="<?php echo $category->id   ?>">
                  	<?php  echo $category->name;   ?>
               </option>
	    	@endforeach
	    	@endif
	    </select>
	</div>
    <div class="form-group col-sm-4">
        {{ Form::text('name', null, array('placeholder'=>'subcategory name', 'class'=>'form-control cat_name')) }}
    </div>
    <div class="form-group col-sm-4">
        {{ Form::text('slug', null, array('placeholder'=>'subcategory slug', 'class'=>'form-control cat_slug')) }}
    </div>
</fieldset>