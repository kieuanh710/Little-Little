<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contacts;
    public function __construct(){
        $this->contacts = new Contact();
    }
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
