<section
    class=" relative flex flex-col justify-center items-start min-h-[70vh] lg:min-h-[90vh] bg-cover bg-center overflow-hidden "
    id="home-hero-container">
    <!-- poster="<?php echo esc_url( get_theme_media_url('images/Hero.png') ); ?>" -->
    <!-- Background video: autoplay, muted, loop, playsinline -->
    <?php $hero_img = esc_url( get_theme_media_url('images/Hero.png') ); ?>
    <link rel="preload" as="image" href="<?php echo $hero_img; ?>" />
    <video class="absolute inset-0 w-full h-full object-cover -z-10" autoplay muted loop playsinline poster="<?php echo $hero_img; ?>">
        <source src="<?php echo esc_url( get_theme_media_url('videos/heroVid.mp4') ); ?>" type="video/mp4">
        <!-- Fallback image for browsers that don't support video -->
        Your browser does not support the video tag.
    </video>

    <div class="relative z-10 w-full h-full p-6 flex flex-row items-end  justify-between">
        <div class="max-w-3xl  flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <h1 class="text-white font-medium uppercase font-inter
           text-3xl sm:text-4xl md:text-5xl lg:text-5xl m-0" id="hero-title">
                    Silence is a Form of Luxury
                </h1>
                <p class="text-white font-light text-lg lg:text-2xl font-poppins" id="hero-subtitle">
                    Experience premium sound isolation solutions designed to transform your spaces into havens of calm,
                    focus, and productivity.
                </p>

            </div>
        </div>
        <div class="w-96 h-40 p-4 bg-white rounded-3xl outline outline-1 outline-offset-[-1px] outline-white/0 inline-flex justify-between items-start overflow-hidden max-lg:!hidden"
            id="book-appointment-box">
            <div class="inline-flex flex-col justify-end items-end h-full">
                <div
                    class="w-72 justify-start text-Colors-Green-Green-700 text-3xl font-medium font-['Poppins'] leading-10">
                    Have a question?</div>
                <div
                    class="w-72 justify-start text-Colors-Green-Green-700 text-xl font-light font-['Poppins'] leading-normal ">
                    Book Appointment Now</div>
            </div>
            <div class="p-1.5 bg-Primary-Green-700 rounded-[40px] backdrop-blur-[20px] flex justify-start items-center">
                <div class="w-11 h-11  rounded-[100px] flex justify-center items-center gap-3">
                    <svg width="50" height="50" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4261 10.9896L23.0104 10.9896L23.0104 19.5739" stroke="white" stroke-width="2"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9896 23.0103L22.8902 11.1097" stroke="white" stroke-width="2"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="px-2">
    <div class="w-full h-40 p-4  bg-[#001C16] text-white rounded-3xl outline outline-1 outline-offset-[-1px] outline-white/0 flex-col justify-between items-end overflow-hidden lg:!hidden"
        id="mobile-book-appointment-box">
        <div class="p-1.5 bg-Primary-Green-700 rounded-[40px] backdrop-blur-[20px] flex justify-start items-center">
            <div class="w-11 h-11  rounded-[100px] flex justify-center items-center gap-3">
                <svg width="50" height="50" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4261 10.9896L23.0104 10.9896L23.0104 19.5739" stroke="white" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9896 23.0103L22.8902 11.1097" stroke="white" stroke-width="2" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="inline-flex flex-col justify-end items-end h-full">
            <div class="w-full justify-start  text-3xl font-medium font-['Poppins'] leading-10">
                Have a question?</div>
        </div>
    </div>
    <div>
    </div>
    <div class="flex flex-col justify-center bg-green-950 hidden" id="box-overlay-template">
        <!-- Close X button -->
        <button
            class="lg:hidden absolute top-5 right-5 z-10 w-10 h-10 font-xl p-0 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/20 transition-colors duration-200"
            id="overlay-close-btn" type="button">
            x
        </button>
        <div
            class="w-full lg:w-[80%] mx-auto max-lg:h-[80vh] p-8 max-w-[1200px] flex flex-col-reverse  lg:flex-row justify-between items-center max-lg:gap-10 max-lg:justify-start">
            <div class="h-fit lg:h-full flex flex-col justify-end  gap-48">

                <div class="w-48 inline-flex justify-between items-center">
                    <a href="#" class="inline-flex">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.9999 3.43933H19.9999C18.2318 3.43933 16.5361 4.14171 15.2859 5.39195C14.0356 6.64219 13.3333 8.33789 13.3333 10.106V14.106H9.33325V19.4393H13.3333V30.106H18.6666V19.4393H22.6666L23.9999 14.106H18.6666V10.106C18.6666 9.75238 18.8071 9.41324 19.0571 9.16319C19.3072 8.91314 19.6463 8.77266 19.9999 8.77266H23.9999V3.43933Z"
                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="inline-flex">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.3335 3.43933H10.0002C6.31826 3.43933 3.3335 6.4241 3.3335 10.106V23.4393C3.3335 27.1212 6.31826 30.106 10.0002 30.106H23.3335C27.0154 30.106 30.0002 27.1212 30.0002 23.4393V10.106C30.0002 6.4241 27.0154 3.43933 23.3335 3.43933Z"
                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M22.0001 15.9327C22.1646 17.0424 21.9751 18.1757 21.4584 19.1714C20.9418 20.1672 20.1243 20.9746 19.1223 21.479C18.1202 21.9833 16.9847 22.1589 15.8771 21.9807C14.7696 21.8024 13.7464 21.2795 12.9532 20.4863C12.16 19.6931 11.6371 18.6699 11.4589 17.5624C11.2806 16.4548 11.4562 15.3193 11.9605 14.3172C12.4649 13.3152 13.2723 12.4977 14.2681 11.9811C15.2638 11.4644 16.3971 11.2749 17.5068 11.4394C18.6387 11.6073 19.6866 12.1347 20.4957 12.9438C21.3048 13.7529 21.8323 14.8008 22.0001 15.9327Z"
                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24 9.43933H24.0133" stroke="#F7F8F7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="#" class="inline-flex">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.1145 29.2727L19.1179 14.7022L19.135 14.7159L28.1484 4.27271H25.1363L17.7938 12.7727L11.9629 4.27271H4.06347L13.3962 17.8761L13.3951 17.875L3.552 29.2727H6.56403L14.7272 19.8159L21.215 29.2727H29.1145ZM10.7695 6.54542L24.7953 27H22.4085L8.37128 6.54542H10.7695Z"
                                fill="#F7F8F7" />
                        </svg>
                    </a>

                    <a href="#" class="inline-flex">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.3333 11.4393C23.455 11.4393 25.4898 12.2822 26.9901 13.7825C28.4904 15.2828 29.3333 17.3176 29.3333 19.4393V28.7727H23.9999V19.4393C23.9999 18.7321 23.719 18.0538 23.2189 17.5537C22.7188 17.0536 22.0405 16.7727 21.3333 16.7727C20.626 16.7727 19.9477 17.0536 19.4476 17.5537C18.9475 18.0538 18.6666 18.7321 18.6666 19.4393V28.7727H13.3333V19.4393C13.3333 17.3176 14.1761 15.2828 15.6764 13.7825C17.1767 12.2822 19.2115 11.4393 21.3333 11.4393Z"
                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.00008 12.7727H2.66675V28.7727H8.00008V12.7727Z" stroke="#F7F8F7"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M5.33341 8.77266C6.80617 8.77266 8.00008 7.57876 8.00008 6.106C8.00008 4.63324 6.80617 3.43933 5.33341 3.43933C3.86066 3.43933 2.66675 4.63324 2.66675 6.106C2.66675 7.57876 3.86066 8.77266 5.33341 8.77266Z"
                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                </div>
            </div>
            <div class="w-full lg:w-[523px] inline-flex flex-col justify-start items-start gap-16">
                <div class="flex flex-col justify-center items-start">
                    <div class=" flex flex-col justify-start items-start gap-7 overflow-hidden max-lg:hidden">
                        <div
                            class="justify-start text-Primary-Green-50 text-2xl font-normal font-['Poppins'] leading-7">
                            Our
                            Contacts information</div>
                        <div class=" flex flex-col justify-center items-start gap-7">
                            <div class=" flex flex-col justify-start items-start gap-2.5">
                                <div class=" h-7 inline-flex justify-start items-center gap-2.5">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2460_2000)">
                                            <path
                                                d="M15.0499 5.88635C16.0267 6.07692 16.9243 6.55461 17.628 7.25829C18.3317 7.96197 18.8094 8.85962 18.9999 9.83635M15.0499 1.88635C17.0792 2.11179 18.9715 3.02053 20.4162 4.46336C21.8608 5.90619 22.7719 7.79736 22.9999 9.82635M21.9999 17.8064V20.8064C22.0011 21.0849 21.944 21.3605 21.8324 21.6157C21.7209 21.8709 21.5572 22.0999 21.352 22.2882C21.1468 22.4765 20.9045 22.6198 20.6407 22.7091C20.3769 22.7983 20.0973 22.8314 19.8199 22.8064C16.7428 22.472 13.7869 21.4205 11.1899 19.7364C8.77376 18.201 6.72527 16.1525 5.18993 13.7364C3.49991 11.1276 2.44818 8.15735 2.11993 5.06635C2.09494 4.78982 2.12781 4.51111 2.21643 4.24798C2.30506 3.98484 2.4475 3.74304 2.6347 3.53797C2.82189 3.33291 3.04974 3.16906 3.30372 3.05687C3.55771 2.94469 3.83227 2.88661 4.10993 2.88635H7.10993C7.59524 2.88158 8.06572 3.05343 8.43369 3.36989C8.80166 3.68634 9.04201 4.1258 9.10993 4.60635C9.23656 5.56642 9.47138 6.50908 9.80993 7.41635C9.94448 7.77428 9.9736 8.16327 9.89384 8.53723C9.81408 8.9112 9.6288 9.25446 9.35993 9.52635L8.08993 10.7964C9.51349 13.2999 11.5864 15.3728 14.0899 16.7964L15.3599 15.5264C15.6318 15.2575 15.9751 15.0722 16.3491 14.9924C16.723 14.9127 17.112 14.9418 17.4699 15.0764C18.3772 15.4149 19.3199 15.6497 20.2799 15.7764C20.7657 15.8449 21.2093 16.0896 21.5265 16.4638C21.8436 16.8381 22.0121 17.3159 21.9999 17.8064Z"
                                                stroke="#F7F8F7" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2460_2000">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(0 0.886353)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div
                                        class="justify-start text-Primary-Green-50 text-2xl font-normal font-['Poppins'] leading-7">
                                        Phone</div>
                                </div>
                                <div
                                    class=" justify-start text-left text-Primary-Green-50 text-base font-light  leading-tight">
                                    +20 112 605 2626</div>
                            </div>
                            <div class=" flex flex-col justify-start items-start gap-2.5">
                                <div class="inline-flex justify-start items-center gap-2.5">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 4.88635H20C21.1 4.88635 22 5.78635 22 6.88635V18.8864C22 19.9864 21.1 20.8864 20 20.8864H4C2.9 20.8864 2 19.9864 2 18.8864V6.88635C2 5.78635 2.9 4.88635 4 4.88635Z"
                                            stroke="#F7F8F7" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22 6.88635L12 13.8864L2 6.88635" stroke="#F7F8F7" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="justify-start text-Primary-Green-50 text-2xl font-normal font-['Poppins'] leading-7">
                                        Email</div>
                                </div>
                                <div
                                    class=" justify-start text-left text-Primary-Green-50 text-base font-light  leading-tight">
                                    sales@sound-mute.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-col justify-start items-start gap-2.5 w-full">
                    <a class="w-full px-6 py-3 bg-white rounded-3xl inline-flex justify-between items-center gap-2 overflow-hidden"
                        href="/contact-us/">
                        <!-- <div class=" flex text-Primary-Green-700 text-xl font-normal gap-2"> -->
                        

                        <div
                            class="flex gap-2 justify-start text-Primary-Green-700 text-xl font-normal font-['Poppins'] leading-7">
                            <svg width="49" height="37" viewBox="0 0 49 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.145 2.38318C29.1164 2.32855 30.0917 2.35865 31.0581 2.47498L31.0669 2.47595L31.0757 2.47791C32.8514 2.81919 34.2822 4.10587 34.8169 5.81091L34.9126 6.15759L34.9146 6.16638L34.9155 6.17517C35.0716 7.1607 35.1165 8.16234 35.0474 9.15857V12.597C37.3375 12.5952 39.6398 12.5695 41.9351 12.598H41.9341C43.8192 12.5889 45.4659 13.8466 45.9624 15.6459L46.0073 15.8217L46.0103 15.8334H46.0093C46.1206 16.4568 46.1586 17.0893 46.1245 17.7211V19.4681C46.1245 21.0473 46.1506 22.6454 46.1245 24.2328C46.0883 26.3567 44.8146 28.4624 42.481 28.6703L42.2095 28.6947V28.6801C41.6984 28.7012 41.1874 28.701 40.6763 28.681C40.7301 28.9401 40.8217 29.2556 40.937 29.6097C41.1006 30.112 41.2909 30.6361 41.4731 31.184C41.6506 31.7172 41.812 32.2485 41.8931 32.7025C41.9336 32.9296 41.9564 33.1466 41.9478 33.3402C41.9392 33.531 41.8991 33.7219 41.7954 33.8773V33.8783C41.5782 34.2022 41.2888 34.3657 40.9663 34.4008C40.6579 34.4342 40.3416 34.348 40.0552 34.223C39.4868 33.975 38.9243 33.5233 38.606 33.2924V33.2914L36.52 31.7689V31.7699C35.0858 30.7901 33.6884 29.7101 32.311 28.6693H27.5317C26.3915 28.6719 25.108 28.7497 24.0269 28.4369C23.4774 28.2779 22.9673 28.016 22.5425 27.5863C22.1174 27.1561 21.7908 26.5707 21.5874 25.7875L21.5845 25.7787L21.5825 25.7689C21.4321 24.9299 21.3861 24.0768 21.4448 23.2269V20.8539C21.2304 20.853 21.0525 20.8518 20.9194 20.8519C20.7261 20.8521 20.5988 20.8592 20.4839 20.8832C20.2572 20.9306 20.0443 21.0492 19.4858 21.4213C19.1892 21.6186 18.8966 21.8193 18.604 22.0219L17.7212 22.6322L11.5239 26.9027C11.2501 27.0931 10.8646 27.4055 10.479 27.6302C10.1375 27.8293 9.73786 27.9972 9.32373 27.972L9.14502 27.9496C8.6861 27.8568 8.35908 27.6612 8.15674 27.3754C7.95743 27.0937 7.90369 26.7589 7.9165 26.4349C7.92938 26.1111 8.01021 25.7745 8.10205 25.4681C8.19154 25.1697 8.30431 24.8608 8.37646 24.6381L9.22217 22.0013V22.0004C9.34913 21.6058 9.48529 21.2391 9.59326 20.8656C8.88735 20.8957 8.18017 20.8964 7.47314 20.8617H7.46826C5.11141 20.6979 3.17227 18.6127 2.91846 16.3373L2.9165 16.3236V16.3099C2.87006 15.6759 2.85684 15.0399 2.87744 14.4037H2.87646V8.57556H2.87744C2.84113 7.87735 2.8674 7.17577 2.95752 6.48279L2.9585 6.46912H2.95947C3.3736 4.2231 5.25829 2.54214 7.5415 2.38318H28.145ZM40.3823 14.2992H40.3677L36.6616 14.3011H35.0571C35.0782 14.9734 35.0678 15.6457 35.021 16.3168L35.019 16.3344C34.7285 18.4121 33.2326 20.1192 31.2095 20.6859L31.2056 20.6869C30.6717 20.8272 29.993 20.8669 29.3296 20.8734C28.6785 20.8798 27.971 20.8529 27.4585 20.8529H23.1196V23.3929C23.1196 24.2141 23.0953 25.0065 23.312 25.6576C23.4176 25.9749 23.5787 26.249 23.8228 26.4691C24.063 26.6856 24.3973 26.8618 24.8706 26.9681C25.5698 27.0461 26.2746 27.0597 26.978 27.0121L26.9868 27.0111H31.2964C31.6774 26.9773 32.06 26.9755 32.4399 27.0052L32.8247 27.0463L32.8452 27.0492L32.8647 27.0551C32.907 27.0681 32.9503 27.091 32.9829 27.1088C33.0199 27.129 33.0626 27.1541 33.1089 27.183C33.202 27.2411 33.319 27.319 33.4497 27.4086C33.7114 27.5881 34.0383 27.8221 34.3677 28.0619C35.0262 28.5412 35.703 29.0496 35.8989 29.2035H35.8979C37.2407 30.2045 38.5849 31.2158 39.9761 32.1302C39.7515 31.3341 39.4245 30.3763 39.1851 29.6937L39.02 29.2689C38.9465 29.0787 38.8633 28.8551 38.7954 28.6449C38.7249 28.4267 38.6625 28.1982 38.6333 27.9945C38.6187 27.8925 38.611 27.7892 38.6177 27.6927C38.6242 27.5986 38.6454 27.4932 38.7017 27.3998L38.7026 27.3988C38.8088 27.2239 38.9778 27.1267 39.1538 27.0717C39.3274 27.0174 39.5294 26.9968 39.7378 26.9906C39.9481 26.9844 40.1829 26.9922 40.4243 27.0013C40.6683 27.0106 40.922 27.0216 41.1831 27.0228C42.2385 27.0278 43.3078 26.8733 43.9722 25.9359C44.5112 25.1737 44.4136 24.3965 44.4136 23.3763V17.7435C44.4136 16.9373 44.3871 16.1636 44.1274 15.5492C44.0002 15.2481 43.818 14.99 43.5571 14.7865C43.2965 14.5833 42.9448 14.4253 42.4634 14.3422C41.7725 14.2717 41.0763 14.2569 40.3823 14.2992ZM28.2075 4.13123H28.2065L7.83838 4.12537L7.57666 4.1283C6.2342 4.32083 5.52456 4.89206 5.1333 5.65173C4.7279 6.43901 4.64502 7.46367 4.64502 8.59607V14.4076C4.64242 15.509 4.712 16.5873 5.104 17.4379C5.48485 18.2641 6.17926 18.8951 7.49658 19.0941C7.92812 19.1592 8.59612 19.1321 9.271 19.1097C9.60133 19.0988 9.93015 19.0894 10.2173 19.0951C10.4983 19.1006 10.7657 19.1212 10.9614 19.1801C11.2958 19.2808 11.4857 19.512 11.561 19.7972C11.6309 20.0624 11.6008 20.3651 11.5405 20.6439C11.4791 20.9277 11.38 21.2172 11.2866 21.4681L11.0581 22.0804C10.6462 23.3707 10.197 24.6395 9.82178 25.9242C10.6572 25.3797 11.464 24.7864 12.2954 24.2074L12.2964 24.2064L18.355 20.0482L18.3569 20.0472C18.717 19.8042 18.9784 19.6216 19.1841 19.4916C19.3933 19.3594 19.5659 19.2677 19.7583 19.2113C19.9498 19.1552 20.1452 19.1385 20.3921 19.1332C20.6333 19.128 20.9581 19.1338 21.3911 19.1312H27.3384C27.5692 19.1312 27.8461 19.1366 28.1401 19.142C28.4354 19.1474 28.7504 19.1523 29.062 19.1517C29.6921 19.1506 30.2846 19.1255 30.6694 19.0394L30.9468 18.9681C31.5693 18.7878 32.0225 18.5103 32.356 18.1703C32.7381 17.7806 32.9774 17.2942 33.1255 16.7416C33.4264 15.6186 33.3373 14.2882 33.3364 13.0287V7.4906H33.3374C33.381 6.58923 33.0509 5.70947 32.4272 5.05603L32.2104 4.85876C31.6974 4.43357 31.1247 4.24439 30.5044 4.16443C29.7786 4.07088 29.023 4.12854 28.2075 4.13123Z"
                                fill="#34413A" stroke="#34413A" stroke-width="0.5" />
                            <path
                                d="M12.0758 12.6935C11.6408 12.7873 11.1901 12.638 10.8978 12.3029C10.6072 11.9696 10.5202 11.5025 10.6733 11.0876C10.8265 10.6709 11.1954 10.3723 11.6338 10.3046C12.0723 10.2386 12.5143 10.4157 12.784 10.7682C13.0346 11.098 13.0989 11.5338 12.9563 11.9227C12.8136 12.3133 12.4813 12.6032 12.0758 12.6935Z"
                                fill="#34413A" />
                            <path
                                d="M16.8682 12.7094C16.4279 12.7997 15.9755 12.6417 15.6867 12.2979C15.3978 11.9559 15.3213 11.4837 15.4848 11.067C15.6484 10.6504 16.026 10.3569 16.4714 10.2997C16.9169 10.2441 17.3554 10.4351 17.6181 10.7997C17.86 11.1365 17.9139 11.5722 17.7626 11.9577C17.6112 12.3431 17.2753 12.626 16.8682 12.7094Z"
                                fill="#34413A" />
                            <path
                                d="M21.6357 12.7126C21.1989 12.7872 20.7569 12.6188 20.4802 12.2733C20.2036 11.9279 20.1374 11.4591 20.3062 11.0511C20.4768 10.6431 20.8544 10.3584 21.2963 10.3098C21.7366 10.2612 22.1681 10.4539 22.4239 10.815C22.6623 11.157 22.711 11.5945 22.5509 11.9799C22.3926 12.3636 22.0463 12.6397 21.6357 12.7126Z"
                                fill="#34413A" />
                            <path
                                d="M26.4837 12.697C26.0522 12.7873 25.6049 12.6362 25.3178 12.3012C25.0307 11.9678 24.9472 11.5043 25.1021 11.0928C25.2569 10.6796 25.6224 10.3845 26.0591 10.3202C26.4958 10.256 26.9326 10.4331 27.1988 10.7821C27.4494 11.1137 27.5138 11.5477 27.3676 11.9366C27.2232 12.3237 26.8891 12.6119 26.4837 12.697Z"
                                fill="#34413A" />
                        </svg>
                            <p>Contact US</p>
                        </div>
                        <div
                            class="p-1.5 rounded-[40px] outline outline-1 outline-offset-[-1px] outline-neutral-700 backdrop-blur-[20px] flex justify-start items-center">
                            <svg width="34" height="35" viewBox="0 0 34 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4262 11.376L23.0105 11.376L23.0105 19.9602" stroke="#34413A"
                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.9897 23.3967L22.8903 11.4961" stroke="#34413A" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </a>

                    <a class="w-full px-6 py-3 justify-between bg-white rounded-3xl inline-flex items-center gap-2 overflow-hidden"
                        href="https://wa.me/201126052626">
                        <div class="flex gap-2">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.576 5.74939C23.886 3.05939 20.17 1.39539 16.065 1.39539C7.85595 1.39539 1.19995 8.05039 1.19995 16.2604C1.19995 18.9924 1.93695 21.5514 3.22195 23.7514L3.18395 23.6814L1.07495 31.3834L8.95395 29.3164C11.005 30.4554 13.452 31.1254 16.056 31.1254H16.062C24.271 31.1224 30.924 24.4664 30.924 16.2574C30.924 12.1544 29.262 8.44039 26.575 5.75039L26.576 5.74939ZM16.062 28.6144H16.057C13.738 28.6144 11.567 27.9744 9.71395 26.8614L9.76995 26.8924L9.31895 26.6254L4.64395 27.8524L5.89095 23.2934L5.59695 22.8264C4.41195 20.9644 3.70795 18.6954 3.70795 16.2614C3.70795 9.43939 9.23895 3.90839 16.061 3.90839C22.883 3.90839 28.4139 9.43939 28.4139 16.2614C28.4139 23.0834 22.885 28.6144 16.062 28.6144ZM22.8379 19.3634C22.4669 19.1774 20.641 18.2804 20.301 18.1554C19.96 18.0314 19.712 17.9704 19.464 18.3424C19.218 18.7134 18.5059 19.5494 18.2889 19.7974C18.073 20.0464 17.8549 20.0764 17.4839 19.8914C16.334 19.4254 15.346 18.8044 14.487 18.0394L14.497 18.0484C13.698 17.3084 13.013 16.4614 12.46 15.5274L12.432 15.4754C12.216 15.1044 12.409 14.9034 12.594 14.7184C12.761 14.5524 12.966 14.2844 13.151 14.0684C13.297 13.8894 13.422 13.6844 13.517 13.4644L13.523 13.4474C13.566 13.3604 13.591 13.2594 13.591 13.1514C13.591 13.0204 13.554 12.8984 13.49 12.7944L13.492 12.7974C13.398 12.6114 12.656 10.7834 12.347 10.0394C12.045 9.31539 11.738 9.41439 11.511 9.40239C11.295 9.39239 11.047 9.39039 10.799 9.39039C10.404 9.40039 10.053 9.57839 9.81095 9.85339L9.80995 9.85539C9.00795 10.6164 8.50995 11.6894 8.50995 12.8784C8.50995 12.9044 8.50995 12.9314 8.51095 12.9574V12.9534C8.64195 14.4204 9.19195 15.7374 10.038 16.8104L10.026 16.7954C11.63 19.1744 13.768 21.0774 16.277 22.3594L16.371 22.4024C16.919 22.6504 17.621 22.9154 18.339 23.1424L18.488 23.1834C18.93 23.3234 19.4389 23.4044 19.9669 23.4044C20.2699 23.4044 20.568 23.3774 20.856 23.3264L20.825 23.3304C21.894 23.1074 22.781 22.4624 23.322 21.5814L23.3309 21.5644C23.496 21.1984 23.5919 20.7714 23.5919 20.3224C23.5919 20.1374 23.576 19.9564 23.545 19.7804L23.548 19.7994C23.456 19.6444 23.208 19.5524 22.836 19.3654L22.8379 19.3634Z"
                                    fill="#34413A" />
                            </svg>
    
                            <div
                                class=" justify-start text-Primary-Green-700 text-xl font-normal font-['Poppins'] leading-7">
                                <span class="max-lg:hidden">Love using</span> <span class="">WhatsApp</span> <span
                                    class="max-lg:hidden">let’s chat</span>
                            </div>
                        </div>
                        <div
                            class="p-1.5 rounded-[40px] outline outline-1 outline-offset-[-1px] outline-neutral-700 backdrop-blur-[20px] flex justify-start items-center">
                            <svg width="34" height="35" viewBox="0 0 34 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4262 11.376L23.0105 11.376L23.0105 19.9602" stroke="#34413A"
                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.9897 23.3967L22.8903 11.4961" stroke="#34413A" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <style>
    html {
        padding: 0 !important;
    }

    #wpadminbar {
        /* display: none !important; */
    }
    </style>
    <!-- GSAP animation: animate container then title and subtitle (waits for hero image to preload) -->

    <script>
    (function() {
        // Injected PHP hero image URL
        const HERO_IMG = '<?php echo $hero_img; ?>';

        function preloadImage(url) {
            return new Promise((resolve) => {
                try {
                    const img = new Image();
                    img.src = url;
                    if (img.decode) {
                        img.decode().then(resolve).catch(() => {
                            img.onload = resolve;
                            img.onerror = resolve;
                        });
                    } else {
                        img.onload = resolve;
                        img.onerror = resolve;
                    }
                } catch (e) {
                    // if anything fails, resolve so JS can continue
                    resolve();
                }
            });
        }

        async function init() {
            // Wait for the hero image to be fetched and decoded (if supported)
            await preloadImage(HERO_IMG);

            // Now run the existing DOMContentLoaded logic
            document.addEventListener("DOMContentLoaded", function() {
                // Wait for DOM ready
                function ready(fn) {
                    if (document.readyState !== 'loading') fn();
                    else document.addEventListener('DOMContentLoaded', fn);
                }
                var heroAnimationDone = false;
                ready(function() {
                    var container = document.getElementById('home-hero-container');
                    var title = document.getElementById('hero-title');
                    var subtitle = document.getElementById('hero-subtitle');

                    var box = document.getElementById('book-appointment-box');

                    var mobileBox = document.getElementById('mobile-book-appointment-box');


                    if (!container) return;
                    // sequence animations with a GSAP timeline
                    var tl = gsap.timeline({
                        defaults: {
                            ease: 'power2.out'
                        }
                    });
                    tl.set(container, {
                        height: '100vh',
                        margin: '0px',
                        borderRadius: '0px',
                        overflow: 'hidden'
                    });
                    tl.set(box, {
                        y: 50,
                        display: 'none',
                        opacity: 0
                    });
                    tl.set(mobileBox, {
                        y: 50,
                        display: 'none',
                        opacity: 0
                    });

                    // container: animate height/margin/borderRadius (start after 1s to match previous delay)
                    if (isMobile) {
                        tl.fromTo(container, {
                                height: '100vh'
                            }, {
                                height: '95vh',
                                margin: '10px',
                                borderRadius: '24px',
                                duration: 0.5,
                                ease: 'power1.out'
                            },
                            1 // absolute position: start at 1s (previous delay)
                        );
                    } else {
                        tl.fromTo(container, {
                                height: '100vh'
                            }, {
                                height: '95vh',
                                margin: '20px',
                                borderRadius: '24px',
                                duration: 0.5,
                                ease: 'power1.out'
                            },
                            1 // absolute position: start at 1s (previous delay)
                        );
                    }

                    // title: come in after container (previously started at 0.55s but container had 1s delay; keep a similar overlap)
                    if (title) {
                        tl.fromTo(title, {
                            y: 20,
                            opacity: 0
                        }, {
                            y: 0,
                            opacity: 1,
                            duration: 0.8
                        }, 1.55);
                    }

                    // subtitle: after title
                    if (subtitle) {
                        tl.fromTo(subtitle, {
                            y: 20,
                            opacity: 0
                        }, {
                            y: 0,
                            opacity: 1,
                            duration: 0.6
                        }, 2.35);
                    }
                    // book box initial entrance: from y:50 and opacity 0 (start after subtitle finishes)
                    if (!isMobile) {
                        // subtitle starts at 2.35 with duration 0.6 -> ends at ~2.95
                        tl.to(box, {
                            y: 0,
                            display: 'flex',
                            opacity: 1,
                            duration: 0.6
                        }, 2.95)

                    }

                    if (isMobile) {
                        // subtitle starts at 2.35 with duration 0.6 -> ends at ~2.95
                        tl.to(mobileBox, {
                            y: 0,
                            display: 'flex',
                            opacity: 1,
                            duration: 0.6
                        }, 2.95)
                        tl.to(container, {
                            height: '75vh'
                        });
                    }
                    tl.add(function() {
                        heroAnimationDone = true;
                    })

                    tl.play();

                    // shared expansion functionality for both desktop and mobile
                    function createExpansionHandler(targetBox, triggerType = 'hover') {
                        var isExpanded = false;
                        var placeholder = null;
                        var originalChildren = null;
                        var overlay = null;
                        var origBg = '';

                        // defensive state & tween handles to avoid animation race conditions
                        var state = 'idle'; // 'idle' | 'expanding' | 'expanded' | 'collapsing'
                        var expandTimeline = null;
                        var bgTween = null;
                        var collapseTween = null;
                        var overlayTimeout = null;
                        var originalParent = targetBox
                            .parentNode; // store original parent to prevent getting lost
                        var originalNextSibling = targetBox.nextSibling; // store position in DOM

                        function createOverlay() {
                            var ov = document.createElement('div');
                            ov.style.position = 'absolute';
                            ov.style.inset = '0';
                            ov.style.display = 'flex';
                            ov.style.flexDirection = 'column';
                            ov.style.justifyContent = 'center';
                            ov.style.alignItems = 'center';
                            ov.style.textAlign = 'center';
                            ov.style.padding = '1.5rem';
                            ov.style.boxSizing = 'border-box';
                            ov.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';
                            ov.style.height = '100%';
                            ov.style.width = '100%';
                            ov.style.opacity = 1;
                            if (isMobile) {
                                ov.style.backgroundImage =
                                    'url(<?php echo get_theme_media_url('images/mobile-map.jpg') ?>)';
                            } else {
                                ov.style.backgroundImage =
                                    'url(<?php echo get_theme_media_url('images/map.jpg') ?>)';
                            }
                            ov.style.backgroundSize = 'cover';
                            // ov.style.cursor = 'pointer';
                            // insert complex contact block into the overlay
                            var template = document.getElementById("box-overlay-template");
                            ov.innerHTML = template.innerHTML;
                            ov.style.opacity = '0';
                            return ov;
                        }

                        function expandBox() {
                            if (!heroAnimationDone) return;
                            // avoid duplicate starts
                            if (state === 'expanded' || state === 'expanding') return;
                            // if collapsing, stop collapse and proceed
                            if (collapseTween) {
                                collapseTween.kill();
                                collapseTween = null;
                            }

                            state = 'expanding';

                            // capture original children and background once
                            var rect = targetBox.getBoundingClientRect();
                            if (!originalChildren) originalChildren = Array.from(targetBox.children);
                            origBg = getComputedStyle(targetBox).backgroundColor || '';

                            // kill any running tweens on targetBox to avoid conflicting transforms
                            gsap.killTweensOf(targetBox);
                            gsap.to(originalChildren, {
                                opacity: 0,
                                duration: 0.12,
                                stagger: 0.02
                            });

                            // only create placeholder if we don't already have one
                            if (!placeholder) {
                                placeholder = document.createElement('div');
                                placeholder.style.width = rect.width + 'px';
                                placeholder.style.height = rect.height + 'px';
                                placeholder.style.display = getComputedStyle(targetBox).display;
                                placeholder.classList.add('box-placeholder'); // for debugging
                                targetBox.parentNode.insertBefore(placeholder, targetBox);
                            }

                            // move targetBox into container for absolute positioning (only if not already there)
                            if (targetBox.parentNode !== container) {
                                container.appendChild(targetBox);
                            }
                            var containerRect = container.getBoundingClientRect();
                            var top = rect.top - containerRect.top;
                            var left = rect.left - containerRect.left;
                            targetBox.style.position = 'absolute';
                            targetBox.style.zIndex = 9999;
                            targetBox.style.boxSizing = 'border-box';
                            targetBox.style.top = top + 'px';
                            targetBox.style.left = left + 'px';
                            targetBox.style.width = rect.width + 'px';
                            targetBox.style.height = rect.height + 'px';

                            // create a timeline for coordinated animation and keep a ref
                            expandTimeline = gsap.timeline({
                                defaults: {
                                    ease: 'power2.out'
                                },
                                onComplete: function() {
                                    state = 'expanded';
                                    expandTimeline = null;
                                }
                            });
                            expandTimeline.to(targetBox, {
                                duration: 0.45,
                                top: 0,
                                left: 0,
                                width: '100%',
                                height: '100%'
                            }, 0);
                            bgTween = gsap.to(targetBox, {
                                duration: 0.3,
                                backgroundColor: '#002019',
                                ease: 'none'
                            });

                            // schedule overlay insertion but keep handle so we can cancel if needed
                            overlayTimeout = setTimeout(function() {
                                // if user left before full expansion, skip overlay
                                if (state === 'collapsing' || state === 'idle') return;
                                overlay = createOverlay();
                                targetBox.appendChild(overlay);
                                gsap.to(overlay, {
                                    opacity: 1,
                                    duration: 0.25,
                                    ease: 'power2.out'
                                });
                            }, 450);
                        }

                        function collapseBox() {
                            // if already idle or collapsing, ignore
                            if (state === 'idle' || state === 'collapsing') return;
                            // cancel pending overlay insertion
                            if (overlayTimeout) {
                                clearTimeout(overlayTimeout);
                                overlayTimeout = null;
                            }
                            // stop expansion if it is running
                            if (expandTimeline) {
                                expandTimeline.kill();
                                expandTimeline = null;
                            }
                            state = 'collapsing';

                            // fade out and remove overlay if present
                            if (overlay) {
                                gsap.to(overlay, {
                                    opacity: 0,
                                    duration: 0.18,
                                    onComplete: function() {
                                        if (overlay && overlay.parentNode) overlay.parentNode
                                            .removeChild(overlay);
                                        overlay = null;
                                    }
                                });
                            }

                            // if placeholder missing, just restore immediately to original parent
                            if (!placeholder) {
                                // ensure targetBox returns to original parent if lost
                                if (targetBox.parentNode !== originalParent) {
                                    if (originalNextSibling) {
                                        originalParent.insertBefore(targetBox, originalNextSibling);
                                    } else {
                                        originalParent.appendChild(targetBox);
                                    }
                                }
                                // restore children
                                if (originalChildren && originalChildren.length) {
                                    gsap.to(originalChildren, {
                                        opacity: 1,
                                        duration: 0.12,
                                        stagger: 0.02
                                    });
                                }
                                targetBox.style.position = '';
                                targetBox.style.top = '';
                                targetBox.style.left = '';
                                targetBox.style.width = '';
                                targetBox.style.height = '';
                                targetBox.style.zIndex = '';
                                targetBox.style.backgroundColor = '';
                                state = 'idle';
                                return;
                            }

                            var rect = placeholder.getBoundingClientRect();
                            var containerRect = container.getBoundingClientRect();
                            var top = rect.top - containerRect.top;
                            var left = rect.left - containerRect.left;

                            // kill any existing tweens targeting targetBox
                            gsap.killTweensOf(targetBox);
                            collapseTween = gsap.to(targetBox, {
                                duration: 0.35,
                                top: top + 'px',
                                left: left + 'px',
                                width: rect.width + 'px',
                                height: rect.height + 'px',
                                backgroundColor: origBg || '',
                                ease: 'power2.in',
                                onComplete: function() {
                                    // restore in-flow position using original parent reference
                                    if (placeholder && placeholder.parentNode) {
                                        // ensure we restore to the original parent, not just where placeholder is
                                        if (originalNextSibling && originalNextSibling
                                            .parentNode === originalParent) {
                                            originalParent.insertBefore(targetBox,
                                                originalNextSibling);
                                        } else {
                                            originalParent.appendChild(targetBox);
                                        }
                                        placeholder.parentNode.removeChild(placeholder);
                                        placeholder = null;
                                    } else {
                                        // fallback: restore to original parent even without placeholder
                                        if (targetBox.parentNode !== originalParent) {
                                            if (originalNextSibling && originalNextSibling
                                                .parentNode === originalParent) {
                                                originalParent.insertBefore(targetBox,
                                                    originalNextSibling);
                                            } else {
                                                originalParent.appendChild(targetBox);
                                            }
                                        }
                                    }

                                    // restore original children opacity
                                    if (originalChildren && originalChildren.length) {
                                        gsap.to(originalChildren, {
                                            opacity: 1,
                                            duration: 0.12,
                                            stagger: 0.02
                                        });
                                    }

                                    targetBox.style.position = '';
                                    targetBox.style.top = '';
                                    targetBox.style.left = '';
                                    targetBox.style.width = '';
                                    targetBox.style.height = '';
                                    targetBox.style.zIndex = '';
                                    targetBox.style.backgroundColor = '';
                                    state = 'idle';
                                    collapseTween = null;
                                }
                            });
                        }

                        return {
                            expandBox: expandBox,
                            collapseBox: collapseBox,
                            getState: function() {
                                return state;
                            }
                        };
                    }

                    // setup desktop box (hover)
                    if (box) {
                        var desktopHandler = createExpansionHandler(box, 'hover');

                        // handle hover (mouseenter/leave) defensively
                        box.addEventListener('mouseenter', function(e) {
                            desktopHandler.expandBox();
                        });

                        box.addEventListener('mouseleave', function(e) {
                            // small delay to allow fast re-entry without collapsing immediately
                            setTimeout(function() {
                                // if user re-entered, do nothing
                                if (desktopHandler.getState() === 'expanding' || desktopHandler
                                    .getState() === 'expanded') {
                                    // if expanded, check if pointer still inside container; if outside, collapse
                                    var rect = container.getBoundingClientRect();
                                    var x = e.clientX,
                                        y = e.clientY;
                                    if (x < rect.left || x > rect.right || y < rect.top || y >
                                        rect.bottom) {
                                        desktopHandler.collapseBox();
                                    }
                                    return;
                                }
                                // if not expanded/expanding, ensure collapse runs
                                if (desktopHandler.getState() !== 'idle') desktopHandler
                                    .collapseBox();
                            }, 12);
                        });
                    }

                    // setup mobile box (click)
                    if (mobileBox) {
                        var mobileHandler = createExpansionHandler(mobileBox, 'click');
                        var mobileIsExpanded = false;

                        mobileBox.addEventListener('click', function(e) {
                            e.preventDefault();
                            e.stopPropagation();

                            if (!mobileIsExpanded) {
                                mobileHandler.expandBox();
                                mobileIsExpanded = true;

                                // add close button functionality
                                setTimeout(function() {
                                    // Close button functionality
                                    var closeBtn = mobileBox.querySelector(
                                        '#overlay-close-btn');
                                    if (closeBtn) {
                                        closeBtn.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            e.stopPropagation();
                                            mobileHandler.collapseBox();
                                            mobileIsExpanded = false;
                                        });
                                    }

                                    // Existing contact buttons functionality
                                    var closeButtons = mobileBox.querySelectorAll(
                                        'a[href="/contact-us/"], a[href*="wa.me"]');
                                    closeButtons.forEach(function(btn) {
                                        btn.addEventListener('click', function(e) {
                                            // let the link work but also close the overlay after a short delay
                                            setTimeout(function() {
                                                mobileHandler
                                                    .collapseBox();
                                                mobileIsExpanded =
                                                    false;
                                            }, 100);
                                        });
                                    });
                                }, 500);
                            } else {
                                mobileHandler.collapseBox();
                                mobileIsExpanded = false;
                            }
                        });

                        // close on outside click
                        document.addEventListener('click', function(e) {
                            if (mobileIsExpanded && !mobileBox.contains(e.target)) {
                                mobileHandler.collapseBox();
                                mobileIsExpanded = false;
                            }
                        });

                        // close on escape key
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape' && mobileIsExpanded) {
                                mobileHandler.collapseBox();
                                mobileIsExpanded = false;
                            }
                        });
                    }
                });
            });
        }

        // start initialization
        init();
    })();
    </script>