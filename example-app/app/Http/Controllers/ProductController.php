<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('products.index' , ['products' => $product]); 
        
    }
    public function create()
    {
        return view('products.create'); 
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        Product::create($data);

        return redirect()->back()->with('success', 'Product created successfully!');
    }
    public function edit(Product $product)
    {
        return view('products.edit' , ['product'=> $product]);
    }
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);
        $product->update($data);
        
        return redirect(route('product.index'))->with('success','Product Updated Successfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success','Product Deleted Successfully');
    }
}
