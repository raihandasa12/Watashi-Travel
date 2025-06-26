<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watashi Travel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
    <div class="secondary-navbar">
        </div>
</header>
<header>
    <div class="top-links">
    <a href="{{ route('press_release') }}">Press Release</a>
    <a href="{{ route('articles') }}">Articles</a>
    <a href="{{ route('events') }}">Events</a>
    </div>

    <div class="nav-left">
    <a href="{{ route('home') }}"> <img src="{{ asset("/images/white.svg") }}" alt="Watashi Logo">
    </a> </div>

    <div class="nav-right">
        <a href="{{ route('home') }}">Home</a>
        <div class="nav-item dropdown">
            <a href="#" class="dropbtn">
                Services
                <span class="caret-icon"></span>
            </a>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
            </div>
        </div>
        <a href="{{ route('about_us') }}">About Us</a>
        <a href="{{ route('contact_us') }}">Contact Us</a>
        <div class="btn-group">
            <a href="{{ route('register') }}" class="btn btn-register">Registrasi</a>
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
        </div>
    </div>

    <div class="lang-switch">
  <a href="#" class="lang-option active">ENG</a>
  <span> | </span>
  <a href="#" class="lang-option">IND</a>
</div>

</header>

<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Discover Your Next Adventure<br>with Watashi Travel</h1>
        <p>At Watashi Travel, we curate unforgettable experiences that connect you with the beauty of Indonesia. Join us as we explore breathtaking landscapes and rich cultural heritage.</p>

        <form class="search-bar" method="GET" action="{{ route('explore') }}">
            <select name="destination" required>
                <option selected>Select destination</option>
                <option>Jawa</option>
                <option>Bali</option>
                <option>Sumatra</option>
                <option>Kalimantan</option>
                <option>Sulawesi</option>
                <option>Nusa Tenggara</option>
                <option>Papua & Maluku</option>
            </select>

            <select name="city" required>
                <option selected>Select city</option>
                <option>Denpasar</option>
                <option>Sleman</option>
                <option>Mataram</option>
                <option>Jawa</option>
                <option>Bali</option>
                <option>Sumatra</option>
            </select>

            <button type="submit" class="btn-view">View Packages</button>
        </div>
    </div>
