<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watashi Travel</title>
    <link rel="stylesheet" href="{{ asset('css/wisata.css') }}">
</head>
    <div class="secondary-navbar">
        <div class="top-links">
            <a href="#">Press Release</a>
            <a href="#">Articles</a>
            <a href="#">Events</a>
        </div>
    </div>
    <header>
        <div class="nav-left">
           <a href="{{ route('home') }}"> <img src="{{ asset("images/logo-2.svg") }}" alt="Logo">
        </div>
        <div class="nav-right">
            <a href="{{ route('home') }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="dropbtn">Services <i class="caret-icon"></i></a>
                <div class="dropdown-content">
                    <a href="#">Service 1</a>
                    <a href="#">Service 2</a>
                    <a href="#">Service 3</a>
                </div>
            </div>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <div class="btn-group">
            <a href="{{ route('register') }}" class="btn btn-register">Registrasi</a>
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
            </div>
        </div>
    </header>
    <div class="language-selector">
    <a href="#" class="lang-option active">ENG</a>
    <span class="separator"> | </span>
    <a href="#" class="lang-option">IND</a>
</div>
<body>
    <body>
    <div class="gallery">
        <div class="gallery-item"><img src="/images/gallery 1.png" alt="Hutan dan Kemah"></div> <!-- Gambar besar -->
        <div class="gallery-item"><img src="/images/gallery 2.png" alt="Et Lembang"></div> <!-- Kecil 1 -->
        <div class="gallery-item"><img src="/images/gallery 3.png" alt="Orchid Forest Cikole"></div> <!-- Kecil 2 -->
        <div class="gallery-item"><img src="/images/gallery 4.png" alt="Kemah dan Api Unggun"></div> <!-- Kecil 3 -->
        <div class="gallery-item"><img src="/images/gallery 5.png" alt="Camping"></div> <!-- Kecil 4 -->
    </div>
     <div class="main-wrapper">
        <header>
            <h1>Lembang - Ciwidey tour package 2 days 1 </br>night (2D1N)</h1>
            <div class="price-box">
                <p>START FROM</p>
                <p>Rp 750.000 / Person</p>
                <a href="{{ url('/order-detail') }}"><button>Check Availability</button></a>
            </div>
        </header>
        <nav class="tabs">
            <a href="#overview" class="active">Overview</a>
            <a href="#destination">Destination</a>
            <a href="#itinerary">Itinerary</a>
            <a href="#coast">Coast</a>
            <a href="#facilities">Facilities</a>
            <a href="#remarks">Remarks</a>
        </nav>
        <section id="overview" class="content">
            <h2>Overview</h2>
            <p>Craving a quick escape from your routine? Discover the magic of Ciwidey & Lembang in just 2 days 1 night! Explore the dreamy Kawah Putih crater, wander through scenic tea plantations, and snap photos at Glamping Lakeside & Tangkuban Perahu. Wrap it up with Bandung's city charm and delicious local eats.</p>
        </section>
        <section id="destination" class="content">
            <h2>Destination</h2>
            <div class="destination-grid">
                <div class="destination-item">
                    <img src="/images/white crater.png" alt="white crater">
                    <p>White crater</p>
                </div>
                <div class="destination-item">
                    <img src="/images/Rancabali Tea Plantation.png" alt="Rancabali Tea Plantation">
                    <p>Rancabali Tea Plantation</p>
                </div>
                <div class="destination-item">
                    <img src="/images/Glamping Lakeside Situ Patenggang.png" alt="Glamping Lakeside Situ Patenggang / Ranca Upas">
                    <p>Glamping Lakeside Situ Patenggang / Ranca Upas</p>
                </div>
                <div class="destination-item">
                    <img src="/images/Gedung Sate & Gedung Merdeka.png" alt="Gedung Sate & Gedung Merdeka (Asia-Afrika)">
                    <p>Gedung Sate & Gedung Merdeka (Asia-Afrika)</p>
                </div>
                <div class="destination-item">
                    <img src="/images/Passing by Alun-Alun Bandung.png" alt="Passing by Alun-Alun Bandung & Braga Street">
                    <p>Passing by Alun-Alun Bandung & Braga Street</p>
                </div>
                <div class="destination-item">
                    <img src="/images/Lembang Highland Resort.png" alt="Lembang Highland Resort/Hotel">
                    <p>Lembang Highland Resort/Hotel</p>
                </div>
            </div>
        </section>
    </div>
