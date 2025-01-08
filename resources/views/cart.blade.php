@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-3xl font-bold mb-6">Your Cart</h2>

    @if($cartItems->isEmpty())
        <p class="text-gray-700">Your cart is empty.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($cartItems as $item)
                <div class="border rounded-lg shadow overflow-hidden">
                    <img src="{{ $item->item_image }}" alt="{{ $item->item_name }}" class="w-full h-48 object-cover" loading="lazy">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">{{ $item->item_name }}</h3>
                        <p class="text-gray-700 mb-2">Price: ${{ $item->price }}</p>
                        <p class="text-gray-700 mb-2">Quantity: {{ $item->quantity }}</p>

                        <!-- Update Quantity -->
                        <form method="POST" action="{{ route('cart.update', $item->id) }}">
                            @csrf
                            @method('PATCH')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-16 border rounded mb-2">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
                        </form>

                        <!-- Remove Item -->
                        <form method="POST" action="{{ route('cart.destroy', $item->id) }}" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
