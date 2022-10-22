<?php

namespace App\Http\Controllers;
use Stripe;
use Session;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $payments;
    public function __construct(){
        $this->payments = new Payment();
    }
    public function payment(){
        return view('paymentSuccess');
    }
    // public function export_pdf($id){
    //     $e =  DB::table('payment')->where('id', $id)->first();;
    //     dd($e);
    //     $x = "image/qrcode".$id.".jpg";
    //     QrCode::size(300)->generate($e->tenve, public_path($x));
    //     $pdf = PDF::loadview('paymentSuccess',compact('x','e'));
    //     return $pdf->download('vé.pdf');
    //     // $pdf = PDF::loadView('paymentSuccess');
    //     // return $pdf->download('invoice.pdf');
    // }
     
}
