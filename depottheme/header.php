<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
  <header>
    <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/depot-logo.png" />
      <nav>
        <a href="page.php#menu">Menu</a>
        <a href="#about-us">About Us</a>
        <a href="#hours">Hours</a>
        <a href="#contact-us">Contact Us</a>
      </nav>
    <div class="header-text">
      <strong>Come See Why We're Not Your Typical Coffee Shop</strong>
      <img class="underline" src="<?php bloginfo('template_directory'); ?>/images/white-line.png" />
      <p>Don't feel like you have to take your order to go. Stay to be entertained or showcase your talents on our open mic nights!</p>
    </div>
  </header>
