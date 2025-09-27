<section class=" mb-[219px] section-container">
    <?php
        get_template_part(
        'templates/partials/sectionHeader',
        null,
        [
            'title'     => 'Our Projects, Your Proof of Silence',
            'paragraph' => 'From recording studios to factories, we’ve delivered tailored sound isolation solutions across Egypt and beyond. Each project is a testament to our precision, creativity, and commitment to acoustic excellence.'
        ]
        );
    ?>
    <div class="relative w-full  overflow-hidden rounded-3xl">
        <div class="absolute top-6 left-6 right-6 z-20 flex items-center justify-between">
            <div class="flex gap-3">
                <a href="/" class="px-4 py-2.5 text-white text-base font-semibold">
                    <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.99765 0.933785C7.63782 1.9566 7.70939 2.02966 9.57021 6.04786L11.5742 10.1391H18.588H25.6019L27.6058 6.04786C29.6098 1.73743 29.5382 1.15296 26.8186 0.349319C25.4587 -0.0890303 25.0293 0.276261 24.0273 2.76024L22.8822 5.75563H18.588H14.3654L13.1487 2.8333C11.8605 -0.308205 11.1448 -0.673496 8.99765 0.933785Z"
                            fill="#F7F8F7" />
                        <path
                            d="M0.551782 8.75114C-0.450197 10.2123 -0.307057 10.5776 2.84202 14.2305L6.20581 18.1757H18.3727H30.6112L34.3328 14.3036L38.0545 10.4315L36.4083 8.75114L34.6907 7.14386L31.8279 10.4315L28.8935 13.7922H18.5158H8.06663L5.34697 10.5045C3.91557 8.67808 2.4126 7.21691 2.12632 7.21691C1.84004 7.21691 1.12434 7.9475 0.551782 8.75114Z"
                            fill="#F7F8F7" />
                        <path
                            d="M2.77037 25.6275C-0.235567 29.2073 -0.378707 29.5726 0.623273 30.7415C2.19781 32.568 2.62723 32.4219 5.5616 29.1343L8.13812 26.2119H18.7305H29.3228L31.9709 29.5726L34.619 32.8602L36.3367 31.2529L38.0544 29.6457L34.619 25.7736L31.2552 21.9745L18.5873 21.9015L5.99102 21.8284L2.77037 25.6275Z"
                            fill="#F7F8F7" />
                        <path
                            d="M9.57021 33.9562C7.70939 37.9744 7.63782 38.0475 8.99765 39.0703C11.1448 40.6776 11.8605 40.3123 13.1487 37.0977L14.3654 34.1754L18.8027 34.3946C23.0969 34.6137 23.3116 34.6868 24.0273 36.9516C24.4568 38.1936 25.0293 39.5086 25.3156 39.7278C25.6735 40.0931 28.25 39.1433 29.3235 38.2666C29.4667 38.1205 28.6794 36.221 27.5343 33.9562L25.6019 29.8649H18.588H11.5742L9.57021 33.9562Z"
                            fill="#F7F8F7" />
                    </svg>
                </a>
            </div>

            <div class="flex space-x-3">
                <button id="prevBtn" aria-label="Previous slide"
                    class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-white hover:bg-white/50 !rounded-full shadow-md">
                    <img src="<?php echo esc_url( get_theme_media_url('images/arrow-left.svg') ); ?>" alt="Previous"
                        class="w-5 h-5">
                </button>
                <button id="nextBtn" aria-label="Next slide"
                    class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-black hover:bg-black/50 !rounded-full shadow-md">
                    <img src="<?php echo esc_url( get_theme_media_url('images/right.svg') ); ?>" alt="Next"
                        class="w-5 h-5">
                </button>
            </div>
        </div>

        <div id="slider" class="relative w-full h-[450px] lg:h-[600px] flex ">
            <div class="slide min-w-full h-full relative flex items-end p-8"
                style="background-image: url('<?php echo esc_url( get_theme_media_url('images/1.png') ); ?>'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="relative z-10 max-w-2xl">
                    <h2 class="text-2xl font-bold text-white">2x factory in Giza</h2>
                    <p class="text-lg text-gray-200 mb-6">
                        Reducing industrial noise while boosting worker comfort and productivity.
                    </p>
                </div>
            </div>

            <div class="slide min-w-full h-full relative flex items-end p-8"
                style="background-image: url('<?php echo esc_url( get_theme_media_url('images/2.png') ); ?>'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="relative z-10 max-w-2xl">
                    <h2 class="text-2xl font-bold text-white mb-4">Industrial Excellence</h2>
                    <p class="text-lg text-gray-200 mb-6">
                        Advanced manufacturing solutions for modern industrial challenges.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>