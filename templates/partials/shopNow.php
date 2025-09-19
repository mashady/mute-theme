<section class="section-container shop-now-section">

    <?php
        get_template_part(
        'templates/partials/sectionHeader',
        null,
        [
            'title'     => 'Everything You Need to Improve Your Space
Available Here',
            'paragraph' => 'From foam panels to soundproof doors and booths, we provide all the products you need to create a professional, noise-free environment. Shop our full range and build your perfect space today.'
        ]
        );
    ?>

    <div class="flex flex-col md:flex-row gap-5 w-full">
        <div class="card flex flex-col flex-1 h-[400px] rounded-[24px] text-white p-6 min-h-[256px] relative  bg-cover bg-center"
            data-title="Transform Your Room’s Sound"
            data-description="Shop premium acoustic panels & treatments to sharpen audio clarity and warmth—fast shipping."
            data-link="/shop/acoustic-products/"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shop1.png');">

            <div class="overlay absolute inset-0 bg-black/40 rounded-[24px]"></div>

            <div class="card-content ">

                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    See our projects
                </p>
                <div class="w-full relative z-10 mt-auto">
                    <p class="card-title ">
                        Shop Acoustic Products
                    </p>
                    <p class="card-description ">
                        Enhance sound clarity and balance inside your room
                    </p>
                </div>
            </div>



        </div>

        <div class="card flex flex-col  flex-1 h-[400px] rounded-[24px] text-white p-6 min-h-[256px] relative  bg-cover bg-center"
            data-title="Silence, Engineered"
            data-description="Create distraction-free spaces with proven isolation systems — quieter rooms, happier teams."
            data-link="/shop/isolation-products/"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shop2.png');">

            <div class="overlay absolute inset-0 bg-black/40 rounded-[24px]"></div>

            <div class="card-content ">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    See our projects
                </p>
                <div class="w-full relative z-10 mt-auto">
                        <h2 class="card-title">
                            Shop Isolation Products
                        </h2>
                        <p class="card-description">
                            Block unwanted noise and build a perfectly isolated space.
                        </p>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".shop-now-section",
            start: "20% 80%",
        },
    });

    tl
        .fromTo(".shop-now-section .section-header", {
            opacity: 0,
            y: 12
        }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power3.out",
        })

    // Animate cards as part of the main timeline with a stagger so they run in sync
    tl.fromTo('.shop-now-section .card', {
        opacity: 0,
        y: 12
    }, {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: 'power3.out',
        stagger: 0.12
    });
})
</script>