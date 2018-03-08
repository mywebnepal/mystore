@extends('layouts.master')
@section('page_title', 'mywebnepal: page not found')
@section('page_description', '404 page not found')
@section('content')
<div class="row" style="padding: 2em">
    <div class="page-title">
    	<h5>page not found</h5>
    </div>
    
    	<div class="row">
    		<div class="col-sm-12">
    	    <p align="center"><img src="{{ asset('img/404-page-not-found.jpg') }}" width="500" height="300" class="img img-thumbnail"></p>
    			<p><button class="btn btn-info btn-lg" onclick="goBack()">Back to the page</button></p>
    		</div>
    	</div>
</div>
@endsection