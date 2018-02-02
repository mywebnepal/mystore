<div class="row">
    <div class="col-sm-12">
        @if(count($hotelPolicy) > 0)
    	<table class="table table-striped">
    	  <caption>List of hotel policy</caption>
    	  <thead>
    	  	<tr>
    	  		<th>sn</th>
    	  		<th>Policy</th>
    	  		<th>Action</th>
    	  	</tr>
    	  </thead>
    	  <tbody>
    	    <?php $count = 1;   ?>
    	    @foreach($hotelPolicy as $policy)
    	  	<tr>
    	  		<td>{{ $count ++ }}</td>
    	  		<td>{{ $policy->policyName }}</td>
    	  		<td>
    	  			<span>
    	  				<button class="btn btn-info btn-sm">
    	  				<i class="fa fa-edit">Edit</i></button>
    	  			</span>
    	  			<span>
    	  				<button class="btn btn-danger btn-sm deleteMe" data-url="{{ route('deleteHotelPolicy', $policy->id) }}", data-name="{{  $policy->policyName }}">
    	  					<i class="fa fa-trash">Delete</i>
    	  				</button>
    	  			</span>
    	  		</td>
    	  	</tr>
    	  	  @endforeach
    	  </tbody>
    	</table>
    	@endif
    </div>
</div>