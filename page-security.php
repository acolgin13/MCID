<?php
/**
 * Template Name: Security
 * Security & Privacy page — compliance, data protection, and trust.
 */
get_header();
$demo_url    = esc_url( get_theme_mod( 'mcid_cta_url', home_url( '/demo/' ) ) );
$privacy_url = esc_url( home_url( '/privacy/' ) );
?>

<!-- ==================== HERO ==================== -->
<section class="security-hero">
    <div class="container">
        <div class="security-hero-layout reveal">
            <div class="security-hero-text">
                <span class="text-label">Security &amp; Privacy</span>
                <h1>Security and compliance are at our core</h1>
                <p>MyCourseID is designed from the ground up to safeguard all user data in accordance with the industry&rsquo;s highest standards of security and privacy.</p>
                <div class="hero-actions">
                    <a href="<?php echo $privacy_url; ?>" class="btn btn-primary">
                        MyCourseID Privacy Policy
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                        Get a Demo
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== VALUE PROP + FEATURES ==================== -->
<section class="section">
    <div class="container">
        <div class="section-header centered reveal" style="margin-bottom: 64px;">
            <h2>Delivering Compliance-Level Security &amp; Privacy with a &ldquo;Best in Class&rdquo; User Experience</h2>
            <p>With MyCourseID, every piece of data is instantly encrypted and stored within the industry&rsquo;s most trusted infrastructure, then maintained through rigorous audits that adhere to regional, national, and global compliance standards.</p>
        </div>

        <div class="security-features-grid">
            <div class="security-feature-card reveal">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3>User Data Protection &amp; Encryption</h3>
                <p>Any PII is immediately encrypted and stored via AWS S3 per the client&rsquo;s requirements.</p>
            </div>

            <div class="security-feature-card reveal reveal-d1">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3>Ongoing Authentication &amp; Verification</h3>
                <p>Privacy controls ensure Initial Verification (IV) and Continuous &ldquo;Ongoing&rdquo; Verification (CV) that the correct user is accessing content.</p>
            </div>

            <div class="security-feature-card reveal reveal-d2">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/></svg>
                </div>
                <h3>Minimal Data Storage</h3>
                <p>MyCourseID&rsquo;s minimal data storage and non-invasive monitoring approach ensure a higher level of security with minimal risk to test-takers.</p>
            </div>

            <div class="security-feature-card reveal">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg>
                </div>
                <h3>No Passwords or Personal Data</h3>
                <p>Our authentication and ongoing verification model never requires user passwords or personal information (such as licenses or other).</p>
            </div>

            <div class="security-feature-card reveal reveal-d1">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3>Ongoing Audits to Maintain Security</h3>
                <p>Attention to detail matters: our quarterly and annual audit verifications ensure software and service updates remain consistent to our security standard.</p>
            </div>

            <div class="security-feature-card reveal reveal-d2">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3>24/7 Accessibility</h3>
                <p>Our &ldquo;always-on&rdquo; accessibility for test takers is represented across every aspect of our platform resulting in WCAG 2.1 (VPAT available).</p>
            </div>

            <div class="security-feature-card security-feature-card-wide reveal">
                <div class="security-feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/></svg>
                </div>
                <h3>Integrity First Foundation</h3>
                <p>Our platform is based on a foundation that ensures test taker integrity is maintained while maintaining the highest level of security across the institution.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== COMPLIANCE FRAMEWORKS ==================== -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="section-header centered reveal" style="margin-bottom: 48px;">
            <h2>MyCourseID adheres to all industry-standard compliance frameworks</h2>
            <p>Documentation Available: SOC2, GDPR, HECVAT, VPAT, WCAG 2.1, FERPA</p>
        </div>
        <div class="compliance-badges compliance-badges-lg reveal">
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                <span>SOC2</span>
            </div>
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></div>
                <span>GDPR</span>
            </div>
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                <span>HECVAT</span>
            </div>
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg></div>
                <span>VPAT</span>
            </div>
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg></div>
                <span>WCAG 2.1</span>
            </div>
            <div class="compliance-badge">
                <div class="compliance-badge-icon"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                <span>FERPA</span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BOTTOM CTA ==================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-card reveal">
            <div class="cta-card-content">
                <span class="text-label" style="color: rgba(255,255,255,0.4);">Because Security, Privacy and Compliance Matter</span>
                <h2>Built for All Your Security Needs to Ensure Test Taker Efficiency</h2>
                <p>MyCourseID is built with efficiency and security in mind, to meet and exceed your authentication and verification needs.</p>
                <div class="cta-actions">
                    <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                        Get a Demo
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="mailto:Support@mycourseid.com" class="btn btn-outline-light">
                        Contact Us
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
