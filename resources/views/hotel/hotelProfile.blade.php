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
          @if($hotelData)
              @include('hotel.frmProfile')
          @endif
 </div>
@endsection
@section('custom_script')
   @include('hotel.script')
@endsection