<section class="p-4 mb-[219px]">

    <?php
        get_template_part(
        'templates/partials/sectionHeader',
        null,
        [
            'title'     => 'Explore Our Service Offerings',
            'paragraph' => 'Whether you’re building a new space or upgrading an existing one, we provide end-to-end solutions tailored to your needs.'
        ]
        );
    ?>

    <div class="flex flex-col md:flex-row gap-5 w-full min-h-[350px]">

        <div
            class="card flex flex-col flex-1 h-[400px] rounded-[24px] text-white p-6 bg-[#576C61] min-h-[256px] relative overflow-hidden">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    Book a Consultation
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#34413A] backdrop-blur-[20px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Consultation & Design
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    We analyze your space and create tailored acoustic and isolation plans to match your exact needs.
                </p>
            </div>

            <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Consultation & Design
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Book
                    now</button>
            </div>
        </div>

        <div
            class="card flex flex-col justify-between flex-1 h-[400px] rounded-[24px] text-white p-6 bg-[#46564E] min-h-[256px] relative overflow-hidden">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-sm">
                    Get Support
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#4B5D53] backdrop-blur-[20px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full flex flex-col gap-3 relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Support & Maintenance
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Ongoing maintenance and upgrades to keep your acoustic and isolation solutions performing at their
                    best.
                </p>
            </div>

            <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Support & Maintenance
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Get
                    support</button>
            </div>
        </div>

        <div
            class="card flex flex-col flex-1 h-[400px] rounded-[24px] text-white p-6 bg-[#34413A] min-h-[256px] relative overflow-hidden">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-sm">
                    Request Installation
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#4B5D53] backdrop-blur-[20px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full flex flex-col gap-3 relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Installation & Build
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Professional installation of panels, booths, and soundproofing systems for studios, offices, and
                    factories.
                </p>
            </div>

            <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Installation & Build
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Learn
                    more</button>
            </div>
        </div>

    </div>
</section>