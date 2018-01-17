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
                   <h3 align="center">My Order</h3><hr>
               <p class="pull-right">My total order: <?php echo count($myOrder);  ?></p>
               <div class="jumbotron">
                 <div class="row">
                 @if($myOrder)
                   @foreach($myOrder as $order)
                   <div class="col-sm-12 col-md-4 col-xs-12">
                     <div class="card">
                        <div class="card-header">
                          <p>
                             <strong>{{ $order->created_at->diffForHumans()}}</strong>
                          </p>
                          <p class="pull-right">
                              <strong>Rs.: {{ $order->price }}</strong>
                          </p>
                        </div>
                        <div class="card-body">
                          <p>{{ $order->order_id }}</p>
                          @if($order->cart->items)
                            @foreach($order->cart->items as $cart)
                                   <p>
                                     {{ $cart['item']['name'] }} &nbsp;
                                     <span class="badge badge-success">{{ $cart['qty'] }}</span>&nbsp;
                                     <span>{{ $cart['item']['discount'] }} %</span>&nbsp;
                                     <span>Rs.{{ $cart['item']['price'] }}</span>
                                   </p>
                                   
                            @endforeach
                          @endif
                        </div>
                        <div class="card-footer">
                          <p align="center">
                            <?php
                                if ($order->status == 0) {?>
                                  <button class="btn btn-info btn-sm">Unvarified</button>
                               <?php
                                }else{?>
                                  <button class="btn btn-success btn-sm">Varified</button>
                                <?php
                                 }
                            ?>
                            <button class="btn btn-danger btn-sm">Remove</button>
                          </p>
                        </div>
                     </div>
                   </div>
                   @endforeach
                   @endif
                 </div>
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