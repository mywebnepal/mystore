@extends('layouts.master')
   @section('content')
       <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-0 border-0">
                        <!-- <h4 class="card-header bg-transparent text-center">LOGO HERE</h4> -->
                        <div class="card-body pt-4">
                            <div class="cart-content">
                                  <!--Shopping cart items-->
                                  <?php
                                        /*echo '<pre>';
                                               print_r($products);
                                        echo '</pre>';*/
                                  ?>
                                  @if(Session::has('cart'))
                                  <table class="table table-responsive mb-0 cart-table">
                                    <thead>
                                      <tr>
                                        <th class="w-5"></th>
                                        <th class="w-10"></th>
                                        <th class="w-20">Item</th>
                                        <th class="w-20">Unit Price</th>
                                        <th class="w-20">Quantity</th>
                                        <th class="w-20 text-md-right">Total</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <!-- Cart item 1 -->
                                      @if(count($products) > 0)
                                      @foreach($products as $product)

                                      <tr>
                                        <td class="text-center align-middle">
                                          <a href="#" class="close cart-remove"> <i class="fa fa-times"></i> </a>
                                        </td>
                                        <td class="text-center">
                                          <a href="#">
                                            <img class="cart-img img-fluid" src="{{ asset($product['item']['featured_img_sm']) }}" alt="Product 1">
                                          </a>
                                        </td>
                                        <td> <span class="font-weight-bold">{{ $product['item']['name'] }}</span> </td>
                                        <td>{{ $product['item']['price'] }}</td>
                                        <td>
                                          <div class="input-group input-group-quantity" data-toggle="quantity">
                                            <span class="input-group-btn">
                                              <input type="button" value="-" class="btn btn-secondary quantity-down" field="quantity">
                                            </span>
                                            <input type="text" name="quantity" value="{{ $product['qty'] }}" class="quantity form-control">
                                            <span class="input-group-btn">
                                              <input type="button" value="+" class="btn btn-secondary quantity-up" field="quantity">
                                            </span>
                                          </div>
                                        </td>
                                        <td class="text-md-right"><span class="font-weight-bold">Rs.{{ $product['price'] }}</span></td>
                                      </tr>
                                      @endforeach
                                      @endif
                                    </tbody>
                                  </table>

                                  <!--End of Shopping cart items-->
                                  <hr class="my-4 hr-lg">
                                  <div class="cart-content-footer">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <h6 class="text-muted mb-3">
                                          All prices are including VAT
                                        </h6>
                                        <!-- Discount form -->
                                        <form action="#" role="form">
                                          <div class="input-group">
                                            <label class="sr-only" for="discount">Discount code</label>
                                            <input type="tel" class="form-control" id="discount" placeholder="Discount code">
                                            <span class="input-group-btn">
                                              <button class="btn btn-inverse" type="button">Go</button>
                                            </span>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-md-8 text-md-right mt-3 mt-md-0">
                                        <div class="cart-content-totals">
                                          <h4 class="font-weight-light">
                                            Subtotal: $50.97
                                          </h4>
                                          <h4 class="font-weight-light">
                                            Discount (10%): <span class="text-danger">-$5.97</span>
                                          </h4>
                                          <hr class="my-3 w-50 ml-0 ml-md-auto mr-md-0">
                                          <h3>
                                            Total: <span class="text-primary">$45.00</span>
                                          </h3>
                                          <hr class="my-3 w-50 ml-0 ml-md-auto mr-md-0">
                                        </div>
                                        <!-- Proceed to checkout -->
                                        <a href="shop.html" class="btn btn-outline-primary btn-rounded btn-lg">Continue Shopping</a> <a href="shop-checkout.html" class="btn btn-primary btn-rounded btn-lg">Proceed To Checkout</a> 
                                      </div>
                                    </div>
                                  </div>

                                  @else
                                     <p>
                                        <h3>There is no Product in your cart</h3>
                                         <a href="{{ route('/') }}" class="btn btn-primary ">
                                          Continue my shopping....
                                         </a>
                                     </p>
                                  @endif
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @endsection