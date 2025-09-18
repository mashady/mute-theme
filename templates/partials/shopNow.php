<section class="p-4 mb-[219px]">

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

    <div class="flex flex-col md:flex-row gap-5 w-full h-[350px]">

        <!-- Card 1 -->
        <div class="card flex flex-col flex-1 h-[400px] rounded-[24px] text-white p-6 min-h-[256px] relative overflow-hidden bg-cover bg-center"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shop1.png');">

            <!-- Overlay with hover effect -->
            <div
                class="overlay absolute inset-0 bg-black/40 rounded-[24px] transition-colors duration-500 hover:bg-[#34413A]">
            </div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    See our projects
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#34413A] backdrop-blur-[20px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Shop Acoustic Products
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Enhance sound clarity and balance inside your room
                </p>
            </div>

            <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Shop Acoustic Products
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Shop
                    now</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card flex flex-col justify-between flex-1 h-[400px] rounded-[24px] text-white p-6 min-h-[256px] relative overflow-hidden bg-cover bg-center"
            style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shop2.png');">

            <!-- Overlay with hover effect -->
            <div
                class="overlay absolute inset-0 bg-black/40 rounded-[24px] transition-colors duration-500 hover:bg-[#34413A]">
            </div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    See our projects
                </p>
                <p class="expand-icon flex p-1.5 items-center rounded-full bg-[#34413A] backdrop-blur-[20px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-up.svg" alt="Arrow Icon"
                        width="20" height="20" />
                </p>
            </div>

            <div class="card-content w-full flex flex-col gap-3 relative z-10 mt-auto">
                <h2 class="text-white font-[Poppins] text-[24px] font-normal leading-[120%]">
                    Shop Isolation Products
                </h2>
                <p class="text-white font-inter text-[16px] font-light leading-[120%]">
                    Block unwanted noise and build a perfectly isolated space.
                </p>
            </div>

            <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Shop Isolation Products
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Shop
                    now</button>
            </div>
        </div>

    </div>
</section>