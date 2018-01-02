@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
  <div class="col-sm-12 well">
        <div class="panel">
            <div class="panel-headiing">
               <h5>Create city details</h5>
            @if(Session::has('message'))
                <div class="row errMsg" style="margin:1em;">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {!! Session::get('message') !!}
                    </div>
                </div>
            @endif
               <p class="pull-right">
                <button class="btn btn-success btnAddcity">Add city</button>
               </p>
            </div>
            <div class="panel-body">
                 <div class="row cityForm" style="display: none;">
                  <div class="col-sm-12">
                  {!! Form::open(['route'=>'sisadmin.city.save', 'class'=>'smart-form']) !!}
                        @include('admin.city._form')
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
                <caption>List of city details</caption>
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
                @if($city)
                    @foreach($city as $city)
                          <tr>
                            <td><?php echo $count ++;   ?></td>
                            
                            <td>{{ $city->name }}</td>
                            <td>{{ $city->slug }}</td>
                            <td>{!! $city->desc !!}</td>
                            <td>
                              <span>
                                <a href="javascript:void(0)"  title="Edit">
                                    <i class="fa fa-fw fa-lg fa-pencil-square-o btnUpdatecity" data-toggle="modal" data-target="#myModal" data-id="{{ $city->id }}" data-url="{!! route('sisadmin.city.edit', $city->id) !!}"></i>
                                </a>
                              </span>
                              <span>
                                <a href="" class="txt-color-red deleteMe" 
                                  data-url="{!! route('sisadmin.city.delete', $city->id ) !!}" title="delete city" data-name="{{ $city->name }}" data-id = "{{ $city->id }}">
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
        <div id="frmUpdatecity" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Update city</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['id'=>'frmcityUpdate', 'class'=>'smart-form']) !!}
                    {{ Form::hidden('cityId',null, ['class'=>'city_id']) }}
                     @include('admin.city._form')
                    

                    <div class="form-group col-sm-12 ">
                     <p class="pull-right">
                     {{ Form::submit('Update city', ['class'=>'btn btn-success updateBrand']) }}
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
  var btnAddcity = $('.btnAddcity');
  var cityForm   = $('.cityForm');
  btnAddcity.on('click', function(){
    cityForm.toggle();
  });
     

   var btnUpdatecity = $('.btnUpdatecity');
   btnUpdatecity.on('click', function(){
     var url = $(this).data('url');
     $.ajax({
         'type': 'GET',
         'url': url,
         success: function (response) {
          console.log(response);
          $('.city_name').val(response.name);
          $('.city_slug').val(response.slug);
          $('.city_desc').val(response.desc);
            $('.city_id').val(response.id);
          
          $('#frmUpdatecity').modal('show');
         }
     });
   });

   
   var frmcityUpdate = $('#frmcityUpdate');
   frmcityUpdate.on('submit', function(e){
   e.preventDefault();
   var data = $(this).serialize();
   var id   = $('.city_id').val();
   var url  = "{{URL::to('/')}}" + "/sisadmin/city/"+id+"/update";
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
         $('#frmcityUpdate').modal('hide');
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