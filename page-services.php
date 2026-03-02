<?php
/**
 * Template Name: Services
 * Services page — product features, reporting, and FAQ.
 */
get_header();
$demo_url   = esc_url( get_theme_mod( 'mcid_cta_url', home_url( '/demo/' ) ) );
$video_url  = get_theme_mod( 'mcid_product_video', '' );
$security_url = esc_url( home_url( '/security/' ) );
?>

<!-- ==================== HERO: Text + Video ==================== -->
<section class="services-hero">
    <div class="container">
        <div class="services-hero-layout">
            <div class="services-hero-text reveal">
                <span class="text-label">Services</span>
                <h1>Proctoring built with integrity and designed by educators</h1>
                <p>One price for all features where instructors can choose what they want enabled in the classroom.</p>
                <a href="<?php echo $demo_url; ?>" class="btn btn-accent">
                    Request a demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <div class="services-hero-video reveal reveal-d1">
                <div class="video-wrap">
                    <?php if ( $video_url ) : ?>
                        <video autoplay muted loop playsinline>
                            <source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
                        </video>
                    <?php else : ?>
                        <div class="video-placeholder">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:48px;height:48px;color:var(--text-tertiary)"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Upload product video via Customizer</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SETTINGS & FEATURES ==================== -->
<section class="section" id="features">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="text-label">Settings &amp; Features</span>
            <h2>Modify the rigor of your proctoring to match your exam needs</h2>
        </div>

        <div class="feature-grid reveal">
            <!-- AI and Device Detection -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h4>AI and Device Detection</h4>
                <p>Our AI Detection tracks all instances (Claude, ChatGPT, Gemini, Lens, etc.) and alerts when any unapproved outside device, AirPods, notes, etc. are in use.</p>
            </div>

            <!-- Screen & Session Checks -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h4>Screen &amp; Session Checks</h4>
                <p>Instantly track movement outside of exam, additional monitors, software usage, intentional disconnects, or disabling of verification tools.</p>
            </div>

            <!-- Complete Environment Monitoring -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <h4>Complete Environment Monitoring</h4>
                <p>Camera view, impersonation, devices, headphones, room behavior tracked throughout every exam session.</p>
            </div>

            <!-- Testing Controls -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h4>Testing Controls</h4>
                <p>Blocks copy/paste, tabs, printing, and restricts browsing behavior to maintain exam integrity.</p>
            </div>

            <!-- Platform Customization -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4>Platform Customization</h4>
                <p>Choose settings, save presets, and instantly review exam feedback to match the specific needs of each assessment.</p>
            </div>

            <!-- Identity Verification -->
            <div class="feature-card">
                <div class="feature-card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h4>Identity Verification</h4>
                <p>ID verification, face detection, and full webcam/screen recording to ensure every test taker is who they say they are.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== DETAILED REPORTING ==================== -->
