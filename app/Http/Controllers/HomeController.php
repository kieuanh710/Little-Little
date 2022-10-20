<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Order;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Payment;
use QrCode;
use Carbon\Carbon;
use PDF;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Session;
use Stripe;
use Charge;;
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
                'idTypeTicket' =>  'Vui lòng chọn lựa loại vé',
                'number' =>  'Vui lòng chọn số lượng vé',
                'quantity' =>  'Vui lòng nhập tên ',
                'phone' =>  'Vui lòng nhập số điện thoại',
                'email' =>  'Vui lòng nhập địa chỉ email',
                'date' =>  'Vui lòng nhập chọn ngày sử dụng',
                
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
            $orders = $this->orders->getAllOrder()->last();
            // dd($orders);
            return view('payment', compact('orders'));
    }
    public function showpayment(Request $request){
    	$orders = $this->orders->getAllOrder()->last();
        return view('payment', compact('orders'));
    }
    public function payment(Request $request){
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
            $dataInsert = [
                'name' => $request->name,
                'totalPrice' => $request->totalPrice,
                'cardNumber' => $request->cardNumber,
                'cardName' => $request->cardName,
                'expiryMonth' => $request->expiryMonth,
                'expiryYear' => $request->expiryYear,
                'cvv' => $request->cvv,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];
            // dd($dataInsert);
            $this->payments->addPayment($dataInsert);
            $orders = $this->orders->getAllOrder()->last();

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    	Stripe\Charge::create([
    			"amount"=>200*100,
    			"currency"=>"usd",
    			"source"=>$request->stripeToken,
    			"description"=>"Test payment from expert rohila 2"
    	]);
         // print_r($request->all()); 
        // die();
    	Session::flash("success","Payment successfully!");
        return view('paymentSuccess');

    }
    // public function generatePDF($id) {
    //     $x = "image/qrcode".$id.".jpg";
    //     QrCode::generate('Welcome to Makitweb', public_path($x));
    //     $pdf = PDF::loadview('welcome');
    //     return $pdf->download('vé.pdf');

    // }
    // public function download($flag=null, $quantity=null, $orderId=null, $customerEmail=null){
    //     $pdf = \App::make('dompdf.wrapper');
    //     $orderDetail = new orderDetail();

    //     for($i = 0; $i < $quantity; $i++){
    //         $orderDetailList = $orderDetail->getOrderDetails($orderId);
    //     }

    //     $a = view('clients.ticket', compact('quantity', 'orderDetailList', 'orderId', 'customerEmail'));

    //     if($flag == "pdf"){
    //         $pdf = PDF::loadHTMl($a)
    //         ->setOptions(['defaultFont' => 'Montserrat'])
    //         ->setPaper('f4', 'potrait')
    //         ->setWarnings(false)
    //         ->save('ticket.pdf', 'UTF-8');
    //         return $pdf->stream('ticket.pdf');
    //     }
    //     if($flag == "email"){
    //         $mailable = new SendMail($quantity, $orderDetailList, $orderId, $customerEmail);

    //         Mail::to($customerEmail)->send($mailable);

    //         return view('clients.paymentSuccess', compact('orderDetailList', 'quantity', 'orderId', 'customerEmail'));
    //     }
    // }
    
    




    //--------------------------------- EVENT---------------------------------------
    public function event(){
        $listEvent = $this->events->getAllEvent();
        return view('event', compact('listEvent'));
    }
    public function detail(Request $request){
        $detail = Event::where('idEvent', $request->id)->first();
        // dd($detail);
        return view('detailEvent', compact ( 'detail'));
    }


    //--------------------------------- CONTACT---------------------------------------
    public function contact(){
        $alert = '';
        return view('contact', compact('alert'));
    }
    public function addContact(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'message' => 'required',
            ],
            [
                'name' =>  'Vui lòng nhập tên của bạn ',
                'phone' =>  'Vui lòng nhập số điện thoại',
                'email' =>  'Vui lòng nhập địa chỉ email ',
                'address' =>  'Vui lòng nhập địa chỉ liên hệ',
                'message' =>  'Vui lòng nhập tin nhắn mà bạn muốn gửi',
                
            ]);
            $dataInsert = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'message' => $request->message,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];
           
            // dd($dataInsert);
            $this->contacts->addContact($dataInsert);
            return redirect()->route('contact')->with('success', 
            'Gửi liên hệ thành công. 
            Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!');
           
    }
}
