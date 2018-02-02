   @extends('layouts.master')
   @section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
   @section('content')
   <!-- model example -->
    <!-- Modal -->
    <div id="myFlaxBox" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content" style="background: #247a09; margin-top: 3em;">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="faceboxContain">
              <h3 align="center">What do you want ?</h3>
                <p align="center"><a href="/booking/hotelBooking"><button class="btn btn-success">Hotel Booking</button></a></p>
                <p align="center"><a href="/event-list"><button class="btn btn-success">Event Ticketing</button></a></p>
                <p align="center"><a href="/page/nepal_handcrift"><button class="btn btn-success">Nepal Handscript</button></a></p>
                <p align="center"><a href="/page/men_mrt"><button class="btn btn-success">Men Fashion</button></a></p>
                <p align="center"><a href="/page/women_mrt"><button class="btn btn-success">Women Fashion</button></a></p>
              </div>
          <p class="pull-right">
            Save your time pure booking system....
          </p>
          </div>
        </div>
      </div>
    </div>
   <!-- model example -->

    <section id="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 mt-3">
                    <div class="second-content position-relative">
                        <ul class="nav nav-pills mb-3 bg-white" id="pills-tab" role="tablist">
                            <li class="nav-item nav-justified">
                                <a class="nav-link active" id="pills-new-arrivals-tab" data-toggle="pill" href="#pills-new-arrivals" role="tab" aria-controls="pills-new-arrivals" aria-expanded="true">
                                   New Arrival
                                </a>
                            </li>
                            <li class="nav-item nav-justified">
                                <a class="nav-link" id="pills-discount-items-tab" data-toggle="pill" href="#pills-discount-items" role="tab" aria-controls="pills-discount-items" aria-expanded="true">
                                   Discount Item
                                </a>
                            </li>
                        </ul>
                        @if(Session::has('message'))
                             <div class="row siteInfo">
                                 <div class="alert alert-success col-sm-12">
                                     {{ Session::get('message') }}
                                 </div>
                             </div>
                        @endif
                        <div class="row"></div>
                        <div class="tab-content bg-white mb-sm-4" id="first-pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-new-arrivals" role="tabpanel" aria-labelledby="pills-new-arrivals-tab">
                                <div class="">
                                    <div class="">
                                        <div class="owl-carousel owl-theme second-sec-main-banner">
                                            @if(count($myLatestProduct) > 0)
                                                @foreach($myLatestProduct as $latest)
                                                      <div class="item">
                                                <div class="product-item">
                                                    <div class="img-wrap">
                                                        <a href="{{ route('product.single', $latest->product_slug) }}">
                                                            <img src="{{ asset($latest->featured_img_sm) }}" class="img-fluid" alt="{{ $latest->name }}">
                                                        </a>
                                                        <div class="tag new">
                                                            new
                                                        </div>
                                                    </div>
                                                    <div class="product-prices-info">
                                                        <p><a href="{{ route('product.single', $latest->product_slug) }}" class="product-title">{{ $latest->name }}</a></p>
                                                        <p class="text-right text-muted">
                                                            <small>Product Code: {{ $latest->sku }}</small>
                                                        </p>
                                                        <div class="d-flex justify-content-between align-items-end">
                                                            <div class="">
                                                               @if($latest->discount)
                                                                   <div class="item-price">
                                                                   Rs. {{ getDiscountPrice($latest->price, $latest->discount) }}
                                                                   </div>

                                                                   <div class="item-price-before-discount">Rs. {{ $latest->price }}</div>
                                                                   @else
                                                                   <div class="item-price">Rs. {{ $latest->price }}</div>
                                                               @endif
                                                            </div>
                                                            <div class="">
                                                                <div class="cstm-btn">
                                                                   <a href="{{ route('product.single', $latest->product_slug) }}" class="btn btn-success btn-sm">View Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @endforeach
                                                @else
                                                <h4>Please wait we are uploading this product</h4>
                                            @endif
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- product discount -->
                            <div class="tab-pane fade" id="pills-discount-items" role="tabpanel" aria-labelledby="pills-discount-items-tab">
                                <div class="">
                                    <div class="owl-carousel owl-theme second-sec-main-banner">
                                        @if(count($mydiscountProduct) > 0)
                                            @foreach($mydiscountProduct as $discountPrd)
                                         <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="{{ route('product.single', $discountPrd->product_slug) }}" class="product-title">
                                                        <img src="{{ asset($discountPrd->featured_img_sm) }}" class="img-fluid" alt="{{ $discountPrd->name }}">
                                                    </a>
                                                    @if($discountPrd->discount)
                                                    <div class="sale-offer-tag">
                                                        <span>{{ $discountPrd->discount }}%<br>OFF</span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="{{ route('product.single', $discountPrd->product_slug) }}" class="product-title" data-url="{{ route('mostViewProduct', $discountPrd->id) }}" data-id="{{ $discountPrd->id }}">{{ $discountPrd->name  }}</a></p>
                                                    <p class="text-right text-muted">
                                                        <small>Product Code: {{ $discountPrd->sku }}</small>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                           @if($discountPrd->discount)
                                                               <div class="item-price">
                                                                    Rs. {{ getDiscountPrice($discountPrd->price, $discountPrd->discount) }}
                                                               </div>
                                                            <div class="item-price-before-discount">
                                                               Rs. {{ $discountPrd->price }}
                                                               </div>

                                                               @else
                                                                <div class="item-price">
                                                                   Rs.{{ $discountPrd->price }}
                                                                </div>
                                                           @endif
                                                        </div>
                                                        <div class="">
                                                            <div class="cstm-btn">
                                                                <a href="{{ route('product.single', $discountPrd->product_slug) }}" class="btn btn-success btn-sm">View Details</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="third-section">
        <div class="container">
            <aside class="aside-left card rounded-0 border-0 mb-4">
                <div class="card-header bg-white">
                    <div class="card-title mb-0">
                        FEATURED PRODUCTS
                    </div>
                </div>
                <div class="card-body">
                    <div class="owl-carousel featured-products owl-theme custom-control-top">
                       @if(count($myfeaturedPrd) > 0)
                         @foreach($myfeaturedPrd as $featured)
                           <div class="item">
                            <div class="product-item">
                                <div class="img-wrap">
                                    <a href="{{ route('product.single', $featured->product_slug) }}">
                                        <img src="{{ asset($featured->featured_img_sm) }}" class="img-fluid" alt="{{ $featured->name }}">
                                    </a>
                                    @if($featured->discount)
                                      <div class="sale-offer-tag">
                                          <span>{{ $featured->discount }}%<br>OFF</span>
                                      </div>
                                      @endif
                                </div>
                                <div class="product-prices-info">
                                    <p><a href="{{ route('product.single', $featured->product_slug) }}" class="product-title"><h5>{{ $featured->name }}</h5></a></p>
                                    <p class="text-right text-muted">
                                        <small>Product Code: {{ $featured->sku }}</small>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="">
                                        @if(isset($featured->discount))
                                            <div class="item-price">
                                                <?php  
                                                     $price = getDiscountPrice($featured->price, $featured->discount); 
                                                     echo 'Rs '. $price  
                                                ?>
                                            </div>
                                            <div class="item-price-before-discount">Rs. {{ $featured->price }}</div>
                                            @else
                                            <div class="item-price">
                                              Rs. {{ $featured->price }}
                                            </div>
                                        @endif
                                        </div>
                                        <div class="">
                                            <div class="cstm-btn">
                                                <a href="{{ route('product.single', $featured->product_slug) }}" class="btn btn-success btn-sm">View Details</a>
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
            </aside>
            <!-- End HOT DEALS -->
        </div>
    </section>
    <section id="fifth-section">
        <div class="container">
            <div class="card rounded-0 border-0">
                <div class="card-body">
                    <div class="card-title mb-0">
                        Product you may also like
                    </div>
                    <div class="row">
                        <div class="col-md-8 four-image-styled">
                            <div class="row">
                                @if(count($myAppr) > 0)
                                   @foreach($myAppr as $app)
                                      <div class="col-md-6">
                                          <div class="card rounded-0 border-0 mb-4">
                                              <div class="product-item">
                                                  <div class="img-wrap">
                                                  <a href="{{ route('product.single', $app->product_slug) }}">
                                                      <img src="{!! asset($app->product_image) !!}" alt="{{ $app->name }}" class="card-img">
                                                      </a>
                                                      @if($app->discount)
                                                      <div class="sale-offer-tag">
                                                          <span>{{ $app->discount }}%<br>OFF</span>
                                                      </div>
                                                      @endif
                                                      <div>{{ $app->categories->name }}</div>
                                                  </div>
                                                  <div class="card-img-overlay">
                                                      <a href="{{ route('product.single', $app->product_slug) }}" class="btn rounded-0 bg-white theme-color">
                                                          {{ $app->name }}
                                                        
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div> 
                                   @endforeach
                                   @else
                                   <h4>Oops there is no appreance data in store</h4>
                                @endif
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-0 border-0">
                                <a href="#">
                                    <div class="product-item">
                                        <div class="img-wrap">
                                            <img class="card-img" src="http://via.placeholder.com/400x825" alt="Card image">
                                        </div>
                                        <div class="card-img-overlay">
                                            <button class="btn rounded-0 bg-white theme-color">
                                                MEN'S WEAR
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="fourth-section" class="brands-slider-inner my-5 pt-3">
        <div class="container">
            <div class="owl-carousel owl-theme brands-slider custom-control-center">
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand5.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand6.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <a href="#">
                            <img src="img/brands-logo/brand1.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
 @endsection
 @section('custom_script')
<script type="text/javascript">
     $("#myFlaxBox").modal();
    $('.siteInfo').fadeOut(3000);
</script>
 @endsection




  