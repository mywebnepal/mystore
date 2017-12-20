 <header id="header" class="">
        <!-- Top-bar and tab-mobile navigation -->
        <div class="top-bar">
            <ul class="d-none d-lg-block theme-bg-dark breadcrumb rounded-0 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            conpany :
                        </div>
                        <div class="col-md-11">
                            <div class="login-detail float-sm-right">
                                <!-- <li class="breadcrumb-item">
                                   <a href="{!! route('/') !!}">Home</a>
                                </li> -->

                                <li class="breadcrumb-item">
                                   <a href="{!! route('book') !!}">Books</a>
                                </li>
                                <li class="breadcrumb-item">
                                   <a href="{!! route('electronic') !!}">Electronics</a>
                                </li>
                                <li class="breadcrumb-item">
                                   <a href="{!! route('gemstone') !!}">Gems Stone</a>
                                </li>
                                <li class="breadcrumb-item">
                                   <a href="{!! route('menMrt') !!}">Men Mrt</a>
                                </li>
                                <li class="breadcrumb-item">
                                   <a href="{!! route('womenMrt') !!}">Women Mrt</a>
                                </li>

                                <li class="breadcrumb-item">
                                  <a href="{!! route('website') !!}">Nepal Handicraft</a>
                                </li>

                                <li class="breadcrumb-item">
                                  <a href="{!! route('website') !!}">website/software</a>
                                </li>

                                     <li class="breadcrumb-item">
                                     <a href="#" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#customerForm">
                                         <i class="fa fa-key mr-1"></i> Support Form
                                     </a>
                                     </li>
                                <!-- login system -->
                                 @guest
                                     <li class="breadcrumb-item">
                                     <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                                         <i class="fa fa-key mr-1"></i> Login / signup
                                     </a>
                                     </li>
                                      
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
                        <div class="d-none d-lg-block col-lg-2">
                            <a class="navbar-brand p-0" href="{!! url('/') !!}" style="color: #e1dcef;">SHOPNOW</a>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="search-product-container">
                                <div class="input-group">
                                    <input type="text" class="form-control searchProductDetails" placeholder="Search for..." aria-label="Search for..." data-url="{!! route('user.product.search') !!}">

                                    <span class="input-group-btn">
                                        <button class="btn btn-light" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                   <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-sm-12 searchResultData" style="background: #FFF; margin: 0em 1em; display: none;">
                                                Certainty listening no no behaviour existence assurance situation is. Because add why not esteems amiable him. Interested the unaffected mrs law friendship add principles. Indeed on people do merits to. Court heard which up above hoped grave do. Answer living law things either sir bed length. Looked before we an on merely. These no death he at share alone. Yet outward the him compass hearted are tedious. 
                                            </div>
                                        </div>
                                
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="row align-items-center">
                                <div class="col text-right">
                                   <!--  <a href="#" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                        <i class="fa fa-heart-o"></i>
                                    </a> -->
                                    <a href="{!! url('cart') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                        <i class="fa fa-shopping-cart mr-1"></i> Cart <span class="badge badge-secondary">4</span>
                                    </a>
                                   
                                    <a href="{!! url('/checkout') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                         <i class="fa fa-credit-card mr-1"></i> CheckOut <span class="badge badge-secondary"></span>
                                    </a>

                                     <a href="{!! url('/checkout') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                         <i class="fa fa-credit-card mr-1"></i>Track Order<span class="badge badge-secondary"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>