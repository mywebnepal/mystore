 <header id="header" class="">
        <!-- Top-bar and tab-mobile navigation -->
        <div class="top-bar">
            <ul class="theme-bg-dark breadcrumb rounded-0 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            conpany :
                        </div>
                        <div class="col-md-11">
                            <div class="login-detail float-sm-right">
                                <?php
                                   $catViewData = getCategoryName();
                                  foreach ($catViewData as $myCat) {?>
                                      <li class="breadcrumb-item">
                                           <a href="{!! route('page_slug', $myCat->slug) !!}">
                                           <?php echo $myCat->name;   ?>
                                             
                                           </a>
                                       </li>
                                    <?php
                                   }

                                ?>
                                <!-- booking -->
                                <li class="breadcrumb-item">
                                <a href="{{ route('booking') }}" class="btn btn-outline-light btn-sm" title="Booking hotel event vanue sport">
                                    <i class="fa fa-key mr-1"></i> Booking
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
                        <div class="col-lg-2">
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

                                    <!--  <a href="{!! url('/checkout') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                         <i class="fa fa-credit-card mr-1"></i>Track Order<span class="badge badge-secondary"></span>
                                    </a> -->

                                    <!-- login system -->
                                     @guest
                                        
                                         <a href="{{ route('login') }}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                             <i class="fa fa-key mr-1"></i> Login / signup
                                         </a>
                                       
                                          
                                     @else
                                        <div class="clearfix"></div>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                  <a href="{{ route('home') }}">
                                                   Home
                                                  </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('user-logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="user-logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endguest


                                     <a href="#" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0" data-toggle="modal" data-target="#customerForm">
                                         <i class="fa fa-key mr-1"></i> Support Form
                                     </a>
                                  
                                </div>
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
                 <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas"><i class="fa fa-list" aria-hidden="true"></i>
                     Menu
                 </button>
             </p>
             <div class="row row-offcanvas row-offcanvas-left">
                 <div class="col-12 col-md-8 col-lg-3 sidebar-offcanvas left-sidebar" id="sidebar" style="background-color: #3eb143">
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
                                                 <a class="p-2 d-block" data-toggle="collapse" href="#{{ $cat->name }}" aria-expanded="true" aria-controls="a">
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
                     <div class="desktop-categories d-none d-lg-block" style="background-color: #3eb143">
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

                                 <!-- <span class="position-relative">
                                     <a href="#" class="list-group-item list-group-item-action">
                                         <i class="fa fa-shopping-bag"></i>
                                         Electronics
                                     </a>
                                 </span>  --> 
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
                                         <ol class="carousel-indicators">
                                             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                             <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                         </ol>
                                         <div class="carousel-inner">
                                             <div class="carousel-item active">
                                                 <img class="d-block img-fluid" src="img/01.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/06.jpg" alt="First slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/03.png" alt="Second slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/05.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/02.jpg" alt="Second slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/04.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/06.jpg" alt="Second slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/07.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/08.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="img/09.jpg" alt="Third slide">
                                             </div>
                                             <div class="carousel-item">
                                                 <img class="d-block img-fluid" src="http://placehold.it/642x680" alt="Third slide">
                                             </div>
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
                             <div class="col-12 col-lg-3" style="background: #3eb143;">
                                 <div class="discounted-items  mb-3">
                                     <div class="col-sm-12 p-3" style="background: #FFF;">
                                     
                                         <div class="sp-container">
                                             <div class="sp-content">
                                                 <div class="sp-globe"></div>
                                                 <h2 class="frame-1">Notice Board</h2>
                                                  @if(count($myNotice) > 0)
                                                      @foreach($myNotice as $notice)
                                                           <h2 class="frame-2">{{ $notice->name }}</h2>
                                                            @endforeach
                                                  @endif
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </main>
                 @endif
                 <!--/span-->
             </div>
             <!--/row-->
         </div>
         <!--/.container-->
     </section>
