@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hai , {{ Auth::user()->name }} <br>Welcome to our Dashboard panel</div>
                <div class="panel-body">
                   <div class="row">
                       <div class="col-sm-3">
                           desh boared
                       </div>
                       <div class="col-sm-9">middle bar</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection