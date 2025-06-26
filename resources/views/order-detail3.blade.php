<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Watashi Travel</title>
  <link rel="stylesheet" href="{{ asset('css/order-detail3.css') }}">
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
  <div class="step completed">
    <div class="circle">✔</div><span>Customer Information</span>
  </div>
  <div class="step ">
    <div class="circle">3</div><span>Booking Summary</span>
  </div>
</div>

  <main class="card">
    <h2>Booking Summary</h2>

<form id="booking-form" action="{{ route('order.detail3') }}" method="POST">
  <div class="form-group">
    <div class="summary-text">Lembang - Ciwidey tour package 2 days 1 night (2D1N)</div>
    <a href="#" class="edit-btn">Edit</a>
  </div>

  <div class="form-group">
    <div class="trip-schedule">
        <span>Trip Schedule</span>
      <div class="dates">
      <div class="date-item">
        <p>Date of Departure</p>
        <span>04/07/2025</span>
      </div>
      <div class="date-item">
        <p>Return Date</p>
        <span>05/07/2025</span>
      </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="summary-texting">Participants</div>
      <div class="summary-p">1 Adult, 1 Child</div>
      <a href="#" class="edit-btn">Edit</a>
    </div>
  </div>
   <div class="summary-text">Your customized itinerary</div>
      <ul class="itinerary-list">
        <li>The Great Asia Africa</li>
        <li>Lembang Wonderland</li>
      </ul>
      <a href="#" class="edit-btn">Edit</a>
    </div>


    <button class="next-btn" type="submit">Next</button>
    </form>
  </main>

  <script src="{{ asset('js/order-detail2.js') }}"></script>
</body>
</html>
