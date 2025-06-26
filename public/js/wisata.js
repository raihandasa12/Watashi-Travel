
document.addEventListener('DOMContentLoaded', () => {
  // === 1. Checkbox Maksimal 2 Pilihan ===
  const checkboxes = document.querySelectorAll('.checkbox-container input[type="checkbox"]');
  const maxChecked = 2;

  function updateCheckboxes() {
    const checked = document.querySelectorAll('.checkbox-container input[type="checkbox"]:checked');
    const isLimitReached = checked.length >= maxChecked;

    checkboxes.forEach(checkbox => {
      if (!checkbox.checked) {
        checkbox.disabled = isLimitReached;
        checkbox.parentElement.style.opacity = isLimitReached ? 0.5 : 1;
        checkbox.style.cursor = isLimitReached ? 'not-allowed' : 'pointer';
      }
    });
  }

  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', updateCheckboxes);
  });

  updateCheckboxes(); // Inisialisasi saat halaman dimuat

  // === 2. Quick Links (wt-middle) Navigasi ===
  const quickLinks = document.querySelectorAll('.wt-middle a');
  quickLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const page = link.getAttribute('data-link');
      alert(`Navigating to ${page} page!`);
    });
  });

  // === 3. Social Media Links (wt-right) ===
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

  // === 4. Policy Links (wt-links) ===
  const policyLinks = document.querySelectorAll('.wt-links a');
  policyLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const policy = link.getAttribute('data-policy');
      alert(`Opening ${policy} page!`);
    });
  });
});
