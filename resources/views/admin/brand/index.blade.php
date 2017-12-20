@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
  <div class="row">
  	<div class="col-sm-12 well">
          <div class="panel">
          	  <div class="panel-headiing">
          	  	 <h5>Create brand name</h5>
              @if(Session::has('message'))
                  <div class="row errMsg" style="margin:1em;">
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {!! Session::get('message') !!}
                      </div>
                  </div>
              @endif
                 <p class="pull-right">
                  <button class="btn btn-success btnAddBrand">Add Brand</button>
                 </p>
              </div>
          	  <div class="panel-body">
          	  	   <div class="row brandForm" style="display: none;">
          	  	    <div class="col-sm-12" style="background:#FFF; ">
                 	   <fieldset>
                 	   	<legend>Add Brand</legend>
                            {!! Form::open(['route'=>'sisadmin.brand.store', 'method' => 'post', 'class'=>'form-inline', 'files'=>true])  !!}
                                 @include('admin.brand._form')

                                 <footer>
                                   <p class="pull-right">
                                     {!! Form::submit('Add brand', ['class'=>'btn btn-success']) !!}
                                   </p>
                                 </footer>
                             {!! Form::close()  !!}
                 	   	</fieldset>
                    </div>
          	  	   	  
          	  	   </div>
          	  </div>
              <p class="infoDiv"></p>
          	  <div class="panel-footer">
          	  	<table class="table table-striped">
          	  		<caption>List of Brand name</caption>
          	  		<thead>
          	  			<tr>
          	  				<th>sn</th>
          	  				<th>Logo</th>
          	  				<th>name</th>
          	  				<th>slug</th>
          	  				<th>Action</th>
          	  			</tr>
          	  		</thead>
          	  		<tbody>
                  <?php  $count = 1;   ?>
                  @if($brand)
                      @foreach($brand as $brands)
                            <tr>
                              <td><?php echo $count ++;   ?></td>
                              <td><img src="{!! asset($brands->brand_logo) !!}"  width="90" height="40"></td>
                              <td>{{ $brands->name }}</td>
                              <td>{{ $brands->slug }}</td>
                              <td>
                                <span>
                                  <a href="#"  title="Edit">
                                      <i class="fa fa-fw fa-lg fa-pencil-square-o btnUpdateBrand" data-toggle="modal" data-target="#myModal" data-id="{{ $brands->id }}" data-url="{!! route('sisadmin.brand.edit', $brands->id) !!}"></i>
                                  </a>
                                </span>
                                <span>
                                  <a href="" class="txt-color-red deleteMe" 
                                    data-url="{!! route('sisadmin.brand.destroy', $brands->id ) !!}" title="delete Brand" data-name="{{ $brands->name }}" data-id = "{{ $brands->id }}">
                                    <i class="fa fa-fw fa-lg fa-trash-o deletable"> </i> </a>
                                </span>
                              </td>
                            </tr>
                      @endforeach
                      @else
                      <h4>Oops data is not found. Insert it first</h4>
                  @endif
          	  		</tbody>
          	  	</table>
          	  </div>
          </div>
  	</div>
      
        <!-- modal -->
      <div class="row">
        <div id="frmUpdateBrand" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Update Brands</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['id'=>'frmBrandUpdate', 'files'=>true]) !!}
                    {{ Form::hidden('brandId',null, ['class'=>'brand_id']) }}
                   
                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::text('name', null, array('placeholder'=>'Brand name', 'class'=>'form-control brand_name')) }}
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::text('slug', null, array('placeholder'=>'Brand slug', 'class'=>'form-control brand_slug')) }}
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::file('brand_logo') }}
                      </div>
                    </div>

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right imgDiv">
                      <img src="" width="150" height="150" class="brand_image">
                     </p>
                    </div>

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right">
                     {{ Form::submit('Update Product', ['class'=>'btn btn-success updateBrand']) }}
                     </p>
                    </div>
               {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
          </div>
        </div>
      </div>
      </div>
      <!-- modal section -->


  </div>
  @endsection
  @section('custom_script')
  <script type="text/javascript">
  	var brandFrm    = $('.brandForm');
  	var btnAddBrand = $('.btnAddBrand');
  	btnAddBrand.on('click', function(){
  		brandFrm.toggle();
  	});
    /*------update data---------*/
    var btnUpdateBrand = $('.btnUpdateBrand');
    var brand_name     = $('.brand_name');
    var brand_slug     = $('.brand_slug');
    var brand_image    = $('.brand_image');
    var imgDiv         = $('.imgDiv');
        btnUpdateBrand.on('click', function() {
            var url = $(this).data('url');
            $.ajax({
                'type': 'GET',
                'url': url,
                success: function (response) {
                     var brandLogo  = response.brand_logo;
                     var img_src = "http://mystore.dev/"+response.brand_logo;
                    $('.brand_id').val(response.id),
                    brand_name.val(response.name);
                    brand_slug.val(response.slug);
                    brand_image.attr('src', img_src);
                    $("#frmUpdateBrand").modal('show');
                  console.log(response.brand_logo);
                }
            })
        });

        /*----------------update---------------*/
        var frmBrandUpdate = $('#frmBrandUpdate');
        frmBrandUpdate.on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var id   = $('.brand_id').val();
        var url  = "{{URL::to('/')}}" + "/sisadmin/brand/"+id+"/update";
        $.ajax({
          'type' : 'POST',
          'url'  : url,
          data    : data,
          success : function(response){
           console.log(response);
           if (response.success==true) {
               $('.infoDiv').append('successfully updated').addClass('alert alert-success').fadeOut(10000);
           }
          },complete:function(){
            window.location.reload();
          }
        })
        .fail(function (response) {
            alert('error while insert');
        });
        $('#frmUpdateBrand').modal('hide');
        });
  </script>
@endsection