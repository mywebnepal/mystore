<div class="row">
    <div class="col-sm-12">
        <h4>Open room for booking</h4><br>

        {!! Form::open(['route'=>'openRoomBooking', 'method'=>'post']) !!}
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="row">
                      <div class="col-sm-8">
                         <select name="hotelRoomName" class="bookingSelRoom">
                              <option value="">select room</option>
                              @if($roomData)
                                @foreach($roomData as $room)
                                  <option value="{{ $room->id }}">{{ $room->roomName }}</option>
                                 @endforeach
                               @endif
                         </select>
                      </div>
                      <div class="col-sm-4 bookingRoomNumber"></div>
                  </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
            {!! Form::text('dateFrom', null, ['class'=>'form-control date']) !!}
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3">
              {!! Form::text('dateTo', null, ['class'=>'form-control date']) !!}
            </div>
            
            <div class="col-xs-12 col-sm-3 col-md-3">
              {!! Form::submit('Open Booking', ['class'=>'btn btn-success'])  !!}
            </div><br><hr>

           </div>
        {!! Form::close() !!}
        </div>  
</div>
@section('custom_script')
<script type="text/javascript">
  var bookingSelRoom = $('.bookingSelRoom');
  bookingSelRoom.on('change', function(){
     var roomId = $(this).val();
     if (roomId) {
      var url = "{{URL::to('/')}}"+"/getRoomNumber/"+roomId;
      alert(url);
       $.get(url, function(data, status){
               alert("Data: " + data + "\nStatus: " + status);
           });
     }else{
      alert('please try it again');
     }
  });
</script>
@endsection