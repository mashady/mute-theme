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

        <div class="card flex flex-col  h-[400px] rounded-[24px] text-white p-6 bg-[#576C61] min-h-[256px] relative overflow-hidden"
            data-title="Start With a Free Consultation"
            data-description="Custom acoustic and isolation strategies designed around your space — expert planning that reduces noise and saves time."
            data-link="/shop/consultation/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-xs lg:text-sm">
                    Book a Consultation
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#34413A] backdrop-blur-[20px]">
                    <img src="<?php echo esc_url( get_theme_media_url('images/arrow-up.svg') ); ?>" alt="Arrow Icon"
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


        </div>

        <div class="card flex flex-col justify-between  h-[400px] rounded-[24px] text-white p-6 bg-[#46564E] min-h-[256px] relative overflow-hidden"
            data-title="Keep Systems Performing"
            data-description="Scheduled maintenance and upgrades to ensure your acoustic investment keeps delivering top performance."
            data-link="/shop/support/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-xs lg:text-sm">
                    Get Support
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#4B5D53] backdrop-blur-[20px]">
                    <img src="<?php echo esc_url( get_theme_media_url('images/arrow-up.svg') ); ?>" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full flex flex-col gap-2 relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Support & Maintenance
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Ongoing maintenance and upgrades to keep your acoustic and isolation solutions performing at their
                    best.
                </p>
            </div>


        </div>

        <div class="card flex flex-col  h-[400px] rounded-[24px] text-white p-6 bg-[#34413A] min-h-[256px] relative overflow-hidden"
            data-title="Professional Installation & Build"
            data-description="End-to-end installation by certified teams — from panels to full-room buildouts, we handle every detail."
            data-link="/shop/installation/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-xs lg:text-sm">
                    Request Installation
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#4B5D53] backdrop-blur-[20px]">
                    <img src="<?php echo esc_url( get_theme_media_url('images/arrow-up.svg') ); ?>" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full flex flex-col gap-2 relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Installation & Build
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Professional installation of panels, booths, and soundproofing systems for studios, offices, and
                    factories.
                </p>
            </div>

        </div>

    </div>
</section>