<footer class="site-footer">
    <style>
    /* Scoped footer CSS (replaces Tailwind utilities used previously) */
    .site-footer {
        background: transparent;
    }

    .site-footer .container {
        max-width: 1120px;
        margin: 0 auto;
        padding: 0 16px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
        padding: 40px 0;
    }

    @media (min-width: 640px) {
        .footer-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .footer-grid {
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr 1fr;
        }
    }

    .footer-brand {
        grid-column: 1 / -1;
        margin-bottom: 40px;
    }

    @media (min-width: 1024px) {
        .footer-brand {
            grid-column: span 2;
            margin-bottom: 0;
        }
    }

    .footer-brand .logo-link {
        display: flex;
        justify-content: center;
    }

    @media (min-width: 1024px) {
        .footer-brand .logo-link {
            justify-content: flex-start;
        }
    }

    .footer-col h4 {
        font-size: 1.125rem;
        color: #1f2937;
        font-weight: 500;
        margin-bottom: 1.75rem;
    }

    .footer-col a {
        color: #4b5563;
        text-decoration: none;
        display: block;
        margin-bottom: 1.5rem;
        transition: color .2s ease;
    }

    .footer-col a:last-child {
        margin-bottom: 0;
    }

    .footer-col a:hover {
        color: #111827;
    }

    .footer-bottom {
        border-top: 1px solid #e5e7eb;
        padding: 24px 0;
    }

    .footer-bottom .inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    @media (min-width: 1024px) {
        .footer-bottom .inner {
            flex-direction: row;
            justify-content: space-between;
        }
    }

    .footer-bottom .copyright {
        font-size: 0.875rem;
        color: #374151;
    }

    .footer-bottom .social {
        display: flex;
        gap: 12px;
        margin-top: 12px;
    }

    @media (min-width: 1024px) {
        .footer-bottom .social {
            margin-top: 0;
        }
    }

    .social .btn {
        width: 36px;
        height: 36px;
        border-radius: 9999px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #374151;
        color: #fff;
        text-decoration: none;
    }

    .social .btn:hover {
        background: #374151;
    }
    </style>

    <div class="container">
        <!--Grid-->
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="" class="logo-link">
                    <svg width="213" height="40" viewBox="0 0 213 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.45788 0.933349C8.02853 1.95616 8.10376 2.02922 10.0597 6.04742L12.1661 10.1387H19.5385H26.911L29.0174 6.04742C31.1238 1.73699 31.0486 1.15252 28.1899 0.348884C26.7605 -0.0894651 26.3091 0.275826 25.2559 2.7598L24.0523 5.75518H19.5385H15.1L13.8212 2.83286C12.467 -0.308639 11.7147 -0.67393 9.45788 0.933349Z"
                            fill="#34413A" />
                        <path
                            d="M0.579991 8.75128C-0.473213 10.2124 -0.322755 10.5777 2.98732 14.2306L6.52307 18.1758H19.312H32.1761L36.088 14.3037L39.9999 10.4316L38.2697 8.75128L36.4642 7.144L33.455 10.4316L30.3706 13.7923H19.4624H8.47902L5.62033 10.5047C4.11575 8.67822 2.53594 7.21706 2.23503 7.21706C1.93411 7.21706 1.18182 7.94764 0.579991 8.75128Z"
                            fill="#34413A" />
                        <path
                            d="M2.91138 25.6276C-0.248234 29.2074 -0.398691 29.5727 0.654513 30.7417C2.30955 32.5681 2.76092 32.422 5.84531 29.1344L8.55355 26.2121H19.6874H30.8213L33.6048 29.5727L36.3882 32.8604L38.1937 31.2531L39.9992 29.6458L36.3882 25.7737L32.8525 21.9747L19.537 21.9016L6.29668 21.8286L2.91138 25.6276Z"
                            fill="#34413A" />
                        <path
                            d="M10.0597 33.9561C8.10376 37.9743 8.02853 38.0474 9.45788 39.0702C11.7147 40.6775 12.467 40.3122 13.8212 37.0976L15.1 34.1753L19.7642 34.3945C24.278 34.6137 24.5037 34.6867 25.2559 36.9515C25.7073 38.1935 26.3091 39.5086 26.6101 39.7277C26.9862 40.093 29.6944 39.1433 30.8229 38.2666C30.9733 38.1205 30.1458 36.2209 28.9422 33.9561L26.911 29.8649H19.5385H12.1661L10.0597 33.9561Z"
                            fill="#34413A" />
                        <path
                            d="M65.9205 16.7632L62.6392 17.1212C62.5464 16.7897 62.384 16.4782 62.152 16.1865C61.9266 15.8949 61.6217 15.6595 61.2372 15.4806C60.8527 15.3016 60.3821 15.2121 59.8253 15.2121C59.0762 15.2121 58.4465 15.3745 57.9361 15.6993C57.4323 16.0241 57.1837 16.445 57.1903 16.9621C57.1837 17.4062 57.3461 17.7675 57.6776 18.0459C58.0156 18.3243 58.5724 18.553 59.348 18.732L61.9531 19.2888C63.3982 19.6003 64.4721 20.0942 65.1747 20.7703C65.884 21.4465 66.242 22.3314 66.2486 23.4252C66.242 24.3863 65.9602 25.2348 65.4034 25.9706C64.8532 26.6998 64.0876 27.2699 63.1065 27.6808C62.1255 28.0918 60.9986 28.2973 59.7259 28.2973C57.8565 28.2973 56.3518 27.9062 55.2116 27.124C54.0715 26.3352 53.392 25.2381 53.1733 23.8328L56.6832 23.4948C56.8423 24.1842 57.1804 24.7045 57.6974 25.0558C58.2145 25.4072 58.8873 25.5828 59.7159 25.5828C60.571 25.5828 61.2571 25.4072 61.7741 25.0558C62.2978 24.7045 62.5597 24.2703 62.5597 23.7533C62.5597 23.3158 62.3906 22.9545 62.0526 22.6695C61.7211 22.3844 61.2041 22.1657 60.5014 22.0132L57.8963 21.4664C56.4313 21.1614 55.3475 20.6477 54.6449 19.9252C53.9422 19.196 53.5942 18.2746 53.6009 17.161C53.5942 16.2197 53.8494 15.4043 54.3665 14.7149C54.8902 14.0189 55.616 13.482 56.544 13.1041C57.4787 12.7197 58.5559 12.5274 59.7756 12.5274C61.5653 12.5274 62.974 12.9086 64.0014 13.6709C65.0355 14.4332 65.6752 15.464 65.9205 16.7632ZM75.8786 28.2973C74.3871 28.2973 73.0945 27.9692 72.0007 27.3129C70.907 26.6567 70.0585 25.7386 69.4553 24.5587C68.8587 23.3788 68.5604 22 68.5604 20.4223C68.5604 18.8447 68.8587 17.4626 69.4553 16.276C70.0585 15.0895 70.907 14.1681 72.0007 13.5118C73.0945 12.8556 74.3871 12.5274 75.8786 12.5274C77.37 12.5274 78.6626 12.8556 79.7564 13.5118C80.8501 14.1681 81.6953 15.0895 82.2919 16.276C82.8951 17.4626 83.1967 18.8447 83.1967 20.4223C83.1967 22 82.8951 23.3788 82.2919 24.5587C81.6953 25.7386 80.8501 26.6567 79.7564 27.3129C78.6626 27.9692 77.37 28.2973 75.8786 28.2973ZM75.8984 25.4138C76.7071 25.4138 77.3833 25.1917 77.9268 24.7476C78.4704 24.2968 78.8748 23.6936 79.1399 22.9379C79.4117 22.1823 79.5476 21.3404 79.5476 20.4124C79.5476 19.4777 79.4117 18.6325 79.1399 17.8769C78.8748 17.1146 78.4704 16.508 77.9268 16.0573C77.3833 15.6065 76.7071 15.3811 75.8984 15.3811C75.0698 15.3811 74.3804 15.6065 73.8303 16.0573C73.2867 16.508 72.879 17.1146 72.6072 17.8769C72.3421 18.6325 72.2095 19.4777 72.2095 20.4124C72.2095 21.3404 72.3421 22.1823 72.6072 22.9379C72.879 23.6936 73.2867 24.2968 73.8303 24.7476C74.3804 25.1917 75.0698 25.4138 75.8984 25.4138ZM95.9862 21.5757V12.7263H99.5856V27.999H96.0955V25.2845H95.9364C95.5917 26.1396 95.025 26.839 94.2362 27.3825C93.454 27.9261 92.4895 28.1979 91.3427 28.1979C90.3417 28.1979 89.4568 27.9758 88.6879 27.5317C87.9255 27.0809 87.329 26.428 86.8981 25.5729C86.4672 24.7111 86.2518 23.6704 86.2518 22.4507V12.7263H89.8512V21.8939C89.8512 22.8617 90.1164 23.6307 90.6467 24.2007C91.177 24.7708 91.873 25.0558 92.7347 25.0558C93.265 25.0558 93.7788 24.9266 94.2759 24.6681C94.7731 24.4095 95.1808 24.0251 95.4989 23.5146C95.8237 22.9976 95.9862 22.3513 95.9862 21.5757ZM106.886 19.0502V27.999H103.287V12.7263H106.727V15.3215H106.906C107.258 14.4664 107.818 13.7869 108.587 13.2831C109.362 12.7793 110.32 12.5274 111.46 12.5274C112.514 12.5274 113.432 12.7528 114.214 13.2036C115.003 13.6543 115.613 14.3073 116.044 15.1624C116.482 16.0175 116.697 17.0549 116.69 18.2746V27.999H113.091V18.8314C113.091 17.8106 112.826 17.0118 112.295 16.4351C111.772 15.8584 111.046 15.57 110.118 15.57C109.488 15.57 108.928 15.7093 108.438 15.9877C107.954 16.2594 107.572 16.6539 107.294 17.1709C107.022 17.6879 106.886 18.3144 106.886 19.0502ZM126.017 28.2675C124.817 28.2675 123.743 27.9593 122.795 27.3428C121.848 26.7263 121.098 25.8314 120.548 24.6581C119.998 23.4848 119.723 22.0596 119.723 20.3825C119.723 18.6856 120.001 17.2538 120.558 16.0871C121.122 14.9138 121.881 14.0289 122.835 13.4323C123.79 12.829 124.854 12.5274 126.027 12.5274C126.922 12.5274 127.658 12.6799 128.234 12.9848C128.811 13.2831 129.268 13.6444 129.607 14.0686C129.945 14.4862 130.206 14.8807 130.392 15.2519H130.541V7.63539H134.151V27.999H130.611V25.5928H130.392C130.206 25.964 129.938 26.3584 129.587 26.776C129.235 27.187 128.771 27.5383 128.195 27.83C127.618 28.1217 126.892 28.2675 126.017 28.2675ZM127.021 25.3144C127.784 25.3144 128.433 25.1089 128.97 24.6979C129.507 24.2803 129.915 23.7003 130.193 22.9578C130.472 22.2154 130.611 21.3503 130.611 20.3627C130.611 19.375 130.472 18.5165 130.193 17.7874C129.921 17.0582 129.517 16.4914 128.98 16.0871C128.45 15.6827 127.797 15.4806 127.021 15.4806C126.219 15.4806 125.55 15.6894 125.013 16.107C124.476 16.5246 124.071 17.1013 123.8 17.8371C123.528 18.5729 123.392 19.4147 123.392 20.3627C123.392 21.3172 123.528 22.169 123.8 22.9181C124.078 23.6605 124.486 24.2471 125.023 24.678C125.566 25.1022 126.232 25.3144 127.021 25.3144ZM144.931 27.999V12.7263H148.372V15.3215H148.551C148.869 14.4465 149.396 13.7637 150.132 13.2732C150.868 12.776 151.746 12.5274 152.767 12.5274C153.801 12.5274 154.672 12.7793 155.382 13.2831C156.098 13.7803 156.601 14.4597 156.893 15.3215H157.052C157.39 14.473 157.96 13.7968 158.762 13.2931C159.571 12.7826 160.529 12.5274 161.636 12.5274C163.041 12.5274 164.188 12.9716 165.076 13.8598C165.965 14.7481 166.409 16.044 166.409 17.7476V27.999H162.799V18.3044C162.799 17.3565 162.547 16.6638 162.044 16.2263C161.54 15.7822 160.923 15.5601 160.194 15.5601C159.326 15.5601 158.646 15.8319 158.156 16.3754C157.672 16.9124 157.43 17.6117 157.43 18.4735V27.999H153.9V18.1553C153.9 17.3664 153.662 16.7367 153.184 16.2661C152.714 15.7954 152.097 15.5601 151.335 15.5601C150.818 15.5601 150.347 15.6927 149.923 15.9578C149.499 16.2164 149.161 16.5843 148.909 17.0615C148.657 17.5322 148.531 18.0824 148.531 18.7121V27.999H144.931ZM179.795 21.5757V12.7263H183.394V27.999H179.904V25.2845H179.745C179.4 26.1396 178.834 26.839 178.045 27.3825C177.263 27.9261 176.298 28.1979 175.151 28.1979C174.15 28.1979 173.265 27.9758 172.496 27.5317C171.734 27.0809 171.138 26.428 170.707 25.5729C170.276 24.7111 170.06 23.6704 170.06 22.4507V12.7263H173.66V21.8939C173.66 22.8617 173.925 23.6307 174.455 24.2007C174.986 24.7708 175.682 25.0558 176.543 25.0558C177.074 25.0558 177.587 24.9266 178.085 24.6681C178.582 24.4095 178.989 24.0251 179.308 23.5146C179.632 22.9976 179.795 22.3513 179.795 21.5757ZM194.722 12.7263V15.5104H185.942V12.7263H194.722ZM188.11 9.0672H191.709V23.4053C191.709 23.8892 191.782 24.2604 191.928 24.5189C192.08 24.7708 192.279 24.9432 192.525 25.036C192.77 25.1288 193.042 25.1752 193.34 25.1752C193.565 25.1752 193.771 25.1586 193.956 25.1254C194.149 25.0923 194.294 25.0625 194.394 25.036L195 27.8499C194.808 27.9162 194.533 27.9891 194.175 28.0686C193.824 28.1482 193.393 28.1946 192.882 28.2078C191.981 28.2343 191.169 28.0985 190.446 27.8002C189.724 27.4952 189.15 27.0246 188.726 26.3882C188.309 25.7519 188.103 24.9564 188.11 24.0019V9.0672ZM204.33 28.2973C202.798 28.2973 201.476 27.9791 200.362 27.3428C199.255 26.6998 198.403 25.7916 197.807 24.6183C197.21 23.4384 196.912 22.0497 196.912 20.4521C196.912 18.8811 197.21 17.5023 197.807 16.3158C198.41 15.1226 199.252 14.1946 200.332 13.5317C201.413 12.8622 202.682 12.5274 204.141 12.5274C205.082 12.5274 205.97 12.6799 206.805 12.9848C207.647 13.2831 208.39 13.7471 209.033 14.3769C209.682 15.0066 210.193 15.8087 210.564 16.7831C210.935 17.7509 211.121 18.9043 211.121 20.2433V21.347H198.602V18.9209H207.67C207.664 18.2315 207.515 17.6183 207.223 17.0814C206.931 16.5378 206.524 16.1103 206 15.7987C205.483 15.4872 204.88 15.3314 204.19 15.3314C203.455 15.3314 202.808 15.5104 202.251 15.8683C201.695 16.2197 201.26 16.6837 200.949 17.2604C200.644 17.8305 200.488 18.4569 200.482 19.1396V21.2575C200.482 22.1458 200.644 22.9081 200.969 23.5445C201.294 24.1742 201.748 24.6581 202.331 24.9962C202.914 25.3276 203.597 25.4933 204.379 25.4933C204.903 25.4933 205.377 25.4204 205.801 25.2746C206.225 25.1221 206.593 24.9001 206.905 24.6084C207.216 24.3167 207.452 23.9555 207.611 23.5246L210.972 23.9024C210.759 24.7907 210.355 25.5663 209.759 26.2291C209.169 26.8854 208.413 27.3958 207.491 27.7604C206.57 28.1183 205.516 28.2973 204.33 28.2973Z"
                            fill="#34413A" />
                    </svg>

                </a>
            </div>
            <!--End Col-->

            <div class="footer-col">
                <h4>Shop</h4>
                <div>
                    <a href="/shop/acoustic-products/">Acoustic Products</a>
                    <a href="/shop/isolation-products/">Isolation Products</a>
                    <a href="/shop/studio-solutions/">Studio Solutions</a>
                    <a href="/shop/microphones/">Microphones</a>
                    <a href="/shop/cameras/">Cameras</a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Blogs</h4>
                <div>
                    <a href="/category/uncategorized/">Uncategorized</a>
                </div>
            </div>

        </div>
        <!--Grid-->

        <div class="footer-bottom">
            <div class="inner">
                <span class="copyright">©<a href="https://soundmute.com/">sound mute</a> 2024, All rights
                    reserved.</span>
                <?php get_template_part('templates/partials/social'); ?>

            </div>
        </div>
    </div>
