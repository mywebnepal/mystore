<aside id="left-panel" style="border-right: 2px solid #2196F3;">
			<nav style="margin-top: -3em;">
				<ul>
				    <li class="active">
						<a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Dashboard</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>	
					</li>
					<li>
						<a href="#" title="Setting"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Setting Parameter</span></a>
						<ul>
						   
							<li>
								{{ HTML::link('sisadmin/brand/index', 'Brand name', array('title' => 'Create Brand name'))}}
							</li>
							
							<li>
								{{ HTML::link('sisadmin/categories/index', 'Category', array('title' => 'Create categories'))}}
							</li>

							<li>
								{{ HTML::link('sisadmin/sub_categories/index', 'SubCategories', array('title' => 'Create subcategory'))}}
							</li>

							<li>
								{{ HTML::link('sisadmin/room/index', 'Room', array('title' => 'Create Room'))}}
							</li>

							<li>
								{{ HTML::link('sisadmin/city/index', 'City', array('title' => 'Create city'))}}
							</li>
							<!--  -->
					
						</ul>	
					</li>
					<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">System<small>--User</small></span></a>
						<ul>
							<li class="">
								<a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">Login Customer</span></a>
							</li>
							
						</ul>
					</li>
					
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent"></span>Page</a>
						<ul>
							<li>
								<a href="{{ route('sisadmin.hotel.index') }}">Hotel</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-picture-o"></i> <span class="menu-item-parent">Main slider</span></a>
						<ul>
							<li>
								<a href="{{ route('sisadmin.slider.index') }}" title="create home slider"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Sales</span></a>
						<ul>
							<li>
								<a href="#">Order</a>
							</li>
							
							<li>
								<a href="ckeditor.html">Stock</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Product</span></a>
						<ul>
							<li>
								<a href="{{ route('sisadmin.products.index') }}">Product</a>
							</li>
							<li>
								<a href="#">Six Level Menu</a>
								<ul>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2</a>
										
									</li>
								</ul>
							</li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Customer</span></a>
						<ul>
							<li>
								<a href="{!! route('sisadmin.product.adminSupportForm') !!}"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Support form</span></a>
							</li>

							<li>
								<a href="{!! route('sisadmin.product.productComment') !!}"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">comment</span></a>
							</li>

							<li>
								<a href="{!! route('sisadmin.admin.subscribe') !!}"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">subscribe</span></a>
							</li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">Notice Board</span></a>
						<ul>
							<li>
								<a href="{{ route('sisadmin.notice.index') }}">
								<i class="fa fa-file-text-o"></i>Notice</a>
							</li>	
							<li>
								<a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							
						</ul>		
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">Contact Book</span></a>
						<ul>
							<li><a href="orders.html">Orders</a></li>
							<li><a href="products-view.html">Products View</a></li>
							<li><a href="products-detail.html">Products Detail</a></li>
						</ul>
					</li>	
				</ul>
			</nav>
	</aside>