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
    public function index()
    {
        $payments = Payments::all();
        return response()->json($payments);
    }
    
    public function store(Request $request)
    {
        $payment = new Payments();
        $payment->rental_id = $request->rental_id;
        $payment->amount = $request->amount;
        $payment->payment_status = 'pending';
        $payment->save();
        return response()->json($payment);
    }

    public function show($id)
    {
        $payment = Payments::find($id);
        return response()->json($payment);
    }

    public function update(Request $request, $id)
    {
        $payment = Payments::find($id);
        $payment->rental_id = $request->rental_id;
        $payment->amount = $request->amount;
        $payment->payment_status = $request->payment_status;
        $payment->save();
        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payments::find($id);
        $payment->delete();
        return response()->json($payment);
    }
}