<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
 <div class="social">
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'social'
    )); ?>
  </div>
  <div class="container">

 <div class="triangle">
   <img src="<?php echo bloginfo('template_url'); ?>/assets/triangledark.png" alt=""> 
 </div>
    <p><?php bloginfo( 'description' ); ?></p>
    <h1 class="siteTitle">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
  </div> <!-- /.container -->
   <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?> 
</header><!--/.header-->

