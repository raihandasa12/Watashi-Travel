<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watashi Travel</title>
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
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
   <section class="explore-grid">
    <div class="card">
        <a href="/wisata"><img src="images/lembang.png" alt="Lembang - Ciwidey tour package 2 days 1 night (2D1N)"></a>
        <div class="card-content">
            <h3>Lembang - Ciwidey tour package 2 days 1 night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 1.000.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="/wisata"><img src="images/nimo.png" alt="Family Retreat in Nimo Highland - 1 Day Trip"></a>
        <div class="card-content">
            <h3>Family Retreat in Nimo Highland - 1 Day Trip</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="/wisata"><img src="images/ciwidey.png" alt="Chill Getaway in Ciwidey - 2 Days 1 Night (2D1N)">
        </a>
        <div class="card-content">
            <h3>Chill Getaway in Ciwidey - 2 Days 1 Night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="/wisata"><img src="images/suman.png" alt="Sunrise Hike at Suman Ibu - 2 Days 1 Night (2D1N)"></a>
        <div class="card-content">
            <h3>Sunrise Hike at Suman Ibu - 2 Days 1 Night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="/wisata"><img src="images/tangkuban.png" alt="Tangkuban Perahu & Lembang Explorer - 3 Days 2 Nights"></a>
        <div class="card-content">
            <h3>Tangkuban Perahu & Lembang Explorer - 3 Days 2 Nights</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <a href="/wisata"><img src="images/pangandaran.png" alt="Adventure Retreat in Pangandaran - 3 Days 2 Nights (3D2N)"></a>
        <div class="card-content">
            <h3>Adventure Retreat in Pangandaran - 3 Days 2 Nights (3D2N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>
</section>
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
