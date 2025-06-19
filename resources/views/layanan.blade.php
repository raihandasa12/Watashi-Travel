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
.explore-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 60px;
    padding: 0px 20px;
    margin-top: 720px;
}

/* CARD STYLING */
.card {
    background-color: #fff;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 90%;
    height: auto;
    object-fit: cover;
    margin-left: 4px;
    transition: transform 0.5s ease;
}

.card:hover img {
    transform: scale(1.05);
}

.card-content {
    align-self: flex-start;
    padding: 16px;
    color: #222;
}

.card-content h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    min-height: 30px;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.price-info {
    font-size: 18px;
    color: #555;
    margin-top: 10px;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

.price-info strong {
    display: block;
    font-size: 16px;
    color: #000;
    margin-top: 2px;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

/* RESPONSIVE */
@media screen and (max-width: 600px) {
    .explore-grid {
        padding: 20px;
        gap: 20px;
    }
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
  margin: 70px 0 0 0;
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
  margin-right: 58px;
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
  justify-content: flex-end;
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
  margin-left: 5px;
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
   <section class="explore-grid">
    <div class="card">
        <img src="images/lembang.png" alt="Lembang - Ciwidey tour package 2 days 1 night (2D1N)">
        <div class="card-content">
            <h3>Lembang - Ciwidey tour package 2 days 1 night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 1.000.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="images/nimo.png" alt="Family Retreat in Nimo Highland - 1 Day Trip">
        <div class="card-content">
            <h3>Family Retreat in Nimo Highland - 1 Day Trip</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="images/ciwidey.png" alt="Chill Getaway in Ciwidey - 2 Days 1 Night (2D1N)">
        <div class="card-content">
            <h3>Chill Getaway in Ciwidey - 2 Days 1 Night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="images/suman.png" alt="Sunrise Hike at Suman Ibu - 2 Days 1 Night (2D1N)">
        <div class="card-content">
            <h3>Sunrise Hike at Suman Ibu - 2 Days 1 Night (2D1N)</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="images/tangkuban.png" alt="Tangkuban Perahu & Lembang Explorer - 3 Days 2 Nights">
        <div class="card-content">
            <h3>Tangkuban Perahu & Lembang Explorer - 3 Days 2 Nights</h3>
            <div class="price-info">
                START FROM <br>
                <strong>Rp. 475.000 /Person</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <img src="images/pangandaran.png" alt="Adventure Retreat in Pangandaran - 3 Days 2 Nights (3D2N)">
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
