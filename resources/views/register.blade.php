<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Ready to explore?</h1>
            <p>Sign up to find your next destination</p>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="your username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Example@gmail.com" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="At least 8 characters" minlength="8" required>

                <button type="submit" class="signup-btn">Sign Up</button>
            </form>
            <p class="signin-link">If you already have an account <a href="#">Sign In</a></p>
        </div>
        <div class="image-section">
            <a href="{{ route('home') }}">
            <img src="/images/Register.png" alt="Scenic coastal road with a boat">
        </div>
    </div>
</body>
</html>
