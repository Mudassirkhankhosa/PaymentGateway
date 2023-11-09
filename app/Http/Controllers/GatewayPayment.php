<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
class GatewayPayment extends Controller
{
    //\
   public function index(Request $request ){

      \Stripe\Stripe::setApiKey('sk_test_51OAQOGF1Txt7XmYDZwrpzfaE5MfgUIH3uXFwZnL0m8QaC54d95jiIIgZMMNxb5BbBpt5SChZUUTZwEyHcjAxQkaU00nxh3bryw');

      $YOUR_DOMAIN = 'http://127.0.0.1:8000/';

      $checkout_session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
          'line_items' => [[
            'price_data' => [
              'currency' => 'usd',
              'product_data' => [
                'name' => $request->Product,
              ],
              'unit_amount' => 3000,
            ],
            'quantity' => 1,
          ]],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . 'success',
        'cancel_url' => $YOUR_DOMAIN . 'cancel',
      ]);
       return Redirect($checkout_session->url);
    }

    public function success(){
        return view("success");
    }
    public function cancel(){
        return view("cancel");
    }
}
