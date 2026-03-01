<?php
/**
 * Template Name: Home Page
 * The front page template for MyCourseID.
 */
get_header();
$demo_url = esc_url( get_theme_mod( 'mcid_cta_url', home_url( '/demo/' ) ) );
$security_url = esc_url( home_url( '/security/' ) );
$hero_image = get_theme_mod( 'mcid_hero_image', '' );
?>

<!-- ==================== HERO ==================== -->
<section class="hero hero-home">
    <div class="hero-grid-pattern"></div>

    <?php if ( $hero_image ) : ?>
        <div class="hero-bg-image" style="background-image: url('<?php echo esc_url( $hero_image ); ?>')"></div>
    <?php else : ?>
        <div class="hero-bg-image hero-bg-placeholder"></div>
    <?php endif; ?>

    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-home-content reveal">
            <span class="text-label">Authentication Solutions</span>
            <h1>
                Online Proctoring &mdash;<br>
                <span class="hero-typed" id="hero-typed">Simplified!</span>
            </h1>
            <p class="hero-description">
                MyCourseID provides customizable remote proctoring that protects academic integrity without disrupting the exam experience.
            </p>
            <div class="hero-actions">
                <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                    Get a demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#services" class="btn btn-outline-light">
                    Learn more
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TRUST BAR ==================== -->
<section class="trust-bar">
    <div class="container">
        <div class="trust-bar-inner">
            <div class="trust-bar-item reveal">
                <div class="trust-bar-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                No Installs
            </div>
            <div class="trust-bar-item reveal reveal-d1">
                <div class="trust-bar-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                No Plug-Ins
            </div>
            <div class="trust-bar-item reveal reveal-d2">
                <div class="trust-bar-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                No Unnecessary Complexity
            </div>
            <div class="trust-bar-item reveal reveal-d3">
                <div class="trust-bar-icon trust-bar-icon-secure">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                100% Secure
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICES ==================== -->
<section class="section section-white" id="services">
    <div class="container">
        <div class="services-layout">
            <div class="services-lhs reveal">
                <span class="text-label">Services</span>
                <h2>A Flexible &amp; Secure Platform for Your Students</h2>
                <p>MyCourseID provides customizable remote proctoring that protects academic integrity without disrupting the exam experience.</p>
                <a href="<?php echo $demo_url; ?>" class="btn btn-primary">
                    Learn more
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="services-rhs">
                <div class="service-card-v2 reveal">
                    <div class="service-card-v2-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="service-card-v2-content">
                        <h4>Identity Verification</h4>
                        <span class="service-card-v2-tag">Continuously Updated &amp; Secure</span>
                        <p>In addition to instantly confirming the test taker as the correct person entering their exam, we also provide ongoing verification throughout. All data is immediately auto-encrypted and stored in the most secure AWS S3 environment as defined by the client&rsquo;s or institution&rsquo;s needs.</p>
                    </div>
                </div>

                <div class="service-card-v2 reveal reveal-d1">
                    <div class="service-card-v2-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <div class="service-card-v2-content">
                        <h4>Exam Monitoring with Built-In AI Deterrents</h4>
                        <p>Our custom monitoring options allow us to analyze each exam with built-in AI deterrents and industry-leading accuracy that never disrupts the test taker. Each flagged instance delivers a video of all fraudulent webcam and on-screen activity viewable within minutes of exam completion, pinpointing the exact second needing human review for a potential fraud alert.</p>
                    </div>
                </div>

                <div class="service-card-v2 reveal reveal-d2">
                    <div class="service-card-v2-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <div class="service-card-v2-content">
                        <h4>Secure Browser Controls</h4>
                        <p>Lock-down browser components while still allowing tools like Excel, Word, CAD, and other software to be utilized during exams. We feel you should be able to customize proctoring around each exam &mdash; offering you full control with no rigid limitations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECURITY & COMPLIANCE ==================== -->
<section class="section section-dark" id="security">
    <div class="container">
        <div class="security-home-layout">
            <div class="security-home-content reveal">
                <span class="text-label">Security &amp; Compliance</span>
                <h2>We Take Test Integrity, Security, and Compliance Seriously</h2>
                <p>We ensure every exam is Algorithmically Encrypted and Protected by applying the most rigorous standards in the industry. Your brand and institution matter &mdash; never settle for partial protection.</p>
                <a href="<?php echo $security_url; ?>" class="btn btn-accent">
                    Security at MCID
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="compliance-badges reveal reveal-d1">
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span>SOC2</span>
                </div>
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <span>GDPR</span>
                </div>
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg>
                    </div>
                    <span>W3C / WCAG</span>
                </div>
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span>HECVAT</span>
                </div>
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg>
                    </div>
                    <span>VPAT</span>
                </div>
                <div class="compliance-badge">
                    <div class="compliance-badge-icon">
                        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span>FERPA</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== LMS INTEGRATIONS ==================== -->
<section class="section section-warm" id="integrations">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="text-label">Integrations</span>
            <h2>Integrate Effortlessly with Your LMS</h2>
        </div>

        <div class="logo-grid reveal">
            <div class="logo-item">
                <div class="logo-item-icon">
                    <svg viewBox="0 0 80 36" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="16">D2L</text></svg>
                </div>
                <span>Brightspace</span>
            </div>
            <div class="logo-item">
                <div class="logo-item-icon">
                    <svg viewBox="0 0 80 36" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="14">Canvas</text></svg>
                </div>
                <span>by Instructure</span>
            </div>
            <div class="logo-item">
                <div class="logo-item-icon">
                    <svg viewBox="0 0 80 36" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="14">Moodle</text></svg>
                </div>
                <span>Open Source LMS</span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BOTTOM CTA ==================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-card reveal">
            <h2>Ready to Simplify<br>Your Proctoring?</h2>
            <p>Join institutions that trust MyCourseID for secure, efficient, and student-friendly online proctoring.</p>
            <div class="cta-actions">
                <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                    Book a Demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="mailto:info@mycourseid.com" class="btn btn-outline-light">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
