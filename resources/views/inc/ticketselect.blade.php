 @if($eventBySlug->event_ticket_type =='Ticket')
<select class='event_ticket[] form-control'><option class=''>Please select ticket name</option>@foreach($eventBySlug->event_ticket_name as $ticket)<option value='{{$ticket['name']}}'>{{$ticket['name']}} &nbsp; Rs.{{$ticket['price']}}</option>@endforeach</select>@endif