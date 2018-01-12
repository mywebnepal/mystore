@extends('layouts.master')
@section('page_title', $page['page_title'])
@section('page_description', $page['page_description'])
@section('content')
<style>
.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;
}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";
}

@media (max-width: 767px) {
  .leftSidebar-page-content .row {
    display: -webkit-box;
    display: -moz-box;
    display: box;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    box-orient: vertical;
  }
  .leftSidebar .fl-sidebar {
    -webkit-box-ordinal-group: 2;
    -moz-box-ordinal-group: 2;
    box-ordinal-group: 2;
  }
  .leftSidebar .fl-content {
    -webkit-box-ordinal-group: 1;
    -moz-box-ordinal-group: 1;
    box-ordinal-group: 1;
  }
}
</style>
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
                         <div class="container">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php $i = 1; ?>
                            @foreach($newProductListBySubCategory as $cat)
                              <?php 
                              if(isset($cat['subcat'])) 
                                $subcat = $cat['subcat']->name;
                              else
                                $subcat = 'Others';
                              ?>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{$i}}">
                                  <h4 class="panel-title">
                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                    {{ $subcat }}
                                  </a>
                                </h4>
                                </div>
                                <div id="collapse{{$i}}" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading{{$i++}}">
                                  <div class="panel-body">
                                    @if($cat['products'])
                                  <div class="row">
                             @foreach($cat['products'] as $product)
                             <div class="col-md-6 col-lg-4">
                                      <div class="product-item">
                                          <div class="img-wrap">
                                              <a href="{{ route('product.single', $product->product_slug) }}">
                                                  <img src="{{ asset($product->featured_img_sm) }}" class="img-fluid" alt="{{ $product->name }}">
                                              </a>
                                              @if($product->discount)
                                                <div class="sale-offer-tag">
                                                          <span>{{ $product->discount }}%<br>OFF</span>
                                                </div>
                                                @endif
                                          </div>
                                          <div class="product-prices-info">
                                              <h5 align="center"><a href="{{ route('product.single', $product->product_slug) }}" class="product-title">{{ $product->name }}</a></h5>
                                              <p class="text-right text-muted">
                                                  <small>Product Code: {{ $product->sku }}</small>
                                              </p>
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
                                                         <a href="{{ route('product.single', $product->product_slug) }}" class="btn btn-success btn-sm">View Details</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                                  </div>
                             @endif
                                  </div>
                                </div>
                              </div>
                              
                            @endforeach
                            </div>
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
@section('custom_script')
<script>
  $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })
  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
</script>
@endsection