<section class=" relative flex flex-col justify-center items-start min-h-[90vh] bg-cover bg-center overflow-hidden "
    id="home-hero-container">

    <!-- Background video: autoplay, muted, loop, playsinline -->
    <video class="absolute inset-0 w-full h-full object-cover -z-10" autoplay muted loop playsinline
        poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hero.png">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/heroVid.mp4" type="video/mp4">
        <!-- Fallback image for browsers that don't support video -->
        Your browser does not support the video tag.
    </video>

    <div class="relative z-10 w-full h-full p-6 flex flex-row items-end  justify-between">
        <div class="max-w-3xl  flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <h1 class="text-white font-medium uppercase font-inter
           text-3xl sm:text-4xl md:text-5xl lg:text-5xl m-0" id="hero-title">
                    Silence is a Form of Luxury
                </h1>
                <p class="text-white font-light text-2xl font-poppins" id="hero-subtitle">
                    Experience premium sound isolation solutions designed to transform your spaces into havens of calm,
                    focus, and productivity.
                </p>
                <div
                    class="btn bg-white text-Primary-Green-700 px-2 py-1 font-base text-xl w-fit rounded-sm mt-2 lg:hidden">
                    Book appointment</div>
            </div>

        </div>
        <div class="w-96 h-40 p-4 bg-stone-50 rounded-3xl outline outline-1 outline-offset-[-1px] outline-white/0 inline-flex justify-between items-start overflow-hidden max-lg:hidden"
            id="book-appointment-box">
            <div class="inline-flex flex-col justify-end items-end h-full">
                <div
                    class="w-72 justify-start text-Colors-Green-Green-700 text-3xl font-medium font-['Poppins'] leading-10">
                    Have a question?</div>
                <div
                    class="w-72 justify-start text-Colors-Green-Green-700 text-xl font-light font-['Poppins'] leading-normal ">
                    Book Appointment Now</div>
            </div>
            <div class="p-1.5 bg-Primary-Green-700 rounded-[40px] backdrop-blur-[20px] flex justify-start items-center">
                <div class="w-11 h-11  rounded-[100px] flex justify-center items-center gap-3">
                    <svg width="50" height="50" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4261 10.9896L23.0104 10.9896L23.0104 19.5739" stroke="white" stroke-width="2"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9896 23.0103L22.8902 11.1097" stroke="white" stroke-width="2"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
html {
    padding: 0 !important;
}

#wpadminbar {
    /* display: none !important; */
}
</style>
<!-- GSAP animation: animate container then title and subtitle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
    integrity="sha512-pvQYx1n8g+1V9p0bHq2a1Q2rE7wz1oG7xv8aC6Zxq9Qe1Q2rE7wz1oG7xv8aC6Zxq9Q==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
