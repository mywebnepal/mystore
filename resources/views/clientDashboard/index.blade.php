@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #DDDDDD;">Hai , {{ Auth::user()->name }} <br>Welcome to our Dashboard panel</div>
                <div class="panel-body">
                   <div class="row">
                       <div class="col-sm-2 col-md-2 " style="background: rgb(62, 177, 67)">
                          <div class="client_profile_leftSidebar">
                            <ul>
                              <li><a href="">Home</a></li>
                              <li><a href="">Order</a></li>
                              <li><a href="">Walet</a></li>
                              <li><a href="">shopping</a></li>
                              <li><a href="">wishlet</a></li>
                            </ul>
                          </div>
                       </div>
                       <div class="col-sm-10">
                         @yield('profileDeshboard')
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection