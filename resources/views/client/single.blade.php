@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
   @section('content')
   <section id="detail-page">
        <div class="container">
            <div class="row">
                @include('client.sidebar')
                <div class="col-md-9">
                    <div class="card border-0 rounded-0 mb-3 mb-md-4">
                        <div class="card-body">
                        <div class="row">
                        @if($mySingleProduct)
                          <div class="col-md-5 col-lg-5">
                            <div class="xzoom-container">
                              <img class="xzoom" id="xzoom-default" src="{{ asset($mySingleProduct->featured_img_sm) }}" xoriginal="{{ asset($mySingleProduct->featured_img_sm) }}" />
                              <div class="xzoom-thumbs">
                                <a href="{{ asset($mySingleProduct->featured_img_sm) }}">
                                <img class="xzoom-gallery" width="80" src="{{ asset($mySingleProduct->featured_img_sm) }}" title="{{ $mySingleProduct->name }}"></a>
                                <a href="{{ asset($mySingleProduct->featured_img_lg) }}">
                                  <img class="xzoom-gallery" width="80" src="{{asset($mySingleProduct->featured_img_lg)}}"  xpreview="{{ asset($mySingleProduct->featured_img_lg) }}" title="{{ $mySingleProduct->name }}">
                                 </a>
                                <a href="{{ asset($mySingleProduct->product_image) }}">
                                <img class="xzoom-gallery" width="80" src="{{ asset($mySingleProduct->product_image) }}" title="{{ $mySingleProduct->name }}"></a>
                                
                              </div>
                            </div>        
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-7 col-lg-7" style="display: block;">
                               <h3 class="mb-3">{{ $mySingleProduct->name }}</h3>
                               <div class="row reviews-content">
                                   <div class="col-md-6">
                                       <ul class="list-inline d-flex mb-0">
                                           <li class="list-inline-item">
                                               <div class="">
                                                   <!-- <a href="#">(11 reviews)</a> -->
                                               </div>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="col-md-6">
                                       <p class="availability-info mb-0">
                                           Availability: <span><i class="fa fa-check-square-o mr-1" aria-hidden="true"></i> In stock</span>
                                       </p>
                                   </div>
                               </div>
                               
                               <p class="product-info d-none d-md-block">
                                   {{ $mySingleProduct->description }}
                               </p>
                               <div class="color-and-size-container">
                                   <div class="row">
                                      
                                       <div class="col-md-12">
                                           <div class="form-group float-md-left">
                                               <label for="exampleFormControlInput1 d-block">Size</label>
                                               <div>
                                                   <button type="button" class="btn btn-outline-secondary btn-sm rounded-0">S</button>
                                                   <button type="button" class="btn btn-outline-secondary btn-sm rounded-0">M</button>
                                                   <button type="button" class="btn btn-outline-secondary btn-sm rounded-0">L</button>
                                                   <button type="button" class="btn btn-outline-secondary btn-sm rounded-0">XL</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card card-body px-0 rounded-0 border-left-0 border-right-0 mb-3 price-box">
                                   <div class="row">
                                       <div class="col-md-6">
                                       @if($mySingleProduct->discount)
                                             <span class="item-price h2 theme-color">Rs.
                                             {{ getDiscountPrice($mySingleProduct->price, $mySingleProduct->discount) }}
                                             </span>

                                             <div class="item-price-before-discount">
                                             Rs. {{ $mySingleProduct->price }}
                                             </div> 
                                          @else
                                             <span class="item-price h2 theme-color">Rs. {{ $mySingleProduct->price }}</span>
                                       @endif
                                       </div>
                                       <div class="col-md-6">
                                           <div class="cstm-btn text-md-right mt-2 mt-md-0">
                                                   <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                                                       <i class="fa fa-heart"></i>
                                                   </button>

                                                   <a href="tel:9807573751" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Call us now">
                                                       <i class="fa fa-phone"></i>
                                                   </a>

                                                    <button type="button" class="btn btn-primary"  data-placement="top" title="" data-original-title="Email" data-toggle="modal" data-target="#customerForm">
                                                       <i class="fa fa-envelope"></i>
                                                   </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="quantity-container cstm-btn">
                                   <form class="form-inline justify-content-between justify-content-md-start">
                                       
                                       <div class="form-group">
                                       
                                           <a href="javascript:void(0)" data-url="{{ route('addCart', $mySingleProduct->id) }}" type="button" class="btn btn-primary btnAddToCart" class="btn btn-primary">
                                             <i class="fa fa-shopping-cart mr-2"></i>
                                             ADD TO CART
                                         </a>
                                       </div>
                                   </form>
                               </div>
                          </div>
                        </div>
                            
                        </div>
                    </div>
                    <article class="cstm-horizontal-nav-pills">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="second-content position-relative">
                                    <ul class="nav nav-pills mb-3 bg-white" id="pills-tab" role="tablist">
                                        <li class="nav-item nav-justified">
                                            <a class="nav-link active" id="pills-new-description-tab" data-toggle="pill" href="#pills-new-description" role="tab" aria-controls="pills-new-description" aria-expanded="true">
                                                description
                                            </a>
                                        </li>
                                        <li class="nav-item nav-justified">
                                            <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#pills-offers-items" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
                                                Comment
                                            </a>
                                        </li>

                                        <li class="nav-item nav-justified">
                                            <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#product-vedio" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
                                                Product Vedio
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content bg-white mb-sm-2 mb-md-4" id="first-pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-new-description" role="tabpanel" aria-labelledby="pills-new-description-tab">
                                            <div class="">
                                                <p class="mb-2">
                                                    <small><strong>Featured Description</strong></small>
                                                </p>
                                                <p>
                                                    {!! $mySingleProduct->featured !!}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-offers-items" role="tabpanel" aria-labelledby="pills-offers-items-tab">
                                           @if(count($myProductComment) > 0)
                                               @foreach($myProductComment as $comment)
                                                   <dl>
                                                     <dt>
                                                     <span>
                                                         <i class="fa fa-user-o" aria-hidden="true"></i>

                                                     </span>{{ $comment->email }}</dt>
                                                     <dd>{{ $comment->comment }}</dd>
                                                   </dl>
                                               @endforeach
                                           @endif
                                           
                                            <div class="">
                                                {!! Form::open(['url'=>route('product.comment'), 'id'=>'prdComment']) !!}
                                                    {!! Form::hidden('product_id',$mySingleProduct->id , ['class'=>'commentForm']) !!}
                                                     @if (Auth::check())
                                                        <div class="form-group float-label-control">
                                                             <h4>Hai, {{ Auth::user()->name }} 
                                                             <small>Please comment this product</small>
                                                             </h4>
                                                        </div>
                                                        {!! Form::hidden('usr_id', Auth::user()->id, ['class'=>'form-control']) !!}

                                                     @else
                                                          <div class="form-group float-label-control">
                                                           {!! Form::text('user_email', null, ['class'=>'form-control', 'placeholder'=>'Your email address']) !!}
                                                        </div>          
                                                     @endif
                                                     
                                                     <div class="form-group float-label-control">
                                                      {!! Form::textarea('comment', null, ['class'=>'form-control', 'placeholder'=>'Your comment', 'rows'=>'3']) !!}
                                                      </div>

                                                      <div class="form-group float-label-control">
                                                         <p class="pull-right">
                                                             {!! Form::submit('submit', ['class'=>'btn btn-info btn-sm']) !!}
                                                         </p>
                                                      </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="product-vedio" role="tabpanel" aria-labelledby="product-vedio">
                                            <div class=""> 
                                            <h4>{{ $mySingleProduct->name }}</h4>
                                            @if($mySingleProduct->vedio_link)
                                                {!! $mySingleProduct->vedio_link !!}
                                                @else
                                                <h4>Oops there is no vedio related to this product</h4>
                                            @endif
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                                @endif
                    </article>
                    <article class="aside-left card rounded-0 border-0 mb-4">
                        <div class="card-header bg-white">
                            <div class="card-title mb-0">
                                SIMILAR PRODUCTS
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel featured-products owl-theme custom-control-top">
                                @if(count($myProductByCategory) > 0)
                                     @foreach($myProductByCategory as $prdCat)
                                        <div class="item">
                                    <div class="product-item">
                                        <div class="img-wrap">
                                            <a href="#">
                                                <img src="{{ asset($prdCat->featured_img_sm) }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="product-prices-info">
                                            <p><a href="{{ route('product.single', $prdCat->product_slug) }}">{{ $prdCat->name }}</a></p>
                                            <div class="d-flex justify-content-between align-items-end">
                                                 <div class="">
                                                      @if($prdCat->discount)
                                     
                                                        <div class="item-price">Rs. {{ getDiscountPrice($prdCat->price, $prdCat->discount) }}</div>
                                                        <div class="item-price-before-discount">
                                                             Rs. {{ $prdCat->price }}
                                                             </div>
                                                      @else

                                                      <div class="item-price">Rs. {{ $prdCat->price }}</div>
                                     
                                                      @endif
                                                  </div>
                                                <div class="">
                                                    
                                                    <div class="cstm-btn">
                                                        <a href="javascript:void(0)" data-url="{{ route('addCart', $prdCat->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart" data-original-title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>


                                                            <a href="{{ route('client.wishList', $prdCat->id) }}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
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
                            </div>
                        </div>
                    </article>

                    <!--  -->

                    <!--  -->
                </div>
            </div>
        </div>
    </section>
@endsection
