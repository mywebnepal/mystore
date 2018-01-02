@extends('master.layout')
@section('content')
    <div class="row">
  	<div class="col-sm-12 well">
          <div class="panel">
          	  <div class="panel-heading">
          	  	 <h5>Customer Support Form</h5>

          	  </div>
          	  <div class="panel-body">
          	  	<table class="table table-striped table-responsive">
          	  		 <thead>
          	  		    <caption>List of customer Support Form</caption>
          	  		 	<tr>
          	  		 		<th>sn</th>
          	  		 		<th>Phone</th>
          	  		 		<th>Email</th>
          	  		 		<th>Subject</th>
          	  		 		<th>Message</th>
          	  		 		<th>Action</th>
          	  		 	</tr>
          	  		 </thead>
          	  		 <tbody>

          	  		    <?php $count = 1; ?>
          	  		    @if($sprtForm)
          	  		    @foreach($sprtForm as $support)
          	  		 	<tr>
          	  		 		<td><?php echo $count ++;   ?></td>
          	  		 		<td>{{ $support->phone }}</td>
          	  		 		<td>{{ $support->email }}</td>
          	  		 		<td>{{ $support->subject }}</td>
          	  		 		<td>{{ $support->message }}</td>
          	  		 		<td></td>
          	  		 	</tr>
          	  		 	@endforeach
          	  		 	@else
          	  		 	  <h3>Oops there is no data</h3>
          	  		 	@endif
          	  		 </tbody>
          	  	</table>
          	  	{{ $sprtForm->links() }}
          	  </div>

          </div>
    </div>
    </div>
@endsection