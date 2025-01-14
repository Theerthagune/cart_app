<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve cart items from the session
        $cartItems = session()->get('cart', []);
        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        // Retrieve the existing cart or initialize an empty one
        $cart = session()->get('cart', []);

        // Add the new item to the cart
        $cart[] = [
            'item_name' => $request->input('item_name'),
            'item_image' => $request->input('item_image'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
        ];

        // Save the updated cart to the session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function remove(Request $request, $index)
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Remove the item by its index
        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', array_values($cart)); // Reindex the array
        }

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

    public function clear()
    {
        // Clear the cart session
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared!');
    }
}
