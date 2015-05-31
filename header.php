<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>

  <!-- Main Container -->
  <main class="container container--sm">
    <header class="header">

      <!-- Logo -->
      <a class="header__logo fl" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

      <!-- Navigation -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <!-- Form -->
      <form role="search" method="get" id="searchform" class="float--right" action="<?php echo home_url( '/' ); ?>">
        <input type="text" class="input input--search input--header" placeholder="Search..." name="s" id="s" />
      </form>
    </header>

