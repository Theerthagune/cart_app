<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - FreshCart</title>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body>
    @include('partials.navbar')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">About Us</h1>
        <p>Learn more about our story and mission.</p>
    </div>
</body>
</html>
