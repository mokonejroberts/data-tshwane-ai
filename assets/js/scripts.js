
document.querySelectorAll('.case-details').forEach(details => {
  const button = details.querySelector('.read-more-button');
  const hidden = details.querySelector('.case-hidden');
  const returnLink = details.querySelector('.case-return-link');

  if (!button || !hidden || !returnLink) return;

  // Toggle expand/collapse
  button.addEventListener('click', () => {
    const isOpen = details.dataset.expanded === "true";
    details.dataset.expanded = isOpen ? "false" : "true";
    hidden.classList.toggle('visible', !isOpen);
    button.textContent = isOpen ? "Read more" : "Collapse this case study";
    button.setAttribute('aria-expanded', !isOpen);
  });

  // Collapse and scroll back
  returnLink.addEventListener('click', (event) => {
    event.preventDefault();
    details.dataset.expanded = "false";
    hidden.style.display = "none";
    button.textContent = "Read more";
    button.setAttribute('aria-expanded', false);

    setTimeout(() => {
      const heading = document.querySelector('#case-studies h2');
      if (!heading) return;
      const nav = document.querySelector('.nav-wrapper');
      const navHeight = nav ? nav.offsetHeight : 0;
      const h2Styles = window.getComputedStyle(heading);
      const h2MarginBottom = parseFloat(h2Styles.marginBottom) || 0;
      const offset = heading.getBoundingClientRect().top + window.scrollY - navHeight - h2MarginBottom;
      window.scrollTo({ top: offset, behavior: 'smooth' });
    }, 120);
  });
});

// ============================================================
// Handle 'Enter your country' field visibility based on "Other"
// ============================================================
document.addEventListener('DOMContentLoaded', () => {
  const provinceSelects = document.querySelectorAll('.form-select-province');
  provinceSelects.forEach(provinceSelect => {
    const form = provinceSelect.closest('form');
    const countryField = form.querySelector('#countryField');
    const countryInput = form.querySelector('#country');

    if (countryField && countryInput) {
      function syncCountryRequirement(value) {
        if (value === 'Other') {
          countryField.style.display = 'block';
          countryInput.required = true;
        } else {
          countryField.style.display = 'none';
          countryInput.required = false;
          countryInput.value = '';
        }
      }

      syncCountryRequirement(provinceSelect.value);
      provinceSelect.addEventListener('change', (e) => syncCountryRequirement(e.target.value));

      form.addEventListener('submit', (e) => {
        if (provinceSelect.value === 'Other' && (!countryInput.value || countryInput.value.trim() === '')) {
          e.preventDefault();
          alert('Please enter your country name before submitting.');
        }
      });
    }
  });
});

// ============================================================
// Logout button (PHP version)
// ============================================================
const logoutBtn = document.getElementById("logoutBtn");
if (logoutBtn) {
  logoutBtn.addEventListener("click", () => {
    window.location.href = "src/routes/logout.php";
  });
}


