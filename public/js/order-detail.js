document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
      const minusBtn = counter.querySelector(".minus");
      const plusBtn = counter.querySelector(".plus");
      const countEl = counter.querySelector("span");

      // Ambil hidden input target berdasarkan posisi row
      const hiddenInput = counter.closest(".participant-row").querySelector("input[type='hidden']");

      let count = 0;
      const min = 0;
      const max = 10;

      function updateButtons() {
        minusBtn.disabled = count <= min;
        plusBtn.disabled = count >= max;
      }

      function updateHidden() {
        hiddenInput.value = count;
      }

      plusBtn.addEventListener("click", () => {
        if (count < max) {
          count++;
          countEl.textContent = count;
          updateButtons();
          updateHidden();
        }
      });

      minusBtn.addEventListener("click", () => {
        if (count > min) {
          count--;
          countEl.textContent = count;
          updateButtons();
          updateHidden();
        }
      });

      updateButtons();
      updateHidden();
    });

    // Enable "Next" button only if both dates are filled
    const departureInput = document.getElementById('departure-date');
    const returnInput = document.getElementById('return-date');
    const nextBtn = document.querySelector('.next-btn');

    function validateForm() {
      if (departureInput.value && returnInput.value) {
        nextBtn.disabled = false;
      } else {
        nextBtn.disabled = true;
      }
    }

    departureInput.addEventListener('input', validateForm);
    returnInput.addEventListener('input', validateForm);
  });

    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
      const minusBtn = counter.querySelector(".minus");
      const plusBtn = counter.querySelector(".plus");
      const countEl = counter.querySelector("span");

      // Ambil hidden input target berdasarkan posisi row
      const hiddenInput = counter.closest(".participant-row").querySelector("input[type='hidden']");

      let count = 0;
      const min = 0;
      const max = 10;

      function updateButtons() {
        minusBtn.disabled = count <= min;
        plusBtn.disabled = count >= max;
      }

      function updateHidden() {
        hiddenInput.value = count;
      }

      plusBtn.addEventListener("click", () => {
        if (count < max) {
          count++;
          countEl.textContent = count;
          updateButtons();
          updateHidden();
        }
      });

      minusBtn.addEventListener("click", () => {
        if (count > min) {
          count--;
          countEl.textContent = count;
          updateButtons();
          updateHidden();
        }
      });

      updateButtons();
      updateHidden();
    });

    // Enable "Next" button only if both dates are filled
    const departureInput = document.getElementById('departure-date');
    const returnInput = document.getElementById('return-date');
    const nextBtn = document.querySelector('.next-btn');

    function validateForm() {
      if (departureInput.value && returnInput.value) {
        nextBtn.disabled = false;
      } else {
        nextBtn.disabled = true;
      }
    }

    departureInput.addEventListener('input', validateForm);
    returnInput.addEventListener('input', validateForm);


document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("booking-form");
  const nextBtn = document.querySelector(".next-btn");
  const departureInput = document.getElementById("departure-date");
  const returnInput = document.getElementById("return-date");
  const participantRows = document.querySelectorAll(".participant-row");

  function validateForm() {
    const departure = departureInput.value;
    const returnDate = returnInput.value;
    const adults = parseInt(document.querySelector('input[name="adults"]').value);
    const children = parseInt(document.querySelector('input[name="children"]').value);

    const isValid = departure && returnDate && (adults + children > 0);

    nextBtn.disabled = !isValid;
    nextBtn.classList.toggle("active", isValid);
    console.log("Form valid:", isValid);
  }

  departureInput.addEventListener("input", validateForm);
  returnInput.addEventListener("input", validateForm);

  participantRows.forEach(row => {
    const minusBtn = row.querySelector(".minus");
    const plusBtn = row.querySelector(".plus");
    const span = row.querySelector(".counter span");
    const hidden = row.querySelector("input[type='hidden']");

    let count = parseInt(hidden.value) || 0;
    const min = 0;
    const max = 100;

    function updateUI() {
      span.textContent = count;
      hidden.value = count;
      minusBtn.disabled = count <= min;
      plusBtn.disabled = count >= max;
      validateForm();
    }

    plusBtn.addEventListener("click", (e) => {
      e.preventDefault();
      if (count < max) {
        count++;
        updateUI();
      }
    });

    minusBtn.addEventListener("click", (e) => {
      if (count > min) {
        count--;
        updateUI();
      }
    });

    updateUI();
  });
});

  if (total > 0) {
    nextBtn.disabled = false;
    nextBtn.classList.add("active");
  } else {
    nextBtn.disabled = true;
    nextBtn.classList.remove("active");
  }

