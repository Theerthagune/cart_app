<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Auth::check() ? 
            Cart::where('user_id', Auth::id())->get() : 
            session()->get('cart', []);

        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Cart::create([
                'user_id' => Auth::id(),
                'item_name' => $request->item_name,
                'item_image' => $request->item_image,
                'price' => $request->price,
                'quantity' => $request->quantity,
            ]);
        } else {
            $cart = session()->get('cart', []);
            $cart[] = $request->all();
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            $cartItem = Cart::findOrFail($id);
            $cartItem->update(['quantity' => $request->quantity]);
        } else {
            $cart = session()->get('cart');
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Cart updated!');
    }

    public function destroy($id)
    {
        if (Auth::check()) {
            Cart::destroy($id);
        } else {
            $cart = session()->get('cart');
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
}
