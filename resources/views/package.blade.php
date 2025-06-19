<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watashi Travel - Order Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            padding: 15px 60px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align logo to start */
        }

        .navbar .logo {
            height: 40px; /* Adjust logo height */
            display: block;
            margin-right: 20px; /* Space between logo and title if any */
        }

        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5em; /* Ukuran font sesuai screenshot */
            color: #333;
            text-align: center;
            margin: 40px 0 20px;
        }

        /* Form Container */
        .form-container {
            max-width: 600px;
            margin: 20px auto 60px; /* margin-bottom lebih besar */
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .form-container h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px; /* Spasi antar grup form */
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #555;
            font-size: 15px;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon input {
            width: calc(100% - 24px); /* Mengurangi padding + border + icon width */
            padding: 12px;
            padding-right: 40px; /* Space for icon */
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        .input-with-icon input:focus {
            border-color: #00a99d;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 169, 157, 0.2);
        }

        .input-with-icon .calendar-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 20px;
            pointer-events: none; /* Agar klik bisa tembus ke input */
            /* Ini hanya placeholder, bisa pakai icon dari Font Awesome jika ada */
            content: "\1F4C5"; /* Unicode character for calendar emoji */
        }

        /* Number Participants */
        .participants-group {
            border-top: 1px solid #eee;
            padding-top: 25px;
            margin-top: 30px;
        }

        .participants-group > label {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .participant-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px 0;
        }

        .participant-row:last-child {
            margin-bottom: 0;
        }

        .participant-info {
            flex-grow: 1;
        }

        .participant-info .type {
            font-weight: 500;
            color: #333;
            font-size: 16px;
        }

        .participant-info .age-range {
            font-size: 13px;
            color: #888;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            background-color: #f0f0f0; /* Background di belakang tombol */
            border-radius: 50px; /* Bentuk pil */
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }

        .quantity-control button {
            background-color: #f0f0f0;
            border: none;
            color: #00a99d;
            font-size: 24px;
            font-weight: 600;
            width: 40px; /* Ukuran tombol */
            height: 40px; /* Ukuran tombol */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .quantity-control button:hover {
            background-color: #e0e0e0;
        }

        .quantity-control .count {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            width: 40px; /* Lebar untuk angka */
            text-align: center;
        }

        .quantity-control button.plus {
            background-color: #00a99d;
            color: white;
        }

        .quantity-control button.plus:hover {
            background-color: #008f84;
        }

        /* Next Button */
        .btn-next {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 40px;
            background-color: #00a99d;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 169, 157, 0.3);
        }

        .btn-next:hover {
            background-color: #008f84;
            box-shadow: 0 6px 15px rgba(0, 169, 157, 0.4);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }
            .page-title {
                font-size: 2em;
                margin: 30px 0 15px;
            }
            .form-container {
                margin: 20px auto 40px;
                padding: 25px;
            }
            .form-container h2 {
                font-size: 20px;
                margin-bottom: 20px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .input-with-icon input {
                font-size: 15px;
                padding: 10px;
                padding-right: 35px;
            }
            .input-with-icon .calendar-icon {
                font-size: 18px;
                right: 10px;
            }
            .quantity-control button,
            .quantity-control .count {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }
            .btn-next {
                padding: 12px;
                font-size: 16px;
                margin-top: 30px;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                padding: 10px 15px;
            }
            .navbar .logo {
                height: 35px;
            }
            .page-title {
                font-size: 1.8em;
                margin: 25px 0 10px;
            }
            .form-container {
                margin: 15px 15px 30px;
                padding: 20px;
            }
            .participant-row {
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 20px;
            }
            .participant-info {
                margin-bottom: 10px;
            }
            .quantity-control {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <header class="navbar">
        <img src="{{ asset('public/images/Logo.svg') }}" alt="Watashi Logo" class="logo">
    </header>

    <h1 class="page-title">Your Bandung Trip, Your Way</h1>

    <div class="form-container">
        <h2>Order Detail</h2>
        <form action="#" method="POST">
            @csrf {{-- Laravel CSRF token for forms --}}

            <div class="form-group">
                <label for="departure_date">Date of Departure</label>
                <div class="input-with-icon">
                    <input type="text" id="departure_date" name="departure_date" value="04/07/2025" placeholder="dd/mm/yy" readonly>
                    {{-- Calendar icon (placeholder) --}}
                    <span class="calendar-icon">&#x1F4C5;</span>
                </div>
            </div>

            <div class="form-group">
                <label for="return_date">Return Date</label>
                <div class="input-with-icon">
                    <input type="text" id="return_date" name="return_date" placeholder="dd/mm/yy" readonly>
                    {{-- Calendar icon (placeholder) --}}
                    <span class="calendar-icon">&#x1F4C5;</span>
                </div>
            </div>

            <div class="participants-group">
                <label>Number of Participants</label>

                <div class="participant-row">
                    <div class="participant-info">
                        <div class="type">Adults</div>
                        <div class="age-range">Age 18 - 89</div>
                    </div>
                    <div class="quantity-control">
                        <button type="button" class="minus">-</button>
                        <span class="count" id="adults_count">1</span>
                        <button type="button" class="plus">+</button>
                    </div>
                </div>

                <div class="participant-row">
                    <div class="participant-info">
                        <div class="type">Children</div>
                        <div class="age-range">Age 7 - 17</div>
                    </div>
                    <div class="quantity-control">
                        <button type="button" class="minus">-</button>
                        <span class="count" id="children_count">0</span>
                        <button type="button" class="plus">+</button>
                    </div>
                </div>

                <div class="participant-row">
                    <div class="participant-info">
                        <div class="type">Infants</div>
                        <div class="age-range">Age 0 - 6</div>
                    </div>
                    <div class="quantity-control">
                        <button type="button" class="minus">-</button>
                        <span class="count" id="infants_count">0</span>
                        <button type="button" class="plus">+</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-next">Next</button>
        </form>
    </div>

    {{-- Optional: Add a simple JavaScript for increment/decrement buttons --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityControls = document.querySelectorAll('.quantity-control');

            quantityControls.forEach(control => {
                const minusBtn = control.querySelector('.minus');
                const plusBtn = control.querySelector('.plus');
                const countSpan = control.querySelector('.count');

                minusBtn.addEventListener('click', function() {
                    let count = parseInt(countSpan.textContent);
                    if (count > 0) {
                        count--;
                        countSpan.textContent = count;
                    }
                });

                plusBtn.addEventListener('click', function() {
                    let count = parseInt(countSpan.textContent);
                    count++;
                    countSpan.textContent = count;
                });
            });
        });
    </script>

</body>
</html>
