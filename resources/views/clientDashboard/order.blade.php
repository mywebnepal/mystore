@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
   <div class="container">
       <div class="row">
           @if(Session::has('message'))
              <div class="alert alert-info client-info">
                {{ Session::get('message') }}
              </div>
           @endif
           <div class="col-md-4 col-lg-3">
               @include('clientDashboard.sidebar')
           </div>
           <div class="col-md-8 col-lg-9">
                   <h3 align="center">My Order</h3><hr>
               <div class="jumbotron">
               </div>

           </div>
       </div>
   </div>
@endsection
@section('custom_script')
<script type="text/javascript">
  $('.client-info').fadeOut(5000);
</script>
@endsection