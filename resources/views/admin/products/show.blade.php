@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
    <div class="row">
    	<div class="col-sm-12">
    		<table class="table table-responsive">
    			<tr>{{ $products->name }}</tr>
    		</table>
    	</div>
    </div>
@endsection