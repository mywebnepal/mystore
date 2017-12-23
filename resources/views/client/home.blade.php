   @extends('layouts.master')
   @section('content')
   <section id="hero" class="position-relative">
        <div class="container position-relative">
            <p class="d-lg-none">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Categories</button>
            </p>
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-12 col-md-8 col-lg-3 sidebar-offcanvas left-sidebar" id="sidebar" style="background-color: #3eb143">
                    <!-- Mobile categories -->
                    <div class="mobile-categories d-lg-none">
                        <div class="card rounded-0 side-menu">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    CATEGORIES 
                                </h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Collapsible Group Item #1
                                    </a>
                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <ul class="list-unstyled collapsed-list position-relative">
                                            <li>
                                                <a class="p-2 d-block" data-toggle="collapse" href="#a" aria-expanded="true" aria-controls="a">
                                                    Mr. A
                                                </a>
                                                <div id="a" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="">
                                                        <ul class="list-unstyled position-relative">
                                                            <li>
                                                                <a class="p-2 d-block" data-toggle="collapse" href="#a-child" aria-expanded="true" aria-controls="a-child">
                                                                  mr. a-child
                                                                </a>
                                                                <div id="a-child" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                                    <div class="p-2">
                                                                        mr. a-g-child
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Collapsible Group Item #2
                                    </a>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Collapsible Group Item #2
                                    </a>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end Mobile categories -->
                    <!-- Desktop categories -->
                    <div class="desktop-categories d-none d-lg-block" style="background-color: #3eb143">
                        <div class="card rounded-0 border-0 side-menu mb-3">
                            <div class="card-body">
                                <h4 class="card-title mb-0">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    CATEGORIES
                                </h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <span class="position-relative">
                                    <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-bag"></i>
                                        Books
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dropdownMenuLink">
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="position-relative">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fa fa-shopping-bag"></i>
                                        Electronics
                                    </a>
                                </span>
                                <span class="position-relative">
                                    <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-bag"></i>
                                       Gem Stone
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dropdownMenuLink">
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="position-relative">
                                    <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-bag"></i>
                                        Men Mrt
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dropdownMenuLink">
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="position-relative">
                                    <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-bag"></i>
                                        Women Mrt
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left p-0" aria-labelledby="dropdownMenuLink">
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-light">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 bg-white">
                                                <div class="p-3">
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="position-relative">
                                    <a class="list-group-item list-group-item-action dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-bag"></i>
                                        Website/software
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-light p-3">
                                                    <h2 class="products-list-header">Men</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-white p-3">
                                                    <h2 class="products-list-header">Women</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-light p-3">
                                                    <h2 class="products-list-header">Men</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-white p-3">
                                                    <h2 class="products-list-header">Women</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-light p-3">
                                                    <h2 class="products-list-header">Men</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="bg-white p-3">
                                                    <h2 class="products-list-header">Women</h2>
                                                    <ul class="list-unstyled products-item-list">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
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

                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="img/06.jpg" class="img-fluid" alt="">
                                                    <img src="http://placehold.it/214x180" class="img-top img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12">
                                            <div class="item">
                                                <a href="#">
                                                <img src="img/04.jpg" class="img-fluid" alt="">
                                                <img src="http://placehold.it/214x180" class="img-top img-fluid" alt="">
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/.container-->
    </section>
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
                                <a class="nav-link" id="pills-offers-items-tab" data-toggle="pill" href="#pills-offers-items" role="tab" aria-controls="pills-offers-items" aria-expanded="true">
                                   Offer Iteam
                                </a>
                            </li>
                            <li class="nav-item nav-justified">
                                <a class="nav-link" id="pills-discount-items-tab" data-toggle="pill" href="#pills-discount-items" role="tab" aria-controls="pills-discount-items" aria-expanded="true">
                                   Discount Item
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content bg-white mb-sm-4" id="first-pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-new-arrivals" role="tabpanel" aria-labelledby="pills-new-arrivals-tab">
                                <div class="">
                                    <div class="">
                                        <div class="owl-carousel owl-theme second-sec-main-banner">
                                            <div class="item">
                                                <div class="product-item">
                                                    <div class="img-wrap">
                                                        <a href="#">
                                                            <img src="img/products/p5.jpg" class="img-fluid" alt="">
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
                                                            <img src="img/products/p3.jpg" class="img-fluid" alt="">
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
                                                            <img src="img/products/p18.jpg" class="img-fluid" alt="">
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
                                                            <img src="img/products/p7.jpg" class="img-fluid" alt="">
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
                                                                <!-- <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">Add to cart</button>
                                                                </div> -->
                                                                <!-- <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                </div> -->
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
                            <div class="tab-pane fade" id="pills-discount-items" role="tabpanel" aria-labelledby="pills-discount-items-tab">
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
                                                                <!-- <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">Add to cart</button>
                                                                </div> -->
                                                                <!-- <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                </div> -->
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
            <!-- <div class="card border-0 rounded-0">
                <div class="card-header bg-white">
                    <div class="card-title mb-0">
                        FEATURED PRODUCTS
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> -->
            <!-- HOT DEALS -->
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

  