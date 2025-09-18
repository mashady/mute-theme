<section style="" class="h-[60vh] lg:h-[150vh] lg:py-16 flex items-center flex-col justify-top">
    <div class="max-w-5xl text-center h-fit sticky top-1/2 my-[25vh]">
        <h2 class="text-[#dadada8a] text-4xl md:text-5xl font-medium font-inter leading-snug" id="intro-heading">
            At Sound Mute, we deliver expert acoustic solutions that eliminate noise,
            enhance privacy, and create growth-ready environments.
        </h2>
    </div>
</section>

<!-- GSAP + ScrollTrigger + SplitType for intro heading animation -->
<script src="https://cdn.jsdelivr.net/npm/split-type@0.3.1"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    (function() {
        if (typeof gsap === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);

        // split the heading into chars
        var heading = document.querySelector('#intro-heading');
        if (!heading) return;

        var split = new SplitType(heading, {
            types: 'lines, words,'
        });

        // make words inline-block so transforms/opacity/color transitions behave
        split.words.forEach(function(c) {
            c.style.display = 'inline-block';
        });

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: heading,
                start: 'top center',
                end: '+=110%',
                scrub: 0.3,
                markers: false
            }
        });

        tl.to(split.words, {
            color: '#000000',
            stagger: 0.02,
            duration: 0.5
        });
    })()
});
</script>