<footer class="bg-black text-black p-6 md:p-8 lg:p-10 rounded-t-[10px]">
    <!-- Top Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-8">
        <!-- Column 1 -->
        <div>
            <h3 class="text-lg font-semibold text-gray-300 mb-4">Products</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-white hover:text-blue-400 transition">Door</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">AI apps</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Workflows</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Database</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Mobile</a></li>
            </ul>
        </div>

        <!-- Column 2 -->
        <div>
            <h3 class="text-lg font-semibold text-gray-300 mb-4">Solutions</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-white hover:text-blue-400 transition">Isolation</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">External apps</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Integration</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Self-hosting</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div>
            <h3 class="text-lg font-semibold text-gray-300 mb-4">Resources</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-white hover:text-blue-400 transition">Blog</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Reports</a></li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div>
            <h3 class="text-lg font-semibold text-gray-300 mb-4">Company</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-white hover:text-blue-400 transition">About</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Careers</a></li>
                <li><a href="#" class="text-white hover:text-blue-400 transition">Partners</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Logo + Text -->
    <!-- Bottom Logo + Text -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 mt-8 text-center sm:text-left">
        <!-- Logo -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo"
            class="w-24 sm:w-28 md:w-36 lg:w-44 h-auto" />

        <!-- Mute Text -->
        <p
            class="text-white font-[400] font-inter text-[80px] sm:text-[120px] md:text-[160px] lg:text-[200px] xl:text-[230px] leading-none">
            Mute
        </p>
    </div>

</footer>

<?php wp_footer(); ?>
</section>

<script>
// ✅ Updated initCardAnimation to hide ALL .card-content blocks
function initCardAnimation(card, options = {}) {
    const {
        clipOrigin = "85% 15%",
            overlayColor = "#ff4757",
            // hoverShadow = "0 20px 40px rgba(2 55,71,87,0.4)",
            baseShadow = "0 10px 30px rgba(96,125,119,0.3)"
    } = options;

    const overlay = card.querySelector('.overlay');
    const cardContents = card.querySelectorAll('.card-content'); // ⬅ all content blocks
    const expandedContent = card.querySelector('.expanded-content');
    const expandIcon = card.querySelector('.expand-icon');

    if (overlay) overlay.style.background = overlayColor;

    gsap.set(overlay, {
        clipPath: `circle(0% at ${clipOrigin})`
    });
    gsap.set(expandedContent, {
        opacity: 0,
        y: 20
    });

    // Hover In
    const hoverInTl = gsap.timeline({
        paused: true
    });
    hoverInTl
        .to(overlay, {
            duration: 0.6,
            clipPath: `circle(150% at ${clipOrigin})`,
            ease: "power2.out"
        })
        .to(cardContents, {
            duration: 0.3,
            opacity: 0,
            y: -10,
            ease: "power2.out",
            stagger: 0.1
        }, "-=0.3")
        .to(expandIcon, {
            duration: 0.3,
            opacity: 0,
            scale: 0.8,
            ease: "power2.out"
        }, "-=0.3")
        .to(expandedContent, {
            duration: 0.4,
            opacity: 1,
            y: 0,
            ease: "power2.out"
        }, "-=0.2");

    // Hover Out
    const hoverOutTl = gsap.timeline({
        paused: true
    });
    hoverOutTl
        .to(expandedContent, {
            duration: 0.3,
            opacity: 0,
            y: 20,
            ease: "power2.in"
        })
        .to(overlay, {
            duration: 0.5,
            clipPath: `circle(0% at ${clipOrigin})`,
            ease: "power2.in"
        }, "-=0.1")
        .to(cardContents, {
            duration: 0.3,
            opacity: 1,
            y: 0,
            ease: "power2.out",
            stagger: 0.1
        }, "-=0.3")
        .to(expandIcon, {
            duration: 0.3,
            opacity: 1,
            scale: 1,
            ease: "power2.out"
        }, "-=0.3");

    card.addEventListener('mouseenter', () => {
        hoverOutTl.pause();
        hoverInTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1.02,
            boxShadow: hoverShadow,
            ease: "power2.out"
        });
    });

    card.addEventListener('mouseleave', () => {
        hoverInTl.pause();
        hoverOutTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1,
            boxShadow: baseShadow,
            ease: "power2.out"
        });
    });
}

