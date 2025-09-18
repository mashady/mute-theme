document.addEventListener("DOMContentLoaded", () => {
  if (typeof gsap === "undefined") return;

  gsap.registerPlugin(ScrollTrigger);

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".sound-experts-section",
      start: "top 80%",
    },
  });

  tl.to(".section-title", {
    opacity: 1,
    y: 0,
    duration: 0.6,
    ease: "power3.out",
  })
    .to(
      ".section-subtitle",
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: "power3.out",
      },
      "-=0.4"
    )
    .to(
      ".main-card",
      {
        opacity: 1,
        scale: 1,
        duration: 0.8,
        ease: "power3.out",
      },
      "-=0.3"
    )
    .to(
      ".small-card",
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.2,
        ease: "power3.out",
      },
      "-=0.4"
    )
    .to(
      ".stats-row",
      {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: "power3.out",
      },
      "-=0.3"
    );
});