<script>
(function() {
    // Wait for DOM ready
    function ready(fn) {
        if (document.readyState !== 'loading') fn();
        else document.addEventListener('DOMContentLoaded', fn);
    }

    ready(function() {
        var container = document.getElementById('home-hero-container');
        var title = document.getElementById('hero-title');
        var subtitle = document.getElementById('hero-subtitle');
        var box = document.getElementById('book-appointment-box');

        if (!container) return;

        // sequence animations with a GSAP timeline
        var tl = gsap.timeline({
            defaults: {
                ease: 'power2.out'
            }
        });

        // container: animate height/margin/borderRadius (start after 1s to match previous delay)
        tl.fromTo(container, {
                height: '100vh'
            }, {
                height: '95vh',
                margin: '20px',
                borderRadius: '24px',
                duration: 0.5,
                ease: 'power1.out'
            },
            1 // absolute position: start at 1s (previous delay)
        );

        // title: come in after container (previously started at 0.55s but container had 1s delay; keep a similar overlap)
        if (title) {
            tl.fromTo(title, {
                y: 20,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.8
            }, 1.55);
        }

        // subtitle: after title
        if (subtitle) {
            tl.fromTo(subtitle, {
                y: 20,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.6
            }, 2.35);
        }

        // book box initial entrance: from y:50 and opacity 0 (start after subtitle finishes)
        if (box) {
            // subtitle starts at 2.35 with duration 0.6 -> ends at ~2.95
            tl.fromTo(box, {
                y: 50,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.6
            }, 2.95);
        }

        // expand book-appointment-box to fill hero on hover and show centered CTA
        var box = document.getElementById('book-appointment-box');
        if (box) {
            var isExpanded = false;
            var placeholder = null;
            var originalChildren = null;
            var overlay = null;
            var origBg = '';

            function createOverlay() {
                var ov = document.createElement('div');
                ov.style.position = 'absolute';
                ov.style.inset = '0';
                ov.style.display = 'flex';
                ov.style.flexDirection = 'column';
                ov.style.justifyContent = 'center';
                ov.style.alignItems = 'center';
                ov.style.textAlign = 'center';
                ov.style.padding = '1.5rem';
                ov.style.boxSizing = 'border-box';

                var title = document.createElement('div');
                title.textContent = 'Book your appointment now';
                title.style.color = '#ffffff';
                title.style.fontSize = '28px';
                title.style.fontWeight = '600';
                title.style.marginBottom = '12px';

                var arrow = document.createElement('div');
                arrow.innerHTML =
                    '<svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12h14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 5l6 7-6 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

                ov.appendChild(title);
                ov.appendChild(arrow);
                ov.style.opacity = '0';
                return ov;
            }

            function expandBox() {
                if (isExpanded) return;
                var rect = box.getBoundingClientRect();

                // capture original children and background
                if (!originalChildren) originalChildren = Array.from(box.children);
                origBg = getComputedStyle(box).backgroundColor || '';

                // fade out original children quickly
                gsap.to(originalChildren, {
                    opacity: 0,
                    duration: 0.12,
                    stagger: 0.02
                });

                // create placeholder to preserve layout
                placeholder = document.createElement('div');
                placeholder.style.width = rect.width + 'px';
                placeholder.style.height = rect.height + 'px';
                placeholder.style.display = getComputedStyle(box).display;
                box.parentNode.insertBefore(placeholder, box);

                // move box into container so it's positioned relative to it
                container.appendChild(box);

                // set initial absolute positioning matching original rect relative to container
                var containerRect = container.getBoundingClientRect();
                var top = rect.top - containerRect.top;
                var left = rect.left - containerRect.left;

                box.style.position = 'absolute';
                box.style.zIndex = 9999;
                box.style.boxSizing = 'border-box';
                box.style.top = top + 'px';
                box.style.left = left + 'px';
                box.style.width = rect.width + 'px';
                box.style.height = rect.height + 'px';

                // animate to fill the container and change background color to #34413A
                gsap.to(box, {
                    duration: 0.45,
                    top: 0,
                    left: 0,
                    width: '100%',
                    height: '100%',
                    ease: 'power2.out'
                });
                gsap.to(box, {
                    duration: 0.3,
                    backgroundColor: '#34413A',
                    ease: 'none'
                });

                // after expansion, insert overlay CTA
                setTimeout(function() {
                    overlay = createOverlay();
                    box.appendChild(overlay);
                    gsap.to(overlay, {
                        opacity: 1,
                        duration: 0.25,
                        ease: 'power2.out'
                    });
                }, 450);

                isExpanded = true;
            }

            function collapseBox() {
                if (!isExpanded) return;

                // fade out overlay then remove
                if (overlay) {
                    gsap.to(overlay, {
                        opacity: 0,
                        duration: 0.18,
                        onComplete: function() {
                            if (overlay && overlay.parentNode) overlay.parentNode.removeChild(
                                overlay);
                            overlay = null;
                        }
                    });
                }

                // animate back to placeholder position and restore background
                var rect = placeholder.getBoundingClientRect();
                var containerRect = container.getBoundingClientRect();
                var top = rect.top - containerRect.top;
                var left = rect.left - containerRect.left;

                gsap.to(box, {
                    duration: 0.35,
                    top: top + 'px',
                    left: left + 'px',
                    width: rect.width + 'px',
                    height: rect.height + 'px',
                    backgroundColor: origBg || '',
                    ease: 'power2.in',
                    onComplete: function() {
                        // restore in-flow position
                        if (placeholder && placeholder.parentNode) {
                            placeholder.parentNode.insertBefore(box, placeholder);
                            placeholder.parentNode.removeChild(placeholder);
                            placeholder = null;
                        }

                        // restore original children opacity
                        if (originalChildren && originalChildren.length) {
                            gsap.to(originalChildren, {
                                opacity: 1,
                                duration: 0.12,
                                stagger: 0.02
                            });
                        }

                        box.style.position = '';
                        box.style.top = '';
                        box.style.left = '';
                        box.style.width = '';
                        box.style.height = '';
                        box.style.zIndex = '';
                        box.style.backgroundColor = '';
                        isExpanded = false;
                    }
                });
            }

            // handle hover (mouseenter/leave)
            box.addEventListener('mouseenter', function(e) {
                expandBox();
            });

            // collapse when pointer leaves the expanded box area
            box.addEventListener('mouseleave', function(e) {
                if (!isExpanded) return;
                setTimeout(function() {
                    var rect = container.getBoundingClientRect();
                    var x = e.clientX,
                        y = e.clientY;
                    if (x < rect.left || x > rect.right || y < rect.top || y > rect
                        .bottom) {
                        collapseBox();
                    }
                }, 10);
            });
        }
    });
})();
</script>