@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
        @if(Session::has('message'))
            <div class="row errMsg" style="margin:1em;">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! Session::get('message') !!}
                </div>
            </div>
        @endif
  <div class="col-sm-12 well">
        <div class="row">
          <p class="pull-right">
             <button class="btn btn-primary btnProduct">Add new Product</button>
          </p>

        </div>
       <!--  -->
		<div role="content" style="display: none;" class="addProductForm">
					<div class="widget-body">
                         <div class="row" style="border-bottom: 1em; background: #2196F3; padding: 1em;">
                         	<div class="col-sm-12" style="background:#FFF; ">
                         	   <fieldset>
                         	   	<legend>Add Product</legend>
                         	   {{ Form::open(['route'=>'sisadmin.products.store', 'method' => 'post', 'class'=>'form-inline', 'files'=>true]) }}

                                  @include('admin.products._form')
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
		</div>
        <p class="statusInfo" style="display: none;"></p>
		<div class="row">
			<div role="content">
					<div class="widget-body">
                           <table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dt_basic_info" style="width: 100%;" width="100%">
							<thead>			                
								<tr role="row">
								<th>sn</th>
								<th>File</th>
								<th>Name</th>
								<th>Category</th>
								<th>Brand</th>
								<th>Quantity</th>
								<th>Action</th>
							</thead>
							<tbody>
							       <?php  $product_count = 1;   ?>
							       @if($data)
							       @foreach($data as $datas)
							<tr role="row" class="odd">
									  <td class="sorting_1">
									     <?php echo  $product_count ++;   ?></td>
									  <td>
									  <img src="{!! asset($datas->featured_img_sm) !!}" width="90" height="40"/>
									  </td>
									  <td class=" expand"><span class="responsiveExpander"></span>
									  {{ $datas->name }}
									  </td>
									<td>{{ $datas->categories->name }}</td>
									<td>{{ $datas->brand_name }}</td>
									<td>{{ $datas->quantity }}</td>
									<td>
										<span>
											<a href="{!! route('sisadmin.products.show', $datas->id) !!}" title="Product details" class=""><i class="fa fa-fw fa-lg fa-eye"></i></a>

										</span>
										<span>
											<a href="{!! route('sisadmin.products.edit', $datas->id) !!}"  title="Edit">
											    <i class="fa fa-fw fa-lg fa-pencil-square-o"></i>
											</a>
										</span>
										<!--  -->
										<span>
											<a href="" class="txt-color-red deleteMe" 
                                   data-url="{!! route('sisadmin.products.delete', $datas->id ) !!}" title="delete Product" data-name="{{ $datas->name }}">
                                    <i class="fa fa-fw fa-lg fa-trash-o deletable"> </i> </a>
										</span>
                                        <!--  -->
										<span>
										<a href="#" data-url="{!! route('sisadmin.product.changeProductStatus') !!}"  data-status = "{{ $datas->status }}" data-id = "{{ $datas->id }}" class="productStatus">
                                             <button class="<?php echo $datas->status==1 ? 'btn btn-danger btn-sm': 'btn btn-success btn-sm'   ?>">
                                             	<?php 
                                             	echo  $datas->status==1 ? 'un-publish' : 'publish'     
                                             	?>
                                             </button>
										</a>
										</span>

										<span>
										<a href="#" data-url="{!! route('sisadmin.product.makeFeaturedProduct') !!}"  data-status = "{{ $datas->featured_product }}" data-id = "{{ $datas->id }}" class="makeFeaturedProduct">
                                             <button class="<?php echo $datas->featured_product==1 ? 'btn btn-success btn-sm': 'btn btn-info btn-sm'; ?>">
                                             	<?php 
                                             	echo  $datas->featured_product==1 ? 'featured product' : 'make featured product'     
                                             	?>
                                             </button>
										</a>
										</span>

										

									</td>
									
                           </tr>
                                   @endforeach
                                   @endif
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

<script type="text/javascript">
   
    /*product publish un publish*/
	var productStatus = $('.productStatus');
	var makeFeaturedProduct = $('.makeFeaturedProduct');
	productStatus.on('click', function(e){
     e.preventDefault();
     var status = $(this).data('status');
     var url    = $(this).data('url');
     var id     = $(this).data('id');
     var data = {id:id, status:status};

     $.ajax({
          'type' : 'GET',
          'url'  : url,
          'data' : data,
          success:function(response){
           alert(response.message);
           window.location.reload();
          }
     }).fail(function (response){
     	alert(response.message);
     });
	});

	/*-----make featured product--------*/
	makeFeaturedProduct.on('click', function(e){
    e.preventDefault();
    var url    = $(this).data('url');
    var id = $(this).data('id');
    var status = $(this).data('status');
    var data   = {id : id, status:status};
    $.ajax({
          'type'  : 'GET',
          'url'   : url,
          'data'  : data,

          success:function(response){
           alert(response.message);
          },
          complete:function(){
           window.location.reload();
          }
    });
	});
  
  $('.summernote').summernote({focus: true});

</script>
@endsection