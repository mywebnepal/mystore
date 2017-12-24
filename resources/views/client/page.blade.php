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
                                   <a href="#adv-search" data-toggle="collapse" class="text-sm collapsed" aria-expanded="false">advanced search</a> 
                                 </form>
                               </div>
                               <div class="col-lg-6">
                                 <form class="form-inline justify-content-lg-end text-sm">
                                   <label class="control-label mr-2">Sort By:</label>
                                   <select class="form-control form-control-sm">
                                     <option value="#">Name (A - Z)</option>
                                     <option value="#">Name (Z - A)</option>
                                     <option value="#">Price (Low &gt; High)</option>
                                     <option value="#" selected="">Price (High &gt; Low)</option>
                                     <option value="#">Rating (Highest)</option>
                                     <option value="#">Rating (Lowest)</option>
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
                               <div class="col-lg-12 collapse" id="adv-search" style="">
                                 <!-- Advanced search form -->
                                 <form class="mt-3 bg-faded p-3 rounded mb-4 text-sm">
                                   <div class="row">
                                     <div class="col-md-6 mb-3">
                                       <label>Category</label>
                                       <select class="form-control">
                                         <option value="#">Mens</option>
                                         <option value="#">Womens</option>
                                         <option value="#">Childrens</option>
                                         <option value="#">Baby</option>
                                       </select>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                       <label>Brand</label>
                                       <select class="form-control">
                                         <option value="#">Brand 1</option>
                                         <option value="#">Brand 2</option>
                                         <option value="#">Brand 3</option>
                                         <option value="#">Brand 4</option>
                                       </select>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                       <label>Price</label>
                                       <div class="row">
                                         <div class="input-group col-md-6">
                                           <span class="input-group-addon">$</span> 
                                           <input type="text" class="form-control" placeholder="from">
                                         </div>
                                         <div class="input-group col-md-6">
                                           <span class="input-group-addon">$</span> 
                                           <input type="text" class="form-control" placeholder="to">
                                         </div>
                                       </div>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                       <label>Size</label>
                                       <select class="form-control">
                                         <option value="#">Small</option>
                                         <option value="#">Medium</option>
                                         <option value="#">Large</option>
                                         <option value="#">Extra Large</option>
                                       </select>
                                     </div>
                                     <div class="col-md-12">
                                       <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i> Search </button>
                                     </div>
                                   </div>
                                 </form>
                               </div>
                             </div>
                     </div>
                     <div class="card-body">
                         <div class="row">
                         <?php  
                            $grouped = $myProduct->groupBy('sub_categories_id');
                            /* $grouped->dump();*/
                            
                            /* echo '<pre>';
                                  print_r($grouped);
                            echo '</pre>';*/

                            /*$myProduct->dump();*/
                           
                           ?>
                             @foreach($myProduct as $product)
                             <div class="col-md-6 col-lg-4">
                                 <div class="product-item">
                                     <div class="img-wrap">
                                         <a href="#">
                                             <img src="{{ asset($product->featured_img_sm) }}" class="img-fluid" alt="{{ $product->name }}">
                                         </a>
                                     </div>
                                     <div class="product-prices-info">
                                         <h5 align="center"><a href="{{ route('product.single', $product->product_slug) }}">{{ $product->name }}</a></h5>
                                         <div class="d-flex justify-content-between align-items-end">
                                             <div class="">
                                                 @if($product->discount)
                                                 <?php 
                                                     $disPrice     =  $product->price * $product->discount / 100;  
                                                     $disShowPrice =  $product->price - $disPrice;
                                                  ?>
                                                   <div class="item-price">Rs. {{ $disShowPrice }}</div>
                                                   <div class="item-price-before-discount">
                                                        Rs. {{ $product->price }}
                                                        </div>
                                                 @else

                                                 <div class="item-price">Rs. {{ $product->price }}</div>
                                
                                                 @endif
                                             </div>
                                             <div class="">
                                                 <div>
                                                     <fieldset class="rating">
                                                         <input type="radio" id="star5" name="rating" value="5">
                                                         <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                         <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                         <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                         <input type="radio" id="star4" name="rating" value="4">
                                                         <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                         <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                         <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                         <input type="radio" id="star3" name="rating" value="3">
                                                         <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                         <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                         <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                         <input type="radio" id="star2" name="rating" value="2">
                                                         <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                         <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                         <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                         <input type="radio" id="star1" name="rating" value="1">
                                                         <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                         <input type="radio" id="starhalf" name="rating" value="half">
                                                         <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                     </fieldset>
                                                 </div>
                                                 <div class="cstm-btn">
                                                     <a href="#" data-url="{{ route('addCart', $product->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart" data-original-title="Add to Cart">
                                                         <i class="fa fa-shopping-cart"></i>
                                                     </a>


                                                     <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                         <i class="fa fa-heart"></i>
                                                     </button>
                                                     <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                                         <i class="fa fa-signal"></i>
                                                     </button>
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