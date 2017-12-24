@extends('master.layout')
@section('content')
     <div class="panel">
         <div class="panel-title">
             <div class="row">
                 <div class="col-sm-12">
                 @if(Session::has('message'))
                     <div class="row errMsg" style="margin:1em;">
                         <div class="alert alert-success">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             {!! Session::get('message') !!}
                         </div>
                     </div>
                 @endif
                     <div class="col-sm-6"><h4>List of Categories</h4></div>
                     <div class="col-sm-6">
                        <button class="btn btn-primary addBtn pull-right">Add New Categories</button>
                     </div>
                 </div>
                 <div class="col-sm-12 category-display-form" style="display: none;">
                       <div role="content" class="categoryForm">
                            {{ Form::open(['route'=>'sisadmin.categories.store', 'method' => 'post', 'class'=>'form-inline']) }}
                            @include('admin.categories._form')
                            <div class="form-group col-sm-12">
                               <p class="pull-right">
                                    <button type="submit" class="btn btn-primary">
                                    Ssve category
                                </button>
                                </p>
                                </div>
                               {{ Form::close() }}
                            </div>
                        </div>
                 </div>
             </div>
         </div>
         <div class="infoDiv"></div>
         <div class="panel-body">
             <table class="table table-inverse table-responsive">
                 <thead>
                    <tr>
                        <th>sn</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>

                    @if($data)
                   <?php $count = 1;    ?>
                    @foreach($data as $cat)
                    <tr>
                        <td><?php echo $count ++;  ?></td>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>{{ $cat->description }}</td>
                        <td>
                        <span>
                            <a href="#"  title="Edit">
                                <i class="fa fa-fw fa-lg fa-pencil-square-o btnUpdateCategory" data-url="{!! route('sisadmin.categories.edit', $cat->id) !!}"></i>
                        </span>
                        <span>
                            <a href="#" class="txt-color-red deleteMe" data-user="{{ json_encode( $cat) }}"
                                      data-url="{!! route('sisadmin.categories.delete', $cat->id) !!}" title="{{ 'delete category' }}">
                                       <i class="fa fa-fw fa-lg fa-trash-o deletebutton"> </i> </a>
                        </span>
                           

                             
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <h3>Oops there is no category</h3>
                    @endif
                 </tbody>
             </table>
                    {{ $data->links()}}
         </div>

         modeal form
    <!-- modal -->
            <div class="row">
                <div id="frmUpdateCat" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                      {!! Form::open(['id'=>'UpdateCat']) !!}
                          @include('admin.categories._form')
                            {{ Form::hidden('hiddenCatId',null, ['class'=>'hiddenCatId']) }}
                          
                           <p class="pull-right">
                           {{ Form::submit('Update Category', ['class'=>'btn btn-success']) }}
                           </p>
                          
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
      var categoryForm = $('.category-display-form');
      var addBtn       = $('.addBtn');
      addBtn.on('click', function(){
       categoryForm.toggle();
      });

      var btnUpdateCategory = $('.btnUpdateCategory');
      btnUpdateCategory.on('click', function(){
        var url = $(this).data('url');
        var cat_name  = $('.cat_name');
        var cat_slug  = $('.cat_slug');
        var cat_desc  = $('.cat_desc');
         $.ajax({
            'type' : 'GET',
            'url'  : url,
            success: function(response){
            console.log(response);
            $('.hiddenCatId').val(response.id);
            cat_name.val(response.name);
            cat_slug.val(response.slug);
            cat_desc.val(response.description);
            $('#frmUpdateCat').modal('show');
            }


         })
      });
      /*----------------------------------*/
     var UpdateCat = $('#UpdateCat');
     UpdateCat.on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var id   = $('.hiddenCatId').val();
        var url  = "{{URL::to('/')}}" + "/sisadmin/categories/"+id+"/update";
        $.ajax({
          'type' : 'POST',
          'url'  : url,
          'data'    : data,
          success : function(response){
           console.log(response);
           if (response.success==true) {
               $('.infoDiv').append('successfully updated').addClass('alert alert-success').fadeOut(10000);
              $('#frmUpdateCat').modal('hide');
           }
          },complete:function(){
            window.location.reload();
          }
        })
        .fail(function (response) {
            alert('error while insert');
        });
     })
      /**/
   </script>
@endsection