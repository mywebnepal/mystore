@extends('master.layout')
@section('content')
<div class="row">
	<div class="col-sm-12 well">
        <div class="row">
        	<p class="pull-right">
        	   <button class="btn btn-primary btnProduct">Add new Product</button>
        	</p>
        </div>
        @if(Session::has('message'))
            <div class="row errMsg" style="margin:1em;">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! Session::get('message') !!}
                </div>
            </div>
        @endif
		<div role="content" style="display: none;" class="addProductForm">
					<div class="widget-body">
                         <div class="row" style="border-bottom: 1em; background: #2196F3; padding: 1em;">
                         	<div class="col-sm-12" style="background:#F5F5F5; ">
                         	   <fieldset>
                         	   	<legend>Add Product</legend>
                         	   {{ Form::open(['route'=>'sisadmin.products.store', 'method' => 'post', 'class'=>'form-inline', 'files'=>true]) }}
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
                                        {{ Form::text('quantity', null, array('placeholder'=>'quantity number', 'class'=>'form-control')) }}
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

                                            {{ Form::file('img_path2', null, array( 'class'=>'form-control')) }}
                                            
                                        </div>

                                        <div class="form-group col-sm-12">
                                            {{ Form::label('img_path3', 'Select second Image') }}

                                            {{ Form::file('img_path3', null, array( 'class'=>'form-control')) }}
                                            
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

                         	  {{ Form::close() }}
                         	   </fieldset>
                         		
                         	</div>
                         </div>
					

					</div>
					<!-- end widget content -->

		</div>

		<div class="row">
			<div role="content">
					<div class="widget-body">
                           <table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dt_basic_info" style="width: 100%;" width="100%">
							<thead>			                
								<tr role="row">
								<th>sn</th>
								<th>Name</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Quantity</th>
								<th>Status</th>
								<th>Action</th>
							</thead>
							<tbody>
							<tr role="row" class="odd">
									<td class="sorting_1">1</td>
									<td class=" expand"><span class="responsiveExpander"></span>Jennifer</td>
									<td>1-342-463-8341</td>
									<td>Et Rutrum Non Associates</td>
									<td>35728</td>
									<td>Fogo</td>
									<td>03/04/14</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">2</td>
									<td class=" expand"><span class="responsiveExpander"></span>Clark</td>
									<td>1-516-859-1120</td>
									<td>Nam Ac Inc.</td>
									<td>7162</td>
									<td>Machelen</td>
									<td>03/23/13</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">3</td>
									<td class=" expand"><span class="responsiveExpander"></span>Brendan</td>
									<td>1-724-406-2487</td>
									<td>Enim Commodo Limited</td>
									<td>98611</td>
									<td>Norman</td>
									<td>02/13/14</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">4</td>
									<td class=" expand"><span class="responsiveExpander"></span>Warren</td>
									<td>1-412-485-9725</td>
									<td>Odio Etiam Institute</td>
									<td>10312</td>
									<td>Sautin</td>
									<td>01/01/13</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">5</td>
									<td class=" expand"><span class="responsiveExpander"></span>Rajah</td>
									<td>1-849-642-8777</td>
									<td>Neque Ltd</td>
									<td>29131</td>
									<td>Glovertown</td>
									<td>02/16/13</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">6</td>
									<td class=" expand"><span class="responsiveExpander"></span>Demetrius</td>
									<td>1-470-329-9627</td>
									<td>Euismod In Ltd</td>
									<td>1883</td>
									<td>Kapolei</td>
									<td>03/15/13</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">7</td>
									<td class=" expand"><span class="responsiveExpander"></span>Keefe</td>
									<td>1-188-191-2346</td>
									<td>Molestie Industries</td>
									<td>2211BM</td>
									<td>Modena</td>
									<td>07/08/13</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">8</td>
									<td class=" expand"><span class="responsiveExpander"></span>Leila</td>
									<td>1-663-655-8904</td>
									<td>Est LLC</td>
									<td>75286</td>
									<td>Hondelange</td>
									<td>12/09/12</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">9</td>
									<td class=" expand"><span class="responsiveExpander"></span>Fritz</td>
									<td>1-598-234-7837</td>
									<td>Et Ultrices Posuere Institute</td>
									<td>2324</td>
									<td>Monte San Pietrangeli</td>
									<td>12/29/12</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1">10</td>
									<td class=" expand"><span class="responsiveExpander"></span>Cassady</td>
									<td>1-212-965-8381</td>
									<td>Vitae Erat Vel Company</td>
									<td>5898</td>
									<td>Huntly</td>
									<td>10/07/13</td>
								</tr>

								<tr role="row" class="even">
									<td class="sorting_1">10</td>
									<td class=" expand"><span class="responsiveExpander"></span>dpesh</td>
									<td>1-212-965-8381</td>
									<td>Vitae Erat Vel Company</td>
									<td>5898</td>
									<td>Huntly</td>
									<td>10/07/13</td>
								</tr>

								<tr role="row" class="even">
									<td class="sorting_1">11</td>
									<td class=" expand"><span class="responsiveExpander"></span>banjade</td>
									<td>1-212-965-8381</td>
									<td>Vitae Erat Vel Company</td>
									<td>5898</td>
									<td>Huntly</td>
									<td>10/07/13</td>
								</tr>

								<tr role="row" class="even">
									<td class="sorting_1">12</td>
									<td class=" expand"><span class="responsiveExpander"></span>bangain</td>
									<td>1-212-965-8381</td>
									<td>Vitae Erat Vel Company</td>
									<td>5898</td>
									<td>Huntly</td>
									<td>10/07/13</td>
								</tr>

							</tbody>
						</table>

					<!-- end widget content -->

				</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	var btnProduct        = $('.btnProduct');
	var addProductForm    = $('.addProductForm');
	btnProduct.on('click', function(){
    addProductForm.toggle();
	});
</script>
@endsection