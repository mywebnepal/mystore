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
                       @if(count($myWishList) > 0)
                       <div class="col-sm-10">
                         <table class="table table-responsive">
                         	<caption>List of my wishlist</caption>
                         	<thead>
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
                         	   <?php  $count = 1;   ?>
                         	   @foreach($myWishList as $wishlist)
                         		<tr>
                         			<td><?php echo $count ++;   ?></td>
                         			<td><img src="{!! asset($wishlist->img_path) !!}" width="100" height="100"></td>
                         			<td><a href="{{ route('product.single', $wishlist->slug) }}">
                         				{{ $wishlist->slug }}
                         			</a></td>
                         			<td>{{ $wishlist->products->name }}</td>
                         			<td>{{ $wishlist->created_at }}</td>
                         			<td>
                         				<span>
                         				    <button class="btn btn-primary btn-sm">Delete</button>
                         				  </span>
                         				  <span>
                         				    <button class="btn btn-primary btn-sm">Add New</button>
                         				  </span>
                         			</td>
                         		</tr>
                         		@endforeach
                         	</tbody>
                         </table>
                         
                       </div>
                        @else
                        <h3>Oops you haven't select your wishlist</h3>
                       @endif
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection