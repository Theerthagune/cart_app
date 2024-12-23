<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body class="bg-gray-100">

    @include('partials.navbar')

    <div class="container mx-auto mt-12">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-center mb-6">Account</h2>

            <!-- Tabs for Login and Sign Up -->
            <div class="flex justify-around mb-6">
                <button id="showLogin" class="tab-button text-blue-500 font-bold">Login</button>
                <button id="showSignUp" class="tab-button text-blue-500 font-bold">Sign Up</button>
            </div>

            <!-- Login Section -->
            <div id="loginSection" class="account-section">
                <h3 class="text-2xl font-bold mb-4">Login</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email_or_phone" class="block text-gray-700 font-medium mb-2">Email or Phone</label>
                        <input type="text" name="email_or_phone" id="email_or_phone" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email or phone number" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input type="password" name="password" id="password" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Login</button>
                </form>
            </div>

            <!-- Sign Up Section -->
            <div id="signUpSection" class="account-section hidden">
                <h3 class="text-2xl font-bold mb-4">Sign Up</h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                        <input type="text" name="phone" id="phone" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input type="password" name="password" id="password" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Create a password" required>
                    </div>
                    <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle between Login and Sign Up sections
        document.getElementById('showLogin').addEventListener('click', () => {
            document.getElementById('loginSection').classList.remove('hidden');
            document.getElementById('signUpSection').classList.add('hidden');
        });

        document.getElementById('showSignUp').addEventListener('click', () => {
            document.getElementById('signUpSection').classList.remove('hidden');
            document.getElementById('loginSection').classList.add('hidden');
        });
    </script>

</body>
</html>
