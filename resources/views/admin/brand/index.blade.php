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
  </div>
  @endsection
  @section('custom_script')
  <script type="text/javascript">
  	var brandFrm    = $('.brandForm');
  	var btnAddBrand = $('.btnAddBrand');
  	btnAddBrand.on('click', function(){
  		brandFrm.toggle();
  	})
  </script>
@endsection