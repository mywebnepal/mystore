@extends('master.layout')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
   <div id="content" class="well">
         @if(Session::has('message'))
            <div class="row errMsg" style="margin:1em;">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! Session::get('message') !!}
                </div>
            </div>
        @endif
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{!! Form::model($products, ['method' => 'POST','route' => ['sisadmin.products.update', $products->id]]) !!}
				    @include('admin.products._form')
				    <footer>
						{!! Form::submit('update Product', ['class'=>'btn btn-success']) !!}
						<button type="button" class="btn btn-default" onclick="window.history.back();">
							Back
						</button>
				   </footer>
				{!! Form::close() !!}
			   
			</div>
		</div>
	</div>
@endsection