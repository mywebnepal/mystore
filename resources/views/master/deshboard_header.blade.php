<header id="header">
			<div id="admin_user_name">
			   <h4>{{ Auth::user()->name }}</h4> 
			</div>
			<!-- pulled right: nav area -->
			<div class="pull-left">
               <!-- input: search field -->
               <form action="search.html" class="header-search pull-right">
               	<input id="search-fld"  type="text" name="param" placeholder="Student Details">
               	<button type="submit">
               		<i class="fa fa-search"></i>
               	</button>
               	<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
               </form>
               <!-- end input: search field -->
			</div>
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
              
                   	<span id="demo-setting"><i class="fa fa-cogs fa-spin txt-color-greenDark"></i></span>
				</div>
				<!-- end collapse menu -->
				
				<!-- #MOBILE -->
				

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="{{ route('logout') }}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"></i></a> </span>

                    <form id="logout-form" action="{{ route('sisadmin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                                       
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->

				<!-- input: search field -->
				<form action="search.html" class="header-search pull-right">
					<input id="search-fld"  type="text" name="param" placeholder="Staff Details..">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
			</div>
			<!-- end pulled right: nav area -->
		</header>