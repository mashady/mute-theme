<section class="p-4 mb-[219px] section-container">

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

    <div class="grid grid-cols-1 gap-5 w-full min-h-[350px] md:grid-cols-2 lg:grid-cols-3">
        <div
            class="card flex flex-col  h-[25vh] md:h-[400px] rounded-[24px] text-white p-6 bg-[#576C61] min-h-[256px] relative " data-title="Start With a Free Consultation"
                data-description="See More Details"
                data-link="/services/consultation/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#34413A] text-sm">
                    Book a Consultation
                </p>

                <div class="w-full relative z-10 mt-auto">
                    <h2 class="card-title">
                        Consultation & Design
                    </h2>
                    <p class="card-description">
                        We analyze your space and create tailored acoustic and isolation plans to match your exact needs.
                    </p>
                </div>
            </div>


            <!-- <div class="expanded-content relative z-10 mt-4">
                <p class="text-sm text-gray-200">
                    Consultation & Design
                </p>
                <button style="line-height:40px" class="w-[150px] h-[40px] bg-white text-black rounded-lg mt-3">Book
                    now</button>
            </div> -->
        </div>

        <div
            class="card flex flex-col justify-between  h-[25vh] md:h-[400px] rounded-[24px] text-white p-6 bg-[#46564E] min-h-[256px] relative "
            data-title="Keep Systems Performing"
            data-description="Get More Details"
            data-link="/services/support/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-sm">
                    Get Support
                </p>

                <div class=" w-full flex flex-col gap-3 relative z-10 mt-auto">
                    <h2 class="card-title">
                        Support & Maintenance
                    </h2>
                    <p class="card-description">
                        Ongoing maintenance and upgrades to keep your acoustic and isolation solutions performing at their
                        best.
                    </p>
                </div>
            </div>



        </div>

        <div
            class="card flex flex-col  h-[25vh] md:h-[400px] rounded-[24px] text-white p-6 bg-[#34413A] min-h-[256px] md:col-span-2 lg:col-span-1" card-title="Installation & Build"
            card-description="Get More Details"
            card-link="/services/installation/">
            <div class="overlay absolute inset-0 rounded-[24px]"></div>

            <div class="card-content flex flex-row justify-between items-center gap-2 w-full relative z-10">
                <p class="m-0 flex px-3 py-1 justify-center items-center gap-2 rounded-[12px] bg-[#4B5D53] text-sm">
                    Request Installation
                </p>

                <div class=" w-full flex flex-col gap-3 relative z-10 mt-auto">
                    <h2 class="card-title">
                        Installation & Build
                    </h2>
                    <p class="card-description">
                        Professional installation of panels, booths, and soundproofing systems for studios, offices, and
                        factories.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>