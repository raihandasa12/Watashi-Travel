<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            height: 600px;
            width: 850px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 0px;
            overflow: hidden;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            flex: 1;
            padding: 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 60px;
       }

        .form-section h1 {
            font-size: 32px;
            margin-bottom: -10px;
            margin-top: 80px;
            font-family: 'ZCOOL_XiaoWei';
            src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
        }

        .form-section p {
            font-size: 12px;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .form-section label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .form-section input {
            width: 100%;
            padding: 7px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .signup-btn {
            background-color: #3BB3AB;
            color: white;
            border: none;
            padding: 8px;
            font-size: 12px;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .signup-btn:hover {
            background-color: #3BB3AB;
        }

        .signin-link {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9em;
            color: #666;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .signin-link a {
            color: #3BB3AB;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .image-section {
            flex: 1;
            background-color: #e0e0e0;
        }

        .image-section img {
            width: 400px;
            height: 600px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
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
