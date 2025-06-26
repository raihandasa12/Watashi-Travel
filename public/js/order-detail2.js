document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("booking-form");
  const nextBtn = document.querySelector(".next-btn");

  const nameInput = document.getElementById("name");
  const whatsappInput = document.getElementById("whatsapp");
  const emailInput = document.getElementById("email");
  const cityInput = document.getElementById("city");

  // Fungsi untuk validasi form
  function validateForm() {
    const isValid =
      nameInput.value.trim() !== "" &&
      whatsappInput.value.trim() !== "" &&
      emailInput.value.trim() !== "" &&
      cityInput.value.trim() !== "";

    nextBtn.disabled = !isValid;
    nextBtn.style.backgroundColor = isValid ? "#3db7ad" : "#eaeaea";
    nextBtn.style.color = isValid ? "#fff" : "#aaa";
    nextBtn.style.cursor = isValid ? "pointer" : "not-allowed";
  }

  // Tambahkan event listener ke semua input
  [nameInput, whatsappInput, emailInput, cityInput].forEach(input => {
    input.addEventListener("input", validateForm);
  });

  // Submit form secara manual ke order.detail3 (bukan default GET ke order.detail)
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Simpan data ke localStorage (opsional kalau tidak pakai session atau DB)
    const formData = {
      name: nameInput.value.trim(),
      whatsapp: whatsappInput.value.trim(),
      email: emailInput.value.trim(),
      city: cityInput.value.trim(),
    };

    localStorage.setItem("customerData", JSON.stringify(formData));

    // Arahkan ke step 3
    window.location.href = "/order-detail3"; // pastikan route ini tersedia
  });

  // Inisialisasi tombol
  validateForm();
});

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("booking-form");
  const nextBtn = document.querySelector(".next-btn");

  const inputs = ['name', 'whatsapp', 'email', 'city'].map(id => document.getElementById(id));

  function validateForm() {
    const isValid = inputs.every(input => input.value.trim() !== "");
    nextBtn.disabled = !isValid;
  }

  inputs.forEach(input => input.addEventListener("input", validateForm));
  validateForm();
});
