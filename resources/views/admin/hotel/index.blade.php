@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
	<div class="col-sm-12 well">
        <div class="panel">
        	  <div class="panel-headiing">
        	  	 <h5>Create hotel details</h5>
            @if(Session::has('message'))
                <div class="row errMsg" style="margin:1em;">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! Session::get('message') !!}
                    </div>
                </div>
            @endif
               <p class="pull-right">
                <button class="btn btn-success btnAddHotel">Add Hotel</button>
               </p>
            </div>
        	  <div class="panel-body">
        	  	   <div class="row hotelForm" style="display: none;">
        	  	    <div class="col-sm-12">
        	  	    {!! Form::open(['route'=>'sisadmin.hotel.save', 'class'=>'smart-form', 'files'=>true]) !!}
               	        @include('admin.hotel._form')
               	        <footer>
               	        	<button type="submit" class="btn btn-primary">Save...</button>
               	        </footer>
               	     {!! Form::close() !!}
                     </div>
        	  	   	  
        	  	   </div>
        	  </div>
            <p class="infoDiv"></p>
        	  <div class="panel-footer">
        	  	<table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dt_basic_info" style="width: 100%;" width="100%">
        	  		<caption>List of Hotel details</caption>
        	  		<thead>
        	  			<tr>
        	  				<th>sn</th>
        	  				<th>Image</th>
        	  				<th>Name</th>
        	  				<th>Slug</th>
        	  				<th>type</th>
        	  				<th>city</th>
        	  				<th>address</th>
        	  				<th>phone</th>
        	  				<th>price</th>
        	  				<th>Desc</th>
        	  				<th>Action</th>
        	  			</tr>
        	  		</thead>
        	  		<tbody>
                <?php  $count = 1;   ?>
                @if($hotel)
                    @foreach($hotel as $hotel)
                          <tr>
                            <td><?php echo $count ++;   ?></td>
                            <td><img src="{!! asset($hotel->img_path) !!}"  width="90" height="40"></td>
                            <td>{{ $hotel->name }}</td>
                            <td>{{ $hotel->slug }}</td>
                            <td>{{ $hotel->type }}</td>
                            <td>{{ $hotel->city }}</td>
                            <td>{{ $hotel->address }}</td>
                            <td>{{ $hotel->phone }}</td>
                            <td>{{ $hotel->price }}</td>
                            <td>{!! $hotel->desc !!}</td>
                            <td>
                              <span>
                                <a href="{{ route('sisadmin.hotel.edit', $hotel->id) }}"  title="Edit">
                                    <i class="fa fa-fw fa-lg fa-pencil-square-o" data-toggle="modal" data-target="#myModal" data-id="{{ $hotel->id }}" data-url="{!! route('sisadmin.hotel.edit', $hotel->id) !!}"></i>
                                </a>
                              </span>
                              <span>
                                <a href="" class="txt-color-red deleteMe" 
                                  data-url="{!! route('sisadmin.hotel.delete', $hotel->id ) !!}" title="delete Brand" data-name="{{ $hotel->name }}" data-id = "{{ $hotel->id }}">
                                  <i class="fa fa-fw fa-lg fa-trash-o deletable"> </i> </a>
                              </span>
                              <span>
								<a href="#" data-url="{!! route('sisadmin.hotel.makeFeaturedHotel') !!}"  data-status = "{{ $hotel->featured }}" data-id = "{{ $hotel->id }}" class="makeFeaturedHotel">
                                     <button class="<?php echo $hotel->featured==1 ? 'btn btn-success btn-sm': 'btn btn-info btn-sm'; ?>">
                                     	<?php 
                                     	echo  $hotel->featured==1 ? 'featured hotel' : 'make featured hotel'     
                                     	?>
                                     </button>
								</a>
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
    <!--  -->
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	var btnAddHotel = $('.btnAddHotel');
	var hotelForm   = $('.hotelForm');
	btnAddHotel.on('click', function(){
    hotelForm.toggle();
	});
     
     /*update get data from server*/
	 /*var btnUpdateHotel = $('.btnUpdateHotel');
	 btnUpdateHotel.on('click', function(){
     var baseUrl = document.location.origin;
     var url = $(this).data('url');
     $.ajax({
         'type': 'GET',
         'url': url,
         success: function (response) {
         	console.log(response);
         	var img_path = baseUrl+'/'+response.img_path;
         	$('.hotel_name').val(response.name);
         	$('.hotel_slug').val(response.slug);
         	$('.hotel_address').val(response.address);
         	$('.hotel_address').val(response.address);
         	$('.hotel_phone').val(response.phone);
         	$('.hotel_price').val(response.price);
         	$('.hotel_vedio').val(response.vedio_link);
         	$('.hotel_email').val(response.email);
         	$('.hotel_price').val(response.price);
         	$('.hotel_desc').val(response.desc);
         	$('.hotel_img').attr('src', img_path);

         	$('.hotel_ranking').append('<option value=' + response.type + '>' + response.type + '</option>');

         	$('.hotel_city').append('<option value=' + response.city + '>' + response.city + '</option>');

         	$('.hotel_id').val(response.id);
         	$('#frmUpdateHotel').modal('show');
         }
     });
	 });*/

	 /*uupdate code*/
	 /*----------------update---------------*/
	 /*var frmHotelUpdate = $('#frmHotelUpdate');
	 frmHotelUpdate.on('submit', function(e){
	 e.preventDefault();
	 var data = $(this).serialize();
	 var id   = $('.hotel_id').val();
	 var url  = "{{URL::to('/')}}" + "/sisadmin/hotel/"+id+"/update";
	 alert(data);
	 $.ajax({
	   'type' : 'post',
	   'url'  : url,
	   'dataType': 'json',
	   'data'    : data,
	   success : function(response){
	    console.log(response);
	    if (response.success==true) {
	        $('.infoDiv').append('successfully updated').addClass('alert alert-success').fadeOut(10000);
	       $('#frmHotelUpdate').modal('hide');
	    }
	   },complete:function(){
	     window.location.reload();
	   }
	 })
	 .fail(function (response) {
	     alert('error while insert');
	 });
	 });*/
	 $('.summernote').summernote({focus: true});
	 	/*-----make featured product--------*/
	 	var makeFeaturedHotel = $('.makeFeaturedHotel');
	 	makeFeaturedHotel.on('click', function(e){
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
</script>
@endsection