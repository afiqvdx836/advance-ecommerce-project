@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')? 'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/brand'?'active':'') }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.brand')? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>
            <li><a href="calendar.html"><i class="ti-more"></i></a></li>
          </ul>
        </li> 
		  
        <li class="treeview {{ ($prefix == '/category'?'active':'') }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
            <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>

          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/slider'?'active':'') }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.slider')? 'active':'' }}"><a href="{{ route('all.slider') }}"><i class="ti-more"></i>Manage Slider</a></li>
          </ul>
        </li>
		
     
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Cards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
			<li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
			<li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
		  </ul>
        </li>  
		  
		  
		<li class="treeview">
          <a href="#">
            <i data-feather="edit-2"></i>
            <span>Icons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
            <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
            <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>	
            <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
            <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
            <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
            <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
            <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
          </ul>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>