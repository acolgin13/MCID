<?php
/**
 * Template Name: Support
 * Support page with contact form.
 */
get_header();

// Handle form submission
$form_submitted = false;
$form_error     = false;

if ( isset( $_POST['mcid_support_nonce'] ) && wp_verify_nonce( $_POST['mcid_support_nonce'], 'mcid_support_submit' ) ) {
    $institution = sanitize_text_field( $_POST['mcid_institution'] ?? '' );
    $first_name  = sanitize_text_field( $_POST['mcid_first_name'] ?? '' );
    $last_name   = sanitize_text_field( $_POST['mcid_last_name'] ?? '' );
    $email       = sanitize_email( $_POST['mcid_email'] ?? '' );
    $phone       = sanitize_text_field( $_POST['mcid_phone'] ?? '' );
    $description = mb_substr( sanitize_textarea_field( $_POST['mcid_description'] ?? '' ), 0, 500 );

    if ( $institution && $first_name && $last_name && $email ) {
        $to      = 'Support@mycourseid.com';
        $subject = 'Support Request from ' . $first_name . ' ' . $last_name;

        $body  = "New support request submitted via MyCourseID website:\n\n";
        $body .= "Institution / Employer: {$institution}\n";
        $body .= "Name: {$first_name} {$last_name}\n";
        $body .= "Email: {$email}\n";
        $body .= "Phone: {$phone}\n";
        if ( $description ) {
            $body .= "Description of Issue: {$description}\n";
        }
        $body .= "\n---\nSubmitted on " . date( 'F j, Y \a\t g:i A T' );

        $headers = array(
            'From: MyCourseID Website <noreply@mycourseid.com>',
            'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>',
            'Content-Type: text/plain; charset=UTF-8',
        );

        // Handle file attachment
        $attachments = array();
        if ( ! empty( $_FILES['mcid_attachment']['name'] ) && $_FILES['mcid_attachment']['error'] === UPLOAD_ERR_OK ) {
            if ( ! function_exists( 'wp_handle_upload' ) ) {
                require_once ABSPATH . 'wp-admin/includes/file.php';
            }
            $allowed = array( 'image/jpeg', 'image/png', 'image/gif', 'image/webp' );
            $mime = $_FILES['mcid_attachment']['type'];

            if ( in_array( $mime, $allowed, true ) && $_FILES['mcid_attachment']['size'] <= 5 * 1024 * 1024 ) {
                $upload = wp_handle_upload( $_FILES['mcid_attachment'], array( 'test_form' => false ) );
                if ( $upload && ! isset( $upload['error'] ) ) {
                    $attachments[] = $upload['file'];
                }
            }
        }

        $sent = wp_mail( $to, $subject, $body, $headers, $attachments );

        // Clean up uploaded file after sending
        foreach ( $attachments as $file ) {
            if ( file_exists( $file ) ) {
                wp_delete_file( $file );
            }
        }

        $form_submitted = $sent;
        $form_error     = ! $sent;
    } else {
        $form_error = true;
    }
}
?>

<!-- ==================== SUPPORT PAGE ==================== -->
<section class="demo-page-hero">
    <div class="container">
        <div class="demo-page-layout">
            <div class="demo-page-text reveal">
                <span class="text-label">Support</span>
                <h1>We&rsquo;re Here to Help</h1>
                <p>If you&rsquo;re experiencing any issues, our support team is ready to assist. Fill out the form and we&rsquo;ll get back to you as quickly as possible.</p>

                <div class="demo-trust-items">
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Email &amp; chat available 24/7</span>
                    </div>
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Fast, personalized responses</span>
                    </div>
                    <div class="demo-trust-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>Dedicated support team</span>
                    </div>
                </div>
            </div>

            <div class="demo-form-wrap reveal reveal-d1">
                <?php if ( $form_submitted ) : ?>
                    <div class="demo-form-success">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:48px;height:48px;color:var(--accent);margin-bottom:16px"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <h3>Thank you for reaching out</h3>
                        <p>We&rsquo;ve received your support request and will be in touch shortly at the email you provided.</p>
                    </div>
                <?php else : ?>
                    <h3>Contact Support</h3>
                    <?php if ( $form_error ) : ?>
                        <p class="form-error">Please fill in all required fields and try again.</p>
                    <?php endif; ?>
                    <form method="post" action="" class="demo-form" id="support-form" enctype="multipart/form-data">
                        <?php wp_nonce_field( 'mcid_support_submit', 'mcid_support_nonce' ); ?>

                        <div class="form-group">
                            <label for="mcid_institution">Institution / Employer <span class="required">*</span></label>
                            <input type="text" id="mcid_institution" name="mcid_institution" required placeholder="Your institution or employer">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="mcid_first_name">First Name <span class="required">*</span></label>
                                <input type="text" id="mcid_first_name" name="mcid_first_name" required placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="mcid_last_name">Last Name <span class="required">*</span></label>
                                <input type="text" id="mcid_last_name" name="mcid_last_name" required placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mcid_email">Email <span class="required">*</span></label>
                            <input type="email" id="mcid_email" name="mcid_email" required placeholder="you@example.com">
                        </div>

                        <div class="form-group">
                            <label for="mcid_phone">Phone Number <span class="optional">(optional)</span></label>
                            <input type="tel" id="mcid_phone" name="mcid_phone" placeholder="(555) 123-4567">
                        </div>

                        <div class="form-group">
                            <label for="mcid_description">Brief Description of Issue <span class="optional">(optional)</span></label>
                            <textarea id="mcid_description" name="mcid_description" rows="3" maxlength="500" placeholder="Tell us what you're experiencing..."></textarea>
                            <small class="char-count"><span id="desc-char-count">0</span> / 500</small>
                        </div>

                        <div class="form-group">
                            <label for="mcid_attachment">Attach a Screenshot of Your Issue <span class="optional">(optional &mdash; PNG, JPG, GIF up to 5 MB)</span></label>
                            <input type="file" id="mcid_attachment" name="mcid_attachment" accept="image/png,image/jpeg,image/gif,image/webp">
                        </div>

                        <button type="submit" class="btn btn-accent btn-full">
                            Submit Request
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<style>.char-count{display:block;margin-top:4px;font-size:.85em;color:#888;text-align:right}</style>
<script>
(function(){
    var ta=document.getElementById('mcid_description'),counter=document.getElementById('desc-char-count');
    if(ta&&counter){ta.addEventListener('input',function(){counter.textContent=ta.value.length;});}
})();
</script>

<?php get_footer(); ?>
