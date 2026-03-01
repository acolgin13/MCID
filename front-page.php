<?php
/**
 * Template Name: Home Page
 * The front page template for MyCourseID.
 */
get_header();
?>

<!-- ==================== HERO ==================== -->
<section class="hero" id="home">
    <div class="hero-grid"></div>
    <div class="hero-glow hero-glow-1"></div>
    <div class="hero-glow hero-glow-2"></div>

    <div class="container">
        <div class="hero-content">
            <div class="hero-badge reveal">
                <span class="hero-badge-dot"></span>
                Online Proctoring Platform
            </div>

            <h1 class="reveal reveal-delay-1">
                Online Proctoring &mdash;<br>
                <span class="gradient-text">Simplified!</span>
            </h1>

            <p class="hero-subtitle reveal reveal-delay-2">
                Welcome to the most efficient proctoring solution on the market.
            </p>

            <p class="hero-description reveal reveal-delay-2">
                We&rsquo;ve spent years developing the most innovative and user friendly online proctoring experience &mdash; now offering an average registration time of <strong>15 seconds</strong>.
            </p>

            <div class="hero-actions reveal reveal-delay-3">
                <a href="<?php echo esc_url( get_theme_mod( 'mcid_cta_url', '#contact' ) ); ?>" class="btn btn-primary">
                    Book a Demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#services" class="btn btn-secondary">
                    Explore Services
                </a>
            </div>

            <div class="hero-stats reveal reveal-delay-4">
                <div class="hero-stat">
                    <div class="hero-stat-value">15<span class="accent">s</span></div>
                    <div class="hero-stat-label">Avg. Registration</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value">100<span class="accent">%</span></div>
                    <div class="hero-stat-label">Secure &amp; Encrypted</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value">0</div>
                    <div class="hero-stat-label">Installs Required</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== VALUE BAR ==================== -->
<section class="value-bar">
    <div class="container">
        <div class="value-bar-inner">
            <div class="value-item reveal">
                <svg class="value-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                No Installs
            </div>
            <div class="value-item reveal reveal-delay-1">
                <svg class="value-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                No Plug-Ins
            </div>
            <div class="value-item reveal reveal-delay-2">
                <svg class="value-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                No Unnecessary Complexity
            </div>
            <div class="value-item value-secure reveal reveal-delay-3">
                <svg class="value-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                100% Secure
            </div>
        </div>
    </div>
</section>

<!-- ==================== BEST IN CLASS ==================== -->
<section class="section section-light" id="about">
    <div class="container">
        <div class="split-section">
            <div class="split-content reveal">
                <span class="section-label">Why MyCourseID</span>
                <h2>&ldquo;Best in Class&rdquo;<br>Experience</h2>
                <p>We provide a &ldquo;Best in Class&rdquo; experience for our clients that ensures the highest level of satisfaction via note taking details and time stamped video with each exam.</p>
                <p>When reporting matters to you, our &ldquo;detailed functionality&rdquo; is searchable and immediately reviewable for industry-level compliance and auditing.</p>
                <a href="<?php echo esc_url( get_theme_mod( 'mcid_cta_url', '#contact' ) ); ?>" class="btn btn-dark">
                    Learn More
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="split-visual reveal reveal-delay-2">
                <div class="feature-highlight-card">
                    <div class="fh-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                    </div>
                    <h4>Time-Stamped Video</h4>
                    <p>Every exam includes detailed video with precise timestamps for instant review.</p>
                </div>
                <div class="feature-highlight-card">
                    <div class="fh-icon fh-icon-alt">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h4>Searchable Reports</h4>
                    <p>Detailed functionality for industry-level compliance and auditing needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA BANNER ==================== -->
<section class="section section-cta-mid">
    <div class="container">
        <div class="cta-mid-card reveal">
            <p>If you&rsquo;re tired of complicated downloads, challenging user experiences, or simply expect more from your remote proctoring provider &mdash; <strong>we look forward to sharing our solution with you.</strong></p>
            <a href="<?php echo esc_url( get_theme_mod( 'mcid_cta_url', '#contact' ) ); ?>" class="btn btn-primary">Get Started Today</a>
        </div>
    </div>
</section>

