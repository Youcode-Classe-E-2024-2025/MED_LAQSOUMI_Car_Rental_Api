<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Payments;
use App\Models\Rentals;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;


class PaymentsController extends Controller
{
    
    public function create(Request $request)
    {
        $rental = Rentals::find($request->rental_id);
        $car = Car::find($rental->car_id);
        $user = User::find($rental->user_id);
        $amount = $car->price;
        $payment = new Payments();
        $payment->amount = $amount;
        $payment->payment_date = now();
        $payment->payment_method = 'credit_card';
        $payment->payment_status = 'pending';
        $payment->payment_details = 'Payment for rental of car ' . $car->name;
        $payment->user_id = $user->id;
        $payment->rental_id = $rental->id;
        $payment->save();
        return response()->json($payment);
    }

    public function pay(Request $request)
    {
        $payment = Payments::find($request->payment_id);
        $rental = Rentals::find($payment->rental_id);
        $car = Car::find($rental->car_id);
        $user = User::find($rental->user_id);
        $amount = $payment->amount;
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $car->name,
                        ],
                        'unit_amount' => $amount * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => env('APP_URL') . '/payments/success',
            'cancel_url' => env('APP_URL') . '/payments/cancel',
        ]);
        $payment->payment_status = 'paid';
        $payment->save();
        return response()->json($session);
    }
}