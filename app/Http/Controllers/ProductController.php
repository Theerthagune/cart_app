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
        try {

            //dd($request->all());
            $request->validate([
                'product_name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric',
                'quantity' => 'required|integer',
                'category' => 'required|in:Fruits,Vegetables',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
            }
            //dd($imagePath);
            $Product = Product::create([
                'product_name' => $request->input('product_name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'category' => $request->input('category'),
                'image' => $imagePath,
            ]);

            //dd($Product);

            return redirect()->back()->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error: ' . $e->getMessage())
                ->withInput(); // Preserve form input on error
        }
    }
    
}