// Init for all cards in this section
document.querySelectorAll(".card").forEach((card, i) => {
    initCardAnimation(card, {
        overlayColor: i === 0 ? "#4B5D53" : "#34413A",
        clipOrigin: "80% 20%"
    });
});
</script>
<!-- <script>
  // Reusable GSAP Card Animation
  function initCardAnimation(card, options = {}) {
    const {
      clipOrigin = "85% 15%",         // where the animation expands from
      overlayColor = "#ff4757",       // overlay circle color
      hoverShadow = "0 20px 40px rgba(255,71,87,0.4)", // shadow when hovered
      baseShadow = "0 10px 30px rgba(96,125,119,0.3)"  // normal shadow
    } = options;

    const overlay = card.querySelector('.overlay');
    const cardContent = card.querySelector('.card-content');
    const expandedContent = card.querySelector('.expanded-content');
    const expandIcon = card.querySelector('.expand-icon');

    // Apply overlay color dynamically
    if (overlay) {
      overlay.style.background = overlayColor;
    }

    // Initial states
    gsap.set(overlay, { clipPath:`circle(0% at ${clipOrigin})` });
    gsap.set(expandedContent, { opacity:0, y:20 });

    // Hover In animation
    const hoverInTl = gsap.timeline({ paused:true });
    hoverInTl
      .to(overlay, { duration:0.6, clipPath:`circle(150% at ${clipOrigin})`, ease:"power2.out" })
      .to(cardContent, { duration:0.3, opacity:0, y:-10, ease:"power2.out" }, "-=0.3")
      .to(expandIcon, { duration:0.3, opacity:0, scale:0.8, ease:"power2.out" }, "-=0.3")
      .to(expandedContent, { duration:0.4, opacity:1, y:0, ease:"power2.out" }, "-=0.2");

    // Hover Out animation
    const hoverOutTl = gsap.timeline({ paused:true });
    hoverOutTl
      .to(expandedContent, { duration:0.3, opacity:0, y:20, ease:"power2.in" })
      .to(overlay, { duration:0.5, clipPath:`circle(0% at ${clipOrigin})`, ease:"power2.in" }, "-=0.1")
      .to(cardContent, { duration:0.3, opacity:1, y:0, ease:"power2.out" }, "-=0.3")
      .to(expandIcon, { duration:0.3, opacity:1, scale:1, ease:"power2.out" }, "-=0.3");

    // Event listeners
    card.addEventListener('mouseenter', () => {
      hoverOutTl.pause();
      hoverInTl.restart();
      gsap.to(card, { duration:0.3, scale:1.02, boxShadow:hoverShadow, ease:"power2.out" });
    });

    card.addEventListener('mouseleave', () => {
      hoverInTl.pause();
      hoverOutTl.restart();
      gsap.to(card, { duration:0.3, scale:1, boxShadow:baseShadow, ease:"power2.out" });
    });
  }

  // Example usage
  document.querySelectorAll(".card").forEach((card, i) => {
    if (i === 0) {
      // Red overlay card
      initCardAnimation(card, { overlayColor:"#ff4757", clipOrigin:"85% 15%" });
    } else if (i === 1) {
      // Blue overlay card
      initCardAnimation(card, { overlayColor:"#1e90ff", clipOrigin:"80% 20%" });
    } else {
      // Default
      initCardAnimation(card);
    }
  });
</script> -->

</body>
<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
  const button = document.getElementById("mobile-menu-button");
  const menu = document.getElementById("mobile-menu");
  
  if (button && menu) {
    button.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  }
});
</script> -->

</html>