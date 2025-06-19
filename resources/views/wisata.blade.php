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
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;

    }

        header {
            position: absolute;
            top: 0;
            width: 100vw;
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
            margin-bottom: 50px;
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
            margin-right: -30px;
            margin-bottom: 50px;
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

.gallery {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    grid-template-rows: repeat(2, 35vh);
    gap: 30px;
    padding: 80px;
    max-width: 100vw;
    margin: 0;
    height: 100vh;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

/* Gambar besar (item 1): otomatis mengambil kolom 1 dan baris 1–3 */
.gallery-item:nth-child(1) {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
}

/* Empat gambar kecil: two-by-two di kolom 2 & 3 */
.gallery-item:nth-child(2) {
    grid-column: 2 / 3;
    grid-row: 1 / 2;
}
.gallery-item:nth-child(3) {
    grid-column: 3 / 4;
    grid-row: 1 / 2;
}
.gallery-item:nth-child(4) {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
}
.gallery-item:nth-child(5) {
    grid-column: 3 / 4;
    grid-row: 2 / 3;
}

/* Responsif: di bawah 768px semua jadi satu kolom */
@media (max-width: 768px) {
    .gallery {
        grid-template-columns: 1fr;
        grid-template-rows: none;
    }
    .gallery-item {
        height: 300px;
        grid-column: auto !important;
        grid-row: auto !important;
    }
}

.main-wrapper {
    max-width: 1200px;
    margin: 10px auto 0px calc(50% - 750px + -40px);
    border-radius: 10px;
    overflow: hidden;
}

header {
    height: 200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    margin-left: 10px;
    color: #333;
}

header h1 {
    font-size: 45px;
    margin-top: 1400px;
    margin-left: -5px;
    line-height: 1.3;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.price-box {
    background-color: #EBEBEB;
    background-image: url('/images/Group 3.png');
    background-size: cover;
    border-radius: 10px;
    margin-right: 150px;
    margin-top: 1450px;
    padding: 15px;
    text-align: left;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.price-box p {
    margin: 20px 0;
    font-size: 17px;
    color: #333;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}
.price-box img {
    max-width: 100%;
    height: auto;
    position: absolute;
    right: 10px;
    top: -20px;
}

.price-box button {
    background-color: #00c4b4;
    color: white;
    border: none;
    padding: 10px 110px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 1em;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.price-box button:hover {
    background-color: #009e8f;
}

.tabs {
    display: flex;
    justify-content: space-around;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.tabs a {
    text-decoration: none;
    color: #666;
    font-size: 1em;
    padding: 10px 20px;
    transition: color 0.3s;

}

.tabs a.active {
    color: #00c4b4;
    border-bottom: 2px solid #00c4b4;
}

.content {
    padding: 20px;
    color: #333;
}

.content h2 {
    font-size: 24px;
    margin-bottom: 10px;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.content p {
    font-size: 18px;
    line-height: 1.4;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

.destination-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
    margin-left: -15px;
}

.destination-item {
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.destination-item img {
    width: 100%;
    height: auto;
    display: block;
}

.destination-item p {
    margin: 10px;
    text-align: center;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
    color: #333;
}

.destination-item:hover {
    transform: scale(1.05);
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.destination-item {
    animation: fadeIn 0.5s ease-in-out;
}

.content-box {
    margin: 30px;
    font-family: Arial, sans-serif;
    padding: 20px;
    margin-top: -50px;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

h3 {
    font-size: 18px;
    margin-bottom: 15px;
    margin-left: 0px;
}

.table {
    width: 75%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    margin-left: -8px;
}

.table-header {
    font-weight: bold;
}

.table-row {
    display: flex;
    border-bottom: 1px solid #ddd;
    width: 100%;
    gap: -20px;

}

.table-cell {
    padding: 6px 8px;
    flex: 1;
    text-align: left;
}


.table-row:last-child {
    border-bottom: none;
}

.pricing-table {
    animation: fadeIn 0.5s ease-in-out;
}

.pricing-table {
    margin: 30px;
    padding: 20px;
    margin-top: -50px;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
    font-weight: 300;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

h3 {
    font-size: 16px;
    font-weight: normal;
    font-style: italic;
    margin-bottom: 15px;
    margin-left: 0px;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

.price-list {
    width: 75%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    margin-left: -8px;

}

.price-header {
    font-weight: bold !important;
}

.price-row {
    display: flex;
    border-bottom: 1px solid #ddd;
    width: 100%;
    gap: -20px;
}

.price-cell {
    padding: 12px 8px;
    flex: 1;
    text-align: left;
}

.price-row:last-child {
    border-bottom: none;
}

.transport-note {
    font-size: 14px;
    color: #666;
    margin-top: -10px;
    font-family: 'Poppins';
    src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.container {
  width: 75%;
  margin: 0 auto;
  padding: 20px;
  animation: fadeIn 1s ease-in-out;
  margin-left: 28px;
}

.itinerary-title h1 {
  font-size: 30px;
  font-weight: 400;
  text-align: center;
  margin-left: 45px;
  margin-top: -25px;
  text-align: left;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
  animation: fadeInUp 0.8s ease-in-out;
}

/* === Layout Utama === */
main {
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* === Judul Hari === */
h2 {
  font-size: 24px;
  margin-bottom: 20px;
  font-weight: 300;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
  animation: fadeIn 1s ease-in-out;
}

/* === Daftar Itinerary === */
.itinerary-list {
  width: 100%;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  margin-left: 0;
  margin-top: -15px;
}

/* === Entri Itinerary === */
.itinerary-entry {
  display: flex;
  border-bottom: 1px solid #ddd;
  width: 97%;
  animation: fadeInUp 0.5s ease-in-out;
  animation-fill-mode: both;
  padding: 12px 0;
}

/* === Isi Entri === */
.itinerary-cell {
  flex: 1;
  padding: 0 8px;
  padding-left: 16px;
  font-size: 16px;
  text-align: left;
  line-height: 1.6;
  font-family: 'Poppins';
  src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

/* === Hapus Border Bawah Terakhir === */
.itinerary-entry:last-child {
  border-bottom: none;
}

/* === List Bullet === */
.bullet-list {
  padding-left: 20px;
  margin-top: 6px;
}

.bullet-list li {
  margin-bottom: 6px;
  font-size: 15px;
  font-family: 'Poppins';
  src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

/* === Animasi Naik === */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* === Animasi Masuk === */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

article {
  width: 75%;
  max-width: 900px;
  margin: -40px 0 40px -732px;
  padding: 30px;
  animation: fadeIn 1s ease-in-out;
  text-align: left;
}

.day-title {
  font-size: 28px;
  font-weight: 500;
  color: #333;
  text-align: left;
  margin-bottom: 30px;
  font-family: 'ZCOOL_XiaoWei', serif;
  animation: fadeInUp 0.8s ease-in-out;
}

.plan-item {
  position: relative;
  font-size: 16px;
  padding: 10px 0;
  margin-top: -5    px;
  padding-left: 16px;
  animation: fadeInUp 0.5s ease-in-out;
}

.plan-item::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 1px;
  background-color: #ccc;
  width: 140%;
}

.plan-item:last-child {
  border-bottom: none;
}

.item-divider {
  display: none;
}

.plan-choice {
  padding-bottom: 10px;
}
.plan-end {
  width: 100%;
}

.attraction-options {
  display: flex;
  justify-content: space-between;
  gap: -10px;
  margin-top: 12px;
}

.option-column {
  flex: 1;
}

.checkbox-container {
  display: flex;
  align-items: center;
  margin: 9px 0;
  font-size: 16px;
}

.checkbox-container input[type="checkbox"] {
  margin-right: 10px;
  cursor: pointer;
  width: 18px;
  height: 18px;
  appearance: none;
  background-color: #fff;
  border: 2px solid #666;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.checkbox-container input[type="checkbox"]:checked {
  background-color: #3BB3AB;
  border-color: #3BB3AB;
}

.checkbox-container input[type="checkbox"]:checked::after {
  content: '✔';
  color: white;
  font-size: 14px;
  margin-top: -3px;
  text-align: center;
  display: block;
  animation: checkmark 0.3s ease-in-out;
}

.checkbox-container input[type="checkbox"]:hover {
  border-color: #4CAF50;
  transform: scale(1.1);
}

/* Animasi */
@keyframes checkmark {
  from {
    opacity: 0;
    transform: scale(0);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.facility-wrapper {
  max-width: 800px;
  margin: 60px auto;
  margin-left: -10px;
  color: #333333;
  line-height: 1.5;
  padding: 0 20px;
  font-size: 15px;
  font-family: 'Poppins';
  src: url('/fonts/Poppins-Light.ttf') format('ttf')
}

.facility-wrapper h1 {
  font-size: 28px;
  font-weight: normal;
  margin-top: -40px;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.facility-wrapper h2 {
  font-size: 22px;
  font-weight: normal;
  color: #555;
  margin-top: 3px;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')
}

.facility-wrapper p {
  margin: 0 0 10px;
  margin-top: -10px;
  padding-left: 15px;
}

.custom-bullet {
  list-style-type: disc;
  margin-left: 15px;
  padding-right: 5px;
}

.custom-bullet li {
  margin-bottom: 15px;
}

.no-bullet {
  list-style: none;
  padding-left: 0;
  margin-top: -5px;
}

.no-bullet p {
  margin: 0 0 10px;
}

.remarks h2 {
    font-size: 32px;
    font-family: 'ZCOOL_XiaoWei';
    src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')

}
.remarks ul {
  list-style-type: disc;
  margin-left: 20px;
  padding-left: 5px;
  margin-top: -10px;
}

.remarks ul li {
  margin-bottom: 5px;
}

    h1 {
      font-size: 24px;
      color: #000;
      padding-left: 8px;
      margin-top: -40px;
      font-weight: normal;
      font-family: 'ZCOOL_XiaoWei';
      src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')

    }
.foreign-guests-wrapper {
  margin-left: -15px;
  padding: 15px;
}
.item-row {
  position: relative;
  display: flex;
  justify-content: space-between;
  padding: 15px 0;
}
.item-row::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 1px;
  border-bottom: 1px solid #ccc;
  width: 147%;
}
.item-row:last-child::after {
  display: none;
}
    .item-row:first-child {
      font-weight: bold;
    }
    .attraction, .weekday, .weekend {
      flex: 1;
      font-size: 16px;
      color: #060001;
      font-family: 'Poppins';
      src: url('/fonts/Poppins-Light.ttf') format('ttf')
    }
    .attraction {
      padding-left: 8px;
    }
    .weekday {
      text-align: center;
      padding-right: 10px;
    }
    .weekend {
      text-align: center;
      padding-right: 10px;
    }
    .dash {
      text-align: left;
    }


.wt-section {
  background-color: #123937;
  color: #ffffff;
  padding: 40px 0px;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100vw;
  margin: 0px 0 0 -65px;
  box-sizing: border-box;
  flex-shrink: 0;

}

.wt-left, .wt-middle, .wt-right {
  flex: 1;
  min-width: 200px;
  padding: 10px;
}

.wt-left img {
  width: 400px;
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
  font-size: 20px;
  margin-bottom: 10px;
  font-weight: lighter;
  text-align: right;
  font-style: normal;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf')

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
  font-family: 'Poppins';
  src: url('/fonts/Poppins-Light.ttf') format('ttf')
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
  padding: 40px 0px;
  margin-left: -65px;
  width: 100vw; /* Full viewport width */
  box-sizing: border-box; /* Include padding in width */
  flex-shrink: 0;
}

.wt-content {
  width: 100%; /* Full width of parent */
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 40px;
  position: relative;
  flex-grow: 1;
}

.wt-content::before {
  content: "";
  position: absolute;
  top: -30px;
  left: 0; /* Start from left edge */
  width: 100vw; /* Full viewport width */
  height: 1px;
  background-color: #d1d1d1;
}

.wt-content::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 0; /* Start from left edge */
  width: 100vw; /* Full viewport width */
  height: 1px;
  background-color: #d1d1d1;
  transform: translateY(-50%);
}

.wt-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  gap: 10px;
  padding-bottom: 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #d1d1d1; /* Bottom line */
  position: relative;
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
  padding-left: 120px;
  color: white;
  text-transform: uppercase;
  flex: 0 0 auto;
  font-family: 'ZCOOL_XiaoWei';
  src: url('/fonts/ZCOOL_XiaoWei/ZCOOLXiaoWei-Regular.ttf') format('ttf');
  font-style: normal;
  font-weight: bold;
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
  height: 50px;
  margin-right: 12px;
  object-fit: contain;
}

.wt-text {
  margin-left: 20px;
}

.wt-links {
  width: 100%; /* Full width of parent */
  margin: 40px 0 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-right: 90px;
  margin-top: 16px;
  font-size: 16px;
  font-family: 'fustat';
  src: url('/fonts/fustat/fustat-latin-200-normal.ttf') format('ttf');
}

.wt-links p {
  margin-left: 120px;
  color: #FFFFFF;
  font-family: 'fustat';
  src: url('/fonts/fustat/fustat-latin-200-normal.ttf') format('ttf');
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
  margin-left: 50px;
}

.wt-links a:hover {
  text-decoration: underline;
}


.wt-group:first-child {
  margin-bottom: 45px;
}

.wt-links ul {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 5px;
  margin-right: 50px;
}

.wt-links ul li a {
  color: #ffffff;
  text-decoration: none;
}

.wt-links ul li a:hover {
  text-decoration: underline;
}


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
                <button>Check Availability</button>
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
</html>
