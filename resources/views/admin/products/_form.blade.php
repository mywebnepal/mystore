
                     	   	    <div class="col-sm-4 col-md-4">
                                  <h4>Product Details</h4><hr>
                 	   	    	  <div class="form-group col-sm-12">
                                        {{ Form::text('name', null, array('placeholder'=>'Product name', 'class'=>'form-control')) }}
                                   </div>
                      
                                   <div class="form-group col-sm-12">
                                        <select class="form-control" name="categories_id">
                                            <option value="0">Choose Category</option>
                                            @if($catId)
                                            @foreach($catId as $cat)
                                            <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                            @endforeach
                                            @endif
                                         </select>
                                   </div>

                                   <div class="form-group col-sm-12">
                                        {{ Form::text('brand_name', null, array('placeholder'=>'Brand Name', 'class'=>'form-control')) }}
                                   </div>

                                   <div class="form-group col-sm-12">
                                        {{ Form::text('size', null, array('placeholder'=>'Product size', 'class'=>'form-control')) }}
                                   </div>

                                  <div class="form-group col-sm-12">
                                        {{ Form::text('price', null, array('placeholder'=>'Price', 'class'=>'form-control')) }}
                                   </div>

                                    <div class="form-group col-sm-12">
                                        <select name="discount" class="form-control">
                                            <option value="0">Discount 0%</option>
                                            <option value="5%">Discount 5%</option>
                                            <option value="10%">Discount 10</option>
                                            <option value="15%">Discount 15%</option>
                                        </select>
                                   </div>

                                    <div class="form-group col-sm-12">
                                        {{ Form::number('quantity', null, array('placeholder'=>'quantity number', 'class'=>'form-control')) }}
                                   </div>
                                  
                                  <div class="form-group col-sm-12">
                                        {{ Form::text('vedio_link', null, array('placeholder'=>'Vedio link', 'class'=>'form-control')) }}
                                   </div>
                                  <div class="form-group col-sm-12">
                                      {{ Form::label('featured_img', 'Select Featured Image') }}

                                      {{ Form::file('featured_img', null, array( 'class'=>'form-control')) }}
                                      
                                  </div>

                                  <div class="form-group col-sm-12">
                                   	<label>Publish
                                   		{{ Form::radio('status', '1', true) }}
                                   	</label>

                                   	<label>Unpublish
                                         {{ Form::radio('status', '0') }}
                                   	</label>
                                   	
                                   </div>


                     	   	    </div>
                         	   	    <div class="col-sm-4" style="overflow-x: hidden; display: block;">
                         	   	        <h4>Product Description</h4><hr>
                         	   	    	<div class="form-group col-sm-12">
                                            {{ Form::textarea('description', null, array('placeholder'=>'Product short description', 'class'=>'form-control', 'rows'=>'7', 'cols'=>'35')) }}
                                        </div>

                                        <div class="form-group col-sm-12">
                                        {{ Form::text('sku', null, array('placeholder'=>'SKU number', 'class'=>'form-control', 'id'=>'sku_number')) }}
                                   </div>

                                        <div class="form-group col-sm-12">
                                            {{ Form::label('img_path2', 'Select First Image') }}

                                            {{ Form::file('product_image', null, array( 'class'=>'form-control')) }}
                                            
                                        </div>
                         	   	    </div>
                         	   	    <div class="col-sm-4">
                         	   	        <h4>Product Featured List</h4><hr>
                         	   	    	<div class="form-group col-sm-12">
                                            later on json working
                                        </div>
                         	   	    </div>

                                        <div class="form-group col-sm-12 ">
                                         <p class="pull-right">
                                         {{ Form::submit('Submit Product', ['class'=>'btn btn-primary']) }}
                                         </p>
                                        </div>