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
               <div class="jumbotron">
                   <p class="pull-right alert alert-info"><i>User is not varified</i></p><hr>
                   <h3>Hello,  {{ Auth::user()->name }}</h3>
                   <p>Do you want to sell your product. Please mail us to varify your user on dipeshbanjade@gmail.com</p>
                   <p align="center">
                     <button class="btn btn-success btn-sm" style="background: #880000;">Sell your product</button>
                   </p>
                   <!--  -->
                   <p>Do you want to create your event please mail us or call us to varify your user </p>

                   <p align="center">
                     <a href="/create-event"><button class="btn btn-success btn-sm" style="background: #880000;">Create your event</button></a>
                   </p>
                   <!--  -->
                   <!--  -->
                   <p>Do you want to make your hotel online booking to our site ? </p>

                   <p align="center">
                     <a href=""><button class="btn btn-success btn-sm" style="background: #880000;">Create your hotel details</button></a>
                   </p>
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