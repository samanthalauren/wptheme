<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Allura|Dawning+of+a+New+Day|Homemade+Apple|Josefin+Sans:400,600,300italic|Raleway:400,200,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
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
 <!--  <img src="<?php //echo bloginfo('template_url'); ?>/assets/brushstroke.jpg" alt="">   -->
    <h1 class="siteTitle">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?> 
  </div> <!-- /.container -->
</header><!--/.header-->

