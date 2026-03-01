<?php
/**
 * 404 Page
 */
get_header();
?>

<section class="hero" style="min-height: 80vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center; max-width: 600px; margin: 0 auto;">
            <h1>404</h1>
            <p class="hero-subtitle">Page Not Found</p>
            <p class="hero-description">The page you're looking for doesn't exist or has been moved.</p>
            <div class="hero-actions" style="justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    Back to Home
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
