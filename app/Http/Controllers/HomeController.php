<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import View class untuk tipe hint

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama (homepage) dengan semua data yang diperlukan.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // --- Data untuk Social Links (digunakan di bagian footer) ---
        // GANTI placeholder dengan URL AKTUAL dari akun media sosial Anda.
        $socialLinks = [
            'facebook'  => 'https://www.facebook.com/watashioutdoor', // URL Facebook Anda
            'instagram' => 'https://www.instagram.com/watashitravel?igsh=cG9rMXk0dDl1dWd3', // URL Instagram Anda
            'youtube'    => 'https://www.youtube.com/watch?v=rZMNBKg8xPs', // <--- PENTING: GANTI DENGAN URL ASLI CHANNEL YOUTUBE ANDA!
            'whatsapp'  => 'https://wa.me/6281234567890', // <--- PENTING: GANTI DENGAN NOMOR WA ANDA (format: 628xxxxxxx tanpa + atau spasi)
        ];

        // --- Data untuk Destination Slider (jika Anda ingin dinamis) ---
        // Ini contoh data statis. Anda bisa mengambil dari database di sini.
        $destinations = [
            [
                'image' => asset('images/Java.jpg'),
                'title' => 'Explore Java',
                'description' => 'Java, the heart of Indonesia, offers a rich blend of ancient traditions, vibrant culture, and breathtaking landscapes.',
                'link' => '#', // Ganti dengan route('packages_java') jika ada
            ],
            [
                'image' => asset('images/Bali.jpg'),
                'title' => 'Explore Bali',
                'description' => 'From its white sandy beaches to majestic volcanoes, Bali offers mesmerizing natural beauty.',
                'link' => '#', // Ganti dengan route('packages_bali') jika ada
            ],
            [
                'image' => asset('images/Papua.jpg'),
                'title' => 'Explore Papua and Maluku',
                'description' => 'Papua and Maluku hold the hidden wonders of Eastern Indonesia, rich in culture, natural beauty, and adventure.',
                'link' => '#',
            ],
            [
                'image' => asset('images/Sumatra.jpg'),
                'title' => 'Explore Sumatra',
                'description' => 'Discover wild nature, rich culture, and stunning beauty in Sumatra..',
                'link' => '#',
            ],
            [
                'image' => asset('images/Kalimantan.jpg'),
                'title' => 'Explore Kalimantan',
                'description' => 'Explore Kalimantan’s wild beauty—rainforests, vast rivers, and rich Dayak culture await.',
                'link' => '#',
            ],
            [
                'image' => asset('images/Sulawesi.jpg'),
                'title' => 'Explore Sulawesi',
                'description' => 'Experience the uniqueness of Sulawesi, an island of striking shape and stunning natural and cultural wonders.',
                'link' => '#',
            ],
            [
                'image' => asset('images/Nusa Tenggara.jpg'),
                'title' => 'Explore Nusa Tenggara',
                'description' => 'Venture into the stunning islands of Nusa Tenggara, where raw natural beauty meets vibrant traditions.',
                'link' => '#',
            ],
        ];

        // --- Data untuk Travel Cards Section (Articles) ---
        $articles = [
            [
                'image' => asset('images/Bali 2.png'),
                'category' => 'TRAVEL',
                'title' => 'Discover Hidden Gems in Bali',
                'description' => 'Uncover the best-kept secrets of Bali\'s stunning landscapes and vibrant culture.',
                'link' => '#', // Ganti dengan route('article_bali') jika ada
            ],
            [
                'image' => asset('images/Curug.png'),
                'category' => 'ADVENTURE',
                'title' => 'Top 10 Travel Tips for 2025',
                'description' => 'Essential tips to significantly enhance and improve your overall travel experience this year, making every trip more.',
                'link' => '#',
            ],
            [
                'image' => asset('images/Batik.png'),
                'category' => 'CULTURE',
                'title' => 'Cultural Festivals You Can\'t Miss',
                'description' => 'Experience vibrant traditions and celebrations around the globe this year.',
                'link' => '#',
            ],
        ];

        // --- Data untuk Testimonial Cards ---
        $testimonials = [
            [
                'stars' => 5,
                'text' => 'Amazing trip! Watashi Travel handled everything perfectly. Great service & unforgettable experience!',
                'logo' => asset('images/Telkom.png'),
                'alt' => 'Telkom Indonesia Logo',
            ],
            [
                'stars' => 5,
                'text' => 'Seamless booking, friendly guides, and breathtaking destinations. Highly recommend!',
                'logo' => asset('images/BRI.png'),
                'alt' => 'Bank BRI Logo',
            ],
            [
                'stars' => 5,
                'text' => 'Best travel experience ever! Easy planning, great support, and incredible memories!',
                'logo' => asset('images/Pertamina.png'),
                'alt' => 'Pertamina Logo',
            ],
        ];

        // --- Data untuk FAQ Section ---
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a wide range of travel services, including flight bookings, hotel accommodations, and guided tours. Our goal is to provide a seamless travel experience tailored to your needs. Whether you\'re planning a family vacation or a business trip, we\'ve got you covered.',
            ],
            [
                'question' => 'How do I book?',
                'answer' => 'Booking with us is easy! You can book directly through our website by selecting your desired package, filling in the details, and proceeding to payment. Alternatively, you can contact our customer support for personalized assistance.',
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept various payment methods including major credit cards (Visa, MasterCard, Amex), bank transfers, and selected e-wallets for your convenience.',
            ],
            [
                'question' => 'How can I contact customer support?',
                'answer' => 'Our customer support team is available 24/7. You can reach us via phone at [Your Phone Number], email at [Your Email Address], or through the live chat feature on our website.',
            ],
            [
                'question' => 'Can I modify or cancel my booking?',
                'answer' => 'Booking modifications and cancellations are subject to the terms and conditions of your specific package. Please review your booking details or contact our customer support team for assistance.',
            ],
        ];

        // --- Data untuk Member Of / Collaboration With (wt-logos) ---
        $memberOfLogos = [
            asset('images/image 18.jpg'), // ASTINDO
            asset('images/image 19.jpg'), // APERAPI
            asset('images/image 21.jpg'), // ASPPI
            asset('images/image 20.jpg'), // ASPERWI
        ];

        $collaborationWithLogos = [
            asset('images/image 22.jpg'), // Lindungihutan
            asset('images/image 24.jpg'), // Pesonna Optima Jasa
            asset('images/image 23.jpg'), // IPB Press
        ];

        // Melewatkan semua data ke view 'home'
        return view('home', compact(
            'socialLinks',
            'destinations',
            'articles',
            'testimonials',
            'faqs',
            'memberOfLogos',
            'collaborationWithLogos'
        ));
    }

    public function events(): View
    {
        return view('events');
    }

    /**
     * Tampilkan halaman About Us.
     *
     * @return \Illuminate\View\View
     */
    public function aboutUs(): View
    {
        return view('about_us');
    }

    /**
     * Tampilkan halaman Contact Us.
     *
     * @return \Illuminate\View\View
     */
    public function contactUs(): View
    {
        return view('contact_us');
    }

    /**
     * Tampilkan halaman Registrasi.
     *
     * @return \Illuminate\View\View
     */
    public function register(): View
    {
        // Ini akan me-load resources/views/register.blade.php
        return view('register');
    }

    /**
     * Tampilkan halaman Login.
     *
     * @return \Illuminate\View\View
     */
    public function login(): View
    {
        // Ini akan me-load resources/views/login.blade.php
        return view('login');
    }

    public function explore(): View
    {
        return view('explore'); // Ini akan memuat resources/views/explore.blade.php
    }
    public function layanan(): View
    {
        // Data untuk Hero Section (Bandung)
        $heroBandung = [
            'image' => asset('images/bandung-hero.jpg'),
            'title' => 'Bandung Scenic Escape',
            'description' => 'Ready for a little getaway? Let\'s escape to Bandung — the city of fresh mountain air, scenic landscapes, and cozy vibes. Dive into Bandung’s vibrant city life.',
            'button_link' => '#', // Link untuk tombol "Custom Package"
        ];

        // Data destinasi khusus Bandung untuk explore grid
        $bandungDestinations = [
            [
                "img" => asset('images/lembang.jpg'),
                "title" => "Lembang - Ciwidey tour package 2 days 1 night (2D1N)",
                "price" => "Rp. 1.000.000",
                "per" => "/Person"
            ],
            [
                "img" => asset('images/nimo.jpg'),
                "title" => "Family Retreat in Nimo Highland - 1 Day Trip",
                "price" => "Rp. 475.000",
                "per" => "/Person"
            ],
            [
                "img" => asset('images/ciwidey.jpg'),
                "title" => "Chill Getaway in Ciwidey - 2 Days 1 Night (2D1N)",
                "price" => "Rp. 475.000",
                "per" => "/Person"
            ],
            [
                "img" => asset('images/suman.jpg'),
                "title" => "Sunrise Hike at Suman Ibu - 2 Days 1 Night (2D1N)",
                "price" => "Rp. 475.000",
                "per" => "/Person"
            ],
            [
                "img" => asset('images/tangkuban.jpg'),
                "title" => "Tangkuban Perahu & Lembang Explorer - 3 Days 2 Nights",
                "price" => "Rp. 475.000",
                "per" => "/Person"
            ],
            [
                "img" => asset('images/pangandaran.jpg'),
                "title" => "Adventure Retreat in Pangandaran - 3 Days 2 Nights (3D2N)",
                "price" => "Rp. 475.000",
                "per" => "/Person"
            ]
        ];

        // Data untuk Social Links dan Member Of / Collaboration With diambil dari method index()
        // Anda perlu memastikan variabel-variabel ini tersedia di scope ini,
        // atau didefinisikan secara global jika ingin diakses di semua method.
        // Untuk saat ini, saya akan menyertakan data ini agar bandungExplore tetap berfungsi.
        // Cara yang lebih baik adalah memindahkan ini ke constructor atau menggunakan service provider.
        $socialLinks = [
            'facebook'  => 'https://www.facebook.com/watashioutdoor',
            'instagram' => 'https://www.instagram.com/watashitravel?igsh=cG9rMXk0dDl1dWd3',
            'youtube'    => 'https://www.youtube.com/watch?v=rZMNBKg8xPs',
            'whatsapp'  => 'https://wa.me/6281234567890',
        ];

        $memberOfLogos = [
            asset('images/image 18.jpg'), // ASTINDO
            asset('images/image 19.jpg'), // APERAPI
            asset('images/image 21.jpg'), // ASPPI
            asset('images/image 20.jpg'), // ASPERWI
        ];

        $collaborationWithLogos = [
            asset('images/image 22.jpg'), // Lindungihutan
            asset('images/image 24.jpg'), // Pesonna Optima Jasa
            asset('images/image 23.jpg'), // IPB Press
        ];

        // Melewatkan semua data ke view 'bandung_explore'
        return view('layanan', compact(
            'heroBandung',
            'bandungDestinations',
            'socialLinks',
            'memberOfLogos',
            'collaborationWithLogos'
        ));
    }
    public function wisata(): View
    {
        return view('wisata');
    }
}
