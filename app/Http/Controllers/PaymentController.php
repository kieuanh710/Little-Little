<?php

namespace App\Http\Controllers;
use Stripe;
use Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){
        return view('payment');
    }
}
