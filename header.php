<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="Shortcut Icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/favicon.ico" />


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<head>
<meta name="description" content="<?php bloginfo('description');?>">
<meta name="keywords" content="">
<meta name="author" content="<?php bloginfo('name');?>">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php bloginfo('name');?>" />
<meta property="og:description" content="<?php bloginfo('description');?>" />
<meta property="og:site_name" content="<?php bloginfo('name');?>" />
<meta property="og:image" content="" />


<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/libs/modernizr-1.7.min.js" type="text/javascript"></script>
 



<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head();?>

<!--
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.isotope.sloppy-masonry.min.js"></script>
-->



  

</head>


          
<body <?php body_class(); ?> onload="initialize()">

<div class="twatdetector"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=135909153087999";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div class="description"><?php bloginfo('description');?></div>


<header>


	
		


<nav class="navbar navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('home');?>">
    	<img class="navbar-brand-icon" src="<?php bloginfo('stylesheet_directory')?>/images/icon.png" alt="<?php bloginfo('name');?>" title="" />
    	<img class="navbar-brand-logo" src="<?php bloginfo('stylesheet_directory')?>/images/logo.png" alt="<?php bloginfo('name');?>" title="" />
&nbsp;

    	</a>
   


  </div>



<div id="navbar-collapse-1" class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
	<?php
	wp_nav_menu( array(
		'menu'				=> 'main',
		'theme_location'	=> 'primary',
		'depth'				=> 2,
		'container'			=> 'false',
		'container_class'	=> '',
		'container_id'		=> 'navbar-collapse-1',
		'menu_class'		=> 'nav navbar-nav',
		'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
		'walker'			=> new wp_bootstrap_navwalker())
	);
?>

<!--
 <ul class="nav navbar-nav navbar-right">
 <li> <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter "></i> </a></li>  
 <li> <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook "></i> </a></li>   
</ul>
-->


</div>
</div>
</nav>       



</header>