<div class="content-box">
    <h2>Cost</h2>
    <h3>Harga Hotel Per Orang (Rp Ribu)</h3>
    <div class="table">
        <div class="table-header">
            <div class="table-row">
                <div class="table-cell">Hotel</div>
                <div class="table-cell">50 Pax</div>
                <div class="table-cell">11-12</div>
                <div class="table-cell">8-10</div>
                <div class="table-cell">6-7</div>
                <div class="table-cell">3-5</div>
                <div class="table-cell">2</div>
                <div class="table-cell">Single Sup</div>
            </div>
        </div>
        <div class="table-body">
            <div class="table-row">
                <div class="table-cell">Citra Dream / Amaris *2</div>
                <div class="table-cell">1.000</div>
                <div class="table-cell">1.150</div>
                <div class="table-cell">1.250</div>
                <div class="table-cell">1.350</div>
                <div class="table-cell">1.450</div>
                <div class="table-cell">1.800</div>
                <div class="table-cell">200</div>
            </div>
            <div class="table-row">
                <div class="table-cell">Zest / Pasar Baru / Neo *3</div>
                <div class="table-cell">1.050</div>
                <div class="table-cell">1.200</div>
                <div class="table-cell">1.300</div>
                <div class="table-cell">1.400</div>
                <div class="table-cell">1.500</div>
                <div class="table-cell">1.850</div>
                <div class="table-cell">250</div>
            </div>
            <div class="table-row">
                <div class="table-cell">Santika / Grand Tebu / Jayakarta *4</div>
                <div class="table-cell">1.200</div>
                <div class="table-cell">1.350</div>
                <div class="table-cell">1.450</div>
                <div class="table-cell">1.550</div>
                <div class="table-cell">1.650</div>
                <div class="table-cell">2.000</div>
                <div class="table-cell">375</div>
            </div>
            <div class="table-row">
                <div class="table-cell">De Braga / Oakwood / Aston *4</div>
                <div class="table-cell">1.275</div>
                <div class="table-cell">1.425</div>
                <div class="table-cell">1.525</div>
                <div class="table-cell">1.625</div>
                <div class="table-cell">1.725</div>
                <div class="table-cell">2.075</div>
                <div class="table-cell">425</div>
            </div>
        </div>
    </div>
</div>
    </div>
<div class="pricing-table">
    <h2>Harga Tanpa Hotel (Land Tour Only)</h2>
    <div class="price-list">
        <div class="price-row price-header">
            <div class="price-cell">Jumlah Peserta</div>
            <div class="price-cell">Harga Perorang</div>
        </div>
        <div class="price-row">
            <div class="price-cell">50 Pax</div>
            <div class="price-cell">800</div>
        </div>
        <div class="price-row">
            <div class="price-cell">11-12 Pax</div>
            <div class="price-cell">950</div>
        </div>
        <div class="price-row">
            <div class="price-cell">8-10 Pax</div>
            <div class="price-cell">1050</div>
        </div>
        <div class="price-row">
            <div class="price-cell">6-7 Pax</div>
            <div class="price-cell">1150</div>
        </div>
        <div class="price-row">
            <div class="price-cell">3-5 Pax</div>
            <div class="price-cell">1250</div>
        </div>
        <div class="price-row">
            <div class="price-cell">2 Pax</div>
            <div class="price-cell">1600</div>
        </div>
    </div>
    <h3>Transportasi:</h3>
    <p class="transport-note">2-5 pax - Avanza / 6-12 pax - Hiace / 40 pax - Bus Pariwisata</p>
