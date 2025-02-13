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
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-center mb-6">Add Product</h2>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" onsubmit="alert('Form submitted!');">
                @csrf
                <div class="mb-4">
                    <label for="product_name" class="block text-gray-700 font-medium mb-2">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="w-full border rounded-lg px-4 py-2" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" id="description" class="w-full border rounded-lg px-4 py-2"></textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                    <input type="number" name="price" id="price" class="w-full border rounded-lg px-4 py-2" required>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700 font-medium mb-2">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="w-full border rounded-lg px-4 py-2" required>
                </div>
                <div class="mb-4">
                    <label for="category" class="block text-gray-700 font-medium mb-2">Category:</label>
                    <select name="category" id="category" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Select a Category</option>
                        <option value="Fruits">Fruits</option>
                        <option value="Vegetables">Vegetables</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium mb-2">Product Image</label>
                    <input type="file" name="image" id="image" class="w-full border rounded-lg px-4 py-2" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Add Product</button>
                </form>
        </div>
    </div>
</body>
</html>