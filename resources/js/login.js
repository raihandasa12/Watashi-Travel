document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    // Fungsi untuk memvalidasi format email
    function isValidEmail(email) {
        // Regex sederhana untuk validasi email
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // Fungsi untuk memvalidasi email input
    function validateEmail() {
        const emailValue = emailInput.value.trim();
        if (emailValue === '') {
            emailError.textContent = 'Email tidak boleh kosong.';
            emailInput.style.borderColor = 'red';
            return false;
        } else if (!isValidEmail(emailValue)) {
            emailError.textContent = 'Format email tidak valid.';
            emailInput.style.borderColor = 'red';
            return false;
        } else {
            emailError.textContent = ''; // Hapus pesan error jika valid
            emailInput.style.borderColor = '#ccc'; // Kembalikan border normal
            return true;
        }
    }

    // Fungsi untuk memvalidasi password input
    function validatePassword() {
        const passwordValue = passwordInput.value.trim();
        if (passwordValue === '') {
            passwordError.textContent = 'Password tidak boleh kosong.';
            passwordInput.style.borderColor = 'red';
            return false;
        } else if (passwordValue.length < 8) {
            passwordError.textContent = 'Password minimal 8 karakter.';
            passwordInput.style.borderColor = 'red';
            return false;
        } else {
            passwordError.textContent = ''; // Hapus pesan error jika valid
            passwordInput.style.borderColor = '#ccc'; // Kembalikan border normal
            return true;
        }
    }

    // Tambahkan event listener untuk validasi real-time saat input berubah
    emailInput.addEventListener('input', validateEmail);
    passwordInput.addEventListener('input', validatePassword);

    // Tambahkan event listener untuk validasi saat input kehilangan fokus (blur)
    emailInput.addEventListener('blur', validateEmail);
    passwordInput.addEventListener('blur', validatePassword);

    // Event listener untuk saat form disubmit
    loginForm.addEventListener('submit', function(event) {
        // Lakukan validasi semua input saat form disubmit
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();

        // Jika ada validasi yang gagal, cegah form untuk disubmit
        if (!isEmailValid || !isPasswordValid) {
            event.preventDefault();
            // Opsional: Gulir ke atas halaman atau fokuskan pada input pertama yang error
            if (!isEmailValid) {
                emailInput.focus();
            } else if (!isPasswordValid) {
                passwordInput.focus();
            }
        }
        // Jika validasi klien berhasil, form akan dikirim ke server Laravel
        // Laravel akan memprosesnya dan mengarahkan ke home.blade.php jika login berhasil.
    });

    // Catatan: Script Google Sign-In (https://accounts.google.com/gsi/client)
    // Sebaiknya tetap di <head> atau di file Blade untuk kemudahan.
    // Atau jika Anda menggunakan bundler (Vite/Mix), Anda bisa mengimpornya di sini
    // jika library-nya mendukung modul ES6.
});
