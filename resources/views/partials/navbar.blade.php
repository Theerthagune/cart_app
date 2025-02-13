<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('homepage') }}" class="text-xl font-bold">FreshCart</a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('homepage') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{ route('shop') }}" class="hover:text-gray-300">Shop</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gray-300">About</a></li>
            <li><a href="{{ route('account') }}" class="hover:text-gray-300">Account</a></li>
            <li><a href="{{ route('cart.index') }}" class="hover:text-gray-300">Cart</a></li>
        </ul>
        <div class="relative">
            <button id="profileDropdown" class="text-white px-4 py-2 bg-gray-700 rounded-md focus:outline-none">
                Profile
            </button>
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border z-50">
                <a href="{{ route('register') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Register</a>
                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Login</a>
                <a href="{{ route('products.create') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Add Product</a>
            </div>
        </div
    </div>
</nav>

<script>
    document.getElementById('profileDropdown').addEventListener('click', function () {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>
