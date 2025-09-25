<section class=" sound-experts-section section-container">


    <?php
    get_template_part(
        'templates/partials/sectionHeader',
        null,
        [
            'title' => 'The Sound Isolation Experts',
            'paragraph' => 'With decades of expertise, we craft spaces where sound is controlled, privacy is protected, and focus is effortless. Whether it’s a corporate office, recording studio, or luxury home, we deliver silence that speaks volumes.'
        ]
    );
    ?>

    <div class="flex flex-col lg:flex-row gap-4 min-h-[536px] ">
        <div class="relative  flex flex-col justify-end items-start text-white rounded-[24px] p-6 min-h-[450px] lg:max-w-[600px] bg-cover bg-center bg-no-repeat main-card opacity-0 scale-95"
            style="background-image: url('<?php echo esc_url( get_theme_media_url('images/fom.png') ); ?>');">
            <div class="absolute inset-0 rounded-[24px] bg-gradient-to-b from-transparent via-black/60 to-[#0C0101]">
            </div>
            <div class="relative z-10">
                <h4 class="text-white text-3xl  font-normal  mb-2">
                    We focus on restoring calm to your environment
                </h4>
                <p class="text-white font-inter text-lg font-light ">
                    Unwanted sound ruins concentration, damages productivity, and affects well-being. Whether it’s a
                    creative space, a quiet home, or a professional setting, silence is essential.
                </p>
            </div>
        </div>

        <div class=" flex flex-col gap-4">
            <div class="flex flex-col md:flex-row gap-4 w-full  h-full">
                <div class="card lg:w-1/2 flex flex-col  justify-between items-start rounded-[24px] text-white p-6 bg-[#4B5D53] min-h-[256px] small-card opacity-0 "
                    data-title="Projects That Make Spaces Quieter"
                    data-description="From studios to offices — case-proven acoustic projects that improve audio and focus."
                    data-link="/shop/projects/">
                    <div class="overlay absolute inset-0 bg-black/40 rounded-[24px]"></div>
                    <div class="card-content flex flex-col justify-between items-center gap-2 w-full">
                        <p class="flex px-2.5 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A]"> see
                            our
                            projects</p>

                        <div class="w-full relative z-10 mt-auto">
                            <p class="card-title">
                                We deliver projects that create perfect silence
                            </p>
                            <p class="card-description">
                                With years of isolation expertise we create perfect silence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card lg:w-1/2 flex flex-col justify-between items-start rounded-[24px] text-white p-6 bg-[#34413A] min-h-[256px] small-card opacity-0 "
                    data-title="Products Engineered for Sound"
                    data-description="In-house designed materials crafted for superior acoustic performance and durability"
                    data-link="/shop/materials/">
                    <div class="overlay absolute inset-0 bg-black/40 rounded-[24px]"></div>

                    <div class="card-content flex flex-col justify-between   w-full">
                        <p class="flex px-2.5 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53]"> see
                            our
                            projects </p>
                        <div class="w-full relative z-10 mt-auto">
                            <div class="card-title">
                                Materials & Products Engineered for Perfection
                            </div>
                            <p class="card-description">
                                We design and develop products in house for unmatched quality
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-2">
                <div class="max-md:hidden flex flex-row  gap-3 w-full stats-row opacity-0 ">
                    <div class="flex px-6 py-3 items-center gap-3   bg-[#eee] rounded-2xl min-h-[90px]">
                        <img src="<?php echo esc_url( get_theme_media_url('images/Vector.svg') ); ?>"
                            alt="Assert Icon" width="24" height="24" />
                        <div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">500+</div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">Customers
                            </div>
                        </div>
                    </div>
                    <div class="flex px-6 py-3 items-center gap-3   bg-[#eee] rounded-2xl min-h-[90px]">
                        <img src="<?php echo esc_url( get_theme_media_url('images/pajamas_work.svg') ); ?>"
                            alt="Assert Icon" width="24" height="24" />
                        <div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">208+</div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">Projects</div>
                        </div>
                    </div>
                    <div class="flex px-6 py-3 items-center gap-3   bg-[#eee] rounded-2xl min-h-[90px]">
                        <img src="<?php echo esc_url( get_theme_media_url('images/pajamas_retry.svg') ); ?>"
                            alt="Assert Icon" width="24" height="24" />
                        <div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">320+</div>
                            <div class="text-[#434343] font-inter text-[20px] font-normal leading-normal">Buy again
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    if (typeof gsap === "undefined") return;

    if (!gsap.__registeredScrollTrigger && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        gsap.__registeredScrollTrigger = true;
    }

    ScrollTrigger.matchMedia({
        "(min-width: 768px)": function() {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".sound-experts-section",
                    start: "top 80%",
                },
            });

            tl.fromTo(".sound-experts-section .section-header", {
                    opacity: 0,
                    y: 12
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    ease: "power3.out",
                })
                .to(
                    ".sound-experts-section .main-card", {
                        opacity: 1,
                        scale: 1,
                        duration: 0.8,
                        ease: "power3.out",
                    },
                    "-=0.3"
                )
                .to(
                    ".small-card", {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        stagger: 0.2,
                        ease: "power3.out",
                    },
                    "-=0.4"
                )
                .to(
                    ".stats-row", {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        ease: "power3.out",
                    },
                    "-=0.6"
                );
        },

        "(max-width: 767px)": function() {
            gsap.fromTo(".sound-experts-section .section-header", {
                opacity: 0,
                y: 12
            }, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".sound-experts-section",
                    start: "top 90%",
                    toggleActions: "play none none none"
                }
            });

            gsap.fromTo('.sound-experts-section .small-card', {
                opacity: 0,
                y: 12
            }, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: 'power3.out',
                stagger: 0.12,
                scrollTrigger: {
                    trigger: '.sound-experts-section',
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                }
            });

            gsap.fromTo('.sound-experts-section .stats-row', {
                opacity: 0,
                y: 12
            }, {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '.sound-experts-section',
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                }
            });
        }
    });

});
</script>