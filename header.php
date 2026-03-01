<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MyCourseID - Online Proctoring Simplified. The most efficient and user-friendly proctoring solution on the market.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="site-logo-text">My<span>CourseID</span></span>
            <?php endif; ?>
        </a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav" id="main-nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new MCID_Nav_Walker(),
                ) );
            } else {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active">Home</a>
                <a href="#services">Services</a>
                <a href="#trust">Compliance</a>
                <a href="#integrations">Integrations</a>
                <a href="/blog">Blog</a>
                <?php
            }
            ?>
            <div class="nav-cta">
                <a href="<?php echo esc_url( get_theme_mod( 'mcid_cta_url', '#contact' ) ); ?>" class="btn btn-primary btn-sm">
                    Book a Demo
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </nav>
    </div>
</header>

<main id="main-content">
