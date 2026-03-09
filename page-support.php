<?php
/**
 * Template Name: Support
 * Support page with team contact information.
 */
get_header();
$demo_url = esc_url( get_theme_mod( 'mcid_cta_url', home_url( '/demo/' ) ) );
?>

<!-- ==================== SUPPORT HERO ==================== -->
<section class="support-hero">
    <div class="container">
        <div class="support-hero-layout reveal">
            <span class="text-label">Support</span>
            <h1>We&rsquo;re Here to Help You!</h1>
            <p>Our support team is ready to assist with setup, troubleshooting, and any questions about MyCourseID.</p>
        </div>
    </div>
</section>

<!-- ==================== CONTACT INFO ==================== -->
<section class="section">
    <div class="container">
        <div class="support-content-wrap">
            <div class="support-main">
                <div class="support-grid">
                    <div class="support-card reveal">
                        <span class="support-card-emoji">&#9993;</span>
                        <h3>Email</h3>
                        <p class="support-card-label">Support Team</p>
                        <ul class="support-contact-list">
                            <li><a href="mailto:Support@mycourseid.com">Support@MyCourseID.com</a></li>
                            <li><a href="mailto:Spencer@mycourseid.com">Spencer@MyCourseID.com</a></li>
                            <li><a href="mailto:Lynn@mycourseid.com">Lynn@MyCourseID.com</a></li>
                        </ul>
                    </div>

                    <div class="support-card reveal reveal-d1">
                        <span class="support-card-emoji">&#9742;</span>
                        <h3>Phone</h3>
                        <p class="support-card-detail"><a href="tel:9192646089">919.264.6089</a></p>
                        <p class="support-card-label">Hours of Operation</p>
                        <p class="support-card-detail">8&ndash;5pm Central</p>
                    </div>

                    <div class="support-card reveal reveal-d2">
                        <span class="support-card-emoji">&#128172;</span>
                        <h3>Chat</h3>
                        <p class="support-card-detail">Available 24/7</p>
                        <p class="support-card-label">Get instant answers any time</p>
                    </div>
                </div>

                <!-- How to Get Help -->
                <div class="support-help-card reveal">
                    <h2>How to Get Help</h2>
                    <p>To help us resolve your issue as quickly as possible, please have the following information ready when you contact us:</p>
                    <div class="support-help-items">
                        <div class="support-help-item">
                            <span class="support-help-number">1</span>
                            <div>
                                <strong>Your School or Institution</strong>
                                <p>Let us know which institution you&rsquo;re associated with.</p>
                            </div>
                        </div>
                        <div class="support-help-item">
                            <span class="support-help-number">2</span>
                            <div>
                                <strong>Your Name</strong>
                                <p>So we can look up your account and personalize your support.</p>
                            </div>
                        </div>
                        <div class="support-help-item">
                            <span class="support-help-number">3</span>
                            <div>
                                <strong>Description of the Issue</strong>
                                <p>A brief summary of what you&rsquo;re experiencing or need help with.</p>
                            </div>
                        </div>
                        <div class="support-help-item">
                            <span class="support-help-number">4</span>
                            <div>
                                <strong>Preferred Contact Method</strong>
                                <p>Let us know how you&rsquo;d like us to follow up &mdash; email, phone, or chat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BOTTOM CTA ==================== -->
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
