<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> 
</head>
<body>
    <h2>User Registration</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div>
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" required>
        </div>

        <div>
            <label for="user_email">Email:</label>
            <input type="email" id="user_email" name="user_email" required>
        </div>

        <div>
            <label for="user_number">Phone Number:</label>
            <input type="text" id="user_number" name="user_number" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
