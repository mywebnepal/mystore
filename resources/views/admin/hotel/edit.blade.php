@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row">
	<div class="col-sm-12 well">
        <div class="panel">
        	  <div class="panel-headiing">
        	  	 <h5>update hotel</h5>
                      {!! Form::model($hotel, ['method' => 'POST','route' => ['sisadmin.hotel.update', $hotel->id], 'class'=>'smart-form', 'files'=>true]) !!}
                      @include('admin.hotel._form')
                      {!! Form::hidden('featured', $hotel->featured) !!}
                      <footer>
                      	<button type="submit" class="btn btn-success">Update</button>
                      </footer>
                      {!! Form::close() !!}
        	  	 </div>
        </div>
    </div>
</div>
@endsection