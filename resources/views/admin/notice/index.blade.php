@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
  <div class="row">
  	<div class="col-sm-12 well">
          <div class="panel">
          	  <div class="panel-headiing">
          	  	 <h5>Create Notice</h5>
              @if(Session::has('message'))
                  <div class="row errMsg" style="margin:1em;">
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {!! Session::get('message') !!}
                      </div>
                  </div>
              @endif
                 <p class="pull-right">
                  <button class="btn btn-success btnAddnotice">Add notice</button>
                 </p>
              </div>
          	  <div class="panel-body">
          	  	   <div class="row noticeForm" style="display: none;">
          	  	    <div class="col-sm-12" style="background:#FFF; ">
                 	   <fieldset>
                 	   	<legend>Add notice</legend>
                            {!! Form::open(['route'=>'sisadmin.notice.store', 'method' => 'post', 'class'=>'form-inline', 'files'=>true])  !!}
                                 @include('admin.notice._form')

                                 <footer>
                                   <p class="pull-right">
                                     {!! Form::submit('Add Notice Board', ['class'=>'btn btn-success']) !!}
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
          	  		<caption>List of Notice Board</caption>
          	  		<thead>
          	  			<tr>
          	  				<th>sn</th>
          	  				<th>Image</th>
          	  				<th>name</th>
          	  				<th>slug</th>
          	  				<th>Description</th>
          	  				<th>End Date</th>
          	  				<th>Action</th>
          	  			</tr>
          	  		</thead>
          	  		<tbody>
                  <?php  $count = 1;   ?>
                  @if(count($notice) > 0)
                      @foreach($notice as $notice)
                            <tr>
                              <td><?php echo $count ++;   ?></td>
                              <td><img src="{!! asset($notice->img_path) !!}"  width="90" height="40"></td>
                              <td>{{ $notice->name }}</td>
                              <td>{{ $notice->slug }}</td>
                              <td>{{ $notice->desc }}</td>
                              <td>{{ $notice->end_date }}</td>
                              <td>
                                <span>
                                  <a href="#"  title="Edit">
                                      <i class="fa fa-fw fa-lg fa-pencil-square-o btnUpdateNotice" data-toggle="modal" data-target="#myModal" data-id="{{ $notice->id }}" data-url="{!! route('sisadmin.noticeBoard.edit', $notice->id) !!}"></i>
                                  </a>
                                </span>
                                <span>
                                  <a href="" class="txt-color-red deleteMe" 
                                    data-url="{!! route('sisadmin.notice.delete', $notice->id ) !!}" title="delete notice board" data-name="{{ $notice->name }}" data-id = "{{ $notice->id }}">
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
        <div id="frmUpdateNotice" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Update notice</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['id'=>'frmNoticeUpdate', 'files'=>true]) !!}
                    {{ Form::hidden('notice_id',null, ['class'=>'notice_id']) }}
                   
                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::text('name', null, array('placeholder'=>'notice name', 'class'=>'form-control notice_name')) }}
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::text('slug', null, array('placeholder'=>'notice slug', 'class'=>'form-control notice_slug')) }}
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::textarea('desc', null, array('placeholder'=>'notice slug', 'class'=>'form-control notice_desc')) }}
                      </div>
                    </div>


                    <div class="col-sm-4">
                      <div class="form-group col-sm-12">
                          {{ Form::file('img_path') }}
                      </div>
                    </div>

                    <div class="col-sm-4">
                    	<div class="form-group col-sm-12">
                    	    {{ Form::date('end_date', null, ['placeholder'=>'notice board end date', 'class'=>'form-control notice_endDate']) }}
                    	</div>
                    </div>

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right imgDiv">
                      <img src="" width="150" height="150" class="notice_image">
                     </p>
                    </div>

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right">
                     {{ Form::submit('Update Notice', ['class'=>'btn btn-success UpdateNotice']) }}
                     </p>
                    </div>
               {!! Form::close() !!}
            </div>
            <div class="modal-footer">
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
   var noticeFrm    = $('.noticeForm');
   var btnAddnotice = $('.btnAddnotice');
   btnAddnotice.on('click', function(){
   	noticeFrm.toggle();
   });


   /*------update data---------*/
    var btnUpdateNotice = $('.btnUpdateNotice');
    var notice_name     = $('.notice_name');
    var notice_slug     = $('.notice_slug');
    var notice_image    = $('.notice_image');
    var imgDiv         = $('.imgDiv');
    var notice_desc    = $('.notice_desc');
    var notice_endDate = $('.notice_endDate');
        btnUpdateNotice.on('click', function() {
            var url = $(this).data('url');
            $.ajax({
                'type': 'GET',
                'url': url,
                success: function (response) {
                     var ing_path  = response.img_path;
                     var img_src = "http://mystore.dev/"+response.img_path;
                    $('.notice_id').val(response.id),
                    notice_name.val(response.name);
                    notice_slug.val(response.slug);
                    notice_desc.val(response.desc);
                    notice_image.attr('src', img_src);
                    notice_endDate.val(response.end_date);
                    $("#frmUpdateNotice").modal('show');
                  console.log(response.img_path);
                }
            })
        });

        /*----------------update---------------*/
        var frmNoticeUpdate = $('#frmNoticeUpdate');
        frmNoticeUpdate.on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        alert(data);
        var id   = $('.notice_id').val();
        var url  = "{{URL::to('/')}}" + "/sisadmin/noticeBoard/"+id+"/update";
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
        $('#frmUpdateNotice').modal('hide');
        });
  </script>
@endsection