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
                                    <fieldset>
                                        <div class="form-group col-sm-4">
                                            {{ Form::text('name', null, array('placeholder'=>'Category Name', 'class'=>'form-control')) }}
                                        </div>
                                        <div class="form-group col-sm-4">
                                            {{ Form::text('slug', null, array('placeholder'=>'category slug', 'class'=>'form-control')) }}
                                        </div>

                                        <div class="form-group col-sm-4">
                                           {{ Form::text('description', null, array('placeholder'=>'Short description', 'class'=>'form-control')) }}
                                        
                                        <p class="pull-right">
                                            <button type="submit" class="btn btn-primary">
                                            Ssve category
                                        </button>
                                        </p>
                                       </div>
                                    </fieldset>
                               {{ Form::close() }}
                            </div>
                        </div>
                 </div>
             </div>
         </div>
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
                            <button class="btn btn-info btn-sm">Edit</button>

                             <a href="#" class="txt-color-red deleteMe" data-user="{{ json_encode( $cat) }}"
                                       data-url="{!! route('sisadmin.categories.delete', $cat->id) !!}" title="{{ 'delete category' }}">
                                        <i class="fa fa-fw fa-lg fa-trash-o deletebutton"> </i> </a>
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
     </div>
@endsection
@section('custom_script')
   <script type="text/javascript">
      var categoryForm = $('.category-display-form');
      var addBtn       = $('.addBtn');
      addBtn.on('click', function(){
       categoryForm.toggle();
      });

      var catDel = $('.catDel');




      /**/
   </script>
@endsection