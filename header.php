<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

        <!-- ******************* The Navbar Area ******************* -->
        <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
          'understrap' ); ?></a>

                <nav class="navbar navbar-toggleable-sm  bg-primary">

                <?php if ( 'container' == $container ) : ?>
                        <div class="container">
                <?php endif; ?>

                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                  <span>☰</span>
                                </button>

                                                        <a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="10rem" height="auto" viewBox="0 0 960 960" enable-background="new 0 0 960 960" xml:space="preserve">
    <g>
            <g>
                    <path fill="#333333" d="M248,534.787c0,8.256,0.081,17.228-0.537,26.914c-0.62,9.697-2.184,18.67-5.067,26.915
                            c-2.892,8.247-7.323,15.155-13.512,20.723c-6.186,5.57-14.8,8.35-25.935,8.35c-10.729,0-20.297-3.706-28.745-11.139
                            c-8.458-7.42-13.288-16.482-14.526-27.217l-88.459,21.65c7.007,35.062,22.477,60.849,46.401,77.332
                            c23.915,16.493,53.202,24.751,87.853,24.751c29.693,0,53.717-4.441,72.073-13.303c18.347-8.861,32.479-20.621,42.376-35.264
                            c8.588-12.699,14.373-27.032,18.15-42.991L248,309.146V534.787z"/>
                    <polygon fill="#333333" points="345,254 340.818,254 345,271.87 		"/>
                    <path fill="#2B2B2B" d="M345,545.31V271.87L340.818,254H248v55.146l90.072,302.362c0.576-2.438,1.156-4.91,1.621-7.425
                            C343.192,585.114,345,565.517,345,545.31z"/>
            </g>
            <path fill="#333333" d="M247.973,253.912h108.425l72.067,289.554h1.279l94.389-289.554h92.48l93.754,297.213h1.276l75.897-297.213
                    h100.768l-132.02,451.555h-88.654L568.14,392.949h-1.274l-99.493,312.518h-85.465L247.973,253.912z"/>
            <polygon fill="#2B2B2B" points="566.865,392.949 524.133,253.912 524.133,253.912 560.373,413.345 	"/>
            <polygon fill="#2B2B2B" points="756.289,705.467 717.949,524.557 710.367,551.125 756.289,705.467 	"/>
            <polyline fill="#333333" points="338.072,611.509 247.973,253.912 248,338 337.199,615.012 	"/>
    </g>
  </svg>
</a>

                                <!-- The WordPress Menu goes here -->
<?php wp_nav_menu(
  array(
    'theme_location'  => 'primary',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarNavDropdown',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => '',
    'menu_id'         => 'main-menu',
    'walker'          => new WP_Bootstrap_Navwalker(),
  )
); ?>
                        <?php if ( 'container' == $container ) : ?>
                        </div><!-- .container -->
                        <?php endif; ?>

                </nav><!-- .site-navigation -->

        </div><!-- .wrapper-navbar end -->
