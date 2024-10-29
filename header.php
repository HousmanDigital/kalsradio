<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housmanSEO
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
    <header id="masthead" class="site-header">
      <nav class="flex items-center justify-between flex-wrap bg-gray-800 py-10 px-16 w-full z-10 top-0 shadow-lg">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <a class="text-white no-underline hover:text-white hover:no-underline" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
            <div class="site-branding">
              <?php the_custom_logo(); ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="site-title font-bold text-xl" role="heading" aria-level="1">
                  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1>
              <?php else : ?>
                <p class="site-title font-semibold text-lg">
                  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </p>
              <?php endif; ?>
              <?php
              $housman_seo_description = get_bloginfo('description', 'display');
              if ($housman_seo_description || is_customize_preview()) : ?>
                <p class="site-description text-gray-400"><?php echo esc_html($housman_seo_description); ?></p>
              <?php endif; ?>
            </div>
          </a>
        </div>

        <div class="block lg:hidden">
          <button id="nav-toggle" class="flex items-center px-3 py-2 text-gray-400 hover:text-white focus:outline-none" aria-label="Toggle Menu">
            <svg class="fill-current h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 6h18M3 12h18m-18 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <div class="w-full flex-grow lg:flex-end lg:items-center lg:w-auto hidden lg:block transition-all duration-300 ease-in-out" id="nav-content">

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
          ?>

        </div>
      </nav>
    </header>