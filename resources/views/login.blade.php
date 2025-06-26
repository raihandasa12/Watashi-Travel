<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Watashi Travel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 900px;
            height: 600px;
            border-radius: 0px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .left-panel {
            flex: 1;
            padding: 40px;
        }
        .right-panel {
            flex: 1;
        }
        .right-panel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }
        .welcome {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        p.description {
            color: #555;
            font-size: 14px;
            margin-bottom: 30px;
        }
        label {
            font-size: 13px;
            color: #444;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }
        .forgot-password a {
            color: #2bbbad;
            font-size: 13px;
            text-decoration: none;
        }
        button {
            width: 100%;
            background-color: #2bbbad;
            border: none;
            padding: 12px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .bottom-text {
            font-size: 14px;
            text-align: center;
        }
        .bottom-text a {
            color: #2bbbad;
            text-decoration: none;
            margin-left: 4px;
        }
        .divider {
            text-align: center;
            margin: 20px 0;
            color: #707070;
            font-size: 12px;
            position: relative;
        }
        .divider:before,
        .divider:after {
            content: "";
            height: 1px;
            background-color: #ddd;
            position: absolute;
            top: 50%;
            width: 40%;
        }
        .divider:before {
            left: 0;
        }
        .divider:after {
            right: 0;
        }
        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            height: 35px;
            margin-top: 10px;
        }
        .social-buttons a {
            border: 1px solid #ccc;
            padding: 5px 40px;
            border-radius: 15px;
            font-size: 14px;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>
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
