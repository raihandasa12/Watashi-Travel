<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Watashi Travel</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
<div class="container">
    <div class="left-panel">
        <div class="welcome">
            <h2>Welcome Back</h2>
            <span>👋</span>
        </div>
        <p class="description">Sign in to explore new destinations with Watashi Travel</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Example@gmail.com" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="At least 8 characters" required>

            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit">Sign In</button>
        </form>

        <div class="bottom-text">
            Don't you have an account? <a href="{{ route('register') }}">Sign Up</a>
        </div>

        <div class="divider">Or Sign In with</div>

        <div class="social-buttons">
            <a href="#"><img src="/images/Social Icons.svg" alt="Google Icon">Google</a>
            <a href="#"><img src="/images/Social Icons 1.svg" alt="Facebook Icon">Facebook</a>
        </div>
    </div>

    <div class="right-panel">
        <a href="{{ route('home') }}">
        <img src="{{ asset('/images/Register.png') }}" alt="Travel Image">
    </div>
</div>
</body>
</html>
