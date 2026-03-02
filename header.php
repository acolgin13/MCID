<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MyCourseID - Authentication Solutions. Online proctoring, identity verification, and participation monitoring.">
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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php if ( is_front_page() ) echo ' class="active"'; ?>>Home</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"<?php if ( is_page( 'services' ) ) echo ' class="active"'; ?>>Services</a>
            <a href="<?php echo esc_url( home_url( '/security/' ) ); ?>"<?php if ( is_page( 'security' ) ) echo ' class="active"'; ?>>Security</a>
            <div class="nav-cta">
                <a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>" class="btn btn-accent btn-sm">Get a Demo</a>
            </div>
        </nav>
    </div>
</header>

<main id="main-content">
