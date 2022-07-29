<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\Cart;

class CartController extends Controller
{
    public function index(){
        return view('front.cart.index');
    }
    public function store(Request $request){
        // Cart::add($request->id, $request->name, 1, $request->price);
            $product= new Cart();
            $product->name= $request->name;
            $product->price= $request->price;
            $product->save();

        return redirect()->back()->with('msg','Item has been added to car');
    }
}
