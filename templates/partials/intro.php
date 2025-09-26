<section style="" class="h-[60vh] lg:h-[80vh] px-4 lg:py-16 flex items-center flex-col justify-top">
    <div class="max-w-5xl text-center h-fit sticky top-1/2 my-[25vh]">
        <h2 class="text-[#dadada8a] text-2xl md:text-5xl font-medium font-inter " id="intro-heading">
            At Sound Mute, we deliver expert acoustic solutions that eliminate noise, enhance privacy, and create growth
            ready environments.
        </h2>
    </div>
</section>

<!-- GSAP + ScrollTrigger + SplitType for intro heading animation -->
<script src="https://cdn.jsdelivr.net/npm/split-type@0.3.1"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    (function() {
        if (typeof gsap === 'undefined') return;

        if (!gsap.__registeredScrollTrigger && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
            gsap.__registeredScrollTrigger = true;
        }

        // split the heading into chars
        var heading = document.querySelector('#intro-heading');
        if (!heading) return;

        var split = new SplitType(heading, {
            types: 'words,'
        });

        // make words inline-block so transforms/opacity/color transitions behave
        split.words.forEach(function(c) {
            c.style.display = 'inline-block';
        });

        ScrollTrigger.matchMedia({
            "(min-width: 768px)": function() {
                // desktop: use a scrubbed subtle color change
                var tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: heading,
                        start: 'top center',
                        end: '+=40%',
                        scrub: 0.3,
                        markers: false
                    }
                });
                tl.to(split.words, {
                    color: '#000000',
                    stagger: 0.02,
                    duration: 0.5
                });
            },

            "(max-width: 767px)": function() {
                // mobile: simple play-once color transition for perf and clarity
                gsap.to(split.words, {
                    color: '#000000',
                    stagger: 0.02,
                    duration: 0.5,
                    scrollTrigger: {
                        trigger: heading,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                });
            }
        });
    })()
});
</script>