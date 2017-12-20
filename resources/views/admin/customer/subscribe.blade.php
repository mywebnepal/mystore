@extends('master.layout')
@section('content')
    <div class="row">
  	<div class="col-sm-12 well">
          <div class="panel">
          	  <div class="panel-heading">
          	  	 <h5>Customer subscribe Form</h5>

          	  </div>
          	  <div class="panel-body">
          	  	<table class="table table-striped table-responsive">
          	  		 <thead>
          	  		    <caption>List of customer subscribe Form</caption>
          	  		 	<tr>
          	  		 		<th>sn</th>
          	  		 		<th>Email</th>
          	  		 		<th>Action</th>
          	  		 	</tr>
          	  		 </thead>
          	  		 <tbody>

          	  		    <?php $count = 1; ?>
          	  		    @if($subData)
          	  		    @foreach($subData as $subscribe)
          	  		 	<tr>
          	  		 		<td><?php echo $count ++;   ?></td>
          	  		 		<td>{{ $subscribe->email }}</td>
          	  		 		<td></td>
          	  		 	</tr>
          	  		 	@endforeach
          	  		 	@else
          	  		 	  <h3>Oops there is no data</h3>
          	  		 	@endif
          	  		 </tbody>
          	  	</table>
          	  	{{ $subData->links() }}
          	  </div>

          </div>
    </div>
    </div>
@endsection