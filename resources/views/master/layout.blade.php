<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>@yield('page_title')</title>
		<meta name="description" content="@yield('page_description')">
		<meta name="author" content="Dipesh Banjade">
		{!! Html::style('backEndAdmin/css/custom.css') !!}	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		{!! Html::style('backEndAdmin/css/bootstrap.min.css') !!}
		{!! Html::style('backEndAdmin/css/font-awesome.min.css') !!}
		{!! Html::style('backEndAdmin/css/smartadmin-production-plugins.min.css') !!}
        {!! Html::style('backEndAdmin/css/smartadmin-production.min.css') !!}
		{!! Html::style('backEndAdmin/css/smartadmin-skins.min.css') !!}
		{!! Html::style('backEndAdmin/css/smartadmin-rtl.min.css') !!}

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
	</head>
	<body class="smart-style-6">

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">@include('master.deshboard_header')</div>
		</div>
		<!-- END HEADER -->
         <!-- left side bar -->
        <div class="row">
        	<div class="container-fluid">
        		<div class="col-sm-3">
        			  @include('master.leftmenu')
        		</div>
        </div>
	

		<!-- MAIN PANEL -->
		<div id="main" role="main">
			<!-- breadcumb include -->
               <div class="row">
               	     @include('master.breadcrumb')
               </div>
			<!-- ending of bradcumb -->
			<div id="content">
			     @yield('modelView')
			     @include('admin.partials.error')
				 @yield('content')
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->
		<div class="container-fluid">
			@include('master.footer')
			@include('admin.partials.script')
			@yield('custom_script')
		</div>
	</body>
</html>