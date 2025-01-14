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

    
    <div class="flex flex-col items-center justify-center">
        <h2 class="text-3x1 font-bold mb-6">Shop</h2>

        <!-- Category Selection Buttons -->
        <div class="flex space-x-4 mb-8">
            <button id="showVegetables" class="category-button bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Vegetables
            </button>
            <button id="showFruits" class="category-button bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                Fruits
            </button>
        </div>
    </div>


        <!-- Vegetables Category -->
        <div id="vegetables" class="category-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Vegetable 1 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/carrots.jpg') }}" alt="Carrots" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Carrots</h3>
                    <p class="text-gray-700 mb-2">$1.99 per kg</p>
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Carrots">
                        <input type="hidden" name="item_image" value="{{ asset('images/carrots.jpg') }}">
                        <input type="hidden" name="price" value="1.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>  
                </div>
            </div>
            <!-- Vegetable 2 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('images/brocoli.jpg') }}" alt="brocolii" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Fresh Broccoli</h3>
                        <p class="text-gray-700 mb-2">$2.49 per kg</p>
                        <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Broccoli">
                        <input type="hidden" name="item_image" value="{{ asset('images/brocoli.jpg') }}">
                        <input type="hidden" name="price" value="2.49">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                    </div>
                </div>

                <!-- Vegetable 3 -->
                <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('images/beans.jpg') }}" alt="beans" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Fresh Beans</h3>
                        <p class="text-gray-700 mb-2">$3.49 per kg</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                    </div>
                </div>

                <!-- Vegetable 4 -->
                <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('images/bellpepper.jpg') }}" alt="bellpepper" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Fresh Bellpeppers</h3>
                        <p class="text-gray-700 mb-2">$1.55 per kg</p>
                        <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Bellpeppers">
                        <input type="hidden" name="item_image" value="{{ asset('images/bellpepper.jpg') }}">
                        <input type="hidden" name="price" value="1.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                    </div>
                </div>

                <!-- Vegetable 5 -->
                <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('images/bruselsprouts.jpg') }}" alt="bruselsprouts" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Fresh Bruselsprouts</h3>
                        <p class="text-gray-700 mb-2">$2.99 per kg</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                    </div>
                </div>

                <!-- Vegetable 6 -->
                <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="{{ asset('images/ladiesfinngers.jpg') }}" alt="Ladiesfingers" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Fresh Ladies Fingers</h3>
                        <p class="text-gray-700 mb-2">$2.00 per kg</p>
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
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Apples">
                        <input type="hidden" name="item_image" value="{{ asset('images/apples.jpg') }}">
                        <input type="hidden" name="price" value="1.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

            <!-- Fruit 2 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/bananas.jpg') }}" alt="Bannanas" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Bannanas</h3>
                    <p class="text-gray-700 mb-2">$2.99 per kg</p>
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Bananas">
                        <input type="hidden" name="item_image" value="{{ asset('images/bananas.jpg') }}">
                        <input type="hidden" name="price" value="2.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

            <!-- Fruit 3 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/oranges.jpg') }}" alt="Oranges" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Oranges</h3>
                    <p class="text-gray-700 mb-2">$5.99 per kg</p>
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Oranges">
                        <input type="hidden" name="item_image" value="{{ asset('images/fruits1.jpg') }}">
                        <input type="hidden" name="price" value="4.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

            <!-- Fruit 4 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/limes.jpg') }}" alt="Limes" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Limes</h3>
                    <p class="text-gray-700 mb-2">$2.99 per kg</p>
                    <form method="POST" action="{{ route('cart.store') }}">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Limes">
                        <input type="hidden" name="item_image" value="{{ asset('images/limes.jpg') }}">
                        <input type="hidden" name="price" value="2.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
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