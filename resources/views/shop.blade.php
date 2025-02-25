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
        


        

            
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-md">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-full h-40 object-cover mb-4 rounded">
            @endif
            <h3 class="text-xl font-bold">{{ $product->product_name }}</h3>
            <p class="text-gray-700">{{ $product->description }}</p>
            <p class="text-green-500 font-bold">Price: ${{ $product->price }}</p>
            <p class="text-gray-500">Quantity: {{ $product->quantity }}</p>
            <p class="text-blue-500">Category: {{ $product->category }}</p>
            <!-- Add to Cart Button -->
             
            <button onclick="addToCart({{ $product->product_id }}, '{{ $product->product_name }}', {{ $product->price }})" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-3">
                    Add to Cart
            </button>
            </div>
            @endforeach
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
    <script>
        // Function to get cart from localStorage
        function getCart() {
            return JSON.parse(localStorage.getItem('cart')) || [];
        }

        // Function to save cart to localStorage
        function saveCart(cart) {
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        // Function to add items to the cart
        function addToCart(id, name, price) {
            let cart = getCart();
            let existingProduct = cart.find(item => item.id === id);

            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({ id, name, price, quantity: 1 });
            }

            saveCart(cart);
            alert(name + " added to cart!");
        }

        // Function to display cart items
        function showCart() {
            let cart = getCart();
            let cartList = document.getElementById('cart-items');
            cartList.innerHTML = "";

            cart.forEach(product => {
                let listItem = document.createElement("li");
                listItem.textContent = `${product.name} - $${product.price} x ${product.quantity}`;
                cartList.appendChild(listItem);
            });
        }

        // Function to clear the cart
        function clearCart() {
            localStorage.removeItem('cart');
            showCart();
        }
    </script>

    
</body>
</html>