<!-- ==================== SERVICES ==================== -->
<section class="section section-dark" id="services">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Our Services</span>
            <h2>Comprehensive Proctoring,<br>Zero Complexity</h2>
        </div>

        <div class="services-grid">

            <!-- Identity Verification -->
            <div class="service-card card-identity reveal">
                <div class="service-icon-wrap">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3>Identity Verification</h3>
                <p class="service-card-subtitle">Continuously Updated &amp; Secure</p>
                <p>In addition to instantly confirming the test taker as the correct person entering their exam, we also provide ongoing verification throughout. All data is immediately auto-encrypted and stored in the most secure AWS S3 environment as defined by the client&rsquo;s or institution&rsquo;s needs.</p>
            </div>

            <!-- AI Monitoring -->
            <div class="service-card card-monitor reveal reveal-delay-1">
                <div class="service-icon-wrap">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3>Monitoring with Built-In AI Deterrents</h3>
                <p>Our custom monitoring options allow us to analyze each exam with built-in AI deterrents and industry-leading accuracy that never disrupts the test taker. Each flagged instance delivers a video of all fraudulent webcam and on-screen activity viewable within minutes of exam completion, pinpointing the exact second needing human review for a potential fraud alert.</p>
            </div>

            <!-- Secure Browsing -->
            <div class="service-card card-browser reveal">
                <div class="service-icon-wrap">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                </div>
                <h3>Secure Browsing Controls</h3>
                <p>Lockdown testing environments while still approving tools like Excel, Word, CAD, and specific websites. We feel you should be able to customize proctoring around each exam &mdash; offering you full control with no rigid limitations.</p>
            </div>

            <!-- Security & Compliance -->
            <div class="service-card card-security reveal reveal-delay-1">
                <div class="service-icon-wrap">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3>Test Integrity, Security &amp; Compliance</h3>
                <p>We ensure every exam is Algorithmically Encrypted and Protected by applying the most rigorous standards in the industry. Your brand and institution matter &mdash; never settle for partial protection.</p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== COMPLIANCE BADGES ==================== -->
<section class="section trust-section" id="trust">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Trust &amp; Compliance</span>
            <h2>Industry-Leading Standards</h2>
            <p>Certified and compliant with the highest standards in educational technology and data security.</p>
        </div>

        <div class="trust-grid">
            <div class="trust-badge reveal">
                <div class="trust-badge-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" style="color: var(--mcid-accent)"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <span class="trust-badge-name">FERPA</span>
                <span class="trust-badge-desc">Family Educational Rights and Privacy Act Compliant</span>
            </div>
            <div class="trust-badge reveal reveal-delay-1">
                <div class="trust-badge-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" style="color: var(--mcid-cyan)"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="trust-badge-name">AICPA SOC</span>
                <span class="trust-badge-desc">Service Organization Control Certified</span>
            </div>
            <div class="trust-badge reveal reveal-delay-2">
                <div class="trust-badge-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" style="color: var(--mcid-teal)"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg>
                </div>
                <span class="trust-badge-name">HECVAT</span>
                <span class="trust-badge-desc">Higher Education Community Vendor Assessment Toolkit</span>
            </div>
            <div class="trust-badge reveal reveal-delay-3">
                <div class="trust-badge-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" style="color: var(--mcid-green)"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg>
                </div>
                <span class="trust-badge-name">W3C</span>
                <span class="trust-badge-desc">World Wide Web Consortium Accessibility Standards</span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== LMS INTEGRATIONS ==================== -->
<section class="section lms-section" id="integrations">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Integrations</span>
            <h2>Seamless LMS Integration</h2>
            <p>Works with the platforms your institution already uses.</p>
        </div>

        <div class="lms-grid reveal">
            <div class="lms-item">
                <div class="lms-logo-placeholder" data-lms="D2L">
                    <svg viewBox="0 0 80 40" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="16">D2L</text></svg>
                </div>
                <span>Brightspace</span>
            </div>
            <div class="lms-item">
                <div class="lms-logo-placeholder" data-lms="Canvas">
                    <svg viewBox="0 0 80 40" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="14">Canvas</text></svg>
                </div>
                <span>by Instructure</span>
            </div>
            <div class="lms-item">
                <div class="lms-logo-placeholder" data-lms="Moodle">
                    <svg viewBox="0 0 80 40" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="14">Moodle</text></svg>
                </div>
                <span>Open Source LMS</span>
            </div>
            <div class="lms-item">
                <div class="lms-logo-placeholder" data-lms="Blackboard">
                    <svg viewBox="0 0 80 40" fill="none"><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="currentColor" font-family="Plus Jakarta Sans, sans-serif" font-weight="800" font-size="11">Blackboard</text></svg>
                </div>
                <span>by Anthology</span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BOTTOM CTA ==================== -->
<section class="section cta-section" id="contact">
    <div class="container">
        <div class="cta-card reveal">
            <h2>Ready to Simplify<br>Your Proctoring?</h2>
            <p>Join institutions nationwide that trust MyCourseID for secure, efficient, and student-friendly online proctoring.</p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( get_theme_mod( 'mcid_cta_url', '#contact' ) ); ?>" class="btn btn-primary">
                    Book a Demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="mailto:info@mycourseid.com" class="btn btn-secondary">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
