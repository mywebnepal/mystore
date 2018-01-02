@extends('layouts.master')
@section('content')
<div class="container">
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
                   @if(count($myOrder)> 0)
                      <?php 
                           echo '<pre>';
                              print_r($myOrder);
                           echo '</pre>';
                      ?>
                       <div class="col-sm-10">
                         <table class="table table-responsive">
                         	<thead>
                         	<caption>List of my wishlist</caption>
                         		<tr>
                         			<th>Sn</th>
                         			<th>Image</th>
                         			<th>Slug</th>
                         			<th>Product name</th>
                         			<th>Date</th>
                         			<th>Action</th>
                         		</tr>
                         	</thead>
                         	<tbody>
                         	  
                         	</tbody>
                         </table>
                         
                       </div>
                    @endif
                       
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection