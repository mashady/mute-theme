<section class="p-4 mb-[219px] sound-experts-section">
    <?php
        get_template_part(
            'templates/partials/sectionHeader',
            null,
            [
                'title'     => 'The Sound Isolation Experts',
                'paragraph' => 'With decades of expertise, we craft spaces where sound is controlled, privacy is protected, and focus is effortless. Whether it’s a corporate office, recording studio, or luxury home, we deliver silence that speaks volumes.'
            ]
        );
    ?>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <!-- Main Card -->
        <div class="relative flex flex-col justify-end items-start flex-1 text-white rounded-[24px] p-6 min-h-[400px] sm:min-h-[500px] lg:min-h-[536px] bg-cover bg-center bg-no-repeat main-card"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fom.png');">
            <div class="absolute inset-0 rounded-[24px] bg-gradient-to-b from-transparent via-black/60 to-[#0C0101]">
            </div>
            <div class="relative z-10">
                <h1
                    class="text-white font-[Poppins] text-[22px] sm:text-[28px] md:text-[32px] font-normal leading-[130%] mb-2">
                    We focus on restoring calm to your environment
                </h1>
                <p class="text-white font-inter text-[14px] sm:text-[15px] md:text-[16px] font-light leading-[140%]">
                    Unwanted sound ruins concentration, damages productivity, and affects well-being. Whether it’s a
                    creative space, a quiet home, or a professional setting, silence is essential.
                </p>
            </div>
        </div>

        <!-- Small Cards + Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Small Card 1 -->
            <div
                class="flex flex-col justify-between items-end rounded-[24px] text-white p-6 bg-[#4B5D53] min-h-[220px] sm:min-h-[256px]">
                <div class="flex flex-row justify-between items-center gap-2 w-full">
                    <p class="px-2.5 py-1 rounded-[12px] bg-[#34413A] text-sm sm:text-base">see our projects</p>
                    <p class="p-1.5 rounded-full bg-[#34413A] backdrop-blur-[20px]">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg"
                            alt="Arrow Icon" width="20" height="20" />
                    </p>
                </div>
                <div class="flex flex-col gap-[5px]">
                    <div class="text-white text-xl sm:text-2xl md:text-3xl font-normal font-['Poppins'] leading-snug">
                        We deliver projects that create perfect silence
                    </div>
                    <div
                        class="text-white text-base sm:text-lg md:text-xl font-normal font-['AR_One_Sans'] leading-normal">
                        With years of isolation expertise we create perfect silence.
                    </div>
                </div>
            </div>

            <!-- Small Card 2 -->
            <div
                class="flex flex-col justify-between items-end rounded-[24px] text-white p-6 bg-[#34413A] min-h-[220px] sm:min-h-[256px]">
                <div class="flex flex-row justify-between items-center gap-2 w-full">
                    <p class="px-2.5 py-1 rounded-[12px] bg-[#4B5D53] text-sm sm:text-base">see our projects</p>
                    <p class="p-1.5 rounded-full bg-[#4B5D53] backdrop-blur-[20px]">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg"
                            alt="Arrow Icon" width="20" height="20" />
                    </p>
                </div>
                <div class="flex flex-col gap-[5px]">
                    <div class="text-white text-xl sm:text-2xl md:text-3xl font-normal font-['Poppins'] leading-snug">
                        We deliver projects that create perfect silence
                    </div>
                    <div
                        class="text-white text-base sm:text-lg md:text-xl font-normal font-['AR_One_Sans'] leading-normal">
                        With years of isolation expertise we create perfect silence.
                    </div>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="col-span-full flex flex-col sm:flex-row gap-3 w-full">
                <div class="flex px-6 py-3 items-center gap-3 flex-1 bg-[#eee] rounded-[8px] min-h-[80px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Vector.svg" alt="Assert Icon"
                        width="24" height="24" />
                    <div>
                        <div class="text-[#434343] font-inter text-lg sm:text-xl font-normal">500+</div>
                        <div class="text-[#434343] font-inter text-base sm:text-lg font-normal">Customers</div>
                    </div>
                </div>
                <div class="flex px-6 py-3 items-center gap-3 flex-1 bg-[#eee] rounded-[8px] min-h-[80px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pajamas_work.svg"
                        alt="Assert Icon" width="24" height="24" />
                    <div>
                        <div class="text-[#434343] font-inter text-lg sm:text-xl font-normal">208+</div>
                        <div class="text-[#434343] font-inter text-base sm:text-lg font-normal">Projects</div>
                    </div>
                </div>
                <div class="flex px-6 py-3 items-center gap-3 flex-1 bg-[#eee] rounded-[8px] min-h-[80px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pajamas_retry.svg"
                        alt="Assert Icon" width="24" height="24" />
                    <div>
                        <div class="text-[#434343] font-inter text-lg sm:text-xl font-normal">320+</div>
                        <div class="text-[#434343] font-inter text-base sm:text-lg font-normal">Buy again</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>