 <header id="header" class="">
        <!-- Top-bar and tab-mobile navigation -->
        <div class="top-bar">
            <ul class="theme-bg-dark breadcrumb rounded-0 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="tel:9807573751" style="color:#FFF !important;"><i class="fa fa-phone"> </i>&nbsp;&nbsp;9807573751</a>
                                 <a href="emailto:sales@mywebnepal.com" style="color:#FFF !important;">sales@mywebnepal.com</a>
                        </div>
                        <div class="col-md-10">
                            <div class="login-detail float-sm-right">
                                <?php
                                   $catViewData = getCategoryName();
                                  foreach ($catViewData as $myCat) {?>
                                      <li class="breadcrumb-item">
                                           <a href="{!! route('page_slug', $myCat->slug) !!}" class="btn btn-outline-light btn-sm" style="border:1px solid #FFF;">
                                           <?php echo $myCat->name;   ?>
                                            </a>
                                       </li>
                                    <?php
                                   }
                                ?>
                                <!-- booking -->
                                <li class="breadcrumb-item">
                                <a href="{{ route('booking') }}" class="btn btn-outline-light btn-sm" title="Booking hotel and tour and trevel all over the nepal" style="background: #880000">
                                    <i class="fa fa-book mr-1"></i>Hotel booking
                                </a>
                                </li>

                                 <li class="breadcrumb-item">
                                <a href="{{ route('client.event.details') }}" class="btn btn-outline-light btn-sm" title="Booking hotel and tour and trevel all over the nepal" style="background: #880000">
                                    <i class="fa-calendar-o mr-1"></i> Event
                                </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        <div class="fix-to-top">
            <!-- END : Top-bar and tab-mobile navigation  -->
            <div class="py-2  py-lg-3 middle-header theme-bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="d-none d-sm-block col-lg-2">
                            <a class="navbar-brand p-0" href="{!! url('/') !!}" style="color: #e1dcef;">
                                <!-- <img src="{{ asset('img/logo/mywebnepal.png') }}" height="100"> -->
                                myWebNepal
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="search-product-container">
                                <div class="input-group">
                               
                                    <input type="text" class="form-control searchProductDetails" placeholder="Search for..." aria-label="Search for..." data-url="{!! route('user.product.search') !!}" name="qry">

                                    <span class="input-group-btn">
                                        <button class="btn btn-light" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                     </div>
                                   <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-sm-12 searchResultData" style="background: #FFF; margin: 0em 1em; display: none;">
                                               <!-- search result goes here -->
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <a href="{!! route('cart.myshopping') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                        <i class="fa fa-shopping-cart mr-1"></i> Cart 
                                        <span class="badge badge-secondary myCartCount">
                                          {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}
                                        </span>
                                    </a>
                                    <a href="#" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0" data-toggle="modal" data-target="#customerForm">
                                         <i class="fa fa-question"></i> Support
                                     </a>
                                    <!-- login system -->
                                     @guest
                                         <a href="{{ route('login') }}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                             <i class="fa fa-key mr-1"></i> Login / signup
                                         </a>
                                     @else
                                       
                                        <!--  -->
                                            <div class="dropdown show btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0" style="cursor: pointer;">
                                            <i class="fa fa-user"></i>
                                              <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 {{ Auth::user()->name }} <span class="caret"></span>
                                              </a>

                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a class="dropdown-item" href="{{ route('home') }}">Home</a>

                                                  <a class="dropdown-item" href="#"
                                                  onclick="event.preventDefault();
                                                           document.getElementById('user-logout-form').submit();">Logout</a>
                                                   <form id="user-logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                   </form>
                                                </div>
                                            </div>
                                       
                                    @endguest
                                     
                                     </div>
                                     <!-- closing -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="hero" class="position-relative">
     <div class="container position-relative">
             <p class="d-lg-none">
                  @if (!\Request::is('/'))
                    <a href="{{ route('/') }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-home" aria-hidden="true"></i>
                 </a>
                 @endif

                 @if(!\Request::is('booking/hotelBooking', 'event-list', 'home', 'create-event'))
                 <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas"><i class="fa fa-list" aria-hidden="true"></i>
                     Menu 
                 </button>
                 @endif
             </p>
             <div class="row row-offcanvas row-offcanvas-left">
                 <div class="col-12 col-md-8 col-lg-3 sidebar-offcanvas left-sidebar" id="sidebar">
                     <!-- Mobile categories -->
                     <?php  $myCat = getGetSideBarMenu();   ?>
                     <div class="mobile-categories d-lg-none" style="z-index: 9999999 !important;">
                         <div class="card rounded-0 side-menu">
                             <ul class="list-group list-group-flush">
                             @if(count($myCat) > 0)
                               @foreach($myCat as $cat)
                                 <li class="list-group-item" style="z-index: 9999999 !important;">
                                     <a data-toggle="collapse" href="#{{ $cat->id }}" aria-expanded="true" aria-controls="collapseOne">
                                      {{ $cat->name }}
                                     </a>
                                     <div id="{{ $cat->id }}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                         <ul class="list-unstyled collapsed-list position-relative">
                                            @foreach($cat->subcats as $subcat)
                                     @if(count($cat->subcats) > 0)
                                             <li>
                                                 <a class="p-2" href="{{ route('client.subcategory',$subcat->slug ) }}">
                                                     {{ $subcat->name }}
                                                 </a>
                                             </li>
                                     @endif
                                            @endforeach
                                         </ul>
                                     </div>
                                 </li>
                                @endforeach
                             @endif
                             </ul>
                         </div>
                     </div>
                     <!-- end Mobile categories -->
                     <!-- Desktop categories -->
                    @if (\Request::is('/'))
                     <div class="desktop-categories d-none d-lg-block" >
                         <div class="card rounded-0 border-0 side-menu mb-3">
                             <div class="card-body">
                                 <h4 class="card-title mb-0">
                                     <i class="fa fa-list" aria-hidden="true"></i>
                                     Menu
                                 </h4>
                             </div>
                             <ul class="list-group list-group-flush">
                                 @if(count($myCat) > 0)
                                 @foreach($myCat as $cat)
                                 <span class="position-relative">
                                     <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i class="fa fa-shopping-bag"></i>
                                         {{ $cat->name }}
                                     </a>
                                     @if(count($cat->subcats) > 0)
                                     <div class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dropdownMenuLink">
                                         <div class="row no-gutters">
                                             <div class="col-sm-3 col-md-2 bg-light">
                                                 <div class="p-3">
                                                     <ul class="list-unstyled products-item-list">
                                                         @foreach($cat->subcats as $subcat)
                                                         <li><a href="{{ route('client.subcategory',$subcat->slug ) }}"> {{ $subcat->name }}</a></li>
                                                         @endforeach
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     @endif
                                 </span>
                                 @endforeach
                                 @endif   
                                                         
                             </ul>
                         </div>
                     </div>
                     <!-- end Desktop categories -->
                 </div>
                 <!--/span-->
                 <!-- bannder and slider start from here -->
                 <main class="col-12 col-lg-9 px-lg-0 main">
                     <div class="banner-section">
                         <div class="row no-gutters">
                             <div class="col-12 col-lg-9">
                                 <div class="">
                                     <div id="carouselExampleIndicators" class="carousel slide  mb-3" data-ride="carousel">
                                         <div class="carousel-inner">
                                            <?php  
                                                $slider = getHomeSlider(); 
                                                $count = 1;
                                                if (count($slider) > 0) {
                                                     foreach ($slider as $myslider) {?>
                                                       <div class="carousel-item <?php 
                                                       if ($count == 1) { echo 'active';
                                                               # code...
                                                           }else{echo ''; }   ?>">
                                                          <img class="d-block img-fluid" src="{{ asset($myslider->img_path) }}" alt="{{ $myslider->img_caption }}" />
                                                          <div class="carousel-caption slider-caption">
                                                              <h3 class="slider-caption">{{ $myslider->img_caption }}
                                                              <a href="{{ $myslider->call_action ? $myslider->call_action : '#' }}" class="btn btn-success btn-sm">Buy now</a>

                                                              </h3>
                                                             
                                                         </div>
                                                       </div>
                                                    <?php
                                                    $count ++;
                                                     }
                                                  }  
                                             ?>
                                             
                                         </div>
                                         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                     </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="clearfix"></div>
                             <div class="col-12 col-lg-3" style="background: #FFF;">
                                <div class="col-sm-12 p-3 noticeBoard" style="background: #FFF;">
                                      <h3 align="center" style="padding-top: 1em;">Notice Board</h3><hr>
                                     <h4>
                                      <a href="javascript:void(0)" class="typewrite" data-period="2000" data-type='[ "welcome to mywebnepal.", "wish you a very happy new year 2018", "Buy more get more discount", "Order now for custom design tshirt", "Do you need website contact us now we help you with in one hour", "Do you need hotel booking contact us now we help you all over nepal"]'>
                                        <span class="wrap"></span>
                                      </a>
                                    </h4> 
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="info-boxes-inner d-none d-lg-block">
                         <div class="row no-gutters">
                             <div class="col-md-4">
                                 <div class="info-box">
                                     <i class="icon-wallet icons"></i>
                                     <h4 class="heading">MONEY BACK</h4>
                                     <p>30 Days Money Back Guarantee</p>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="info-box">
                                     <i class="icon-paper-plane icons"></i>
                                     <h4 class="heading">FREE SHIPPING</h4>
                                     <p>Shipping on orders over $99</p>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="info-box">
                                     <i class="icon-support icons"></i>
                                     <h4 class="heading">ONLINE SUPPORT 24/7</h4>
                                     <p>We support online 24 hours a day</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </main>
                 @endif
             </div>
             <!--/row-->
         </div>
         <!--/.container-->
     </section>