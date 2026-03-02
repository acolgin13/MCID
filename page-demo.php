<?php
/**
 * Template Name: Get a Demo
 * Demo request page with contact form.
 */
get_header();

// Handle form submission
$form_submitted = false;
$form_error     = false;

if ( isset( $_POST['mcid_demo_nonce'] ) && wp_verify_nonce( $_POST['mcid_demo_nonce'], 'mcid_demo_submit' ) ) {
    $name       = sanitize_text_field( $_POST['mcid_name'] ?? '' );
    $email      = sanitize_email( $_POST['mcid_email'] ?? '' );
    $company    = sanitize_text_field( $_POST['mcid_company'] ?? '' );
    $lms        = sanitize_text_field( $_POST['mcid_lms'] ?? '' );
    $message    = sanitize_textarea_field( $_POST['mcid_message'] ?? '' );
    $hear_about = sanitize_text_field( $_POST['mcid_hear'] ?? '' );

    if ( $name && $email && $company ) {
        $to      = 'Support@mycourseid.com';
        $subject = 'New Demo Request from ' . $name;

        $body  = "New demo request submitted via MyCourseID website:\n\n";
        $body .= "Name: {$name}\n";
        $body .= "Work Email: {$email}\n";
        $body .= "University/Company: {$company}\n";
        $body .= "LMS: {$lms}\n";
        if ( $message ) {
            $body .= "Additional Notes: {$message}\n";
        }
        if ( $hear_about ) {
            $body .= "How they heard about us: {$hear_about}\n";
        }
        $body .= "\n---\nSubmitted on " . date( 'F j, Y \a\t g:i A T' );

        $headers = array(
            'From: MyCourseID Website <noreply@mycourseid.com>',
            'Reply-To: ' . $name . ' <' . $email . '>',
            'Content-Type: text/plain; charset=UTF-8',
        );

        $sent = wp_mail( $to, $subject, $body, $headers );
        $form_submitted = $sent;
        $form_error     = ! $sent;
    } else {
        $form_error = true;
    }
}
?>

<!-- ==================== DEMO PAGE ==================== -->
<section class="demo-page-hero">
    <div class="container">
        <div class="demo-page-layout">
            <div class="demo-page-text reveal">
                <span class="text-label">Get a Demo</span>
                <h1>See MyCourseID in Action</h1>
                <p>Schedule a product demo to learn how MyCourseID can solve your proctoring use case.</p>
                <p class="demo-page-detail">During this live demo, we&rsquo;ll show how MyCourseID simplifies online proctoring from exam setup to post-exam review. You&rsquo;ll see how identity verification, AI deterrents, monitoring controls, and reporting tools work together to protect academic integrity without disrupting the student experience.</p>

                <div class="demo-trust-items">
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Live product walkthrough</span>
                    </div>
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Custom to your use case</span>
                    </div>
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>No obligation</span>
                    </div>
                </div>
            </div>

            <div class="demo-form-wrap reveal reveal-d1">
                <?php if ( $form_submitted ) : ?>
                    <div class="demo-form-success">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:48px;height:48px;color:var(--accent);margin-bottom:16px"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <h3>Thank you for your interest</h3>
                        <p>We&rsquo;ve received your demo request and will be in touch shortly at the email you provided.</p>
                    </div>
                <?php else : ?>
                    <h3>Request a Demo</h3>
                    <?php if ( $form_error ) : ?>
                        <p class="form-error">Please fill in all required fields and try again.</p>
                    <?php endif; ?>
                    <form method="post" action="" class="demo-form" id="demo-form">
                        <?php wp_nonce_field( 'mcid_demo_submit', 'mcid_demo_nonce' ); ?>

                        <div class="form-group">
                            <label for="mcid_name">Name <span class="required">*</span></label>
                            <input type="text" id="mcid_name" name="mcid_name" required placeholder="Your full name">
                        </div>

                        <div class="form-group">
                            <label for="mcid_email">Work Email <span class="required">*</span></label>
                            <input type="email" id="mcid_email" name="mcid_email" required placeholder="you@university.edu">
                        </div>

                        <div class="form-group">
                            <label for="mcid_company">University / Company <span class="required">*</span></label>
                            <input type="text" id="mcid_company" name="mcid_company" required placeholder="Your institution or company">
                        </div>

                        <div class="form-group">
                            <label for="mcid_lms">LMS</label>
                            <select id="mcid_lms" name="mcid_lms">
                                <option value="" disabled selected>Select your LMS</option>
                                <option value="Canvas">Canvas</option>
                                <option value="Moodle">Moodle</option>
                                <option value="D2L">D2L (Brightspace)</option>
                                <option value="Blackboard">Blackboard</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mcid_message">Anything else you'd like us to know before the demo? <span class="optional">(optional)</span></label>
                            <textarea id="mcid_message" name="mcid_message" rows="3" placeholder="Tell us about your use case..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="mcid_hear">How did you hear about us? <span class="optional">(optional)</span></label>
                            <input type="text" id="mcid_hear" name="mcid_hear" placeholder="e.g. Conference, colleague, search">
                        </div>

                        <button type="submit" class="btn btn-accent btn-full">
                            Request Demo
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
