<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('homepage') }}" class="text-xl font-bold">FreshCart</a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('homepage') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="{{ route('shop') }}" class="hover:text-gray-300">Shop</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gray-300">About</a></li>
            <li><a href="{{ route('account') }}" class="hover:text-gray-300">Account</a></li>
        </ul>
    </div>
</nav>
