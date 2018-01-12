@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
	<div class="col-sm-12 well">
        <div class="panel">
        	  <div class="panel-headiing">
        	  	 <h5>Create Home Slider</h5>
            @if(Session::has('message'))
                <div class="row errMsg" style="margin:1em;">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! Session::get('message') !!}
                    </div>
                </div>
            @endif
               <p class="pull-right">
                <button class="btn btn-success btnAddhomeSlider">Add slider image</button>
               </p>
            </div>
        	  <div class="panel-body">
        	  	   <div class="row homeSliderForm" style="display: none;">
        	  	    <div class="col-sm-12">
        	  	    {!! Form::open(['route'=>'sisadmin.slider.save', 'class'=>'smart-form', 'files'=>true]) !!}
               	        @include('admin.slider._form')
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
        	  		<caption>List of slider</caption>
        	  		<thead>
        	  			<tr>
        	  				<th>sn</th>
                            <th>Image</th>
                            <th>Caption</th>
        	  				<th>Call Action</th>
                            <th>Action</th>
        	  			</tr>
        	  		</thead>
        	  		<tbody>
                <?php  $count = 1;   ?>
                @if($homeSlider)
                    @foreach($homeSlider as $homeSlider)
                          <tr>
                            <td><?php echo $count ++;   ?></td>
                            <td><img src="{!! asset($homeSlider->img_path) !!}"  width="150" height="80"></td>
                            <td>{{ $homeSlider->img_caption }}</td>
                            <td>{{ $homeSlider->call_action }}</td>
                            <td>
                              <span>
                                <!-- <a href="{{ route('sisadmin.slider.edit', $homeSlider->id) }}"  title="Edit">
                                    <i class="fa fa-fw fa-lg fa-pencil-square-o" data-toggle="modal" data-target="#myModal" data-id="{{ $homeSlider->id }}" data-url="{!! route('sisadmin.slider.edit', $homeSlider->id) !!}"></i>
                                </a> -->
                              </span>
                              <span>
                                <a href="" class="txt-color-red deleteMe" 
                                  data-url="{!! route('sisadmin.slider.delete', $homeSlider->id ) !!}" title="delete Slider" data-name="{{ $homeSlider->img_caption }}" data-id = "{{ $homeSlider->id }}">
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
    <!--  -->
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	var btnAddhomeSlider = $('.btnAddhomeSlider');
	var homeSliderForm   = $('.homeSliderForm');
	btnAddhomeSlider.on('click', function(){
    homeSliderForm.toggle();
	});
     
     /*update get data from server*/
	 /*var btnUpdatehomeSlider = $('.btnUpdatehomeSlider');
	 btnUpdatehomeSlider.on('click', function(){
     var baseUrl = document.location.origin;
     var url = $(this).data('url');
     $.ajax({
         'type': 'GET',
         'url': url,
         success: function (response) {
         	console.log(response);
         	var img_path = baseUrl+'/'+response.img_path;
         	$('.homeSlider_name').val(response.name);
         	$('.homeSlider_slug').val(response.slug);
         	$('.homeSlider_address').val(response.address);
         	$('.homeSlider_address').val(response.address);
         	$('.homeSlider_phone').val(response.phone);
         	$('.homeSlider_price').val(response.price);
         	$('.homeSlider_vedio').val(response.vedio_link);
         	$('.homeSlider_email').val(response.email);
         	$('.homeSlider_price').val(response.price);
         	$('.homeSlider_desc').val(response.desc);
         	$('.homeSlider_img').attr('src', img_path);

         	$('.homeSlider_ranking').append('<option value=' + response.type + '>' + response.type + '</option>');

         	$('.homeSlider_city').append('<option value=' + response.city + '>' + response.city + '</option>');

         	$('.homeSlider_id').val(response.id);
         	$('#frmUpdatehomeSlider').modal('show');
         }
     });
	 });*/

	 /*uupdate code*/
	 /*----------------update---------------*/
	 /*var frmhomeSliderUpdate = $('#frmhomeSliderUpdate');
	 frmhomeSliderUpdate.on('submit', function(e){
	 e.preventDefault();
	 var data = $(this).serialize();
	 var id   = $('.homeSlider_id').val();
	 var url  = "{{URL::to('/')}}" + "/sisadmin/homeSlider/"+id+"/update";
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
	       $('#frmhomeSliderUpdate').modal('hide');
	    }
	   },complete:function(){
	     window.location.reload();
	   }
	 })
	 .fail(function (response) {
	     alert('error while insert');
	 });
	 });*/
</script>
@endsection