</footer>

<style>
.expanded-content {
    flex-direction: column;
    justify-content: end;
    height: 100%;
}

.overlay {
    z-index: 1;
    opacity: 1;
}
</style>
<script>
// ✅ Updated initCardAnimation to hide ALL .card-content blocks
function initCardAnimation(card, options = {}) {
    const {
        clipOrigin = "85% 10px",
            overlayColor = "#ff4757",
            zIndex = "10"
    } = options;

    const overlay = card.querySelector('.overlay');
    const cardContents = card.querySelectorAll('.card-content'); // ⬅ all content blocks
    let expandedContent = card.querySelector('.expanded-content');
    if (card.dataset.link) {
        // set pointer cursor but don't bind immediate navigation here;
        // mobile click behavior is handled after timelines are created
        card.style.cursor = 'pointer';
    }

    if (!expandedContent) {
        expandedContent = document.createElement('div');
        expandedContent.className = 'expanded-content relative z-30 ';
        const titleText = card.dataset.title || "More details here";
        const descriptionText = card.dataset.description || "More details here";
        expandedContent.innerHTML =
            `<p class="text-2xl text-gray-200">${titleText}</p><p class="text-lg text-gray-200">${descriptionText}</p>`;
        card.appendChild(expandedContent);
    }

    if (overlay) overlay.style.background = overlayColor;

    // animate when card enter the view
    // gsap.fromTo(card,{opacity:0,y:12},{opacity:1,y:0,duration:0.6,ease:'power3.out',scrollTrigger:{trigger:card,start:'center 80%'}});

    gsap.set(overlay, {
        clipPath: `circle(0% at ${clipOrigin})`
    });
    gsap.set(expandedContent, {
        opacity: 0,
        y: 20,
        display: "none"
    });

    // Hover In
    const hoverInTl = gsap.timeline({
        paused: true
    });
    hoverInTl
        .to(cardContents, {
            duration: 0.01,
            opacity: 0,
            display: "none",
            y: -10,
            ease: "power2.out",
            stagger: 0.1
        }, )
        .to(overlay, {
            duration: 0.8,
            clipPath: `circle(150% at ${clipOrigin})`,
            ease: "ease.out"
        })

        .to(expandedContent, {
            duration: 0.4,
            opacity: 1,
            display: 'flex',
            y: 0,
            ease: "power2.out"
        }, "-=0.4"); // Start expanded content earlier to sync with arrow        // Hover Out
    const hoverOutTl = gsap.timeline({
        paused: true
    });
    hoverOutTl
        .to(expandedContent, {
            duration: 0.3,
            opacity: 0,
            display: "none",
            y: 20,
            ease: "power2.in"
        })
        .to(overlay, {
                duration: 0.9,
                clipPath: `circle(0% at ${clipOrigin})`,
                ease: "power2.in"
            },
            "-=0.1")
        .to(cardContents, {
            duration: 0.3,
            opacity: 1,
            y: 0,
            display: "flex",
            ease: "power2.out",
            stagger: 0.1
        }, "-=0.3")


    // Synchronize arrow animation into the same timeline and add running-flag queueing
    // Arrow element (if exists) - we'll animate using transform:scale for better performance
    const arrowEl = card.querySelector('.card-arrow img');
    if (arrowEl) {
        // ensure transform origin and smoothing
        arrowEl.style.transformOrigin = '50% 50%';
        arrowEl.style.willChange = 'transform';
        // set an initial scale (1) in case CSS isn't explicit
        gsap.set(arrowEl, {
            scale: 1
        });
        // determine the default size to restore to on hover-out (fall back to mobile/desktop defaults)
        var arrowDefaultSize = 40;
        try {
            const ds = arrowEl.getAttribute('data-default-size') || (arrowEl.dataset && arrowEl.dataset.defaultSize);
            if (ds) arrowDefaultSize = parseInt(ds, 10) || arrowDefaultSize;
            else arrowDefaultSize = (typeof window !== 'undefined' && window.isMobile) ? 28 : 40;
        } catch (e) {
            arrowDefaultSize = (typeof window !== 'undefined' && window.isMobile) ? 28 : 40;
        }
    }

    // Add running flag callbacks to hoverIn timeline
    hoverInTl.eventCallback('onStart', () => {
        card.dataset.animationRunning = 'true';
        card.__shouldReverse = false; // clear queued reverse when starting forward
    });
    hoverInTl.eventCallback('onComplete', () => {
        card.dataset.animationRunning = 'false';
        // If a reverse was requested while the forward animation ran, start it now
        if (card.__shouldReverse) {
            hoverOutTl.restart();
            card.__shouldReverse = false;
        }
    });
    // alert(isMobile ? "Mobile View" : "Desktop View");
    // Integrate arrow grow into hoverIn timeline (synchronized with expanded content)
    if (arrowEl) {
        console.log(isMobile ? "Mobile View" : "Desktop View");
        hoverInTl.to(arrowEl, {
            duration: 0.4,
            width: (isMobile ? 100 : 300),
            height: (isMobile ? 100 : 300),
            opacity: 0.7,
            ease: 'power2.out'
        }, '-=0.4'); // Sync with expanded content timing
    }

    // Add running-flag callbacks to hoverOut timeline
    hoverOutTl.eventCallback('onStart', () => {
        card.dataset.animationRunning = 'true';
    });
    hoverOutTl.eventCallback('onComplete', () => {
        card.dataset.animationRunning = 'false';
    });

    // Integrate arrow shrink into hoverOut timeline (shrink early so overlay collapse looks natural)
    if (arrowEl) {
        // restore to the arrow's original default size (uses dataset.defaultSize when available)
        hoverOutTl.to(arrowEl, {
            duration: 0.3,
            width: arrowDefaultSize,
            height: arrowDefaultSize,
            opacity: 1,
            ease: 'power2.in'
        }, (isMobile ? '-=0.9' : '-=0.6'));
    }

    // Mouse handlers now respect the running flag and queue reverses when necessary
    card.addEventListener('mouseenter', () => {
        hoverOutTl.pause();
        hoverInTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1,
            ease: 'power2.out'
        });
    });

    card.addEventListener('mouseleave', () => {
        // If the forward animation is still running, mark for reverse and return
        if (card.dataset.animationRunning === 'true') {
            card.__shouldReverse = true;
            return;
        }
        hoverInTl.pause();
        hoverOutTl.restart();
        gsap.to(card, {
            duration: 0.3,
            scale: 1,
            ease: 'power2.out'
        });
    });

    // Mobile: first tap expands the overlay and shows a close (X); second tap navigates.
    // Also close when tapping outside or when scrolling away.
    (function attachMobileClickBehavior() {
        const mobileFlag = (typeof window !== 'undefined' && window.isMobile);
        if (!mobileFlag) return; // only apply this on mobile

        let isExpanded = false;
        let docClickHandler = null;
        let scrollHandler = null;

        // create close button (hidden by default)
        const closeBtn = document.createElement('button');
        closeBtn.type = 'button';
        closeBtn.setAttribute('aria-label', 'Close');
        closeBtn.className = 'card-close-btn';
        closeBtn.style.cssText = 'position:absolute;top:8px;left:8px;z-index:60;background:transparent;border:none;color:#fff;font-size:22px;display:none;padding:6px;line-height:1;';
        closeBtn.innerHTML = '&times;';
        card.appendChild(closeBtn);

        function openCardMobile() {
            // close other expanded card if exists
            try {
                if (window.__expandedCard && window.__expandedCard !== card && typeof window.__expandedCard.__closeMobile === 'function') {
                    window.__expandedCard.__closeMobile();
                }
            } catch (e) {}

            isExpanded = true;
            card.dataset.expanded = 'true';
            closeBtn.style.display = 'block';
            // run the same animation as hoverIn
            hoverOutTl.pause();
            hoverInTl.restart();

            // add listeners to detect outside clicks and scroll
            docClickHandler = function(e) {
                if (!card.contains(e.target)) {
                    closeCardMobile();
                }
            };
            document.addEventListener('click', docClickHandler, {capture: true});
            scrollHandler = function() {
                closeCardMobile();
            };
            window.addEventListener('scroll', scrollHandler, {passive: true});

            // register globals so other cards can close it
            window.__expandedCard = card;
        }

        function closeCardMobile() {
            if (!isExpanded) return;
            isExpanded = false;
            card.dataset.expanded = 'false';
            closeBtn.style.display = 'none';
            hoverInTl.pause();
            hoverOutTl.restart();
            // remove listeners
            if (docClickHandler) {
                document.removeEventListener('click', docClickHandler, {capture: true});
                docClickHandler = null;
            }
            if (scrollHandler) {
                window.removeEventListener('scroll', scrollHandler);
                scrollHandler = null;
            }
            if (window.__expandedCard === card) window.__expandedCard = null;
        }

        // expose close so other instances can call it
        card.__closeMobile = closeCardMobile;

        closeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            closeCardMobile();
        });

        card.addEventListener('click', function(e) {
            // mobile behavior: first tap expand, second tap navigate
            e.stopPropagation();
            if (!isExpanded) {
                openCardMobile();
                return;
            }
            // already expanded: follow link if exists
            if (card.dataset.link) {
                window.location.href = card.dataset.link;
            }
        });
    })();
}

