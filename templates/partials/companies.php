<section class="w-full flex justify-center items-center">
    <div class="h-80 inline-flex flex-col justify-center items-center gap-7">
        <div class="justify-start text-Accent-Of-white-800 text-3xl font-normal font-['Poppins'] leading-10">Trusted by
            top companies</div>
        <div class="p-5 w-screen max-w-full flex overflow-hidden">
            <div class="inline-flex items-center gap-12 companies-rail">
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company1.png" />
                <img class="company-item w-36 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company2.png" />
                <img class="company-item w-32 h-11"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company3.png" />
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company4.png" />
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company1.png" />
                <img class="company-item w-36 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company2.png" />
                <img class="company-item w-32 h-11"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company3.png" />
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company4.png" />
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company1.png" />
                <img class="company-item w-36 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company2.png" />
                <img class="company-item w-32 h-11"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company3.png" />
                <img class="company-item w-40 h-10"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company4.png" />

            </div>
        </div>
    </div>

    <!-- GSAP horizontal loop marquee for company logos -->
    <script>
    (function() {
        if (typeof gsap === 'undefined') return;

        // helper: horizontalLoop (copied from official GSAP example)
        function horizontalLoop(items, config) {
            items = gsap.utils.toArray(items);
            config = config || {};
            let tl = gsap.timeline({
                    repeat: config.repeat,
                    paused: config.paused,
                    defaults: {
                        ease: "none"
                    },
                    onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)
                }),
                length = items.length,
                startX = items[0].offsetLeft,
                times = [],
                widths = [],
                xPercents = [],
                curIndex = 0,
                pixelsPerSecond = (config.speed || 1) * 100,
                snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1),
                totalWidth, curX, distanceToStart, distanceToLoop, item, i;
            gsap.set(items, {
                xPercent: (i, el) => {
                    let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
                    xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap
                        .getProperty(el, "xPercent"));
                    return xPercents[i];
                }
            });
            gsap.set(items, {
                x: 0
            });
            totalWidth = items[length - 1].offsetLeft + xPercents[length - 1] / 100 * widths[length - 1] - startX +
                items[length - 1].offsetWidth * gsap.getProperty(items[length - 1], "scaleX") + (parseFloat(config
                    .paddingRight) || 0);
            for (i = 0; i < length; i++) {
                item = items[i];
                curX = xPercents[i] / 100 * widths[i];
                distanceToStart = item.offsetLeft + curX - startX;
                distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
                tl.to(item, {
                        xPercent: snap((curX - distanceToLoop) / widths[i] * 100),
                        duration: distanceToLoop / pixelsPerSecond
                    }, 0)
                    .fromTo(item, {
                        xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)
                    }, {
                        xPercent: xPercents[i],
                        duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
                        immediateRender: false
                    }, distanceToLoop / pixelsPerSecond)
                    .add("label" + i, distanceToStart / pixelsPerSecond);
                times[i] = distanceToStart / pixelsPerSecond;
            }

            function toIndex(index, vars) {
                vars = vars || {};
                (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length);
                let newIndex = gsap.utils.wrap(0, length, index),
                    time = times[newIndex];
                if (time > tl.time() !== index > curIndex) {
                    vars.modifiers = {
                        time: gsap.utils.wrap(0, tl.duration())
                    };
                    time += tl.duration() * (index > curIndex ? 1 : -1);
                }
                curIndex = newIndex;
                vars.overwrite = true;
                return tl.tweenTo(time, vars);
            }
            tl.next = vars => toIndex(curIndex + 1, vars);
            tl.previous = vars => toIndex(curIndex - 1, vars);
            tl.current = () => curIndex;
            tl.toIndex = (index, vars) => toIndex(index, vars);
            tl.times = times;
            tl.progress(1, true).progress(0, true);
            if (config.reversed) {
                tl.vars.onReverseComplete();
                tl.reverse();
            }
            return tl;
        }

        // make a looping timeline for the company images
        var items = gsap.utils.toArray('.company-item');
        if (items.length) {
            var marquee = horizontalLoop(items, {
                repeat: -1,
                paddingRight: 30,
                speed: 1
            });

            // (Observer-based scroll speed control removed)
        }
    })();
    </script>
</section>