<section class="section" id="reporting" style="padding-top: 0;">
    <div class="container">
        <div class="reporting-layout">
            <div class="reporting-text reveal">
                <span class="text-label">Reporting</span>
                <h2>Detailed Reporting, Notes &amp; Video on each Test Taker</h2>
                <p class="reporting-subtitle">Instantly available</p>
                <p>Admins have immediate access to all exam sessions with time-stamped video and detailed notes on all flags. Every report is instantly sortable and searchable via our &ldquo;Best in Class&rdquo; tracking system. Your time is valuable &mdash; locate what matters in seconds.</p>
                <a href="<?php echo $demo_url; ?>" class="btn btn-primary" style="margin-top: 24px;">
                    See it in action
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="reporting-mockup reveal reveal-d1">
                <div class="results-panel">
                    <div class="results-panel-header">
                        <h3>Exam Results</h3>
                        <span class="results-panel-meta">Intro to Biology &middot; Final Exam</span>
                    </div>
                    <div class="results-table-head">
                        <span class="rt-col-name">Student</span>
                        <span class="rt-col-flags">Flags</span>
                        <span class="rt-col-status">Status</span>
                        <span class="rt-col-action"></span>
                    </div>
                    <div class="results-table-body" id="results-table">

                        <!-- 1. Mary Davis — 6 flags -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: var(--accent);">MD</span>
                                    Mary Davis
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-high">6</span></span>
                                <span class="rt-col-status"><span class="status-tag status-review">Needs Review</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">3:12:04 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Outside Device</span>
                                            <p>Student used a smartphone for 27 seconds</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">3:18:33 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Outside Application</span>
                                            <p>Student used unauthorized application Microsoft Word for 10 seconds</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">3:24:15 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Browsing Websites</span>
                                            <p>Student viewed unauthorized website for 24 seconds (chat.openai.com)</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-med">
                                        <div class="report-time">3:31:47 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-med">Talking To Others</span>
                                            <p>Student engaged in conversation with another individual</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-med">
                                        <div class="report-time">3:38:22 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-med">Disabled Monitoring</span>
                                            <p>Loud, aggressive rustling and cracking noises detected</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-low">
                                        <div class="report-time">3:42:09 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-low">Left Exam Area</span>
                                            <p>Student stood up and left the camera view for 12 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. James Thompson — 3 flags -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: #4a7c59;">JT</span>
                                    James Thompson
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-med">3</span></span>
                                <span class="rt-col-status"><span class="status-tag status-review">Needs Review</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <div class="report-entry report-entry-med">
                                        <div class="report-time">2:05:18 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-med">Talking To Others</span>
                                            <p>Student appeared to whisper to someone off-screen</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-low">
                                        <div class="report-time">2:22:41 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-low">Left Exam Area</span>
                                            <p>Student left the camera view for 8 seconds</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">2:34:09 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Outside Device</span>
                                            <p>Student picked up a mobile device for 14 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Sophia Chen — 1 flag -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: #6b5b95;">SC</span>
                                    Sophia Chen
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-low">1</span></span>
                                <span class="rt-col-status"><span class="status-tag status-flagged">Flagged</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <div class="report-entry report-entry-low">
                                        <div class="report-time">1:47:33 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-low">Left Exam Area</span>
                                            <p>Student briefly left the camera view for 6 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Daniel Martinez — 0 flags -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: #2d8fa1;">DM</span>
                                    Daniel Martinez
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-clear">0</span></span>
                                <span class="rt-col-status"><span class="status-tag status-clear">Clear</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <p class="no-flags-msg">No flags recorded. Session completed without incidents.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Emily Watson — 4 flags -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: #c4573a;">EW</span>
                                    Emily Watson
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-high">4</span></span>
                                <span class="rt-col-status"><span class="status-tag status-review">Needs Review</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">10:03:12 AM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Browsing Websites</span>
                                            <p>Student navigated to unauthorized website for 18 seconds (google.com)</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">10:11:45 AM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Outside Application</span>
                                            <p>Student opened Apple Notes application for 9 seconds</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-med">
                                        <div class="report-time">10:24:08 AM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-med">Disabled Monitoring</span>
                                            <p>Webcam was obstructed for 15 seconds</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-low">
                                        <div class="report-time">10:38:56 AM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-low">Left Exam Area</span>
                                            <p>Student left the camera view for 11 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Ryan Patel — 2 flags -->
                        <div class="student-row" data-student>
                            <button class="student-row-trigger" aria-expanded="false">
                                <span class="rt-col-name">
                                    <span class="student-avatar" style="background: #3d7068;">RP</span>
                                    Ryan Patel
                                </span>
                                <span class="rt-col-flags"><span class="flag-badge flag-med">2</span></span>
                                <span class="rt-col-status"><span class="status-tag status-flagged">Flagged</span></span>
                                <span class="rt-col-action">
                                    <svg class="row-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </button>
                            <div class="student-row-detail">
                                <div class="detail-inner">
                                    <div class="report-entry report-entry-med">
                                        <div class="report-time">4:15:22 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-med">Talking To Others</span>
                                            <p>Student engaged in brief conversation with another individual</p>
                                        </div>
                                    </div>
                                    <div class="report-entry report-entry-high">
                                        <div class="report-time">4:29:07 PM</div>
                                        <div class="report-entry-body">
                                            <span class="report-tag report-tag-high">Outside Device</span>
                                            <p>Student interacted with a tablet device for 19 seconds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FAQ ==================== -->
