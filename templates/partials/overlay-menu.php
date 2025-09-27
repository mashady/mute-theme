<?php
// Overlay menu partial - accessible, animated overlay listing product categories (fallback to blog categories)
?>


<?php
// Try product categories first, fallback to regular categories
$terms = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
));
if (is_wp_error($terms) || empty($terms)) {
    $terms = get_terms(array('taxonomy' => 'category', 'hide_empty' => false));
}
?>

<!-- Tailwind utilities used inline instead of a separate CSS block -->
<!-- Unified shell: trigger + dialog body in one container -->
<div id="overlayShell" class="fixed flex flex-col left-1/2 right-1/2 lg:right-4 -translate-x-1/2 bottom-0 lg:bottom-4 z-[9999] w-full lg:w-fit h-fit bg-Primary-Green-700 rounded-t-xl lg:rounded-xl shadow-lg justify-end m-auto">
    <div id="overlayBody" class="overflow-scroll" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="overlayTitle"
        aria-hidden="true" tabindex="-1">
        <div class="overlay-inner px-6 py-6">
            <nav class="overlay-menu-list text-lg grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" aria-label="Product categories">
                <?php if (!empty($terms) && !is_wp_error($terms)): ?>
                    <?php foreach ($terms as $term):
                        $link = esc_url(get_term_link($term)); ?>
                        <a href="<?php echo $link; ?>" class="block w-full py-3 px-3 text-white hover:bg-white/5 rounded" data-term-id="<?php echo esc_attr($term->term_id); ?>"><?php echo esc_html($term->name); ?></a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No categories found.</p>
                <?php endif; ?>
            </nav>
            
        </div>
    </div>
    <button id="overlayTrigger" class="self-bottom bottom-0 overlay-trigger px-6 py-3 text-lg text-white bg-transparent focus:outline-none !rounded-none min-w-[150px]"
        aria-controls="overlayBody" aria-expanded="false"><span class="overlay-btn-label ">Products</span></button>
</div>


<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        const overlayTrigger = document.getElementById('overlayTrigger');
        const overlayBody = document.getElementById('overlayBody');
        const overlayShell = document.getElementById('overlayShell');
        const label = document.querySelector('.overlay-btn-label');
        let isOpen = false;
        gsap.set(overlayBody, {autoAlpha: 0, pointerEvents: 'none', display:'none'});
        overlayTrigger.addEventListener('click', () => {
            if (isOpen) {
                isOpen = false;
                label.textContent = 'Products';
                collapseOverlay();
                return;
            }
            isOpen = true;
            expandOverlay();
            label.textContent = 'Close';
        });

        let tl = gsap.timeline();
            // tl.to("body", {overflow: 'hidden'});
            // tl.to(overlayBody, {
            //     height: "100%"
            // });


            tl.to(overlayShell, {
                right: '50%',
                left: '50%',
                width: isMobile ? '100%' : '98%',
            })
            .to(overlayShell, {
                height: '96%',
            }, '-=0.2')
            .to(overlayBody, {
                // height: '100%',
                autoAlpha: 1,
                pointerEvents: 'auto',
                duration: 0.3,
                ease: 'power1.inOut',
                display:'flex'
            }, '-=0.2');
            tl.pause();

        function expandOverlay() {
            tl.restart();
            tl.play();
        }

        function collapseOverlay() {
            tl.reverse().eventCallback('onReverseComplete', () => {
                gsap.set("body", {overflow: 'auto'});
                gsap.set(overlayBody, {display: 'none'});
            });
        }
    })
</script>