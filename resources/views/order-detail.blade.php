<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Watashi Travel</title>
  <link rel="stylesheet" href="{{ asset('css/order-detail.css') }}">
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
  <div class="step active">
    <div class="circle">1</div><span>Order Detail</span>
  </div>
  <div class="step">
    <div class="circle">2</div><span>Customer Information</span>
  </div>
  <div class="step">
    <div class="circle">3</div><span>Booking Summary</span>
  </div>
</div>

  <main class="card">
    <h2>Order Detail</h2>

<form id="booking-form" action="{{ route('order.detail2') }}" method="GET">
  <div class="form-group">
    <label for="departure-date">Date of Departure</label>
    <input type="date" id="departure-date" name="departure_date" placeholder="dd/mm/yyyy">
  </div>

  <div class="form-group">
    <label for="return-date">Return Date</label>
    <input type="date" id="return-date" name="return_date" placeholder="dd/mm/yy">
  </div>

    <div class="form-group">
      <label>Number of Participants</label>

      <div class="participant-row">
        <span>Adults <small>(Age 18 - 89)</small></span>
        <div class="counter">
          <button class="btn minus" disabled>-</button>
          <span>0</span>
          <button class="btn plus">+</button>
        </div>
        <input type="hidden" name="adults" value="0">
    </div>

      <div class="participant-row">
        <span>Children <small>(Age 2 - 5)</small></span>
        <div class="counter">
          <button class="btn minus" disabled>-</button>
          <span>0</span>
          <button class="btn plus">+</button>
        </div>
        <input type="hidden" name="children" value="0">
    </div>
</div>

    <button class="next-btn" type="submit">Next</button>
    </form>
  </main>

  <script src="{{ asset('js/order-detail.js') }}"></script>
</body>
</html>
