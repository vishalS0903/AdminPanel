<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
class CartController extends Controller
{
    public function index(){

        return view('front.cart.index');
    }
    public function store(Request $request){
        // dd($request->all());
        Cart::add($request->id, $request->name, 1,$request->price, 0);



        return redirect()->back()->with('msg','Item has been added to car');
    }

    // update
    public function update(Request $request,$id){
        Cart::update($id,$request->qty ); // Will update the quantity
        return redirect()->back()->with('msg','Item quantity has been added successfully!');
    }

    public function empty()
    {
        Cart::destroy();
    }
    public function remove($id){
        Cart::remove($id);
        return redirect()->back()->with('msg', 'Item has been removed from cart !');
    }

}

