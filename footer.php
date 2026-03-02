</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                    <div class="site-logo-text-wrap">
                        <span class="site-logo-text">MyCourseID</span>
                        <span class="site-logo-tagline">Authentication Solutions</span>
                    </div>
                </a>
                <p>The most efficient and user-friendly online proctoring solution on the market.</p>
                <a href="mailto:Support@mycourseid.com" class="footer-email">Support@mycourseid.com</a>
            </div>
            <div class="footer-links">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
                <a href="<?php echo esc_url( home_url( '/security/' ) ); ?>">Security</a>
                <a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>">Get a Demo</a>
            </div>
            <div class="footer-social">
                <a href="https://www.linkedin.com/company/mycourseid/" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                    <svg fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> MyCourseID. All rights reserved.</p>
            <div class="footer-legal">
                <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url( home_url( '/tos/' ) ); ?>">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
