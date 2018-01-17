<div class="bootstrap-vertical-nav">
 <button class="btn btn-primary hidden-md-up d-lg-none" type="button" data-toggle="collapse" data-target="#client_side_bar_menu" aria-expanded="false" aria-controls="client_side_bar_menu" >
                       <span class="">Menu</span>
                   </button>

                   <div class="collapse" id="client_side_bar_menu">
                       <ul class="nav flex-column" id="exCollapsingNavbar3">
                           <li class="nav-item">
                               <a class="nav-link active" href="{{ route('home') }}">
                                 <i class="fa fa-user">&nbsp;
                                 {{ Auth::user()->name }}</i>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('client.event.form') }}">Create event</a>
                           </li>
                           <li class="nav-item myOrder">
                               <a class="nav-link" href="{{ route('client.order') }}">My Order</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('client.myWishlist') }}">My wishlist</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">my wallet</a>
                           </li>

                           <li class="nav-item">
                               <a class="nav-link" href="#">Trace my order</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">sells your product</a>
                           </li>

                           
                       </ul>
                   </div>
               </div>