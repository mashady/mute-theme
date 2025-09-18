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
<style>
.expanded-content {
    flex-direction: column;
}

.overlay {
    z-index: 1;
    opacity: 1;
}
</style>
<script>
// ✅ Updated initCardAnimation to hide ALL .card-content blocks
function initCardAnimation(card, options = {}) {
    const {
        clipOrigin = "85% 10px",
            overlayColor = "#ff4757",
            zIndex = "10"
    } = options;

    const overlay = card.querySelector('.overlay');
    const cardContents = card.querySelectorAll('.card-content'); // ⬅ all content blocks
    const expandedContent = card.querySelector('.expanded-content');

    if (overlay) overlay.style.background = overlayColor;

    // animate when card enter the view
    // gsap.fromTo(card,{opacity:0,y:12},{opacity:1,y:0,duration:0.6,ease:'power3.out',scrollTrigger:{trigger:card,start:'center 80%'}});

    gsap.set(overlay, {
        clipPath: `circle(0% at ${clipOrigin})`
    });
    gsap.set(expandedContent, {
        opacity: 0,
        y: 20,
        display: "none"
    });

    // Hover In
    const hoverInTl = gsap.timeline({
        paused: true
    });
    hoverInTl
        .to(cardContents, {
            duration: 0.01,
            opacity: 0,
            y: -10,
            ease: "power2.out",
            stagger: 0.1
        }, )
        .to(overlay, {
            duration: 0.8,
            clipPath: `circle(150% at ${clipOrigin})`,
            ease: "ease.out"
        })

        .to(expandedContent, {
            duration: 0.4,
            opacity: 1,
            display: 'flex',
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
            display: "none",
            y: 20,
            ease: "power2.in"
        })
        .to(overlay, {
                duration: 0.9,
                clipPath: `circle(0% at ${clipOrigin})`,
                ease: "power2.in"
            },
            "-=0.1")
        .to(cardContents, {
            duration: 0.3,
            opacity: 1,
            y: 0,
            ease: "power2.out",
            stagger: 0.1
        }, "-=0.3")


    // Synchronize arrow animation into the same timeline and add running-flag queueing
    // Arrow element (if exists) - we'll animate using transform:scale for better performance
    const arrowEl = card.querySelector('.card-arrow img');
    if (arrowEl) {
        // ensure transform origin and smoothing
        arrowEl.style.transformOrigin = '50% 50%';
        arrowEl.style.willChange = 'transform';
        // set an initial scale (1) in case CSS isn't explicit
        gsap.set(arrowEl, {
            scale: 1
        });
    }

    // Add running flag callbacks to hoverIn timeline
    hoverInTl.eventCallback('onStart', () => {
        card.dataset.animationRunning = 'true';
        card.__shouldReverse = false; // clear queued reverse when starting forward
    });
    hoverInTl.eventCallback('onComplete', () => {
        card.dataset.animationRunning = 'false';
        // If a reverse was requested while the forward animation ran, start it now
        if (card.__shouldReverse) {
            hoverOutTl.restart();
            card.__shouldReverse = false;
        }
    });

    // Integrate arrow grow into hoverIn timeline (delayed by 0.2s)
    if (arrowEl) {
        hoverInTl.to(arrowEl, {
            duration: 0.4,
            width: 300,
            height: 300,
            ease: 'power2.out'
        }, '-=0.9');
    }

    // Add running-flag callbacks to hoverOut timeline
    hoverOutTl.eventCallback('onStart', () => {
        card.dataset.animationRunning = 'true';
    });
    hoverOutTl.eventCallback('onComplete', () => {
        card.dataset.animationRunning = 'false';
    });

    // Integrate arrow shrink into hoverOut timeline (shrink early so overlay collapse looks natural)
    if (arrowEl) {
        hoverOutTl.to(arrowEl, {
            duration: 0.3,
            width: 40,
            height: 40,
            ease: 'power2.in'
        }, '-=0.6');
    }

    // Mouse handlers now respect the running flag and queue reverses when necessary
    card.addEventListener('mouseenter', () => {
        hoverOutTl.pause();
        hoverInTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1,
            ease: 'power2.out'
        });
    });

    card.addEventListener('mouseleave', () => {
        // If the forward animation is still running, mark for reverse and return
        if (card.dataset.animationRunning === 'true') {
            card.__shouldReverse = true;
            return;
        }
        hoverInTl.pause();
        hoverOutTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1,
            ease: 'power2.out'
        });
    });
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".card").forEach((card, i) => {
        // Determine color from data-color attribute or fall back to defaults
        const cardColor = card.getAttribute('data-color') || (i === 0 ? '#4B5D53' : '#34413A');
        // Add arrow button if not already present
        if (!card.querySelector('.card-arrow')) {
            const arrowWrapper = document.createElement('p');
            arrowWrapper.className =
                'card-arrow z-20 flex p-1.5 items-center rounded-full backdrop-blur-[20px] top-[10px] right-[10px] absolute w-fit';
            // set the background color from data-color
            arrowWrapper.style.background = cardColor;
            arrowWrapper.innerHTML =
                `<?php echo "<img src=\"" . get_stylesheet_directory_uri() . "/assets/images/arrow-up.svg\" alt=\"Arrow Icon\" width=\"40\" height=\"40\" />"; ?>`;
            // Place the arrow wrapper into a sensible spot: append to the first .card-content or to the card itself
            const firstContent = card.querySelector('.card-content');
            if (firstContent) {
                const targetParent = firstContent.parentElement || card;
                targetParent.appendChild(arrowWrapper);
            } else card.appendChild(arrowWrapper);
        }



        // Pass the resolved color to the animation init
        initCardAnimation(card, {
            overlayColor: card.getAttribute('data-color') || (i === 0 ? "#4B5D53" : "#34413A"),
            clipOrigin: "95.2% 25px"
        });

        // Inject decorative SVG if missing
        if (!card.querySelector('.card-deco-svg')) {
            // ensure card is positioned for absolute children
            const currentPos = window.getComputedStyle(card).position;
            if (currentPos === 'static' || !currentPos) card.style.position = 'relative';

            const svgWrapper = document.createElement('div');
            svgWrapper.className = 'card-deco-svg absolute z-5 pointer-events-none';
            svgWrapper.style.position = 'absolute';
            svgWrapper.style.top = '-2px';
            svgWrapper.style.right = '-1px';
            svgWrapper.style.width = '100px';
            svgWrapper.style.height = '100px';
            svgWrapper.style.zIndex = '0';
            svgWrapper.innerHTML = `
<svg width="101" height="99" viewBox="0 0 101 99" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.5 -0.000488281L101 0V98.9995H99.5L99.2484 97.4901C98.7527 94.5158 97.7808 91.6409 96.3699 88.9761L95.626 87.5708C94.5507 85.5397 93.1203 83.7176 91.4026 82.1908C90.1397 81.0681 88.7344 80.1167 87.2231 79.3611L84.6796 78.0893C83.232 77.3655 81.7011 76.822 80.1212 76.4709C78.7113 76.1576 77.2714 75.9995 75.8271 75.9995H57L54.6165 75.7191C50.5548 75.2413 46.5689 74.2568 42.7518 72.7887L42 72.4995L37.5 69.9995L35.3909 68.4177C34.1319 67.4734 32.9415 66.441 31.8287 65.3282C30.28 63.7795 28.8881 62.0817 27.6732 60.2594L26.5 58.4995C25.5021 56.8363 24.6574 55.0858 23.9763 53.2697L23.5 51.9995L22.5 48.4995L22.0698 45.7031C21.6905 43.2376 21.5 40.7468 21.5 38.2523V27.9763C21.5 15.4492 12.749 4.6243 0.5 1.99951V-0.000488281Z" fill="white"/>
</svg>

      `;
            card.appendChild(svgWrapper);
        }

        // NOTE: arrow grow/shrink animations moved into the main hover timelines above.
        // We still ensure the arrow wrapper exists and has sensible positioning if present.
        const arrow = card.querySelector('.card-arrow img');
        if (arrow) {
            const wrapper = card.querySelector('.card-arrow');
            if (wrapper) {
                wrapper.style.position = wrapper.style.position || 'absolute';
                wrapper.style.zIndex = wrapper.style.zIndex || '20';
            }
        }
    });
});

const isMobile = () => window.matchMedia("only screen and (max-width: 768px)").matches;
let _wasMobile = isMobile();
window.addEventListener('resize', () => {
    const currentlyMobile = isMobile();
    if (currentlyMobile !== _wasMobile) {
        // Instead of a full reload, trigger a safe refresh hook; if unavailable, fallback to reload
        if (typeof ScrollTrigger !== 'undefined' && ScrollTrigger.refresh) {
            ScrollTrigger.refresh();
        } else {
            location.reload();
        }
        _wasMobile = currentlyMobile;
    }


});
// alert(isMobile ? "Mobile View" : "Desktop View");
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