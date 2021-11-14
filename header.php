<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- ======= Navigation ======= -->
  <div id="toggle-button" class="toggle-button">
    <div class="wrapper">
      <div class="menu-bar menu-bar-top"></div>
      <div class="menu-bar menu-bar-middle"></div>
      <div class="menu-bar menu-bar-bottom"></div>
    </div>
    <div class="hover-btn-menu"></div>
  </div>

  <div id="sidebar" class="sidebar">
    <div class="inner-port">
      <?php
      wp_nav_menu(array(
        'theme_location'    => 'main-menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'navbar-menu-close',
        'container_id'      => 'navbar-menu-close',
        'menu_class'        => 'navbar-nav flex-row d-flex justify-content-around',
      ));
      ?>
      <?php
      if (function_exists('the_custom_logo')) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
      }
      ?>
      <a class="navbar-brand" href="#">
        <img src="<?php echo $logo[0]; ?>" alt="logo" width="auto" height="50">
      </a>
    </div>
  </div>
  
  <div id="inner-sidebar" class="inner-sidebar">

    <?php
    wp_nav_menu(array(
      'theme_location'    => 'main-menu',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'navbar-menu',
      'container_id'      => 'navbar-menu',
      'menu_class'        => 'navbar-nav menu-list',

    ));
    ?>
    <div class="footer-navbar pt-4 pb-4">
      <div class="container-fluid">
        <div class="row">
          <?php if (is_active_sidebar('footer-sidebar')) { ?>
            <?php dynamic_sidebar('footer-sidebar'); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- End Navigation -->