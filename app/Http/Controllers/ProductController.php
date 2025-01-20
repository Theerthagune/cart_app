<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Retrieve all products
        return view('products.index', compact('products'));
    }

     public function show()
    {
        $products = Product::all(); // show products in the shop
        return view('shop', compact('products'));
    }

    public function create()
    {
        return view('products.create'); // Show the product creation form
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category' => 'nullable',
            'cart_id' => 'nullable|integer', 
        ]);

        Product::create($request->all());

        return redirect()->back()->with('success', 'Product added successfully!');
    }
}