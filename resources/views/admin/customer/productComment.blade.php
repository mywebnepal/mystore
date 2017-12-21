@extends('master.layout')
@section('content')
    <div class="row">
  	<div class="col-sm-12 well">
          <div class="panel">
          	  <div class="panel-heading">
          	  	 <h5>Product Comment</h5>
          	  </div>
          	  <div class="panel-body">
          	  	<table class="table table-striped table-responsive">
          	  		 <thead>
          	  		    <caption>List of product comment</caption>
          	  		 	<tr>
          	  		 		<th>sn</th>
          	  		 		<th>user</th>
                      <th>Product</th>
                      <th>Comment</th>
          	  		 		<th>Action</th>
          	  		 	</tr>
          	  		 </thead>
          	  		 <tbody>

          	  		    <?php $count = 1; ?>
          	  		    @if($productComment)
          	  		    @foreach($productComment as $comment)
          	  		 	<tr>
          	  		 		<td><?php echo $count ++;   ?></td>
          	  		 		<td>{{ $comment->email }}</td>
                      <td>{{ $comment->products->name }}</td>
                      <td>{{ $comment->comment }}</td>
          	  		 		<td>
                        <span>
                            <a href="#" class="txt-color-red deleteMe" 
                                   data-url="{!! route('sisadmin.comment.delete', $comment->id ) !!}" title="delete Product" data-name="{{ $comment->products->name }}">
                                    <i class="fa fa-fw fa-lg fa-trash-o deletable"> </i> </a>
                        </span>  
                      </td>
          	  		 	</tr>
          	  		 	@endforeach
          	  		 	@else
          	  		 	  <h3>Oops there is no data</h3>
          	  		 	@endif
          	  		 </tbody>
          	  	</table>
          	  	{{ $productComment->links() }}
          	  </div>

          </div>
    </div>
    </div>
@endsection