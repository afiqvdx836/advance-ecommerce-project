@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('title')
    Stripe Payment Page
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
			
				<div class="col-md-6">
					<!-- checkout-progress-sidebar -->
                    <div class="checkout-progress-sidebar ">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                </div>
                                <div class="">
				
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
        	
			</div>
		</div>
	</div>
</div>
<!-- checkout-progress-sidebar -->				
</div> <!--end col-md-6 -->

<div class="col-md-6">
	<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="unicase-checkout-title">Select Payment Method</h4>
</div>
<div class="row">
	<div class="col-md-4">
		<label for="">Stripe</label> 		
       <input type="radio" name="payment_method" value="stripe">
	   <img src="{{ asset('frontend/assets/images/payments/4.png') }}">
	</div> <!--end col-md-4-->

	<div class="col-md-4">
		<label for="">Card</label> 		
       <input type="radio" name="payment_method" value="card">
	   <img src="{{ asset('frontend/assets/images/payments/3.png') }}">
	</div> <!--end col-md-4 -->

	<div class="col-md-4">
		<label for="">Cash</label> 		
       <input type="radio" name="payment_method" value="cash">
	   <img src="{{ asset('frontend/assets/images/payments/2.png') }}">
	</div> <!--end col-md-4 -->


</div><!-- end row-->
<hr>
<button type="submit" class="btn-upper btn btn-primary checkout-page-button">PAYMENT STEP</button>
</div>
</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>



</form>
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