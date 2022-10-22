<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $events;
    public function __construct(){
        $this->events = new Event();
    }
    public function event(){
        $listEvent = $this->events->getAllEvent();
        return view('event', compact('listEvent'));
    }
    public function detail(Request $request){
        $detail = Event::where('idEvent', $request->id)->first();
        // dd($detail);
        return view('detailEvent', compact ( 'detail'));
    }

}
