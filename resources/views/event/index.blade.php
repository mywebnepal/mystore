@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
   <div class="container">
           @if(Session::has('message'))
              <div class="alert alert-info client-info">
                {{ Session::get('message') }}
              </div>
           @endif
       <div class="row">
           <div class="col-md-4 col-lg-3">
               @include('clientDashboard.sidebar')
           </div>
           @php $usr = getOrganizerName()  @endphp
           <div class="col-md-8 col-lg-9">
               <div class="jumbotron">
                   @if(count($usr) > 0)
                     @if($usr->status == 0)
                        <p>your event user <span class="text-success">{{ $usr->organizer_name }}</span> is not varified 
                        Please contact to system admin 
                        <strong class="text-success">Contact Email:- dipeshbanjade@gmail.com</strong> Or wait for 24 hour to varified</p>
                     @endif
                   @else
                     <p>Sorry we do not have your organizer name please create organizer name first to create your event</p>
                     {!! Form::open(['route'=>'client.create.organizer', 'method'=>'post']) !!}
                        @include('event.organizer')
                     {!! Form::close() !!}
                   @endif
                   <!--  -->
               <div class="row">

                 @if($usr->user_id == Auth::user()->id && $usr->status == 1)
                   <div class="col-sm-12">
                     <p class="pull-right">
                          <button class="btn btn-success btn-sm btnCreateEvent">
                            <i class="fa fa-calendar">&nbsp;Create Event</i>
                          </button>
                     </p>
                     
                   </div>
                   <!--  -->
                   <div class="col-sm-12 eventFrm" style="display: none;">
                   {!! Form::open(['route'=>'client.event.create', 'method'=>'post', 'files'=>true, 'name'=>'eventForm']) !!}
                     @include('event.form')
                     <hr>
                      <div class="row ticketDiv"></div>
                      <section class="col col-4 divCreateTicket" style="display: none;">
                          {!! Form::label('event_type', 'Create multiple ticket') !!}
                          <label class="input">
                              <button class="btn btn-info btn-sm createEventTicket" title="click me to create more ticket">
                                <i class="fa fa-plus">Create Ticket</i>
                              </button>
                            </label>

                      </section>
                     <div class="col col-12">
                       <footer class="pull-right">
                          {{ Form::submit('Create event', ['class'=>'btn btn-success btn-lg']) }}
                       </footer>
                     </div>
                   {!! Form::close() !!}
                   </div>

                   <div class="col-sm-12">
                     <hr>
                     @if(count($evnt) > 0)
                        <table class="table table-responsive table-striped">
                          <caption>List of my event</caption>
                          <thead>
                              <tr>
                                <th>sn</th>
                                <th>image</th>
                                <th>event type</th>
                                <th>name</th>
                                <th>booking</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <div class="infoDiv"></div>
                          <tbody>
                          @php $count = 1  @endphp
                          @foreach($evnt as $event)
                            <tr>
                              <td>{{ $count++ }}</td>
                              <td>
                                <a href="{{ route('client.show.event.details', $event->id) }}">
                                   <img src="{{ asset($event->event_featured_img) }}" width="50" height="50" />
                                </a>
                                 </td>
                              <td>{{ $event->event_ticket_type }}</td>
                              <td>
                                 <a href="{{ route('client.show.event.details', $event->id) }}">
                                   {{ $event->event_title }}
                                 </a>
                               </td>
                             
                              <td>number of booking</td>
                              <td>
                                 <span>
                                    <a href="{{ route('client.event.edit', $event->id) }}" title="edit my event">
                                      <i class="fa fa-edit text-info"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="javascript:void(0)" data-name="{{ $event->event_title }}" data-url="{!! route('client.delete.event', $event->id) !!}" class="deleteMe">
                                      <i class="fa fa-trash text-danger" title="Do you want to delete ?"></i>
                                    </a>
                                </span>
                                
                 <span>
                    <a href="#" data-url="{{ route('client.event.boookingStatus') }}"  data-status = "{{ $event->event_status }}" data-id = "{{ $event->id }}" class="eventBookingStatus" title="change your booking status">
                         <button class="<?php echo $event->event_status==1 ? 'btn btn-danger btn-sm': 'btn btn-success btn-sm'   ?>">
                          <?php 
                          echo  $event->event_status==1 ? 'openBooking' : 'closeBooking'     
                          ?>
                         </button>
                    </a>
                    </span>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                     @endif
                   </div>
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