@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
   <div class="container">
          <div class="row">
            @if(Session::has('message'))
               <div class="alert alert-info client-info">
                 {{ Session::get('message') }}
               </div>
            @endif
          </div>
       <div class="row">
           <div class="col-md-4 col-lg-3">
               @include('clientDashboard.sidebar')
           </div>
           <div class="col-md-8 col-lg-9">
                   <h3 align="center">My wishlist</h3><hr>
                  <div class="jumbotron">
                      @if($myWishList)
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
                            <td>{{ $wishlist->created_at->diffForHumans() }}</td>
                            <td>
                              <span>
                                  <button class="btn btn-danger btn-sm">Delete</button>
                                </span>
                                
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                        <h3 class="alert alert-info pull-center">You have select wishlist....</h3>
                      @endif
                 </div>
               </div>

           </div>
  </div>
@endsection
@section('custom_script')
<script type="text/javascript">
  $('.client-info').fadeOut(5000);
</script>
@endsection