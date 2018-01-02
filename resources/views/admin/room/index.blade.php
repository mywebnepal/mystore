@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
	<div class="col-sm-12 well">
        <div class="panel">
        	  <div class="panel-headiing">
        	  	 <h5>Create room details</h5>
            @if(Session::has('message'))
                <div class="row errMsg" style="margin:1em;">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! Session::get('message') !!}
                    </div>
                </div>
            @endif
               <p class="pull-right">
                <button class="btn btn-success btnAddroom">Add room</button>
               </p>
            </div>
        	  <div class="panel-body">
        	  	   <div class="row roomForm" style="display: none;">
        	  	    <div class="col-sm-12">
        	  	    {!! Form::open(['route'=>'sisadmin.room.save', 'class'=>'smart-form']) !!}
               	        @include('admin.room._form')
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
        	  		<caption>List of room details</caption>
        	  		<thead>
        	  			<tr>
        	  				<th>sn</th>
        	  				<th>Name</th>
        	  				<th>Slug</th>
        	  				<th>Desc</th>
        	  				<th>Action</th>
        	  			</tr>
        	  		</thead>
        	  		<tbody>
                <?php  $count = 1;   ?>
                @if($room)
                    @foreach($room as $room)
                          <tr>
                            <td><?php echo $count ++;   ?></td>
                            
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->slug }}</td>
                            <td>{!! $room->desc !!}</td>
                            <td>
                              <span>
                                <a href="javascript:void(0)"  title="Edit">
                                    <i class="fa fa-fw fa-lg fa-pencil-square-o btnUpdateroom" data-toggle="modal" data-target="#myModal" data-id="{{ $room->id }}" data-url="{!! route('sisadmin.room.edit', $room->id) !!}"></i>
                                </a>
                              </span>
                              <span>
                                <a href="" class="txt-color-red deleteMe" 
                                  data-url="{!! route('sisadmin.room.delete', $room->id ) !!}" title="delete room" data-name="{{ $room->name }}" data-id = "{{ $room->id }}">
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
        <!-- modal -->
      <div class="row">
        <div id="frmUpdateroom" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Update Room</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['id'=>'frmRoomUpdate', 'class'=>'smart-form']) !!}
                    {{ Form::hidden('roomId',null, ['class'=>'room_id']) }}
                     @include('admin.room._form')
                    

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right">
                     {{ Form::submit('Update Room', ['class'=>'btn btn-success updateBrand']) }}
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
    <!--  -->
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	var btnAddroom = $('.btnAddroom');
	var roomForm   = $('.roomForm');
	btnAddroom.on('click', function(){
    roomForm.toggle();
	});
     

	 var btnUpdateroom = $('.btnUpdateroom');
	 btnUpdateroom.on('click', function(){
     var url = $(this).data('url');
     $.ajax({
         'type': 'GET',
         'url': url,
         success: function (response) {
         	console.log(response);
         	$('.room_name').val(response.name);
         	$('.room_slug').val(response.slug);
         	$('.room_desc').val(response.desc);
            $('.room_id').val(response.id);
         	
         	$('#frmUpdateroom').modal('show');
         }
     });
	 });

	 
	 var frmRoomUpdate = $('#frmRoomUpdate');
	 frmRoomUpdate.on('submit', function(e){
	 e.preventDefault();
	 var data = $(this).serialize();
	 var id   = $('.room_id').val();
	 var url  = "{{URL::to('/')}}" + "/sisadmin/room/"+id+"/update";
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
	       $('#frmroomUpdate').modal('hide');
	    }
	   },complete:function(){
	     window.location.reload();
	   }
	 })
	 .fail(function (response) {
	     alert('error while insert');
	 });
	 });
</script>
@endsection