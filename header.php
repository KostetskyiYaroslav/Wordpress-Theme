 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
  <title><?php bloginfo('title'); ?></title>
  <link  href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link  href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) . '/js/jquery-2.2.2.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) . '/js/materialize.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) . '/js/main.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) . '/js/jquery.tooltipster.min.js'; ?>"></script>
  <?php wp_head();?>
 </head>
 <body>
 <nav>
  <div class="nav-wrapper">
   <a href="<?php echo home_url('index.php'); ?>" class="brand-logo">SoftGroup Academy</a>
   <?php wp_nav_menu( array( 'menu_class' => 'menu-top', 'theme_location' => 'menu_top' ) ); ?>
  </div>
 </nav>
 <main>
  <?php if ( is_active_sidebar( 'left_widget_area_1' ) ) : ?>
   <div id="col offset-6 s6" class="left-widget-area" role="complementary">
    <?php dynamic_sidebar( 'left_widget_area_1' ); ?>
   </div><!-- #footer-sidebar -->
  <?php endif; ?>
  <?php if ( is_active_sidebar( 'right_widget_area_1' ) ) : ?>
   <div id="col offset-6 s6" class="right-widget-area" role="complementary">
    <?php dynamic_sidebar( 'right_widget_area_1' ); ?>
   </div><!-- #footer-sidebar -->
  <?php endif; ?>
  <div class="container">
   <div class="page-content home-page col s6 m6 l4 offset-m4">
    <div class="row card-panel center grey lighten-5 z-depth-1 center">
     <div class="row">
      <?php
          do_action('protection_from_no_authorized');
      ?>
