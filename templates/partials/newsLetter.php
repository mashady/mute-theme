<div class=" p-1 mb-16">
    <div class="min-h-[400px] flex flex-col md:flex-row bg-black rounded-xl overflow-hidden shadow-lg">
        <div class="md:w-1/3 flex items-center justify-center p-6 bg-[#282828] text-white">
            <img src="<?php echo esc_url( get_theme_media_url('images/logo.png') ); ?>" alt="Logo"
                class="w-32 h-32 md:w-full md:h-auto max-w-[200px]" />
        </div>


        <div class="md:w-2/3 p-6 sm:p-8 flex flex-col justify-center text-white">
            <div class="flex gap-2 mb-4">
                <button class="bg-[#5B6F68] text-white text-xs px-3 py-1 rounded-full">Subscribe</button>
                <button class="bg-[#4D4D4D] text-white text-xs px-3 py-1 rounded-full">Newsletter</button>
            </div>
            <div class="self-stretch justify-start text-white text-3xl font-normal font-poppins leading-10">Stay in Tune
                with the Latest Acoustic Innovations</div>
            <div class="mb-6 self-stretch justify-start text-white text-xl font-light font-inter">Subscribe for
                insights,
                case studies, and tips from the world of professional sound isolation.</div>
            <div class="relative w-full max-w-md">
                <input type="email" placeholder="Enter your email address..."
                    class=" border-none w-full h-[50px] p-5 pr-12 rounded-full bg-[#3C3C3C] text-white placeholder-gray-400 focus:outline-none " />

                <!-- Button inside input -->
                <button
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#5B6F68] w-10 h-10 rounded-full flex items-center justify-center shadow-md">
                    <img src="<?php echo esc_url( get_theme_media_url('images/arrow-up.svg') ); ?>" alt="Previous"
                        class="w-5 h-5">
                </button>
            </div>

        </div>
    </div>
</div>