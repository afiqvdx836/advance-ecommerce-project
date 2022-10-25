@extends('frontend.main_master')
@section('content')

@section('title')
    My Checkout
@endsection

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
	
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				<!-- guest-login -->			
				<div class="col-md-6 col-sm-6 already-registered-login">
					<h4 class="checkout-subtitle">Shipping Address</h4>
					
					<form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="name">Shipping Name <span>*</span></label>
                            <input type="text" name="shipping_name" class="form-control unicase-form-control text-input" id="name" placeholder="Full Name" value="{{Auth::user()->name}}">
                          </div>
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
					    <input type="email" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email Address"  value="{{Auth::user()->email}}">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Phone <span>*</span></label>
					    <input type="text" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="Phone"  value="{{Auth::user()->phone}}">
					  </div>
                      <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Post Code <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="Post Code" name="post_code" >
					  </div>
					  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
					</form>
				</div>	
				<!-- guest-login -->

				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">
					<h4 class="checkout-subtitle">Already registered?</h4>
					<p class="text title-tag-line">Please log in below:</p>
					<form class="register-form" role="form">
						<div class="form-group">
					    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
					    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
					    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="">
					    <a href="#" class="forgot-password">Forgot your Password?</a>
					  </div>
					  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
					</form>
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- End checkout-step-01  -->
					   
					  	
					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">
                @foreach ($carts as $item)
                <li>
                    <strong>Image: </strong>
                    <img src="{{ asset($item->options->image) }}" style="width: 50px; height:50px;" alt="">
                </li>
             
					
				<li> 
                    <strong>Qty: </strong>
                     ( {{ $item->qty }} )

                     <strong>Color: </strong>
                     {{ $item->options->color }}

                     <strong>Size: </strong>
                     {{ $item->options->size }}
                </li>
                @endforeach
                <hr>
                <li>
                    @if(Session::has('coupon'))
                    <strong>SubTotal:</strong> ${{ $cartTotal }} <hr>
                    <strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
                    ( {{ session()->get('coupon')['coupon_discount'] }} % )

                    <hr>

                    <strong>Coupon Discount : </strong> ${{ session()->get('coupon')['discount_amount'] }} 
                    <hr>

                    <strong>Grand Total : </strong> ${{ session()->get('coupon')['total_amount'] }} 
                    <hr>

                    @else
                    <strong>SubTotal:</strong>  ${{ $cartTotal }}  <hr>
                    <strong>Grand Total:</strong> ${{ $cartTotal }}<hr>
                    @endif
                </li>
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection