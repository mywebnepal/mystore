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

           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif

       <div class="row">
           @php $usr = getHotelUser() @endphp
           <div class="col-md-12 col-lg-12">
               <div class="jumbotron">
                   @if(!empty($usr))
                     @if($usr->status == 0)
                        <p>Your hotel <span class="text-success">{{ $usr->organizer_name }}</span> is not varified 
                        Please contact to system admin 
                        <strong class="text-success">Contact Email:- dipeshbanjade@gmail.com</strong> Or wait for 24 hour to varified</p>
                     @endif
                   @else
                     <h3><p align="center">Create your hotel name and address first...</p></h3><hr>
                     {!! Form::open(['route'=>'save-hotel-user', 'method'=>'post', 'name'=>'hotelUserForm']) !!}
                        @include('hotel.hotelUserForm')
                        {!! Form::submit('create', ['class'=>'btn btn-success pull-right']) !!}
                     {!! Form::close() !!}
                   @endif
                   <!--  -->
               <div class="row">
                 @if(!empty($usr))
                 @if(($usr->user_id == Auth::user()->id) && $usr->status == 1)
                   <!--  -->
                   <div class="col-sm-12 eventFrm">
                   {!! Form::open(['route'=>'save-hotel-details', 'method'=>'post', 'files'=>true, 'name'=>'frmCreateHotel']) !!}
                     @include('hotel.hotelCreate')
                     <div class="col col-12">
                       <footer class="pull-right">
                          {{ Form::submit('Create event', ['class'=>'btn btn-success btn-lg']) }}
                       </footer>
                     </div>
                   {!! Form::close() !!}
                   </div>
                  @endif
                  @endif
            </div>
           </div>
       </div>
   </div>
   </div>
@endsection
@section('custom_script')
@include('hotel.script')
@endsection