<?php
/**
 * Template Name: Custom 404 Page
 * Description: A custom 404 error page with GSAP animations.
 */
get_header();
?>

<style>
.error-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
    background-color: #111;
    color: #fff;
    overflow: hidden;
}

.error-code {
    font-size: 10rem;
    font-weight: bold;
    margin: 0;
}

.error-message {
    font-size: 2rem;
    margin-bottom: 20px;
}

.back-home {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 24px;
    background: #00c4ff;
    color: #111;
    font-weight: bold;
    border-radius: 6px;
    text-decoration: none;
    transition: background 0.3s;
}

.back-home:hover {
    background: #fff;
    color: #111;
}
</style>

<div class="error-wrapper">
    <h1 class="error-code">404</h1>
    <p class="error-message">Oops! Page not found</p>
    <a class="back-home" href="<?php echo esc_url(home_url('/')); ?>">Go Back Home</a>
</div>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    gsap.from(".error-code", {
        duration: 1,
        scale: 0,
        rotation: 360,
        ease: "bounce"
    });

    gsap.from(".error-message", {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 0.5,
        ease: "power3.out"
    });

    gsap.from(".back-home", {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 1,
        ease: "power3.out"
    });
});
</script>

<?php get_footer(); ?>