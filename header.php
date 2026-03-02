<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MyCourseID - Authentication Solutions. Online proctoring, identity verification, and participation monitoring.">
    <?php wp_head(); ?>
</head>
<body <?php body_class( is_front_page() ? 'page-has-dark-hero' : '' ); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <div class="site-logo-text-wrap">
                    <span class="site-logo-text">MyCourseID</span>
                    <span class="site-logo-tagline">Authentication Solutions</span>
                </div>
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
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">Company</a>
                <a href="<?php echo esc_url( home_url( '/security/' ) ); ?>">Security</a>
                <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">News</a>
                <?php
            }
            ?>
            <div class="nav-cta">
                <a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>" class="btn btn-accent btn-sm">
                    Get a demo
                </a>
            </div>
        </nav>
    </div>
</header>

<main id="main-content">
