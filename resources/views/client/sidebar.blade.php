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
                         <?php    $myLatestProduct = latestProduct();   ?>
                             @if(count($myLatestProduct) > 0)
                                @foreach($myLatestProduct as $lastPrd)
                                     <div class="item">
                                         <div class="product-item">
                                             <div class="img-wrap">
                                                 <a href="{{ route('product.single', $lastPrd->product_slug) }}">
                                                     <img src="{{ asset($lastPrd->featured_img_sm) }}" alt="{{ $lastPrd->name }}">
                                                 </a>

                                                 @if($lastPrd->discount)
                                                 <div class="sale-offer-tag">
                                                     <span>{{ $lastPrd->discount }}%<br>OFF</span>
                                                 </div>
                                                 @endif


                                             </div>
                                             <div class="product-prices-info">
                                                 <p><a href="#">{{ $lastPrd->name }}</a></p>
                                                 <p class="text-right text-muted">
                                                  <small>Product Code: {{ $lastPrd->sku }}</small>
                                                 </p>
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
                                                         <div class="cstm-btn">
                                                            
                                                             <a href="{{ route('product.single', $lastPrd->product_slug) }}" class="btn btn-success btn-sm">View Details</a>

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
                                 <?php $myBrandName =  getBrandName();    ?>
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