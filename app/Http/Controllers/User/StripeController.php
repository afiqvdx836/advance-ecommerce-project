<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){

        \Stripe\Stripe::setApiKey('sk_test_51LxMOpHpH4oADER03wzayZeIoqamJqcJ6ge1DRYUROoWTmMN0BnaSz4JtiTIG9IIzyvifkgkQ5AOskBpkITxcCah00kYcjX8PM');


	$token = $_POST['stripeToken'];
	$charge = \Stripe\Charge::create([
	  'amount' => 999*100,
	  'currency' => 'myr',
	  'description' => 'Easy Online Store',
	  'source' => $token,
	  'metadata' => ['order_id' => '6735'],
	]);

	dd($charge);




dd($stripe);

    }// method
} 