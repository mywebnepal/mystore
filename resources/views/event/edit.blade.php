@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
    <div class="page-title">
    	<h5>{{ $editEvent->event_title ? 'Edit   '.$editEvent->event_title : 'No event match' }}</h5>
    </div>
   <div class="col-md-4 col-lg-3">
       @include('clientDashboard.sidebar')
   </div>
           <div class="col-md-8 col-lg-9">
               <div class="jumbotron">
               <div class="row">
               	<div class="col col-12">
               		@if($editEvent)
                    {!! Form::model($editEvent, ['method' => 'POST','route' => ['client.event.update', $editEvent->id], 'files'=>true, 'name'=>'eventForm']) !!}
                        @include('event.form')
                        <hr>
                      <div class="row ticketDiv">
                        @if(count($tickets) > 0) 
                          @foreach($tickets as $ticket)
                              <div class='row event-ticket'><div class='col col-4'>Ticket name<input type='text' name='event_ticket_name[]' value="{{ $ticket['name'] }}"></div><div class='col col-4'>Ticket price<input type='text' name='event_ticket_price[]'  value="{{ $ticket['price'] }}"></div><div class='col col-3'>Total ticket<input type='text' name='event_ticket_seat[]'  value="{{ $ticket['seat'] }}"></div><button type='button' name='remove'  class='btn btn-danger btn_remove btn-sm'>X</button></div>
                          @endforeach
                        @endif
                      </div>
                      @php
                        $show = "display:none;";
                        if ((isset($editEvent->event_ticket_type) && $editEvent->event_ticket_type = 'onTicket')) {
                          $show = "display:block;";
                        }
                      @endphp
                      <section class="col col-4 divCreateTicket" style="{{ $show }}">
                          {!! Form::label('event_type', 'Create multiple ticket') !!}
                          <label class="input">
                              <button class="btn btn-info btn-sm createEventTicket" title="click me to create more ticket">
                                <i class="fa fa-plus">Create Ticket</i>
                              </button>
                            </label>
                      </section>
                      <section class="col col-4 pull-right">
                         <button class="btn btn-success">
                         <i class="fa fa-edit">&nbsp;Update event.....</i></button>
                      </section>
                     {!! Form::close() !!}
                    @else
                      <h3>Oops event not found</h3>
               		 @endif
               	</div>
               </div>	
               </div>
           </div>
</div>
@endsection
@section('custom_script')
@include('event.event_custom_script')
@endsection