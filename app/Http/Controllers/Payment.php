<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
class Payment extends Controller
{
    //
    public function Show()
{
    return view('stripe');
}

public function processPayment(Request $request)
{
    \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

    try {
        \Stripe\Charge::create([
            'amount' => 1000,  // Amount in cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Example Charge',
        ]);

        return view('payment.success');
    } catch (\Exception $e) {
        return back()->withError($e->getMessage());
    }
}

}
