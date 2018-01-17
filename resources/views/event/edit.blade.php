@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
    <div class="page-title">
    	<h5>{{ $editEvent->event_title ? $editEvent->event_title : 'No event match' }}</h5>
    </div>
   <div class="col-md-4 col-lg-3">
       @include('clientDashboard.sidebar')
   </div>
           <div class="col-md-8 col-lg-9">
               <div class="jumbotron">
               <div class="row">
               	<div class="col col-12">
               		@if($editEvent)
               		   <?php
                           echo '<pre>';
                                 print_r($editEvent);
                           echo '</pre>';
               		   ?>
                    {!! Form::model($editEvent, ['method' => 'POST','route' => ['client.event.update', $editEvent->id], 'files'=>true]) !!}
                        @include('event.form')
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