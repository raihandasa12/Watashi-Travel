<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watashi Travel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
        font-family: 'Segoe UI', sans-serif;
        color: #fff;
        height: 350px;
        margin-bottom: 50px;
        max-width: 100vw;
        background: url('/images/java.png') no-repeat center calc(40% + 20px)/cover;
        background-position: center bottom -320px;
    }

        header {
            position: absolute;
            top: 0;
            width: 100%;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        .secondary-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0px;
            width: 100vw;
            box-sizing: border-box;
            color: #fff;
            background-color: #F3F8F8;
            position: relative;
            height: 40px;
            left: 0px;
            top: 5px;
        }

        .top-links {
            position: absolute;
            top: 10px;
            left: 60px;
            font-size: 14px;
            color: #333333;
            display: flex;
            gap: 25px;
            z-index: 11;
            margin-top: 0px;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .top-links a {
            color: inherit;
            text-decoration: none;
            white-space: nowrap;
            transition: color 0.3s ease;
        }

        .top-links a:hover {
            color: #a0a0a0;
        }

        .nav-left img {
            height: 40px;
            margin-top: 35px;
            margin-left: -10px;
        }

        .nav-left span {
            font-size: 24px;
            font-weight: bold;
            color: #22b6b0;
            vertical-align: middle;
        }

        .nav-right {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-right: -80px;
            margin-bottom: -28px;
        }

        .nav-right a {
            color: #000000;
            text-decoration: none;
            font-size: 13px;
            margin-right: 20px;
            margin-left: -20px;
            text-align: right;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .nav-right .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 19px;
            margin-bottom: 7px;
            margin-left: auto;
            transform: translateY(-5px);
            transition: transform 0.2s ease-in-out;
        }

        .nav-item.dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            color: #fff;
            padding: 8px 0;
            font-size: 15px;
            border: none;
            cursor: pointer;
            background-color: transparent;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .dropbtn:hover {
            color: #a0a0a0;
        }

        .caret-icon {
            border: solid #fff;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            margin-left: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.4);
            border-radius: 4px;
            top: calc(100% + 5px);
            left: 0;
            white-space: nowrap;
            z-index: 100;

        }

        .dropdown-content a {
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 15px;
            transition: background-color 0.3s ease;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.1);
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .dropdown-content a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-item.dropdown:hover .dropdown-content {
            display: block;
        }

        .nav-item.dropdown:hover .caret-icon {
            transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }

        .nav-right .btn {
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-right: 48px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 9999px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }

        .btn-register {
            background-color: transparent;
            border: 2px solid #3BB3AB ;
            color: #3BB3AB;
            padding: 20px 10px;
            border-radius: 30px;
            font-weight: 600;
        }

        .btn-login {
            background-color: #3BB3AB;
            color: #FFFFFF !important;
            border-radius: 25px;
            font-weight: 600;
        }

        .btn:hover {
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .btn-register:hover {
            background-color: rgba(0, 0, 0, 0.1);
            border-color: #ffffff;
            color: rgb(255, 251, 251);
        }

        .btn-login:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

.language-selector {
    position: absolute;
    top: 15px;
    right: 45px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
    z-index: 10;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

.lang-option {
    color: #C2C2C2;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    transition: color 0.2s ease-in-out;
}

.lang-option.active {
    color: #3BB3AB;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.2s ease-in-out;
}
.lang-option.active:hover {
    color: rgba(255, 255, 255, 0.8);
}

.lang-option:not(.active):hover {
    color: rgba(255, 255, 255, 0.8);
}

.language-selector .separator {
    color: #C2C2C2;
    font-weight: 300;
    font-size: 12px;
}

        .content {
            position: absolute;
            bottom: 200px;
            left: 50px;
            max-width: 500px;
        }

        .content h1 {
            font-size: 50px;
            font-weight: 400;
            font-family: 'ZCOOL_XiaoWei';
            src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
        }

        .content p {
            font-size: 18px;
            line-height: 1.5;
            color: #ccc
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Light.ttf') format('ttf')
        }
            .destinations {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
                gap: 40px;
                padding: 60 20px;
                margin: 60px auto;
                max-width: 1250px;
                transform: translateY(580px);
                transition: transform 0.3s ease;
            }
            .destination {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            }
            .destination img {
                width: 340px;
                height: 200px;
                border-radius: 8px 8px 0 0;
                margin-top: 10px;
                margin-left: 20px;
                margin-bottom: -100px;
            }
            .destination-text {
                padding: 20px;
                margin-top: 90px;
                text-align: left;

            }
            .destination-text h2 {
                margin: 0 0 8px;
                font-size: 1.1em;
                color:#333333;
                display: block;
            }
            .destination-text p {
                margin: 0;
                line-height: 1.5;
                flex-grow: 1;
                color: #707070;
            }
            .destination-text a {
    display: inline-block;
    margin-top: 5px;
    text-decoration: none;
    color: #3BB3AB;
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
    position: relative;
    padding-right: 15px;
    transition: color 0.3s ease;
}
.destination-text a:hover {
    color: #2e918a;
}

.destination-text a::after {
    content: '>';
    position: absolute;
    right: -2%;
    top: 60%;
    transform: translateY(-50%);
    font-size: 1.1em;
    font-weight: bold;
    transition: right 0.3s ease;
}

.destination-text a:hover::after {
    right: -3px;
}
.wt-section {
  background-color: #123937;
  color: #ffffff;
  padding: 40px 20px;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  max-width: 100%;
  margin: 600px 0 0 0;
}

.wt-left, .wt-middle, .wt-right {
  flex: 1;
  min-width: 200px;
  padding: 10px;
}

.wt-left img {
  width: 400px;
  height: 500px;
  height: auto;
  margin-bottom: 10px;
  margin-left: 110px;
}

.wt-middle, .wt-right {
  display: flex;
  flex: 0.20;
  flex-direction: column;
  align-items: flex-end;
  margin-right: 58px; /* Memastikan konten di dalam rata kanan */
}

.wt-middle h3, .wt-right h3 {
  font-size: 16px;
  margin-bottom: 10px;
  font-weight: lighter;
  text-align: right;
}

.wt-middle ul, .wt-right ul {
  list-style: none;
  padding: 0;
}

.wt-middle ul li, .wt-right ul li {
  margin-bottom: 8px;
  display: flex;
  justify-content: flex-end; /* Memastikan setiap item rata kanan */
}

.wt-middle ul a, .wt-right ul a {
  color: #ffffff;
  text-decoration: none;
  font-size: 14px;
}

.wt-middle ul a:hover, .wt-right ul a:hover {
  text-decoration: underline;
}

.wt-right a img {
  width: 20px;
  height: 20px;
  vertical-align: middle;
  margin-right: 5px;
  margin-left: 5px; /* Menambahkan margin kiri untuk ikon agar lebih rapi */
}

.wt-bottom-section {
  background-color: #123937;
  color: white;
  padding: 40px 20px;
}

.wt-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.wt-group {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
  min-width: 0;
}

.wt-group h3 {
  font-size: 16px;
  margin: 0 300px 0 0;
  padding-left: 180px;
  color: white;
  text-transform: uppercase;
  flex: 0 0 auto;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.wt-logos {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: flex-end;
    margin-left: 585px;
}

.wt-logos img {
  background-color: white;
  padding: 10px;
  border-radius: 5px;
  height: 48px;
  margin-right: 12px;
  object-fit: contain;

}

.wt-text {
    margin-left: 20px;
}

.wt-links {
  max-width: 1200px;
  margin: 40px auto 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-right: 90px;
  margin-top: 16px;
  font-size: 16px;
  font-family: 'fustat';
  src: url('/fonts/fustat/fustat-latin-200-normal.ttf') format('ttf')
}

.wt-links p {
  margin-left: -235px;
  color: #FFFFFF;
  font-family: 'fustat';
  src: url('/fonts/fustat/fustat-latin-200-normal.ttf') format('ttf')
}

.wt-links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 20px;
}

.wt-links li {
  margin: 0;
}

.wt-links a {
  color: #A0A0A0;
  text-decoration: none;
  font-family: 'fustat';
  src: url('/fonts/fustat/fustat-latin-200-normal.ttf') format('ttf')
}

.wt-links a:hover {
  text-decoration: underline;
}

.wt-group:first-child {
  margin-bottom: 40px;
}

.wt-bottom-section {
  background-color: #123937;
  color: white;
  padding: 40px 20px;
}

.wt-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
  gap: 10px;
  padding-bottom: 20px;
  margin-bottom: 20px;
  position: relative;

}
.wt-content::before {
  content: "";
  position: absolute;
  top: -30px;
  right: 0px;
  width: 100vw;
  max-width: 110vw;
  height: 1px;
  background-color: #d1d1d1;
  transform: translateX(calc(-50vw + 50%));
}
.wt-content::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 1px;
  width: 100vw;
  max-width: 110vw;
  height: 1px;
  background-color: #d1d1d1;
  transform: translateX(calc(-50vw + 50%)) translateY(-50%);
}

.wt-content {
  position: relative;
  width: 105%;
  right: 65px;
  max-width: 110vw;
  border-bottom: 1px solid #d1d1d1;
}

.wt-links ul {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 15px;
}

.wt-links ul li a {
  color: #ffffff;
  text-decoration: none;

}

.wt-links ul li a:hover {
  text-decoration: underline;
}

/* Responsif */
@media (max-width: 768px) {
  .wt-section {
    flex-direction: column;
    text-align: center;
  }

  .wt-left, .wt-middle, .wt-right {
    margin-bottom: 15px;
    align-items: center;
  }

  .wt-middle ul li, .wt-right ul li {
    justify-content: center;
  }

  .wt-middle h3, .wt-right h3 {
    text-align: center;
  }

  .wt-content {
    flex-direction: column;
    text-align: center;
  }

  .wt-logos {
    justify-content: center;
  }

  .wt-links {
    flex-direction: column;
    gap: 10px;
  }

  .wt-links ul {
    flex-direction: column;
    gap: 10px;
  }
}
    </style>
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
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/jakarta.png" alt="Jakarta Urban Vibe">
                    <div class="destination-text">
                        <h2>Jakarta Urban Vibe</h2>
                        <p>Ready to feel the heartbeat of Jakarta's vibrant city life - where towering skyscrapers meet rich culture?</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/bogor.png" alt="Bogor Green Getaway">
                    <div class="destination-text">
                        <h2>Bogor Green Getaway</h2>
                        <p>Craving some nature therapy? Bogor is calling! Explore lush gardens, waterfalls, and cool highlands with our Bogor getaway.</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/malioboro.png" alt="Yogyakarta Heritage Journey">
                    <div class="destination-text">
                        <h2>Yogyakarta Heritage Journey</h2>
                        <p>Time to go back in time! Discover ancient temples, traditional arts, and royal palaces with our Yogyakarta tours.</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/magelang.png" alt="Magelang Ancient Wonders">
                    <div class="destination-text">
                        <h2>Magelang Ancient Wonders</h2>
                        <p>Seeking spiritual calm and stunning views? Step into Magelang, home to the majestic Borobudur and lush hills.</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/semarang.png" alt="Semarang Colonial & Culinary Trail">
                    <div class="destination-text">
                        <h2>Semarang Colonial & Culinary Trail</h2>
                        <p>Hungry for history and flavor? Explore Semarang's colonial charm and diverse culinary scene.</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                    <div class="destination">
                    <img src="/images/malang.png" alt="Malang Highlands Discovery">
                    <div class="destination-text">
                        <h2>Malang Highlands Discovery</h2>
                        <p>Let’s breathe in some fresh mountain air! From apple orchards to volcanic views, our Malang Highlands.</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/banyuwangi.png" alt="Banyuwangi Exotic Edge">
                    <div class="destination-text">
                        <h2>Banyuwangi Exotic Edge</h2>
                        <p>Ready to explore Java’s wild east? With our Banyuwangi Exotic Edge package, experience the blue flames of Ijen, </p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/cianjur.png" alt="Cianjur Nature Escape">
                    <div class="destination-text">
                        <h2>Cianjur Nature Escape</h2>
                        <p>Craving quiet countryside? Let Cianjur’s rice fields, waterfalls, and village charm soothe your soul. Our Cianjur</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/surabaya.png" alt="Surabaya Urban Heritage Trail">
                    <div class="destination-text">
                        <h2>Surabaya Urban Heritage Trail</h2>
                        <p>Want to explore a bold and bustling city? Discover Surabaya’s heroic past, local flavors, and hidden gems </p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/solo.png" alt="Solo Royal Culture Trip">
                    <div class="destination-text">
                        <h2>Solo Royal Culture Trip</h2>
                        <p>Step into royal elegance! The Solo Royal Culture Trip invites you to experience traditional dance, gamelan, batik, and</p>
                        <a href="#">View Packages</a>
                    </div>
                </div>
                <div class="destination">
                    <img src="/images/sukabumi.png" alt="Sukabumi Eco Adventure">
                    <div class="destination-text">
                        <h2>Sukabumi Eco Adventure</h2>
                        <p>Adventure time? From hidden beaches to lush forests, our Sukabumi Eco Adventure takes you off the beaten path. </p>
                        <a href="#">View Packages</a>
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
          <a href="https://www.facebook.com" target="_blank">
            <img src="images/icons8-facebook.svg" alt="Facebook">
            Facebook
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com" target="_blank">
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
          <a href="https://www.whatsapp.com" target="_blank">
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
