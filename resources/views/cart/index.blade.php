<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body>
    @include('partials.navbar')


<div class="container mx-auto mt-10">
    <h2 class="text-3xl font-bold mb-6">Your Cart</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cartItems) > 0)
        <div class="grid gap-6">
            @foreach($cartItems as $index => $item)
                <div class="border rounded-lg shadow p-4 flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset($item['item_image']) }}" alt="{{ $item['item_name'] }}" class="w-16 h-16 object-cover mr-4">
                        <div>
                            <h3 class="text-xl font-bold">{{ $item['item_name'] }}</h3>
                            <p class="text-gray-700">Price: ${{ $item['price'] }}</p>
                            <p class="text-gray-700">Quantity: {{ $item['quantity'] }}</p>
                        </div>
                    </div>
                    <form action="{{ route('cart.remove', $index) }}" method="POST">
                        @csrf
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                    </form>
                </div>
            @endforeach
        </div>
        <form action="{{ route('cart.clear') }}" method="POST" class="mt-6">
            @csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Clear Cart</button>
        </form>
    @else
        <p class="text-gray-700">Your cart is empty!</p>
    @endif
</div>

</body>
</html>