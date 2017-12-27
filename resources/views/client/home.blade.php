   @extends('layouts.master')
   @section('content')
   
    <!-- =============================================================
         END HERO SECTION
     ==============================================================-->
    <!-- =============================================================
         SECOND SECTION
     ==============================================================-->
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
                           <!--  <li class="nav-item nav-justified">
                                <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#pills-offers-items" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
                                   Offer Iteam
                                </a>
                            </li> -->
                        </ul>
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
                                                        <a href="#">
                                                            <img src="{{ asset($latest->featured_img_sm) }}" class="img-fluid" alt="">
                                                        </a>
                                                        <div class="tag new">
                                                            new
                                                        </div>
                                                    </div>
                                                    <div class="product-prices-info">
                                                        <p><a href="{{ route('product.single', $latest->product_slug) }}">{{ $latest->name }}</a></p>
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
                                                            
                                                                <!-- <span class="item-offer">Rs. 1550</span> -->
                                                            </div>
                                                            <div class="">
                                                                <div>
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="cstm-btn">
                                                                    <a href="javascript:void(0)" data-url="{{ route('addCart', $latest->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>

                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </button>
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
                            <div class="tab-pane fade" id="pills-offers-items" role="tabpanel" aria-labelledby="pills-offers-items-tab">
                                <div class="">
                                    <div class="owl-carousel owl-theme second-sec-main-banner">
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="#">
                                                        <img src="img/08.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="tag new">
                                                        new
                                                    </div>
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                            <div class="item-price">Rs. 1550</div>
                                                            <div class="item-price-before-discount">Rs. 1550</div>
                                                            <!-- <span class="item-offer">Rs. 1550</span> -->
                                                        </div>
                                                        <div class="">
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="#">
                                                        <img src="img/01.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="tag hot">
                                                        new
                                                    </div>
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                            <div class="item-price">Rs. 1550</div>
                                                            <div class="item-price-before-discount">Rs. 1550</div>
                                                            <!-- <span class="item-offer">Rs. 1550</span> -->
                                                        </div>
                                                        <div class="">
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="#">
                                                        <img src="img/04.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="tag sale">
                                                        new
                                                    </div>
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                            <div class="item-price">Rs. 1550</div>
                                                            <div class="item-price-before-discount">Rs. 1550</div>
                                                            <!-- <span class="item-offer">Rs. 1550</span> -->
                                                        </div>
                                                        <div class="">
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="#">
                                                        <img src="img/05.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="tag hot">
                                                        new
                                                    </div>
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                            <div class="item-price">Rs. 1550</div>
                                                            <div class="item-price-before-discount">Rs. 1550</div>
                                                            <!-- <span class="item-offer">Rs. 1550</span> -->
                                                        </div>
                                                        <div class="">
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="img-wrap">
                                                    <a href="#">
                                                        <img src="http://via.placeholder.com/700x700" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="tag hot">
                                                        new
                                                    </div>
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="#">Lorem ipsum dolor sit amet.</a></p>
                                                    <div class="d-flex justify-content-between align-items-end">
                                                        <div class="">
                                                            <div class="item-price">Rs. 1550</div>
                                                            <div class="item-price-before-discount">Rs. 1550</div>
                                                            <!-- <span class="item-offer">Rs. 1550</span> -->
                                                        </div>
                                                        <div class="">
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <a href="{{ route('product.single', $discountPrd->product_slug) }}">
                                                        <img src="{{ asset($discountPrd->featured_img_sm) }}" class="img-fluid" alt="">
                                                    </a>
                                                    @if($discountPrd->discount)
                                                    <div class="sale-offer-tag">
                                                        <span>{{ $discountPrd->discount }}<br>OFF</span>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="product-prices-info">
                                                    <p><a href="{{ route('product.single', $discountPrd->product_slug) }}" class="addViewProduct" data-url="{{ route('mostViewProduct', $discountPrd->id) }}" data-id="{{ $discountPrd->id }}">{{ $discountPrd->name  }}</a></p>
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
                                                            <div>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="cstm-btn">
                                                                <a href="javascript:void(0)" data-url="{{ route('addCart', $discountPrd->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <!--  -->
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                                    <i class="fa fa-signal"></i>
                                                                </button>
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
    <!-- =============================================================
         END SECOND SECTION
     ==============================================================-->
    <!-- =============================================================
         Third SECTION
     ==============================================================-->
    <section id="third-section">
        <div class="container">
            <?php 

                // var_dump($myfeaturedPrd);
            ?>
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
                                    <a href="#">
                                        <img src="{{ asset($featured->featured_img_sm) }}" class="img-fluid" alt="{{ $featured->name }}">
                                    </a>
                                </div>
                                <div class="product-prices-info">
                                    <p><a href="{{ route('product.single', $featured->product_slug) }}"><h5>{{ $featured->name }}</h5></a></p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="">
                                        @if(isset($featured->discount))
                                            <div class="item-price">
                                                <?php  
                                                     $price = getPriceAfterDiscount($featured->price, $featured->discount); 
                                                     echo 'RS'. $price  
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
                                            <div>
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                </fieldset>
                                            </div>
                                            <div class="cstm-btn">
                                                <a href="javascript:void(0)" data-url="{{ route('addCart', $featured->id) }}" type="button" class="btn btn-primary btn-sm btnAddToCart" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Compare">
                                                    <i class="fa fa-signal"></i>
                                                </button>
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

    <!-- =============================================================
        End Third SECTION
     ==============================================================-->

    

     <!-- =============================================================
         Fourth SECTION
     ==============================================================-->
    <section id="fifth-section">
        <div class="container">
            <div class="card rounded-0 border-0">
                <div class="card-body">
                    <div class="card-title mb-0">
                        MOST VIEWED PRODUCTS
                    </div>
                    <div class="row">
                        <div class="col-md-8 four-image-styled">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card rounded-0 border-0 mb-4">
                                        <a href="#">
                                        <div class="product-item">
                                            <div class="img-wrap">
                                                <img class="card-img" src="img/products/p24.jpg" alt="Card image">
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
                                <div class="col-md-6">
                                    <div class="card rounded-0 border-0 mb-4">
                                        <a href="#">
                                        <div class="product-item">
                                            <div class="img-wrap">
                                                <img class="card-img" src="img/products/p24.jpg" alt="Card image">
                                            </div>
                                            <div class="card-img-overlay">
                                                <button class="btn rounded-0 bg-white theme-color">
                                                    KID'S WEAR
                                                </button>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card rounded-0 border-0 mb-4">
                                        <a href="#">
                                        <div class="product-item">
                                            <div class="img-wrap">
                                                <img class="card-img" src="img/products/p24.jpg" alt="Card image">
                                            </div>
                                            <div class="card-img-overlay">
                                                <button class="btn rounded-0 bg-white theme-color">
                                                    WOMEN'S WEAR
                                                </button>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="card rounded-0 border-0 mb-4">
                                        <a href="#">
                                        <div class="product-item">
                                            <div class="img-wrap">
                                                <img class="card-img" src="img/products/p18.jpg" alt="Card image">
                                            </div>
                                            <div class="card-img-overlay">
                                                <button class="btn rounded-0 bg-white theme-color">
                                                    HOME $ LIVING
                                                </button>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
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

     <!-- =============================================================
         End Fourth SECTION
     ==============================================================-->
    

     <!-- =============================================================
         Fifth SECTION
     ==============================================================-->
    <section id="fourth-section" class="brands-slider-inner my-5 pt-3">
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
    </section>
    <?php
        function getPriceAfterDiscount($productPrice, $discountPercent){
        $disAmt = $productPrice * $discountPercent / 100;
        $disPriceAmount = $productPrice-$disAmt;
        return $disPriceAmount;
        }
    ?>
 @endsection

  