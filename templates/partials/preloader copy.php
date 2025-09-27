<?php
/**
 * New site preloader: centered logo with white waves behind it.
 */
?>
<div id="site-preloader" aria-hidden="false" class="fixed inset-0 z-[99999] flex items-center justify-center bg-[#091a0e] text-white">
    <div class="preloader-viewport relative w-full h-full flex items-center justify-center">

        <!-- (Waves removed) -->

        <!-- Replaced logo mask with generating loader animation from Uiverse -->
        <div class="loader-wrapper" aria-hidden="true">
            <span class="loader-letter">S</span>
            <span class="loader-letter">O</span>
            <span class="loader-letter">U</span>
            <span class="loader-letter">N</span>
            <span class="loader-letter">D</span>
            <span class="loader-letter">&nbsp;</span>
            <span class="loader-letter">M</span>
            <span class="loader-letter">U</span>
            <span class="loader-letter">T</span>
            <span class="loader-letter">E</span>

            <div class="loader" aria-hidden="true"></div>
        </div>

    </div>

    <style>
    /* Base */
    #site-preloader { transition: opacity 0.6s ease, visibility 0.6s ease; }
    #site-preloader.hidden { opacity: 0; visibility: hidden; }

        /* Logo / loader styling (from Uiverse.io by dexter-st) */
            .loader-wrapper {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 140px;
                width: auto;
                margin: 2rem;

                font-family: "Poppins", sans-serif;
                font-size: 2.4em; /* increased font size */
                font-weight: 600;
                user-select: none;
                color: #fff;

                transform: scale(2.2);
            }

        .loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 1;

            background-color: transparent;
            mask: repeating-linear-gradient(
                90deg,
                transparent 0,
                transparent 6px,
                black 7px,
                black 8px
            );
        }

        .loader::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            /* white tones for the moving stripe */
            background-image: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.95) 0%, transparent 50%),
                radial-gradient(circle at 45% 45%, rgba(255,255,255,0.85) 0%, transparent 45%),
                radial-gradient(circle at 55% 55%, rgba(255,255,255,0.7) 0%, transparent 45%),
                radial-gradient(circle at 45% 55%, rgba(255,255,255,0.45) 0%, transparent 45%),
                radial-gradient(circle at 55% 45%, rgba(255,255,255,0.28) 0%, transparent 45%);
            mask: radial-gradient(
                circle at 50% 50%,
                transparent 0%,
                transparent 10%,
                black 25%
            );
            animation:
                transform-animation 2s infinite alternate,
                opacity-animation 4s infinite;
            animation-timing-function: cubic-bezier(0.6, 0.8, 0.5, 1);
        }

        @keyframes transform-animation {
            0% {
                transform: translate(-55%);
            }
            100% {
                transform: translate(55%);
            }
        }

        @keyframes opacity-animation {
            0%,
            100% {
                opacity: 0;
            }
            15% {
                opacity: 1;
            }
            65% {
                opacity: 0;
            }
        }

        .loader-letter {
            display: inline-block;
            opacity: 0;
            animation: loader-letter-anim 4s infinite linear;
            z-index: 2;
        }

        .loader-letter:nth-child(1) { animation-delay: 0.1s; }
        .loader-letter:nth-child(2) { animation-delay: 0.205s; }
        .loader-letter:nth-child(3) { animation-delay: 0.31s; }
        .loader-letter:nth-child(4) { animation-delay: 0.415s; }
        .loader-letter:nth-child(5) { animation-delay: 0.521s; }
        .loader-letter:nth-child(6) { animation-delay: 0.626s; }
        .loader-letter:nth-child(7) { animation-delay: 0.731s; }
        .loader-letter:nth-child(8) { animation-delay: 0.837s; }
        .loader-letter:nth-child(9) { animation-delay: 0.942s; }
        .loader-letter:nth-child(10) { animation-delay: 1.047s; }

        @keyframes loader-letter-anim {
            0% { opacity: 0; }
            5% { opacity: 1; text-shadow: 0 0 4px #fff; transform: scale(1.1) translateY(-2px); }
            20% { opacity: 0.2; }
            100% { opacity: 0; }
        }
    </style>

    <script>
    (function() {
        var pre = document.getElementById('site-preloader');
        if (!pre) return;

            var startTime = Date.now();
            var minDisplay = 1000; // ms (minimum 1 second)
        var removed = false;

        // Initialize CSS-driven loader animations and respect reduced motion
        function initAnimations() {
            // respect users who prefer reduced motion
            var prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReduced) {
                // stop animations by setting animation-play-state to paused
                var letters = pre.querySelectorAll('.loader-letter');
                letters.forEach(function(l) { l.style.animationPlayState = 'paused'; l.style.opacity = '1'; });
                var loaderEl = pre.querySelector('.loader');
                if (loaderEl) loaderEl.style.animationPlayState = 'paused';
                return;
            }

            // CSS handles the letters and loader visuals; ensure class presence
            var loaderEl = pre.querySelector('.loader');
            if (loaderEl) loaderEl.classList.add('');
        }

        function hideNow() {
            if (removed) return;
            removed = true;
            if (typeof gsap !== 'undefined') {
                try {
                    gsap.to(pre, { autoAlpha: 0, duration: 0.6, ease: 'power2.out', onComplete: function() { pre.parentNode && pre.parentNode.removeChild(pre); } });
                    return;
                } catch (e) {
                    // fallback
                }
            }
            pre.classList.add('hidden');
            setTimeout(function() { pre.parentNode && pre.parentNode.removeChild(pre); }, 700);
        }

        function scheduleHide() {
            var elapsed = Date.now() - startTime;
            var rem = Math.max(0, minDisplay - elapsed);
            if (rem > 0) setTimeout(hideNow, rem); else hideNow();
        }

        // initialize
        initAnimations();

        if (document.readyState === 'complete') scheduleHide(); else window.addEventListener('load', scheduleHide, { once: true });
        // safety fallback
        setTimeout(scheduleHide, 5000);
    })();
    </script>
</div>
