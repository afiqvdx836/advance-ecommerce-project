
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">


<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>@yield('title')</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('frontend.body.header')

<!-- ============================================== HEADER : END ============================================== -->
@yield('content')
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.body.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type','info') }}"
	switch(type){
		case 'info':
		toastr.info(" {{ Session::get('message') }} ");
		break;

		case 'success':
		toastr.success(" {{ Session::get('message') }} ");
		break;

		case 'warning':
		toastr.warning(" {{ Session::get('message') }} ");
		break;

		case 'error':
		toastr.error(" {{ Session::get('message') }} ");
		break; 
	}
	@endif 
	</script>

	<!--Add To Cart Product Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"><strong><span class="" id="pname">P</span></strong></h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
			<div class="row">
				<div class="col-md-4">

					<div class="card" style="width: 18rem;">
						<img src="..." class="card-img-top" alt="..." style="width: 200px;height:200px" id="pimage">
						
						</div>

				</div> <!-- End col-md-4 -->

				<div class="col-md-4">
					<ul class="list-group">
						<li class="list-group-item">Product Price: <strong class="text-danger">$<span id="pprice"></span></strong> 
							<del id="oldprice"></del>
						</li>
						<li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
						<li class="list-group-item">Category: <strong id="pcategory"></strong></li>
						<li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
						<li class="list-group-item">Stock: 
							<span class="badge badge-pill badge-success" id="available" style="background: green; color:white;"></span>
							<span class="badge badge-pill badge-danger" id="stockout" style="background: red; color:white;"></span>
						 </li>
					
					  </ul>
				</div> <!-- End col-md-4 -->

				<div class="col-md-4">
					<div class="form-group">
						<label for="color">Choose Color</label>
						<select class="form-control" id="color" name="color">
						
						</select>
					</div>
					<div class="form-group" id="sizeArea">
						<label for="size">Choose Size</label>
						<select class="form-control" id="size" name="size">
						
						</select>
					</div>
					<div class="form-group">
						<label for="qty">Quantity</label>
						<input type="number" class="form-control" id="qty" value="1" min="1">
					</div>

					<input type="hidden" id="product_id">
					<button type="submit" class="btn btn-primary mb-2" onclick="addToCart()" >Add to Cart</button>
				</div> <!-- End col-md-4 -->

			
			</div>

		</div>
		
		</div>
	  </div>
	</div>
  </div>
  <!--End Add To Cart Product Modal -->

  <script type="text/javascript">
  $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
// Start Product View with Modal 
function productView(id){
    // alert(id)
    $.ajax({
        type: 'GET',
        url: '/product/view/modal/'+id,
        dataType:'json',
        success:function(data){
			// console.log('data')
			$('#pname').text(data.product.product_name_en);
			$('#price').text(data.product.selling_price);
			$('#pcode').text(data.product.product_code);
			$('#pcategory').text(data.product.category.category_name_en);
			$('#pbrand').text(data.product.brand.brand_name_en);
			$('#pimage').attr('src','/'+data.product.product_thambnail);

			$('#product_id').val(id);
			$('#qty').val(1);


			//Product Price
			if (data.product.discount_price == null){
				$('#pprice').text('');
				$('#oldprice').text('');
				$('#pprice').text(data.product.selling_price);
			
			}else{
				$('#pprice').text(data.product.discount_price);
				$('#oldprice').text(data.product.selling_price);
			} // end product price

		

			//color
			$('select[name="color"]').empty();
			$.each(data.color,function(key,value){
				$('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
			})

			//size
			$('select[name="size"]').empty();
			$.each(data.size,function(key,value){
				$('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
				
				if(data.size == ""){
					$('#sizeArea').hide();
				}else{
					$('#sizeArea').show();
				}
			
			})// end size

			//stockout
			
			if(data.product.product_qty > 0){
				$('#available').text('');
				$('#stockout').text('');
				$('#available').text('available');
			}else{
				$('#available').text('');
				$('#stockout').text('');
				$('#stockout').text('stockout');
			}


			//stock

			


        }
    })
 
} // End ProductView Modal

// Start Add to cart product

function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/stores/"+id,
            success:function(data){
                $('#closeModel').click();
                // console.log(data)

				//Start Message
				const Toast = Swal.mixin({
						toast:true,
						position: 'top-end',
						icon: 'success',
						title: 'Your work has been saved',
						showConfirmButton: false,
						timer: 3000
						})

				if($.isEmptyObject(data.error)){
					Toast.fire({
						type:'success',
						title: data.success
					})
				}else{
					Toast.fire({
						type: 'error',
						title: data.error
					})

				}
				// End Message
            }
        })
    }

// End Add To Cart product
</script>
</body>
</html>