@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #DDDDDD;">Hai , {{ Auth::user()->name }} <br>Welcome to our Dashboard panel</div>
             
                @if(Session::has('message'))
                   <div class="alert alert-info">
                     {{ Session::get('message') }}
                   </div>
                @endif
                <div class="panel-body">
                   <div class="row">
                       @include('clientDashboard.sidebar')
                       <div class="col-sm-10">
                         @yield('profileDeshboard')
                         <?php 
                             

                         ?>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection