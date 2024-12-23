<!-- resources/views/shop.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body>

    @include('partials.navbar')

    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-6">Shop</h2>

        <!-- Category Selection Buttons -->
        <div class="flex space-x-4 mb-8">
            <button id="showVegetables" class="category-button bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Vegetables
            </button>
            <button id="showFruits" class="category-button bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                Fruits
            </button>
        </div>

        <!-- Vegetables Category -->
        <div id="vegetables" class="category-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Vegetable 1 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/carrots.jpg') }}" alt="Carrots" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Carrots</h3>
                    <p class="text-gray-700 mb-2">$1.99 per kg</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>

            <!-- Vegetable 2 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/broccoli.jpg') }}" alt="brocolii" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Broccoli</h3>
                    <p class="text-gray-700 mb-2">$2.49 per kg</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Fruits Category -->
        <div id="fruits" class="category-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 hidden">
            <!-- Fruit 1 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/apples.jpg') }}" alt="Apples" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Apples</h3>
                    <p class="text-gray-700 mb-2">$3.99 per kg</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>

            <!-- Fruit 2 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/oranges.jpg') }}" alt="Oranges" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Oranges</h3>
                    <p class="text-gray-700 mb-2">$2.99 per kg</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to toggle categories
        document.getElementById('showVegetables').addEventListener('click', () => {
            document.getElementById('vegetables').classList.remove('hidden');
            document.getElementById('fruits').classList.add('hidden');
        });

        document.getElementById('showFruits').addEventListener('click', () => {
            document.getElementById('fruits').classList.remove('hidden');
            document.getElementById('vegetables').classList.add('hidden');
        });
    </script>

</body>
</html>
