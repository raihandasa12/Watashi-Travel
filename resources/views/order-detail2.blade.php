<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Watashi Travel</title>
  <link rel="stylesheet" href="{{ asset('css/order-detail2.css') }}">
</head>
<body>
<header class="header">
  <div class="logo-wrapper">
    <img src="/images/logo_horizontal_full color.png" alt="Watashi Travel Logo" class="logo" />
  </div>
  <div class="text-wrapper">
    <h1>Your Bandung Trip, Your Way</h1>
  </div>
</header>

<div class="steps">
  <div class="step completed">
    <div class="circle">✔</div><span>Order Detail</span>
  </div>
  <div class="step active">
    <div class="circle">2</div><span>Customer Information</span>
  </div>
  <div class="step ">
    <div class="circle">3</div><span>Booking Summary</span>
  </div>
</div>

  <main class="card">
    <h2>Customer Information</h2>

<form id="booking-form" action="{{ route('order.detail3') }}" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Input your name" required>
  </div>

  <div class="form-group">
    <label for="whatsapp">WhatsApp Number</label>
    <input type="tel" id="whatsapp" name="whatsapp" placeholder="Input your WhatsApp number" required>
  </div>

  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Input your email address" required>
  </div>

   <div class="form-group">
    <label for="city">City of Origin</label>
    <input type="text" id="city" name="city" placeholder="Jakarta, Surabaya, etc." required>
  </div>
    <button class="next-btn" type="submit">Next</button>
    </form>
  </main>

  <script src="{{ asset('js/order-detail2.js') }}"></script>
</body>
</html>
