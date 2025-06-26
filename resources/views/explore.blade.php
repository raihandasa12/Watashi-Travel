<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watashi Travel</title>
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">

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
    <div class="content">
        <h1>Explore Java</h1>
        <p>Java, the heart of Indonesia, offers a rich blend of ancient traditions, vibrant culture, and breathtaking landscapes.</p>
    </div>
    <div class="destinations">
                <div class="destination">
                    <img src="/images/Destination Packages.png" alt="Bandung Scenic Escape">
                    <div class="destination-text">
                        <h2>Bandung Scenic Escape</h2>
                        <p>Ready for a little getaway? Escape to Bandung - the city of fresh mountain air, scenic landscapes, and cozy vibes.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/jakarta.png" alt="Jakarta Urban Vibe">
                    <div class="destination-text">
                        <h2>Jakarta Urban Vibe</h2>
                        <p>Ready to feel the heartbeat of Jakarta's vibrant city life - where towering skyscrapers meet rich culture?</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/bogor.png" alt="Bogor Green Getaway">
                    <div class="destination-text">
                        <h2>Bogor Green Getaway</h2>
                        <p>Craving some nature therapy? Bogor is calling! Explore lush gardens, waterfalls, and cool highlands with our Bogor getaway.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/malioboro.png" alt="Yogyakarta Heritage Journey">
                    <div class="destination-text">
                        <h2>Yogyakarta Heritage Journey</h2>
                        <p>Time to go back in time! Discover ancient temples, traditional arts, and royal palaces with our Yogyakarta tours.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/magelang.png" alt="Magelang Ancient Wonders">
                    <div class="destination-text">
                        <h2>Magelang Ancient Wonders</h2>
                        <p>Seeking spiritual calm and stunning views? Step into Magelang, home to the majestic Borobudur and lush hills.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/semarang.png" alt="Semarang Colonial & Culinary Trail">
                    <div class="destination-text">
                        <h2>Semarang Colonial & Culinary Trail</h2>
                        <p>Hungry for history and flavor? Explore Semarang's colonial charm and diverse culinary scene.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                    <div class="destination">
                    <img src="/images/malang.png" alt="Malang Highlands Discovery">
                    <div class="destination-text">
                        <h2>Malang Highlands Discovery</h2>
                        <p>Let’s breathe in some fresh mountain air! From apple orchards to volcanic views, our Malang Highlands.</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/banyuwangi.png" alt="Banyuwangi Exotic Edge">
                    <div class="destination-text">
                        <h2>Banyuwangi Exotic Edge</h2>
                        <p>Ready to explore Java’s wild east? With our Banyuwangi Exotic Edge package, experience the blue flames of Ijen, </p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/cianjur.png" alt="Cianjur Nature Escape">
                    <div class="destination-text">
                        <h2>Cianjur Nature Escape</h2>
                        <p>Craving quiet countryside? Let Cianjur’s rice fields, waterfalls, and village charm soothe your soul. Our Cianjur</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/surabaya.png" alt="Surabaya Urban Heritage Trail">
                    <div class="destination-text">
                        <h2>Surabaya Urban Heritage Trail</h2>
                        <p>Want to explore a bold and bustling city? Discover Surabaya’s heroic past, local flavors, and hidden gems </p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/solo.png" alt="Solo Royal Culture Trip">
                    <div class="destination-text">
                        <h2>Solo Royal Culture Trip</h2>
                        <p>Step into royal elegance! The Solo Royal Culture Trip invites you to experience traditional dance, gamelan, batik, and</p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/sukabumi.png" alt="Sukabumi Eco Adventure">
                    <div class="destination-text">
                        <h2>Sukabumi Eco Adventure</h2>
                        <p>Adventure time? From hidden beaches to lush forests, our Sukabumi Eco Adventure takes you off the beaten path. </p>
                        <a href="/layanan">View Packages</a>
                    </div>
                </div>
            </div>
        </div>
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
  <script>document.addEventListener('DOMContentLoaded', () => {
    const quickLinks = document.querySelectorAll('.wt-middle a');
    quickLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const page = link.getAttribute('data-link');
            alert(`Navigating to ${page} page!`);
        });
    });

    const socialLinks = document.querySelectorAll('.wt-right a');
    socialLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const social = link.getAttribute('data-social');
            const socialUrls = {
                facebook: 'https://www.facebook.com/watashioutdoor',
                instagram: 'https://www.instagram.com/watashitravel?igsh=cG9rMXk0dDl1dWd3',
                youtube: 'https://youtube.com',
                whatsapp: 'https://wa.me/6282224222080'
            };
            if (social && socialUrls[social]) {
                window.open(socialUrls[social], '_blank');
            }
        });
    });
});
</script>
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

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const quickLinks = document.querySelectorAll('.wt-middle a');
      quickLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          const page = link.getAttribute('data-link');
          alert(`Navigating to ${page} page!`);
        });
      });
      const policyLinks = document.querySelectorAll('.wt-links a');
      policyLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          e.preventDefault();
          const policy = link.getAttribute('data-policy');
          alert(`Opening ${policy} page!`);
        });
      });
    });
  </script>
</body>
</html>