</div>
</div>
 <div class="itinerary-title">
    <h1>Itinerary</h1>
  </div>
  <main>
    <div class="container">
      <h2>Day 01 – Arrival in Jakarta – Bandung – Ciwidey Tour</h2>
      <div class="itinerary-list">
        <div class="itinerary-entry">
          <div class="itinerary-cell">Arrive in Jakarta, meet with our representative.</div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">Proceed to Bandung - Ciwidey.</div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">Arrive in Ciwidey, have lunch at a local restaurant.</div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">
            Sightseeing tour:
            <ul class="bullet-list">
              <li>Kawah Putih (includes shuttle)</li>
              <li>Rancabali Tea Plantation</li>
              <li>Glamping Lakeside Situ Patenggang / Ranca Upas</li>
              <li>(Optional: Hanging Bridge & Kawah Rengganis – entry fees not included)</li>
            </ul>
          </div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">In the afternoon, proceed to Bandung City.</div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">
            Bandung City Tour:
            <ul class="bullet-list">
              <li>Photostop: Gedung Sate & Gedung Merdeka (Asia-Afrika)</li>
              <li>Pass by Alun-Alun Bandung & Braga Street</li>
            </ul>
          </div>
        </div>
        <div class="itinerary-entry">
          <div class="itinerary-cell">Check-in at the hotel, free time.</div>
        </div>
      </div>
    </div>
  </main>
<main>
<article>
        <h2 class="day-title">Day 02 – Lembang Tour – Departure To Jakarta</h2>
        <div class="plan-item">Breakfast at the hotel.</div>
        <hr class="item-divider">
        <div class="plan-item">Check out from the hotel, head to Lembang.</div>
        <hr class="item-divider">
<div class="plan-item plan-choice">
    <p>Choose 2 favorite attractions from the following list:</p>
    <div class="attraction-options">
        <div class="option-column">
            <label class="checkbox-container">
                <input type="checkbox" checked> The Great Asia Africa
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Orchid Forest Cikole
            </label>
            <label class="checkbox-container">
                <input type="checkbox" checked> Lembang Wonderland
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Floating Market Lembang
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Kota Mini Lembang (Mini City)
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> De Castello / De Ranch Sari Ater
            </label>
        </div>
        <div class="option-column">
            <label class="checkbox-container">
                <input type="checkbox"> Gunung Tangkuban Perahu
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Farmhouse Lembang
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Dusun Bambu Café & Resort
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Mini Mania Lembang
            </label>
            <label class="checkbox-container">
                <input type="checkbox"> Sari Ater Hot Springs
            </label>
        </div>
        </div>
        </div>

        <div class="plan-end">
  <div class="plan-item">Lunch at a local restaurant</div>
  <div class="plan-item">Transfer to Soekarno–Hatta Airport or hotel in Jakarta</div>
  <div class="plan-item">Arrival in Jakarta, end of service</div>
</div>
</div>
</div>
<div class="facility-wrapper">
  <h1>Facilities</h1>

  <section class="included">
    <h2>Included:</h2>
    <p>
      Executive tourist transportation according to the number of participants (private tour).<br>
      1-night accommodation at a selected hotel (standard room, twin share).
    </p>

    <p><strong>Meals:</strong></p>
    <ul class="custom-bullet">
      <li>1x breakfast at the hotel.</li>
      <li>2x lunch at local restaurants.</li>
    </ul>

    <p><strong>Entrance tickets to attractions:</strong></p>
    <ul class="custom-bullet">
      <li>Kawah Putih, Rancabali Tea Plantation, Glamping Lakeside / Ranca Upas.</li>
      <li>2 selected tourist attractions in Lembang.</li>
    </ul>

    <div class="no-bullet">
      <p>Round-trip Jakarta–Bandung toll fees, tourist attraction parking</p>
      <p>500 ml mineral water/person/day, candies</p>
      <p>Driver also serves as a guide (Indonesian-speaking)</p>
      <p>Additional local guide for groups of 20 participants or more</p>
    </div>
  </section>
<section class="not-included">
  <h2>Not Included:</h2>
  <ul class="no-bullet">
    <p>Flight tickets, train (KAI) tickets, airport tax, porter fees<p>
    <p>Personal expenses (laundry, minibar, telephone, etc.)</p>
    <p>Guide & driver tips (voluntary)</p>
    <p>Optional ticket: Kawah Rengganis & Suspension Bridge Rp100,000/person</p>
    <p>Additional lunch/dinner Rp60,000/pax</p>
    <p>High season surcharge (+35%): School holidays, Eid, Christmas, New Year</p>
  </ul>