document.addEventListener("DOMContentLoaded", function() {
    // helper: convert #hex to [r,g,b]
    function hexToRgb(hex) {
        if (!hex) return null;
        hex = hex.replace('#', '');
        if (hex.length === 3) {
            hex = hex.split('').map(h => h + h).join('');
        }
        if (hex.length !== 6) return null;
        const bigint = parseInt(hex, 16);
        return [(bigint >> 16) & 255, (bigint >> 8) & 255, bigint & 255];
    }

    // helper: parse rgb(...) or rgba(...) -> [r,g,b]
    function rgbStringToRgb(str) {
        const m = str.match(/rgba?\s*\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})/i);
        if (!m) return null;
        return [parseInt(m[1], 10), parseInt(m[2], 10), parseInt(m[3], 10)];
    }

    // darken color by amount (0.1 = 10%). Accepts #hex or rgb(...). Returns rgb(...) string or original on failure.
    function darkenColor(color, amount) {
        if (!color) return color;
        color = String(color).trim();
        let rgb = null;
        if (color.charAt(0) === '#') rgb = hexToRgb(color);
        else if (color.toLowerCase().indexOf('rgb') === 0) rgb = rgbStringToRgb(color);
        if (!rgb) return color; // unknown format — return original
        const r = Math.max(0, Math.min(255, Math.round(rgb[0] * (1 - amount))));
        const g = Math.max(0, Math.min(255, Math.round(rgb[1] * (1 - amount))));
        const b = Math.max(0, Math.min(255, Math.round(rgb[2] * (1 - amount))));
        return `rgb(${r}, ${g}, ${b})`;
    }

    document.querySelectorAll(".card").forEach((card, i) => {
        // Determine color from data-color attribute -> computed backgroundColor -> defaults
        let cardColor = card.getAttribute('data-color');
        if (!cardColor) {
            const computedBg = window.getComputedStyle(card).backgroundColor || '';
            // Use computed background if it's set and not transparent
            if (computedBg && computedBg !== 'transparent' && computedBg !== 'rgba(0, 0, 0, 0)') {
                cardColor = computedBg;
            } else {
                cardColor = (i === 0 ? '#4B5D53' : '#34413A');
            }
        }
        // Make overlay/arrow a bit darker for contrast (10%)
        const overlayColor = darkenColor(cardColor, 0.15);
        // Add arrow button if not already present
        if (!card.querySelector('.card-arrow')) {
            const arrowWrapper = document.createElement('p');
            arrowWrapper.className =
                'card-arrow z-20 flex p-1.5 items-center rounded-full backdrop-blur-[20px] top-[10px] right-[10px] absolute w-fit';
                    // set the background color to a slightly darker version for better contrast
                    arrowWrapper.style.background = overlayColor;
            arrowWrapper.innerHTML =
                `<?php echo "<img src=\"" . esc_url( get_theme_media_url('images/arrow-up.svg') ) . "\" alt=\"Arrow Icon\" width=\"40\" height=\"40\" />"; ?>`;
            // Respect global window.isMobile to reduce arrow size on phones
            try {
                const mobileFlag = (typeof window !== 'undefined' && window.isMobile) ? true : false;
                const arrowImg = arrowWrapper.querySelector('img');
                if (arrowImg) {
                    // set a smaller default size on mobile to avoid oversized cursors
                    const defaultSize = mobileFlag ? 28 : 40;
                    arrowImg.setAttribute('width', String(defaultSize));
                    arrowImg.setAttribute('height', String(defaultSize));
                    arrowImg.style.width = defaultSize + 'px';
                    arrowImg.style.height = defaultSize + 'px';
                    // remember the initial/native size so animations can restore to it
                    try { arrowImg.dataset.defaultSize = String(defaultSize); } catch(e) {}
                }
            } catch (e) {
                // fail silently if DOM manipulation isn't allowed
            }
            // Place the arrow wrapper into a sensible spot: append to the first .card-content or to the card itself
            const firstContent = card.querySelector('.card-content');
            if (firstContent) {
                const targetParent = firstContent.parentElement || card;
                targetParent.appendChild(arrowWrapper);
            } else card.appendChild(arrowWrapper);
        }



        // Pass the darker overlay color to the animation init
        initCardAnimation(card, {
            overlayColor: overlayColor,
            clipOrigin: "95.2% 25px"
        });

        // Inject decorative SVG if missing
                        if (!card.querySelector('.card-deco-svg')) {
            // ensure card is positioned for absolute children
            const currentPos = window.getComputedStyle(card).position;
            if (currentPos === 'static' || !currentPos) card.style.position = 'relative';
                        const svgWrapper = document.createElement('div');
                        svgWrapper.className = 'card-deco-svg absolute z-0 pointer-events-none';
                        svgWrapper.style.position = 'absolute';
                        svgWrapper.style.top = '-2px';
                        svgWrapper.style.right = '-1px';
                        // reduce decorative svg size on mobile using global window.isMobile
                        const mobileSvg = (typeof window !== 'undefined' && window.isMobile) ? true : false;
                        svgWrapper.style.width = mobileSvg ? '80px' : '100px';
                        svgWrapper.style.height = mobileSvg ? '80px' : '100px';
                        svgWrapper.style.zIndex = '0';
                        svgWrapper.innerHTML = `
        <svg class="w-full h-fit" width="101" height="99" viewBox="0 0 101 99" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 -0.000488281L101 0V98.9995H99.5L99.2484 97.4901C98.7527 94.5158 97.7808 91.6409 96.3699 88.9761L95.626 87.5708C94.5507 85.5397 93.1203 83.7176 91.4026 82.1908C90.1397 81.0681 88.7344 80.1167 87.2231 79.3611L84.6796 78.0893C83.232 77.3655 81.7011 76.822 80.1212 76.4709C78.7113 76.1576 77.2714 75.9995 75.8271 75.9995H57L54.6165 75.7191C50.5548 75.2413 46.5689 74.2568 42.7518 72.7887L42 72.4995L37.5 69.9995L35.3909 68.4177C34.1319 67.4734 32.9415 66.441 31.8287 65.3282C30.28 63.7795 28.8881 62.0817 27.6732 60.2594L26.5 58.4995C25.5021 56.8363 24.6574 55.0858 23.9763 53.2697L23.5 51.9995L22.5 48.4995L22.0698 45.7031C21.6905 43.2376 21.5 40.7468 21.5 38.2523V27.9763C21.5 15.4492 12.749 4.6243 0.5 1.99951V-0.000488281Z" fill="white"/>
        </svg>
    
                    `;
                        card.appendChild(svgWrapper);
        }

        // NOTE: arrow grow/shrink animations moved into the main hover timelines above.
        // We still ensure the arrow wrapper exists and has sensible positioning if present.
        const arrow = card.querySelector('.card-arrow img');
        if (arrow) {
            const wrapper = card.querySelector('.card-arrow');
            if (wrapper) {
                wrapper.style.position = wrapper.style.position || 'absolute';
                wrapper.style.zIndex = wrapper.style.zIndex || '20';
            }
        }
    });
});
</script>
<?php wp_footer(); ?>

