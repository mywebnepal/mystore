@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
    <div class="page-title">
    	<h5>{{ $singleEvent->event_title ? $singleEvent->event_title : 'No event match' }}</h5>
    </div>
   <div class="col-md-4 col-lg-3">
       @include('clientDashboard.sidebar')
   </div>
           <div class="col-md-8 col-lg-9">
               <div class="jumbotron">
               <div class="row">
               	<div class="col col-12">
               		@if($singleEvent)
               		    <div class="row">
                          	   <div class="col col-4">
                          	   	  <img src="{{asset($singleEvent->event_featured_img) }}" width="100%" height="250">
                          	   </div>
                          	   <div class="col col-8">
                          	   	<ul class="list-group">
                          	   	  <li class="list-group-item disabled text-success">
                          	   	  <p class="pull-left">
                          	   	    {{ $singleEvent->event_title }}&nbsp;
                          	   	    <small class="badges text-success">
                          	   	      {{ $singleEvent->event_ticket_type }}
                          	   	    </small>
                          	   	  </p>
                          	   	  <p class="pull-right">
                          	   	  <i class="fa fa-calendar">
                          	   	  	 {{ $singleEvent->event_start_date }}&nbsp;-&nbsp;
                          	   	  	 {{ $singleEvent->event_start_date }}
                          	   	  </i>
                          	   	  </p>
                          	   	 
                          	   	  </li>
                          	   	  <li class="list-group-item">
                          	   	  	<p class="pull-left">
                          	   	  	  <i class="fa fa-phone">
                          	   	  	    {{ $singleEvent->event_tel }}&nbsp;&nbsp;
                          	   	  	    {{ $singleEvent->event_phone }}
                          	   	  	  </i>
                          	   	    </p>
                          	   	  	<p class="pull-right">
                          	   	  		<i class="fa fa-map-marker" aria-hidden="true">
                          	   	  			{{$singleEvent->event_city }} &nbsp;
                          	   	  			{{ $singleEvent->event_vanue_addr }}
                          	   	  			&nbsp;
                          	   	  	    {{ $singleEvent->event_postal_code }}
                          	   	  		</i>
                          	   	  	</p>
                          	   	  </li>
                          	   	  @if($singleEvent->event_ticket_type == 'Ticket')
                                     <li class="list-group-item">
                                     	<p class="pull-right">
                                     		<span>
                                     		<label class="text-success">Tax</label>&nbsp;
                                     		{{ $singleEvent->event_tax }}%</span>&nbsp;
                                     		<span>
                                     			<label class="text-success">Discount&nbsp;</label>{{ $singleEvent->event_discount }}%
                                     		</span>
                                     	</p>
                                     	<p class="pull-left">
                                     		<p class="pull-left">

                                          @if($singleEvent->event_ticket_name)
                                          @foreach($singleEvent->event_ticket_name as $ticket)
                                          <i class="fa fa-money">&nbsp; {{$ticket['name']}}:- Rs. {{$ticket['price']}}</i>&nbsp;
                                          seat {{$ticket['seat']}}</i>&nbsp;<br>
                                          @endforeach
                                          @endif
                                        </p>
                                     	</p>
                                     </li>
                          	   	  @endif
                          	   	  
                          	   	  <li class="list-group-item">
                          	   	    {{ $singleEvent->event_desc }}
                          	   	  </li>
                          	   	  <li class="list-group-item">
                          	   	  	<button class="btn btn-default" onclick="goBack()">Back</button>
                          	   	  </li>
                          	   	</ul>
                          	   </div>
                          </div>
                          @else
                          <h3>Oops event not found</h3>
               		@endif
               	</div>
               </div>	
               </div>
           </div>
</div>

@endsection