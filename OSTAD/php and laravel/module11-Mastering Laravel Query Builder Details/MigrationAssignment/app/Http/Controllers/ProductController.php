<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // app/Http/Controllers/ProductController.php


    public function index(){
        $products = \App\Models\Product::all();
        return view('products.index',compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('message', 'Product added successfully.');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }
    public function update(Request $request){

        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

       $product = Product::findOrFail($request->id);
       $product->name = $request->get('name');
       $product->price = $request->get('price');
       $product->quantity = $request->get('quantity');
       $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully.');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product deleted successfully.');
    }
    public function sell($id){

        $product = Product::findOrFail($id);
        return view('products.sell',compact('product'));
    }

    public function sellUpdate(Request $request)
    {
        $product = Product::findOrFail($request->id);
        if($request->quantity > 0){
            if($product->quantity >= $request->quantity){
                $product->decrement('quantity');
                $product->save();
                return redirect()->route('products.index')->with('message', 'Product sold successfully.');
            }else{
                return redirect()->back()->with('message', 'Sorry ! Required Product is not available.');
            }
        }else{
            return redirect()->back()->with('message', 'Please Select At least one product.');
        }



    }

}
