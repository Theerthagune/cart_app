<!-- resources/views/homepage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>
<body>

    @include('partials.navbar')

    <!-- Slider Section -->
    <div class="slider-container container mx-auto mt-4">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('images/image1.jpg') }}');">
                    <div class="overlay text-white text-2xl p-4">Welcome to FreshCart!</div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('images/fruits1.jpg') }}');">
                    <div class="overlay text-white text-2xl p-4">Discover Fresh Deals Every Day!</div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset('images/fruits2.jpg') }}');">
                    <div class="overlay text-white text-2xl p-4">Shop Now for Exclusive Offers!</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Product Section -->
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Product 1 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/apples.jpg') }}" alt="Product 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Apples</h3>
                    <p class="text-gray-700 mb-2">$5.99 per kg</p>
                    <form method=" " action=" ">
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

            <!-- Product 2 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/bananas.jpg') }}" alt="Product 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Organic Bananas</h3>
                    <p class="text-gray-700 mb-2">$2.99 per bunch</p>
                    <form method=" " action=" ">
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

            <!-- Product 3 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/carrots.jpg') }}" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Carrots</h3>
                    <p class="text-gray-700 mb-2">$1.99 per kg</p>
                    <form method=" " action=" ">
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

            <!-- Product 4 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/fruits1.jpg') }}" alt="Product 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Oranges</h3>
                    <p class="text-gray-700 mb-2">$4.99 per kg</p>
                    <form method=" " action=" ">
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

            <!-- Product 5 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/bellpepper.jpg') }}" alt="Product 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Bellpeppers</h3>
                    <p class="text-gray-700 mb-2">$1.99 per kg</p>
                    <form method=" " action=" ">
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

            <!-- Product 6 -->
            <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
                <img src="{{ asset('images/limes.jpg') }}" alt="Product 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Fresh Limes</h3>
                    <p class="text-gray-700 mb-2">$3.99 per kg</p>
                    <form method=" " action=" ">
                        @csrf
                        <input type="hidden" name="item_name" value="Fresh Limes">
                        <input type="hidden" name="item_image" value="{{ asset('images/limes.jpg') }}">
                        <input type="hidden" name="price" value="3.99">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: { delay: 3000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        });
    </script>

</body>
</html>
