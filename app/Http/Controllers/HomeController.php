<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Order;
use App\Models\Event;
use App\Models\Contact;
class HomeController extends Controller
{
    private $tickets, $orders, $events, $contacts;
    public function __construct(){
        $this->tickets = new Ticket();
        $this->orders = new Order();
        $this->events = new Event();
        $this->contacts = new Contact();
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
                
            ],
            [
                'idTypeTicket' =>  'Vui lòng chọn lựa loại vé',
                'number' =>  'Vui lòng chọn số lượng vé',
                'quantity' =>  'Vui lòng nhập tên ',
                'phone' =>  'Vui lòng nhập số điện thoại',
                'email' =>  'Vui lòng nhập địa chỉ email',
                
            ]);
            $dataInsert = [
                'idTypeTicket' => $request->idTypeTicket,
                'quantity' => $request->quantity,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];
            // dd($dataInsert);
            $this->orders->addOrder($dataInsert);
            return redirect()->route('payment')->with('success', 'Đặt vé thành công');;
    }
    // EVENT
    public function event(){
        $listEvent = $this->events->getAllEvent();
        return view('event', compact('listEvent'));
    }

    public function detail(Request $request){
        $detail = Event::where('idEvent', $request->idEvent)->first();
        // dd($detail);
        return view('detailEvent', compact ('detail'));
    }

    // CONTACT

    public function contact(){
        return view('contact');
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
            return redirect()->route('contact')->with('success', 'Gửi liên hệ thành công. Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!');
    }


    // PAYMENT
    public function payment(){
        $orders = $this->orders->getAllOrder();
        dd($orders);
        return view('payment', compact('orders'));
    }
    public function paymentSuccess(){
        return view('paymentSuccess');
    }
}