<!-- Inline custom card cursor (pointer-aware) -->
<style>
/* only hide native cursor when JS enables the custom cursor on fine-pointer devices */
.has-custom-cursor .card {
    cursor: none !important;
}

.cursor-icon {
    position: absolute;
    width: 80px;
    height: 80px;
    pointer-events: none;
    border-radius: 50px;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.18s ease, transform 0.08s linear;
    z-index: 9999;
    will-change: transform, opacity;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.card-icon {
    display: none;
    /* position:  fixed; */
    top: 0;
}



.cursor-icon-svg {
    width: 40px;
    height: 40px;
    display: block;

    /* ensure it scales nicely */
    /* object-fit: contain; */
}
</style>

<script>
(function() {
    // Only enable on devices with a fine pointer (desktop mouse)
    if (!window.matchMedia || !window.matchMedia('(pointer: fine)').matches) return;

    document.documentElement.classList.add('has-custom-cursor');

    const cards = Array.from(document.querySelectorAll('.card'));
    if (!cards.length) return;

    cards.forEach(card => {
        // create icon if not present
        let icon = card.querySelector('.cursor-icon');
        if (!icon) {
            icon = document.createElement('div');
            icon.className = 'cursor-icon';
            card.appendChild(icon);
            // If the card has a `.card-icon` SVG, clone the actual <svg> into the cursor so it fits nicely
            const cardIconEl = card.querySelector('.card-icon');
            if (cardIconEl) {
                // prefer the inner svg node if wrapper exists
                const svgNode = (cardIconEl.tagName && cardIconEl.tagName.toLowerCase() === 'svg') ?
                    cardIconEl : cardIconEl.querySelector('svg');
                if (svgNode) {
                    // deep clone the SVG element itself
                    const clonedSvg = svgNode.cloneNode(true);
                    // remove any id attributes inside the cloned SVG to avoid collisions
                    clonedSvg.querySelectorAll('[id]').forEach(n => n.removeAttribute('id'));
                    // normalize sizing so CSS can scale it to the cursor container
                    clonedSvg.setAttribute('width', '100%');
                    clonedSvg.setAttribute('height', '100%');
                    clonedSvg.setAttribute('preserveAspectRatio', 'xMidYMid meet');
                    // Add a helper class and ensure it doesn't capture pointer events
                    clonedSvg.classList.add('cursor-icon-svg');
                    clonedSvg.style.pointerEvents = 'none';
                    // Clear previous contents and append the cloned svg
                    icon.innerHTML = '';
                    icon.appendChild(clonedSvg);
                    // Make the cursor background transparent when SVG present
                    icon.style.background = 'transparent';
                }
            }
            // ensure the card is positioned for absolute children
            const pos = window.getComputedStyle(card).position;
            if (pos === 'static' || !pos) card.style.position = 'relative';
        }

        let rafId = null;
        let lastX = 0,
            lastY = 0;
        let visible = false;

        function update() {
            // use translate3d for GPU acceleration; keep centering offset
            icon.style.transform = `translate3d(${lastX}px, ${lastY}px, 0) translate(-50%,-50%)`;
            rafId = null;
        }

        function show() {
            if (!visible) {
                visible = true;
                icon.style.opacity = '1';
            }
        }

        function hide() {
            if (visible) {
                visible = false;
                icon.style.opacity = '0';
            }
        }

        function onPointerMove(e) {
            const rect = card.getBoundingClientRect();
            lastX = e.clientX - rect.left;
            lastY = e.clientY - rect.top;
            if (!rafId) rafId = requestAnimationFrame(update);
        }

        function onPointerEnter(e) {
            onPointerMove(e);
            show();
        }

        function onPointerLeave() {
            hide();
            if (rafId) {
                cancelAnimationFrame(rafId);
                rafId = null;
            }
        }

        // pointer events unify mouse/stylus; we early-return on touch devices above
        card.addEventListener('pointermove', onPointerMove);
        card.addEventListener('pointerenter', onPointerEnter);
        card.addEventListener('pointerleave', onPointerLeave);

        // Keep keyboard focus accessible: hide custom cursor while focusing interactive elements
        card.addEventListener('focusin', hide);
        card.addEventListener('focusout', () => {
            // no-op; pointer events will show again when pointer enters
        });

    });
})();
</script>