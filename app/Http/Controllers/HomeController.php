<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Order;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Payment;
use Carbon\Carbon;
use App\Mail\SendMail;

use QrCode;
use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Stripe;
use Charge;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $tickets, $orders, $events, $contacts, $payments;
    public function __construct(){
        $this->tickets = new Ticket();
        $this->orders = new Order();
        $this->events = new Event();
        $this->contacts = new Contact();
        $this->payments = new Payment();
    }
    public function index(){
        $tickets = $this->tickets->getAllTicket();
        return view('home', compact('tickets'));
    }
    public function addOrder(Request $request){
        $request->validate(
            [
                'idTypeTicket' => 'required',
                'quantity' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'date' => 'required',
            ],
            [
                'required' =>  'Vui lòng nhập đầy đủ thông tin',
            ]);
            $dataInsert = [
                'idTypeTicket' => $request->idTypeTicket,
                'quantity' => $request->quantity,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'date' => $request->date,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];
            // dd($dataInsert);
            $this->orders->addOrder($dataInsert);
            $orders = $this->orders->getAllOrder()->get()->last();
            // dd($orders);
            return view('payment.payment',compact('orders'));
    }

    public function payment(Request $request, $id){
        $request->validate(
            [
                'cardNumber' => 'required',
                'cardName' => 'required',
                'expiryMonth' => 'required',
                'expiryYear' => 'required',
                'cvv' => 'required',
            ],
            [
                'required' =>  'Vui lòng nhập thông tin thanh toán',
            ]);
        $data = DB::table('orders')->where('id', $id)->update([
            'name' => $request->name,
            'totalPrice' => $request->totalPrice,
            'cardNumber' => $request->cardNumber,
            'cardName' => $request->cardName,
            'expiryMonth' => $request->expiryMonth,
            'expiryYear' => $request->expiryYear,
            'cvv' => $request->cvv,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
          
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    	Stripe\Charge::create([
    			"amount"=>200*100,
    			"currency"=>"usd",
    			"source"=>$request->stripeToken,
    			"description"=>"Test payment from expert rohila 2"
    	]);
         // print_r($request->all()); 
        // die();

    	// Session::flash("success","Payment successfully!");
        
        $payments=  DB::table('orders')->where('id', $id)->get();
        $detail = $this->orders->getDetailOrder($id);
        // dd($payments);
        return view('payment.paymentSuccess', compact('payments', 'detail'));

    }
    
    public function export_pdf($id) {
        $payments=  DB::table('orders')->where('id', $id)->get();
        $detail = $this->orders->getDetailOrder($id);
        // dd($detail);
        $pdf = PDF::loadview('payment.pdfticket', compact('payments', 'detail'))
        ->setOptions(['defaultFont' => 'Montserrat'])
        ->setPaper('f4', 'potrait')
        ->setWarnings(false)
        ->save('ticket.pdf', 'UTF-8');
        return $pdf->download('ticket.pdf', compact('detail'));
    }

    public function send_mail( $id){
        $payments = DB::table('orders')->where('id',$id)->get();
        $ticket = DB::table('orders')->where('id',$id)->first();
        $detail =  $this->orders->getDetailOrder($id);
        // dd($ticket->quantity);
        $pdf = PDF::loadview('payment.pdfticket', compact('payments', 'detail'));
        
        $qrcode = $ticket->email;
        $test = 'test';
        Mail::send('email', compact('test'), function($message) use($pdf, $qrcode){
            $message->to($qrcode, '')
            ->subject('Vé của bạn')
            ->attachData($pdf->output(), 'ticket.pdf');
        });
    	Session::flash("success","Chúng tôi đã gửi mail cho bạn!!");

        return view('payment.paymentSuccess', compact('payments', 'detail'));
    }
    // test
    // public function paymentSuccess($id){
    //     $payments = DB::table('orders')->where('id',$id)->get();
    //     $ticket = DB::table('orders')->where('id',$id)->first();
    //     $detail =  $this->orders->getDetailOrder($id);
    //     return view('payment.paymentSuccess', compact('payments', 'detail'))->with('message', 'Chúng tôi đã gửi mail cho bạn!!');
    // }

  
    

}
