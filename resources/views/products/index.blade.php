<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body>
    @include('partials.navbar')

    <div class="container mx-auto mt-12">
    <h2 class="text-3xl font-bold text-center mb-6">Product List</h2>
    <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">Add New Product</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">{{ $product->product_name }}</h3>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <p>Quantity: {{ $product->quantity }}</p>
            <p>Category: {{ $product->category }}</p>
        </div>
       
    </div>
</div>
</body>
</html>