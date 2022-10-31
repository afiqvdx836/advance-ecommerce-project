<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
           $total_amount = round(Cart::total());
        }
        

        \Stripe\Stripe::setApiKey('sk_test_51LxMOpHpH4oADER03wzayZeIoqamJqcJ6ge1DRYUROoWTmMN0BnaSz4JtiTIG9IIzyvifkgkQ5AOskBpkITxcCah00kYcjX8PM');


	$token = $_POST['stripeToken'];
	$charge = \Stripe\Charge::create([
	  'amount' => $total_amount*100,
	  'currency' => 'myr',
	  'description' => 'Easy Online Store',
	  'source' => $token,
	  'metadata' => ['order_id' => uniqid()],
	]);

	dd($charge);

    $order_id = Order::insertGetId([
        'user_id' => Auth::id(),
     	'division_id' => $request->division_id,
     	'district_id' => $request->district_id,
     	'state_id' => $request->state_id,
     	'name' => $request->name,
     	'email' => $request->email,
     	'phone' => $request->phone,
     	'post_code' => $request->post_code,
     	'notes' => $request->notes,

         'payment_type' => 'Stripe',
     	'payment_method' => 'Stripe',
     	'payment_type' => $charge->payment_method,
     	'transaction_id' => $charge->balance_transaction,
     	'currency' => $charge->currency,
     	'amount' => $total_amount,
     	'order_number' => $charge->metadata->order_id,

     	'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
     	'order_date' => Carbon::now()->format('d F Y'),
     	'order_month' => Carbon::now()->format('F'),
     	'order_year' => Carbon::now()->format('Y'),
     	'status' => 'Pending',
     	'created_at' => Carbon::now(),	 

    ]);


// dd($stripe);

    }// method
} 