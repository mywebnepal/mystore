<div class="col-md-4 col-lg-3">
                 <div class="card rounded-0 border-0 mb-4 left-side-bar">
                     
                     <div class="card-header bg-white" style="margin-bottom: 1em;">
                         <div class="card-title mb-0">
                             {{ $page['page_title'] }}
                         </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="card-body">
                         <div class="owl-carousel hot-deals owl-theme custom-control-top">
                             @if(count($myLatestProduct) > 0)
                                @foreach($myLatestProduct as $lastPrd)
                                     <div class="item">
                                         <div class="product-item">
                                             <div class="img-wrap">
                                                 <a href="#">
                                                     <img src="{{ asset($lastPrd->featured_img_sm) }}" alt="">
                                                 </a>

                                                 @if($lastPrd->discount)
                                                 <div class="sale-offer-tag">
                                                     <span>{{ $lastPrd->discount }}%<br>OFF</span>
                                                 </div>
                                                 @endif


                                             </div>
                                             <div class="product-prices-info">
                                                 <p><a href="#">{{ $lastPrd->name }}</a></p>
                                                 <div class="d-flex justify-content-between align-items-end">
                                                     <div class="">
                                                         @if($lastPrd->discount)
                                                         <div class="item-price">Rs.{{ $lastPrd->price }}</div>

                                                         <div class="item-price-before-discount">Rs. {{ getDiscountPrice($lastPrd->price, $lastPrd->discount) }}</div>
                                                            @else
                                                            <div class="item-price">Rs.{{ $lastPrd->price }}</div>
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
                                                            <button type="button" class="btn btn-primary btn-sm"   data-toggle="tooltip" data-placement="top" title="Add Cart">
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
                                @endforeach
                             @endif
                         </div>

                         <div class="item-container" style="margin-top: 1em;">
                             <p class="sub-header mb-1">
                                 Brand
                             </p>
                             <div class="manufacture-content">
                                 <div class="custom-controls-stacked">
                                 @if(count($myBrandName) > 0)
                                    @foreach($myBrandName as $brand)
                                         <label class="custom-control custom-checkbox">
                                               <input type="button" class="custom-control-input">
                                             <span class="custom-control-indicator"></span>
                                             <span class="custom-control-description">{{ $brand->name }}</span>
                                         </label>
                                    @endforeach
                                 @endif
                                 <div class="clearfix"></div>
                                 </div>
                             </div>                          
                         </div>
                     </div>
                 </div>
             </div>