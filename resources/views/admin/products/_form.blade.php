  <div class="col-sm-4 col-md-4">
  <h4>Product Details</h4><hr>
  <div class="form-group col-sm-12">
        {{ Form::text('name', null, array('placeholder'=>'Product name', 'class'=>'form-control', 'title'=>'product name')) }}
   </div>

   <div class="form-group col-sm-12">
        {{ Form::text('product_slug', null, array('placeholder'=>'Product slug', 'class'=>'form-control', 'title'=>'product slug')) }}
   </div>

   <div class="form-group col-sm-12">
        <select class="form-control catVal" name="categories_id" title="category name">
            <option value="<?php echo isset($products) ? $products->id : '0'   ?>">
              <?php  echo isset($products) ? $products->categories->name : 'Select product category'   ?>
            </option>
            @if(isset($catId))
            @foreach($catId as $cat)
               <option value="{{$cat->id}}">{{ $cat->name }}</option>
            @endforeach
            @endif
         </select>
   </div>

   <div class="form-group col-sm-12 divSubCat" style="display: none;">
     <select name="sub_categories_id" class="form-control subCatoption" title="subcategory name">
          <option value="">select subcategory</option>
         
     </select>
   </div>

   <div class="form-group col-sm-12">
        {{ Form::text('author_manufactural_name', null, array('placeholder'=>'Author or manufactural name', 'class'=>'form-control', 'title'=>'author or manufactural name')) }}
   </div>

   <div class="form-group col-sm-12">
        {{ Form::text('size', null, array('placeholder'=>'Product size', 'class'=>'form-control', 'title'=>'size')) }}
   </div>

  <div class="form-group col-sm-12">
        {{ Form::text('price', null, array('placeholder'=>'Price', 'class'=>'form-control', 'title'=>'price')) }}
   </div>

    <div class="form-group col-sm-12">
        <select name="discount" class="form-control" title="product discount">
            <option value="0">Discount 0%</option>
            <option value="5%">Discount 5%</option>
            <option value="10%">Discount 10</option>
            <option value="15%">Discount 15%</option>
        </select>
   </div>

    <div class="form-group col-sm-12">
        {{ Form::number('quantity', null, array('placeholder'=>'quantity number', 'class'=>'form-control', 'title'=>'quantity')) }}
   </div>

  <div class="form-group col-sm-12">
      @if(isset($products))
         <img src="{{ asset($products->featured_img_lg) }}" width="200" height="150">
      @endif
          {{ Form::label('featured_img', 'Select Featured Image') }}
          {{ Form::file('featured_img', null, array( 'class'=>'form-control')) }}
  </div>

  <div class="form-group col-sm-12">
   		<!-- {{ Form::radio('status', '1', true) }} -->
      <div class="col-sm-6">
        <span>Publish</span>
        <input type="radio" name="status" value="1"  class="form-control" 
        <?php echo isset($products) && $products->status == 1 ? 'checked' : 'checked' ?>>
      
      </div>
       <div class="col-sm-6">
          <span>Un-publish</span>
          <input type="radio" name="status" value="0" class="form-control"
          <?php  echo isset($products) && $products->status == 0 ? 'checked' : ''   ?>
          >
         
       </div>
      

         <!-- {{ Form::radio('status', '0') }} -->
          
   </div>
  </div>
	    <div class="col-sm-4" style="overflow-x: hidden; display: block;">
	        <h4>Product Description</h4><hr>
	    	<div class="form-group col-sm-12">
            {{ Form::textarea('description', null, array('placeholder'=>'Product short description', 'class'=>'form-control', 'rows'=>'7', 'cols'=>'35')) }}
        </div>

        <div class="form-group col-sm-12">
        {{ Form::text('sku', null, array('placeholder'=>'SKU number', 'class'=>'form-control', 'id'=>'sku_number', 'title'=>'Sku number')) }}
   </div>

        <div class="form-group col-sm-12">
            @if(isset($products))
               <img src="{{ asset($products->product_image) }}" width="200" height="150">
            @endif
               {{ Form::label('img_path2', 'Select First Image') }}

               {{ Form::file('product_image', null, array( 'class'=>'form-control')) }}
        </div>
	    </div>
	    <div class="col-sm-4">
	        <h4>Product Featured List</h4><hr>

          <div class="form-group col-sm-12">
          <select class="form-control" name="brands_id" title="brand name">
             <option value="<?php echo isset($products) ? $products->brand_id : '0';    ?>">
                   <?php  echo isset($products) ? $products->brands->name : 'select brand name';   ?>
             </option>
             @if($brand)
                 @foreach($brand as $brands)
                     <option value="{{ $brands->id }}">{{ $brands->name }}</option>
                 @endforeach

                 @else
                 <h4>Oops there is no band name</h4>
             @endif
          </select>
               <!-- {{ Form::text('brand_name', null, array('placeholder'=>'Brand Name', 'class'=>'form-control')) }} -->
          </div>
	    	<div class="form-group col-sm-12">
            {{ Form::textarea('featured', null, array('placeholder'=>'enter product featured', 'class'=>'form-control summernote', 'rows'=>'7', 'cols'=>'35')) }}
        </div>
      <div class="form-group col-sm-12">
        {{ Form::text('vedio_link', null, array('placeholder'=>'Vedio link', 'class'=>'form-control', 'title'=>'product vedio link')) }}
   </div>
      </div>
