@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<div class="row" style="padding-top:1em;">
	<div class="container">
		<div class="col-sm-12 col-md-12" style="background: #F5F5F5;">
		<li class="pull-left booking-heading"><h4>Fix your booking today</h4></li>
			<ul class="nav nav-tabs pull-right" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Hotel Booking</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
			    	Event Vanue
			    </a>
			  </li>
			</ul>
		</div>		

			<!-- Tab panes -->
			<div class="clearfix"></div>
		<div class="col-sm-12 col-md-12" style="background: #FFF">
			<div class="tab-content">
			  <div class="tab-pane active" id="home" role="tabpanel">
				  	<div class="panel panel-default">
				  	  <div class="panel-body">Panel Content</div>
				  	  <div class="panel-footer">Panel Footer</div>
				  	</div>
			  </div>
			  <div class="tab-pane" id="profile" role="tabpanel">
			  	<div class="panel panel-default">
			  	  <div class="panel-body">Panel Content</div>
			  	  <div class="panel-footer">Panel Footer</div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});

	$('#myTab a[href="#profile"]').tab('show') // Select tab by name
	$('#myTab a:first').tab('show') // Select first tab
	$('#myTab a:last').tab('show') // Select last tab
	$('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>
@endsection