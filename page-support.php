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

<!-- ==================== CONTACT CARDS ==================== -->
<section class="section">
    <div class="container">
        <div class="support-grid">
            <div class="support-card reveal">
                <div class="support-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3>Email</h3>
                <p class="support-card-label">Support Team</p>
                <ul class="support-contact-list">
                    <li><a href="mailto:Support@mycourseid.com">Support@MyCourseID.com</a></li>
                    <li><a href="mailto:Spencer@mycourseid.com">Spencer@MyCourseID.com</a></li>
                    <li><a href="mailto:Lynn@mycourseid.com">Lynn@MyCourseID.com</a></li>
                </ul>
            </div>

            <div class="support-card reveal reveal-d1">
                <div class="support-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <h3>Phone</h3>
                <p class="support-card-detail"><a href="tel:9192646089">919.264.6089</a></p>
                <p class="support-card-label">Hours of Operation</p>
                <p class="support-card-detail">8&ndash;5pm Central</p>
            </div>

            <div class="support-card reveal reveal-d2">
                <div class="support-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                </div>
                <h3>Chat</h3>
                <p class="support-card-detail">Available 24/7</p>
                <p class="support-card-label">Get instant answers any time</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== HELP INSTRUCTIONS ==================== -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="support-help-card reveal">
            <div class="support-help-content">
                <h2>How to Get Help</h2>
                <p>To help us resolve your issue as quickly as possible, please have the following information ready when you contact us:</p>
                <div class="support-help-items">
                    <div class="support-help-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <div>
                            <strong>Your School or Institution</strong>
                            <p>Let us know which institution you&rsquo;re associated with.</p>
                        </div>
                    </div>
                    <div class="support-help-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        <div>
                            <strong>Your Name</strong>
                            <p>So we can look up your account and personalize your support.</p>
                        </div>
                    </div>
                    <div class="support-help-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <div>
                            <strong>Description of the Issue</strong>
                            <p>A brief summary of what you&rsquo;re experiencing or need help with.</p>
                        </div>
                    </div>
                    <div class="support-help-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <div>
                            <strong>Preferred Contact Method</strong>
                            <p>Let us know how you&rsquo;d like us to follow up &mdash; email, phone, or chat.</p>
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
                    <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                        Get a Demo
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="mailto:Support@mycourseid.com" class="btn btn-outline-light">
                        Email Us
                    </a>
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
