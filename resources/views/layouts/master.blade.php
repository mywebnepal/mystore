<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>@yield('page_title')</title>
    <meta name="description" content="@yield('page_description')">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('css/offcanvas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/xzoom.css') }}" media="all" />

     <script type="text/javascript" src="{{ asset('js/xzoom.js') }}"></script>
     <link type="text/css" rel="stylesheet" media="all" href="{{ asset('fancybox/source/jquery.fancybox.css') }}" />
     <link type="text/css" rel="stylesheet" media="all" href="{{ asset('magnific-popup/css/magnific-popup.css') }}" />
     <script type="text/javascript" src="{{ asset('fancybox/source/jquery.fancybox.js') }}"></script>
     <script type="text/javascript" src="{{ asset('magnific-popup/js/magnific-popup.js') }}"></script>
</head>
<body>
<div id="">
    <div class="row">
        <div id="customerForm" class="modal fade" role="dialog">
       <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header" style="background: rgb(62, 177, 67);">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <div class="modal-body">
           {!! Form:: open(['id'=>'customer_form'])!!}
              <!-- <a href="#" data-supportUrl="{!! route('supportForm') !!}"></a> -->
              {!! Form::hidden('supportUrl', route('supportForm'), ['class'=>'supportFormUrl']) !!}
               @if (Auth::check())
                  <div class="form-group float-label-control">
                       <h4>Hai, {{ Auth::user()->name }} 
                       <small>How can we help you</small>
                       </h4>
                  </div>
                  {!! Form::hidden('usr_id', Auth::user()->id, ['class'=>'form-control']) !!}

               @else
                    <div class="form-group float-label-control">
                     {!! Form::text('user_email', null, ['class'=>'form-control', 'placeholder'=>'Your email address']) !!}
                  </div>
                   
                   <div class="form-group float-label-control">
                     {!! Form::text('user_phone', null, ['class'=>'form-control', 'placeholder'=>'your phone number']) !!}
                   </div>          
               @endif
               

               <div class="form-group float-label-control">
                  {!! Form::text('user_subject', null, ['class'=>'form-control', 'placeholder'=>'Subject message']) !!}
                </div>
         
               <div class="form-group float-label-control">
                {!! Form::textarea('user_message', null, ['class'=>'form-control', 'placeholder'=>'Your message', 'rows'=>'3']) !!}
                </div>

                <div class="form-group float-label-control">
                   <p class="pull-right">
                       {!! Form::submit('submit', ['class'=>'btn btn-info btn-sm']) !!}
                   </p>
                </div>
           {!! Form::close() !!}
           </div>
         </div>

        

       </div>
     </div>
    </div>
    @include('inc.header')
    <div class="container">
       <div class="siteInfoMsg"></div>
       @yield('content')  
    </div>
    @include('inc.footer')
</div>
    @include('inc.script')
    @yield('custom_script')
</body>
</html>