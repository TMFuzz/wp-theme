<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<title>         <?php 
			global $page, $paged;
			wp_title('|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ($site_description && (is_home() || is_front_page() ) );
				echo " | $site_description";
			if ($paged >= 2 || $page >+ 2)
				echo ' | ' . sprintf(__( 'Page %s' ), max( $paged, $page ) ); 
				?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ) ?>"/>
<link rel="pingback" href="<?php ploginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript">
</script>
<![endif]-->
<?php if ( is_singular() && get-option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body
<?php body_class(); ?>>
<div id-"outerWrapper">
	<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="./index"><img alt="alt_example" src="./images/logo.png"  /></a>
     <div id="social_ctn"> 
      
      <a class="social_t"><img alt="alt_example" src="./images/social_tleft.png" /></a> 
  
          
	  <a href="http://www.facebook.com/pages/Fuzzy-Frontier/516733525015207?fref=ts"  target="_blank" id="facebook"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a> 
      <a href="https://twitter.com/FuzzyFrontier" id="twitter" target="_blank"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a>  
      <a href="https://plus.google.com/114731741777954877476/posts" id="google_plus" target="_blank"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a>
      <a href="http://www.youtube.com/channel/UCFX8hD-WGI3euiNjgCdv2qA" id="you_tube" target="_blank"><img alt="alt_example" src="./images/blank.gif" width="100%" height="37px" /></a> 
    
      <a class="social_t" ><img alt="alt_example" src="./images/social_tright.png" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in"> 
    
    <!--********************************************* Mainmenu Start *********************************************-->
<!--#include file="ssi/menu.txt" -->
    <header>
	 <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo
	 ('name'); ?></a></h1>
     <nav id="menu_wrapper," class="mainMenu">
         <?php wp_nav_menu(); ?>
       
     </nav>
    </header>