<section class="section" id="faq">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="text-label">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-tabs reveal" id="faq-tabs">
            <div class="faq-tab-nav">
                <button class="faq-tab-btn active" data-tab="admin">Exam Admin FAQs</button>
                <button class="faq-tab-btn" data-tab="taker">Test Taker FAQs</button>
            </div>

            <!-- ADMIN FAQs -->
            <div class="faq-panel active" data-panel="admin">
                <div class="accordion" id="faq-admin-accordion">
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>Can I customize MyCourseID&rsquo;s monitoring features to align with the needs of my exam?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Yes! MyCourseID was built to be easily configured around the needs of each instructor (for each of their exams). Through our thoughtful LMS configuration, you&rsquo;ll be allowed to select or deselect only the options that align with the objectives of your exam. If you&rsquo;d like students to have access to select content, outside applications, or websites &ndash; no problem! Just select the information you&rsquo;d like us to make available during their exam and we&rsquo;ll take care of the rest. With a single click you can ensure your students&rsquo; activities during the exam are recorded via screen/webcam, and if you&rsquo;d like to prevent access to sites, printing, copy/pasting, moving away from the screen or leaving the exam &ndash; we&rsquo;ve got you covered.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>What is the process for accessing and viewing a student&rsquo;s exam activity?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Every exam is available for your viewing shortly after being submitted by your student. Based on the criteria you defined, we&rsquo;ll also apply an internal evaluation to view and filter only the most relevant moments for your final review. Each exam submitted by your student is available within your LMS dashboard and is accompanied by our customized filtering tool for easy sorting/viewing. Each instance is timestamped and includes a thoughtful description organized to reveal unique details in relation to flagged moments that could be of interest to you. Our goal is to provide the most thoughtful review process possible, so you can focus on teaching &ndash; not reviewing hours of video.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>How will MyCourseID ensure my students aren&rsquo;t calling me about platform challenges?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Our team is dedicated to supporting you and your students. Our platform is designed to offer a seamless and intuitive experience. As a result, we rarely receive questions related to our software. However, if contacted &ndash; our focus is to treat each student as a priority and troubleshoot their issue to allow them to continue their exam. We offer 24/7 phone and email support and will take the time needed to address questions or walk your students through any challenges.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>How will MyCourseID assist if I have any issue setting up my exam?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Since MyCourseID was designed with instructors in mind, you can instantly connect our service with your exam with the click of a button. This intuitive approach allows instructors to create exams ahead of time and load them into their LMS just like any other assessment. Then, when ready, they can immediately activate MyCourseID with one click. Should a technical issue arise, we offer a dedicated tech support line &amp; email specifically for faculty. This white glove approach ensures instructors are moved to our highest priority so each issue is immediately resolved by phone, Zoom, or email with our technical team.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>Do you have training in place for faculty?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Yes! We provide dedicated training for every instructor via webinars, on-campus or individual sessions. Please contact your account manager to arrange a time that fits your schedule. Most training sessions are conducted via Zoom and typically take less than 20 minutes due to the intuitive nature of our platform. After training, please feel free to contact us at any time to address specific questions or walk through a feature.</p></div></div>
                    </div>
                </div>
            </div>

            <!-- TEST TAKER FAQs -->
            <div class="faq-panel" data-panel="taker">
                <div class="accordion" id="faq-taker-accordion">
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>Will I be watched by a person throughout my exam?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>No! We don&rsquo;t have someone specifically watching you take your exam. Instead, our system monitors your activity during the exam through a recorded AI session that applies a managed and customized foundation around your specific exam. We then immediately review and report any incidents or moments that may be considered a violation to your instructor based on their exam guidelines.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>Will I be expected to show an ID? What forms are acceptable?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>When implemented by your institution, we will evaluate the name and validity of your ID to confirm authenticity. In addition to your driver&rsquo;s license, any government issued ID that includes your photo (e.g. passport, student ID, etc.) is also acceptable. We then take time to evaluate the photo and name on the ID to confirm accuracy prior to entering the exam.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>What equipment is needed to take an exam with MyCourseID?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Throughout your exam our system requires a functioning microphone, webcam, desktop computer or laptop. Chromebooks are accepted, but iPads, tablets, and mobile devices are not accepted when using MyCourseID during an exam. Your microphone and webcam may be integrated or connected as external USB devices.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>How do I start my exam with MyCourseID?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>Our setup process has been designed for ease of use. Just enter your assessment as if you were taking any other exam within your LMS (Canvas, D2L, Moodle, etc.). Then, upon opening the exam we will guide you through the brief steps and immediately launch your exam. At all times, our support team is on standby to assist.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>What if an event takes place that is out of my control?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>We get it! Sometimes events take place during an exam that may be out of your control. Our system has been designed to factor in these unplanned moments (e.g. a dog barking, a doorbell ringing, or similar) and we&rsquo;ll incorporate these unexpected items into our review. Our methodology for blending AI with our internal review process ensures we only document the most relevant exam moments when reporting academic violations. If you are following the exam guidelines and have prepared your testing environment, you should be fine.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>What can I do to prepare before taking my exam?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>In preparation for your exam, please do a quick review of the exam guidelines provided by your instructor, and ensure you are in a well-lit and quiet space. Connect to Google Chrome prior to accessing your exam. It&rsquo;s also a good idea to double-check your internet connection, and make certain your computer is fully charged.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>What should I do if something goes wrong during an exam?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>If you have any issues during your exam, our team is always on standby to assist. Throughout your exam, you&rsquo;ll find our support chat available for easy access, in the event you have a technical issue.</p></div></div>
                    </div>
                    <div class="accordion-item" data-accordion>
                        <button class="accordion-trigger" aria-expanded="false">
                            <div class="accordion-trigger-text"><h4>How does MyCourseID ensure my privacy is protected?</h4></div>
                            <svg class="accordion-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-body"><div class="accordion-body-inner"><p>We take student privacy very seriously. We will never have a need to access any passwords or personal information. Every moment of your exam is immediately encrypted and processed through a series of rigorous industry compliant protocols that ensure only your institution&rsquo;s faculty and our certified team members can evaluate your test session. We then follow the retention policy established by your institution to delete all exam sessions, typically up to 12 months.</p></div></div>
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
