 <header id="header" class="">
        <!-- Top-bar and tab-mobile navigation -->
        <div class="top-bar">
            <ul class="d-none d-lg-block theme-bg-dark breadcrumb rounded-0 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="language">
                                <button class="btn btn-sm">Reseller Order</button>
                            </div> -->
                            conpany license:
                            
                        </div>
                        <div class="col-md-6">
                            <div class="login-detail float-sm-right">
                                <li class="breadcrumb-item">
                                   <a href="#">Advertise</a>
                                </li>
                                <li class="breadcrumb-item">
                                   <a href=""> Download Apps</a>
                                </li>
                                <li class="breadcrumb-item">
                                  <a href="#">Customer Support</a>
                                </li>

                                <!-- login system -->
                                 @guest
                                     <li class="breadcrumb-item">
                                     <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                                         <i class="fa fa-key mr-1"></i> Login / signup
                                     </a>
                                     </li>
                                     <!-- <li class="breadcrumb-item">
                                     <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">
                                         <i class="fa fa-lock mr-1"></i> Signup
                                     </a>
                                  </li> -->
                                 @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
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
                                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-light" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <a href="#" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a href="{!! url('cart') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                        <i class="fa fa-shopping-cart mr-1"></i> Cart <span class="badge badge-secondary">4</span>
                                    </a>
                                   
                                    <a href="{!! url('/checkout') !!}" class="btn theme-bg-dark text-white btn-sm mt-2 mt-sm-0">
                                         <i class="fa fa-credit-card mr-1"></i> CheckOut <span class="badge badge-secondary"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>