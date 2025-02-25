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

    @section('content')
        <div class="container mx-auto mt-12">
            <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
            
            <ul id="cart-items" class="list-disc ml-6"></ul>

            <button onclick="clearCart()" class="bg-red-500 text-white px-4 py-2 mt-4 rounded-lg">
                Clear Cart
            </button>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                showCart();
            });
        </script>
    @endsection
</div>

</body>
</html>