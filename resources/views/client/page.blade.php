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
                @if(count($myProduct) > 0)
                 <main class="card border-0 rounded-0 main">
                     <div class="card-header">
                         <div class="row">
                               <div class="col-lg-6 mb-3 mb-lg-0">
                                 <form class="form-inline justify-content-lg-start text-sm">
                                   <label class="control-label mr-2">Keyword:</label>
                                   <input type="text" class="form-control form-control-sm mr-lg-2" placeholder="ie. Calvin Klein">
                                 </form>
                               </div>
                               <div class="col-lg-6">
                                 <form class="form-inline justify-content-lg-end text-sm">
                                   <label class="control-label mr-2">Sort By:</label>
                                   <select class="form-control form-control-sm">
                                    
                                     <option value="#">Price (Low &gt; High)</option>
                                     <option value="#" selected="">Price (High &gt; Low)</option>
                                   </select>
                                   <label class="control-label mr-2 ml-lg-3">Show:</label>
                                   <select class="form-control form-control-sm">
                                     <option value="#">15</option>
                                     <option value="#">20</option>
                                     <option value="#">25</option>
                                     <option value="#">30</option>
                                     <option value="#">35</option>
                                     <option value="#">40</option>
                                     <option value="#">45</option>
                                     <option value="#">50</option>
                                   </select>
                                 </form>
                               </div>
                               
                             </div>
                     </div>
                     <div class="card-body">
                         <div class="row">
                             @foreach($newProductListBySubCategory as $cat)
                             <div class="col-md-12 col-lg-12" style="padding: 0.5em 0em; margin:0.5em 0em; text-align: center; text-transform: uppercase; background: #247a09; color: #FFFFFF;">
                             @if(isset($cat['subcat'])) 
                                {{ $cat['subcat']->name}}
                             @else
                                Others
                            @endif
                             </div>
                             @if($cat['products'])
                             @foreach($cat['products'] as $product)
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
                             @endif
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