<div class="row">
	<div class="col-sm-12 col-md-12 tblRoomList" style="width: 100%;">
	   @if(count($roomData)> 0)
		<table class="table table-strip table-responsive">
			<caption>List of my hotel room</caption>
			<thead>
			  <tr>
				<th>sn</th>
				<th>Images</th>
				<th>Name</th>
				<th>Bed</th>
				<th>Fit</th>
				<th>Fooding</th>
				<th>Price</th>
				<th>Desc</th>
				<th>Action</th>
			   </tr>
			</thead>
			<tbody>
			    @php $count = 1;  @endphp
			    <!-- {{ @dump($roomData) }} -->
			    @foreach($roomData as $room)
				<tr>
					<td>{{ $count ++ }}</td>
					<td><img src="{{ asset($room->roomImg1) }}" class="img img-thumbnail"></td>
					<td>{{ $room->roomName }} &nbsp; room &nbsp; {{ $room->roomNumber }}</td>
					<td><i class="fas fa-bed">{{ $room->bedName }}</i></td>
					<td><i class="fa fa-user"> {{ $room->fitPerson }}</i></td>
					@if($room->fooding)
    	         	 <td>
    	         	    {{ $room->fooding }}
    	         	 </td>
		    	    @endif
					<td>{{ $room->roomPrice }}</td>
					<td>{{ $room->roomDesc }}</td>
					<td>
					<span>
					<button class="btn btn-info btn-sm"><i class="fa fa-edit">Update</i></button>
						<a href="javascript:void(0)" class="btn btn-danger btn-sm deleteMe" data-url="{{ route('delete-hotelRoom', $room->id) }}"
						data-name="{{ $room->roomName }}">
							<i class="fa fa-trash">Delete</i>
						</a>
					</span>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<h3>Please insert hotel room first..</h3>
		@endif
	</div>
</div>