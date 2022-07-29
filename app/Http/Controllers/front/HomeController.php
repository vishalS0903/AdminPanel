<?php

namespace App\Http\Controllers\front;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product=Product::inRandomOrder()->take(4)->get();
        return view('front.index',compact('product'));
    }
}
