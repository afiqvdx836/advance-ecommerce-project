<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function AddToCart(Request $request, $id){

    	$product = Product::findOrFail($id);

    	if ($product->discount_price == NULL) {
    		Cart::add([
    			'id' => $id, 
    			'name' => $request->product_name, 
    			'qty' => $request->quantity, 
    			'price' => $product->selling_price,
    			'weight' => 1, 
    			'options' => [
    				'image' => $product->product_thambnail,
    				'color' => $request->color,
    				'size' => $request->size,
    			],
    		]);

    		return response()->json(['success' => 'Successfully Added on Your Cart']);
    		 
    	}else{

    		Cart::add([
    			'id' => $id, 
    			'name' => $request->product_name, 
    			'qty' => $request->quantity, 
    			'price' => $product->discount_price,
    			'weight' => 1, 
    			'options' => [
    				'image' => $product->product_thambnail,
    				'color' => $request->color,
    				'size' => $request->size,
    			],
    		]);
    		return response()->json(['success' => 'Successfully Added on Your Cart']);
    	}

    } // end mehtod 


    // Mini Cart Section
    public function AddMiniCart(){

    	$carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total();

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => round($cartTotal),

    	));
    } // end method 

        //Remove Mini Cart Section
        public function RemoveMiniCart($rowId){
            Cart::remove($rowId);
            return response()->json(['success' => 'Product Remove from cart']);
        } // end method





		public function AddToWishlist(Request $request, $product_id){
			
			if(Auth::check()) {
				$exists = Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->first();

				if (!$exists){
					Wishlist::insert([
						'user_id' => Auth::id(), 
						'product_id' => $product_id, 
						'created_at' => Carbon::now(), 
					]);
					
					return response()->json(['success' => 'Successfully Added On Your Wishlist']);
				
				}else{

					return response()->json(['error' => 'This product already added to your Wishlist']);

				}

			}else{

			return response()->json(['error' => 'At first login your account']);

			}
		}
	}




 