</section>
<body>
    <div class="container">
        <h1>Our Destination</h1>
        <h2>Discover Exciting Tour Packages to <br>Indonesia's Iconic Cities</h2>
        <div class="destination-slider">
            <button class="prev-btn"><</button>
            <div class="slider">
                <div class="slide">
                    <img src="/images/Java.jpg" alt="Java">
                    <h3>Explore Java</h3>
                    <p>Java, the heart of Indonesia, offers a rich blend of ancient traditions, vibrant culture, and breathtaking landscapes.</p>
                    <a href="/explore?destination=Java" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Bali.jpg" alt="Bali">
                    <h3>Explore Bali</h3>
                    <p>From its white sandy beaches to majestic volcanoes, Bali offers mesmerizing natural beauty.</p>
                    <a href="/explore?destination=Bali" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Papua.jpg" alt="Papua & Maluku">
                    <h3>Explore Papua and Maluku</h3>
                    <p>Papua and Maluku hold the hidden wonders of Eastern Indonesia, rich in culture, natural beauty, and adventure.</p>
                    <a href="/explore?destination=Papua" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Sumatra.jpg" alt="Sumatra">
                    <h3>Explore Sumatra</h3>
                    <p>Discover wild nature, rich culture, and stunning beauty in Sumatra..</p>
                    <a href="/explore?destination=Sumatra" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Kalimantan.jpg" alt="Kalimantan">
                    <h3>Explore Kalimantan</h3>
                    <p>Explore Kalimantan’s wild beauty—rainforests, vast rivers, and rich Dayak culture await.</p>
                    <a href="/explore?destination=Kalimantan" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Sulawesi.jpg" alt="Sulawesi">
                    <h3>Explore Sulawesi</h3>
                    <p>Experience the uniqueness of Sulawesi, an island of striking shape and stunning natural and cultural wonders.</p>
                    <a href="/explore?destination=Sulawesi" class="view-btn">View Packages →</a>
                </div>
                <div class="slide">
                    <img src="/images/Nusa Tenggara.jpg" alt="Nusa Tenggara">
                    <h3>Explore Nusa Tenggara</h3>
                    <p>Venture into the stunning islands of Nusa Tenggara, where raw natural beauty meets vibrant traditions.</p>
                    <a href="/explore?destination=NusaTenggara" class="view-btn">View Packages →</a>
                </div>
            </div>
            <button type="button" class="prev-btn">&lt;</button>
            <button type="button" class="next-btn">&gt;</button>
        </div>
    </div>

    <body>
    <div class="travel-section">
        <div class="text-content">
            <h4>Explore</h4>
            <h1>Discover Our Unforgettable </br>Travel Experiences</h1>
            <p>At Watashi Travel, we offer meticulously crafted tour packages that cater to every traveler’s dream. Experience the beauty of Indonesia with our unique itineraries designed for adventure and relaxation.</p>
            <a href="#" class="learn-more-btn">Learn More</a>
        </div>
        <div class="image-content">
            <img src="/images/Placeholder Image.jpg" alt="Group of travelers">
        </div>
    </div>

    <body>
    <nav>
        </nav>
    <h1 class="section-tag-line">Articles</h1> <div class="main-content-wrapper">
        <h4 class="main-section-title">Explore the Travel World</h4>
        <a href="#" class="action-link-right">View All <span class="arrow-icon">&gt;</span></a>
    </div>
    <main>
        <section class="travel-cards-section">
            <div class="container card-container">
                <div class="card">
                    <img src="/images/Bali 2.png" alt="Discover Hidden Gems in Bali">
                    <div class="card-content">
                        <span class="category travel">TRAVEL</span>
                        <h3>Discover Hidden Gems in Bali</h3>
                        <p>Uncover the best-kept secrets of Bali's stunning landscapes and vibrant culture.</p>
                        <a href="#" class="read-more">Read More <span class="arrow">&gt;</span></a>
                    </div>
                </div>
                <div class="card">
                    <img src="/images/Curug.png" alt="Top 10 Travel Tips for 2025">
                    <div class="card-content">
                        <span class="category adventure">ADVENTURE</span>
                        <h3>Top 10 Travel Tips for 2025</h3>
                        <p>Essential tips to significantly enhance and improve your overall travel experience this year, making every trip mor.</p>
                        <a href="#" class="read-more">Read More <span class="arrow">&gt;</span></a>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/Batik.png" alt="Cultural Festivals You Can't Miss">
                    <div class="card-content">
                        <span class="category culture">CULTURE</span>
                        <h3>Cultural Festivals You Can't Miss</h3>
                        <p>Experience vibrant traditions and celebrations around the globe this year.</p>
                        <a href="#" class="read-more">Read More <span class="arrow">&gt;</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials-section">
            <div class="container">
                <div class="testimonials-header">
                    <div class="testimonials-text">
                        <p class="section-subtitle">Testimonials</p>
                        <h1 class="section-title">Real Stories from Our Happy Travelers</h1>
                        <p class="section-description">Hear what our satisfied travelers have to say!</p>
                    </div>
                    <div class="testimonial-nav">
                        <button class="nav-button prev-button">&lt;</button>
                        <button class="nav-button next-button">&gt;</button>
                    </div>
                </div>

                <div class="testimonial-cards-wrapper">
                    <div class="testimonial-card">
                        <div class="stars">
                            <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
                        </div>
                        <p class="testimonial-text">Amazing trip! Watashi Travel handled everything perfectly. Great service & unforgettable experience!</p>
                        <div class="client-logo">
                            <img src="/images/Telkom.png" alt="Telkom Indonesia Logo">
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="stars">
                            <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
                        </div>
                        <p class="testimonial-text">Seamless booking, friendly guides, and breathtaking destinations. Highly recommend!</p>
                        <div class="client-logo">
                            <img src="/images/BRI.png" alt="Bank BRI Logo">
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="stars">
                            <span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span><span class="star">&#9733;</span>
                        </div>
                        <p class="testimonial-text">Best travel experience ever! Easy planning, great support, and incredible memories!</p>
                        <div class="client-logo">
                            <img src="/images/Pertamina.png" alt="Pertamina Logo">
                        </div>
                    </div>
                </div>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="wave-background"></div>
        </section>
    </main>
<body>
  <div class="wrapper">
    <div class="content">
      <div class="sidebar">
        <h2>Explore</h2>
        <h1>FAQs</h1>
        <p>Here are answers to some common questions about our travel services.</p>
        <img src="/images/Watashi Icon.svg" alt="Watashi Icon" class="sidebar-icon">
      </div>
      <div class="main-content">
        <div class="faq-section">
          <details open>
            <summary>What services do you offer?</summary>
            <p>We offer a wide range of travel services, including flight bookings, hotel accommodations, and guided tours. Our goal is to provide a seamless travel experience tailored to your needs. Whether you're planning a family vacation or a business trip, we've got you covered.</p>
          </details>
          <details>
            <summary>How do I book?</summary>
          </details>
          <details>
            <summary>What payment methods do you accept?</summary>
          </details>
          <details>
            <summary>How can I contact customer support?</summary>
          </details>
          <details>
            <summary>Can I modify or cancel my booking?</summary>
          </details>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-content">
        <h2>Stay Connected with Us</h2>
        <p>Subscribe to our newsletter for the latest features and updates.</p>
        <div class="subscribe-form">
          <input type="email" placeholder="Your Email Here">
          <button>Join</button>
        </div>
        <p class="privacy-text">By subscribing, you consent to our Privacy Policy and agree to receive updates.</p>
      </div>
    </footer>
  </div>
<head>
</head>
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

<body>
  <div class="wt-bottom-section">
    <div class="wt-content">
      <div class="wt-group">
        <h3>Member Of</h3>
        <div class="wt-logos">
          <img src="/images/image 18.jpg" alt="ASTINDO">
          <img src="/images/image 19.jpg" alt="APERAPI">
          <img src="/images/image 21.jpg" alt="ASPPI">
          <img src="/images/image 20.jpg" alt="ASPERWI">
        </div>
      </div>
      <div class="wt-group">
        <h3>Collaboration With</h3>
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

  <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>

