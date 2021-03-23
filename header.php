<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package byk_themetitle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'byk_namespace'); ?></a>

    <header id="masthead" class="site-header">
      <div class="wrapper">
        <div class="site-branding">
          <?php

          if (is_front_page() && is_home()) :
          ?>
          <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
              rel="home"><?php bloginfo('name'); ?></a></h1>
          <?php
          else :
          ?>
          <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
              rel="home"><?php bloginfo('name'); ?></a>
          </p>
          <?php
          endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
          ?>





        </nav><!-- #site-navigation -->

      </div>

    </header><!-- #masthead -->