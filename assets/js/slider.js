/***
 * Slider functionality
 */

document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("slider");
  if (!slider) return;

  const indicators = document.querySelectorAll(".indicator");
  let currentSlide = 0;
  const totalSlides = slider.querySelectorAll(".slide").length;

  function updateSlider() {
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;

    indicators.forEach((ind, i) => {
      ind.classList.toggle("bg-white/70", i === currentSlide);
      ind.classList.toggle("bg-white/30", i !== currentSlide);
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  }

  document.getElementById("nextBtn")?.addEventListener("click", nextSlide);
  document.getElementById("prevBtn")?.addEventListener("click", prevSlide);

  indicators.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      currentSlide = i;
      updateSlider();
    });
  });

  // Auto-slide
  setInterval(nextSlide, 50000);

  updateSlider();
});
// Add this to your theme's JavaScript file, e.g., scripts.js
// document.addEventListener("DOMContentLoaded", () => {
//   const menuToggle = document.getElementById("menu-toggle");
//   const mobileMenu = document.getElementById("mobile-menu");

//   if (menuToggle && mobileMenu) {
//     menuToggle.addEventListener("click", () => {
//       mobileMenu.classList.toggle("hidden");
//     });
//   }
// });

/**
  header mobile menu toggle
*/
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("open");
    });
  }
});
