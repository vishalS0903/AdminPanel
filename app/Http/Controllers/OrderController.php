<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order=Order::all();
        return view('orders.index',compact('order'));
    }
    public function confirm($id){
        $order =Order::find($id);
        $order->update(['status'=>1]);
        return redirect()->back()->with('message','order has been again into pending');
    }
    public function pending($id){
        $order =Order::find($id);
        $order->update(['status'=>0]);
        return redirect()->back()->with('message','order has been confirm');
    }
}
