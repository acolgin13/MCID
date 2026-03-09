<?php
/**
 * Template Name: Support
 * Support page with team contact information.
 */
get_header();
$demo_url = esc_url( get_theme_mod( 'mcid_cta_url', home_url( '/demo/' ) ) );
?>

<section class="support-page">
    <div class="container">

        <!-- Hero -->
        <div class="support-heading reveal">
            <h1>MyCourseID Support</h1>
        </div>

        <!-- Primary CTA tile -->
        <div class="support-tile support-tile-primary reveal">
            <h2>We&rsquo;re Here to Help You!</h2>
            <p>Our support team is ready to assist with setup, troubleshooting, and any questions about MyCourseID.</p>
            <a href="mailto:Support@mycourseid.com" class="btn btn-accent">Email Support</a>
        </div>

        <!-- Contact tiles — 3 columns -->
        <div class="support-tile-grid reveal">
            <div class="support-tile">
                <h3>Email</h3>
                <p class="support-tile-label">Support Team</p>
                <a href="mailto:Support@mycourseid.com">Support@MyCourseID.com</a>
                <a href="mailto:Spencer@mycourseid.com">Spencer@MyCourseID.com</a>
                <a href="mailto:Lynn@mycourseid.com">Lynn@MyCourseID.com</a>
            </div>
            <div class="support-tile">
                <h3>Phone</h3>
                <a href="tel:9192646089" class="support-tile-phone">919.264.6089</a>
                <p class="support-tile-label">Hours of Operation</p>
                <p class="support-tile-detail">8&ndash;5pm Central</p>
            </div>
            <div class="support-tile">
                <h3>Chat</h3>
                <p class="support-tile-detail">Available 24/7</p>
                <p class="support-tile-sub">Get instant answers any time, day or night.</p>
            </div>
        </div>

        <!-- How to get help — 2x2 grid -->
        <div class="support-heading support-heading-sub reveal">
            <h2>When You Contact Us</h2>
            <p>Please have the following information ready so we can help you as quickly as possible.</p>
        </div>

        <div class="support-tile-grid support-tile-grid-2 reveal">
            <div class="support-tile">
                <h3>Your School or Institution</h3>
                <p>Let us know which institution you&rsquo;re associated with.</p>
            </div>
            <div class="support-tile">
                <h3>Your Name</h3>
                <p>So we can look up your account and personalize your support.</p>
            </div>
            <div class="support-tile">
                <h3>Description of the Issue</h3>
                <p>A brief summary of what you&rsquo;re experiencing or need help with.</p>
            </div>
            <div class="support-tile">
                <h3>Preferred Contact Method</h3>
                <p>Let us know how you&rsquo;d like us to follow up &mdash; email, phone, or chat.</p>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <div class="cta-card reveal">
            <div class="cta-card-content">
                <span class="text-label" style="color: rgba(255,255,255,0.4);">Ready to Get Started?</span>
                <h2>See MyCourseID in Action</h2>
                <p>Schedule a personalized demo to learn how MyCourseID can solve your proctoring use case.</p>
                <div class="cta-actions">
                    <a href="<?php echo $demo_url; ?>" class="btn btn-accent">Get a Demo</a>
                    <a href="mailto:Support@mycourseid.com" class="btn btn-outline-light">Email Us</a>
                </div>
            </div>
            <div class="cta-card-deco" aria-hidden="true">
                <span class="cta-circle cta-circle-1"></span>
                <span class="cta-circle cta-circle-2"></span>
                <span class="cta-circle cta-circle-3"></span>
                <span class="cta-circle cta-circle-4"></span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
