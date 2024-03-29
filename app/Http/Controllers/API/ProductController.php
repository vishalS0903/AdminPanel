<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return $products;
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        $product = new Product();
        $product-> name =$request-> name;
        $product->price  =$request->price ;
        $product-> description =$request-> description;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $product->image=$filename;
        }
        $product-> save();
        return $product;
    }
    public function update( Request $request,$id){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);

        $product=Product::find($id);
        $product-> name =$request-> name;
        $product->price  =$request->price ;
        $product-> description =$request-> description;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $product->image=$filename;
        }
        $product-> save();
        return $product;

     }
     public function delete($id){
        $product=Product::find($id);
         $product-> delete();
         return redirect()->route('products.index')->with('message','Data removed successfully');


     }

}
