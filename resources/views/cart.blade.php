@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-12">
    <h2 class="text-3xl font-bold text-center mb-6">Shopping Cart</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    @if(session('cart') && count(session('cart')) > 0)
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Image</th>
                    <th class="border p-2">Product</th>
                    <th class="border p-2">Price</th>
                    <th class="border p-2">Quantity</th>
                    <th class="border p-2">Total</th>
                    <th class="border p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                <tr class="border-b">
                    <td class="p-2"><img src="{{ asset('storage/' . $details['image']) }}" width="50"></td>
                    <td class="p-2">{{ $details['product_name'] }}</td>
                    <td class="p-2">${{ $details['price'] }}</td>
                    <td class="p-2">
                        <form >
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="w-16 border p-1">
                            <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded ml-2">Update</button>
                        </form>
                    </td>
                    <td class="p-2">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="p-2">
                        <form>
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-between mt-4">
            <a href="" class="bg-red-500 text-white px-4 py-2 rounded">Clear Cart</a>
            <a href="#" class="bg-green-500 text-white px-4 py-2 rounded">Proceed to Checkout</a>
        </div>
    @else
        <p class="text-center text-gray-500">Your cart is empty.</p>
    @endif
</div>
@endsection
