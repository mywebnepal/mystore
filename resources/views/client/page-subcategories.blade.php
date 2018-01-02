@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<section id="category-page">
    <div class="container">
        <div class="row">
            <!-- side bar goes here -->
            @include('client.sidebar')
            <div class="col-md-8 col-lg-9">
               @if(count($mySubCatData) > 0)
                <main class="card border-0 rounded-0 main">
                    <div class="card-header">
                        <div class="row">
                               <div class="col-md-12 col-lg-12" style="padding: 0.5em 0em; margin:0.5em 0em; text-align: center; text-transform: uppercase; background: #247a09; color: #FFFFFF;">
                                 <h5>{{ $page['page_title'] }}</h5>
                               </div>
                           
                         </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($mySubCatData as $product)
                            <div class="col-md-6 col-lg-4">
                                     <div class="product-item">
                                         <div class="img-wrap">
                                             <a href="#">
                                                 <img src="{{ asset($product->featured_img_sm) }}" class="img-fluid" alt="{{ $product->name }}">
                                             </a>
                                             @if($product->discount)
                                                <div class="sale-offer-tag">
                                                          <span>{{ $product->discount }}<br>OFF</span>
                                                </div>
                                                @endif
                                         </div>
                                         <div class="product-prices-info">
                                             <h5 align="center"><a href="{{ route('product.single', $product->product_slug) }}" class="product-title">{{ $product->name }}</a></h5>
                                             <div class="d-flex justify-content-between align-items-end">
                                                 <div class="">
                                                     @if($product->discount)
                                    
                                                       <div class="item-price">Rs. {{ getDiscountPrice($product->price, $product->discount) }}</div>
                                                       <div class="item-price-before-discount">
                                                            Rs. {{ $product->price }}
                                                            </div>
                                                     @else

                                                     <div class="item-price">Rs. {{ $product->price }}</div>
                                    
                                                     @endif
                                                 </div>
                                                 <div class="">
                                                     
                                                     <div class="cstm-btn">
                                                         <a href="javascript:void(0)" data-url="{{ route('addCart', $product->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart" data-original-title="Add to Cart">
                                                             <i class="fa fa-shopping-cart"></i>
                                                         </a>


                                                         <a href="{{ route('client.wishList', $product->id) }}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                             <i class="fa fa-heart"></i>
                                                         </a>
                                                         <a href="tel:9807573751" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="call us now">
                                                             <i class="fa fa-phone"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                        </div>
                    </div>
                </main>
                  @else
                  <h4 align="center" style="margin-top: 20%;">sorry product is not inserted to this page</h4>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection