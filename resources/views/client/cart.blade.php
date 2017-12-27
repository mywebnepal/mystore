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
                                        echo '<pre>';
                                               // print_r($products);
                                        echo '</pre>';
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
                                        <th class="w-20">price</th>
                                        <th class="w-20 text-md-right">Discount</th>
                                         <th class="w-20 text-md-right">Amount</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <!-- Cart item 1 -->
                                      @if(count($products) > 0)
                                      @foreach($products as $product)

                                      <tr>
                                        <td class="text-center align-middle">
                                          <a href="javascript:void(0)" class="close cart_remove_all" title="remove all my cart" data-url="{{ route('removeAll', $product['item']['id']) }}"> <i class="fa fa-times""></i> </a>
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
                                            <a href="#" data-url="{{ route('removeCart',$product['item']['id']) }}"
                                            class="removeCart" title="remove cart by one">
                                              <input type="button" value="-" class="btn btn-secondary cart-quantity-down" field="quantity">
                                              </a>
                                            </span>
                                            <input type="text" name="quantity" value="{{ $product['qty'] }}" class="quantity form-control cartPrdCount" readonly>
                                            <span class="input-group-btn">
                                            <a href="#" data-url="{{ route('addCart', $product['item']['id']) }}" class="btnMyCart" title="add to cart">
                                              <input type="button" value="+" class="btn btn-secondary quantity-up" field="quantity">
                                              </a>
                                            </span>
                                          </div>
                                        </td>
                                        <td class="text-md-left">
                                        <span class="font-weight-bold">
                                        {{ $product['price'] }}</span></td>

                                        <td class="text-md-left"><span class="font-weight-bold">{{ $product['item']['discount'] * $product['qty'] }}%</span></td>

                                         <td class="grandSum">
                                         @if($product['item']['discount'])
                                            {{ getCalCartDiscount($product['item']['discount'] * $product['qty'], $product['price']) }}
                                            @else
                                           {{ $product['price'] }}
                                         @endif
                                         </td>

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
                                        <form action="#" role="form" class="disabled">
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
                                          <h3>
                                            Total: <span class="text-primary grandTotal"></span>
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
   @section('custom_script')
    <script type="text/javascript">
      /*add to cart*/
      var siteInfoMsg         = $('.siteInfoMsg');
      var btnAddToCart = $('.btnMyCart');
      var quantity_up  = $('.quantity-up');
      var myCartCount   = $('#myCartCount');
      btnAddToCart.on('click', function(){
      var url = $(this).data('url');
      $.ajax({
          'url' : url,
          beforeSend : function(){
          quantity_up.prop('disabled', false);
          },
          success:function(response){
              siteInfoMsg.css('display', 'block').fadeOut(10000);
                siteInfoMsg.append(response.message);
          },
          complete : function(response){
           quantity_up.prop('disabled', true);
           location.reload();
          }
      });
      });

      /*remove product*/

      var btnRemoveCart = $('.removeCart');
      var cart_down = $('.cart-quantity-down');
      btnRemoveCart.on('click', function(){
      var url = $(this).data('url');
      $.ajax({
          'url' : url,
          beforeSend :function(){
            cart_down.prop('disabled', false);
          },
          success : function(response){
             siteInfoMsg.css('display', 'block').fadeOut(10000);
                siteInfoMsg.append(response.message);
                btnAddToCart.prop('disabled', true);
          },
          complete : function(){
           cart_down.prop('disabled', true);
           location.reload();
          }
      });
      });

      var btnRemoveAllCart = $('.cart_remove_all');
      btnRemoveAllCart.on('click', function(){
      var url = $(this).data('url');
      if (confirm("Are you sure your want to  delete your cart ?")) {
      $.ajax({
          'url' : url,
          success : function(response){
             siteInfoMsg.css('display', 'block').fadeOut(10000);
                siteInfoMsg.append(response.message);
                btnAddToCart.prop('disabled', true);
          },
          complete : function(){
           location.reload();
          }
      });
    }
    return false;
      });

      /*making grand sum*/

      $(function(){
         var sum = 0;
         // iterate through each td based on class and add the values
         $(".grandSum").each(function() {

             var value = $(this).text();
             // add only if the value is number
             if(!isNaN(value) && value.length != 0) {
                 sum += parseFloat(value);
             }
             $('.grandTotal').text(sum);
         });
      });
    </script>
   @endsection