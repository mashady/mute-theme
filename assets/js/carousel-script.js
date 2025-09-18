/**
 * Testimonials slider functionality
 */
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("testimonialSlider");
  if (!slider) return;

  let currentSlide = 0;
  const totalSlides = slider.querySelectorAll(".testimonial-slide").length;

  function updateSlider() {
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  }

  document
    .getElementById("testimonialNextBtn")
    ?.addEventListener("click", nextSlide);
  document
    .getElementById("testimonialPrevBtn")
    ?.addEventListener("click", prevSlide);

  // Auto-slide (optional, adjust timing)
  setInterval(nextSlide, 80000);

  updateSlider();
});