</section>
  <section class="remarks">
    <h2>Remarks</h2>
    <ul>
      <li>Valid for domestic guests (Indonesian citizens), private tour system</li>
      <li>Child with bed = 100% | Child no bed = 75%</li>
      <li>Single supplement: Additional cost for own room</li>
      <li>Prices are subject to change without notice</li>
      <li>Programs can be adjusted before departure</li>
      <li>Unused tour attractions/tickets are non-refundable</li>
    </ul>
  </section>
</div>
</div>
 <h1>Additional for Foreign Guests</h1>
  <div class="foreign-guests-wrapper">
    <div class="item-row">
      <div class="attraction">Tourist Attraction</div>
      <div class="weekday">Weekday</div>
      <div class="weekend">Weekend</div>
    </div>
    <div class="item-row">
      <div class="attraction">Tangkuban Perahu</div>
      <div class="weekday">Rp170,000</div>
      <div class="weekend">Rp270,000</div>
    </div>
    <div class="item-row">
      <div class="attraction">Orchid Forest Cikole</div>
      <div class="weekday">Rp60,000</div>
      <div class="weekend">-</div>
    </div>
    <div class="item-row">
      <div class="attraction">Kawah Putih</div>
      <div class="weekday">Rp70,000</div>
      <div class="weekend">-</div>
    </div>
    <div class="item-row">
      <div class="attraction">Glamping Situ</div>
      <div class="weekday">Rp35,000</div>
      <div class="weekend">-</div>
    </div>
  </div>
<body>
  <div class="wt-section">
    <div class="wt-left">
      <img src="/images/Newsletter.svg" alt="Watashi Travel Logo">
    </div>
    <div class="wt-middle">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="{{ route('home') }}" data-link="home">Home Page</a></li>
        <li><a href="#" data-link="packages">Packages</a></li>
        <li><a href="#" data-link="about">About Us</a></li>
        <li><a href="#" data-link="contact">Contact Us</a></li>
      </ul>
    </div>
    <div class="wt-right">
      <h3>Stay Updated</h3>
      <ul>
        <li>
          <a href="https://www.facebook.com/watashioutdoor" target="_blank">
            <img src="images/icons8-facebook.svg" alt="Facebook">
            Facebook
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/watashitravel?igsh=cG9rMXk0dDl1dWd3" target="_blank">
            <img src="images/icons8-instagram.svg" alt="Instagram">
            Instagram
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com" target="_blank">
            <img src="images/icons8-youtube.svg" alt="YouTube">
            YouTube
          </a>
        </li>
        <li>
          <a href="https://wa.me/6282224222080" target="_blank">
            <img src="images/icons8-whatsapp.svg" alt="WhatsApp">
            WhatsApp
          </a>
        </li>
      </ul>
    </div>

  </div>
  <div class="wt-bottom-section">
    <div class="wt-content">
      <div class="wt-group">
        <h3>MEMBER OF</h3>
        <div class="wt-logos">
          <img src="/images/image 18.jpg" alt="ASTINDO">
          <img src="/images/image 19.jpg" alt="APERAPI">
          <img src="/images/image 21.jpg" alt="ASPPI">
          <img src="/images/image 20.jpg" alt="ASPERWI">
        </div>
      </div>
      <div class="wt-group">
        <h3>COLLABORATION WITH</h3>
        <div class="wt-logos">
          <img src="/images/image 22.jpg" alt="Lindungihutan">
          <img src="/images/image 24.jpg" alt="Pesonna Optima Jasa">
          <img src="/images/image 23.jpg" alt="IPB Press">
        </div>
      </div>
    </div>

    <div class="wt-links">
      <p>© 2025 Watashi Travel. All rights reserved.</p>
      <ul>
        <li><a href="#" data-policy="privacy">Privacy Policy</a></li>
        <li><a href="#" data-policy="terms">Terms of Use</a></li>
        <li><a href="#" data-policy="cookies">Cookie Settings</a></li>
      </ul>
    </div>
  </div>
</div>
  <script src="{{ asset('js/wisata.js') }}"></script>
</body>
</html>
