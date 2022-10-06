<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	  

	<!-- Favicon -->
    	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png"> 
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
	
  <!-- iso dark mode -->
  <meta name="color-scheme" content="light dark">
  <meta name="supported-color-schemes" content="light dark">
  <!-- iso dark mode -->

  <!-- icon -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet">


  <!-- font -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/poppins/poppins-font.css" rel="stylesheet">  
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header> 
<!-- top-section Start -->
<div class="top-section" id="myHeader">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
          <div class="logo">		  
		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" class="img-fluid" alt=""/>
					</a>
		  </div>
        </div>
        <div class="col-md-7">
          <div class="top-menu">         
            <?php
wp_nav_menu( array(
  'theme_location' => 'primary',
  'menu_id'     => '',  
	'menu_class'     => 'menu',
'container' => '' //Remove the Menu Container DIV

) );
?>          
          </div>
          <div class="mobile-menu">
            <a href="javascript:void(0)" class="main-menu" onclick="openNav()">
              <span class="hide-xs-mobile"></span> <i class="fa fa-bars"></i></a>
          </div>
        </div>        
    </div>
  </div>
</div>
<!-- top-section End -->
</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
wp_nav_menu( array(
  'theme_location' => 'primary',
  'menu_id'     => '',  
	'menu_class'     => 'menu',
'container' => '' //Remove the Menu Container DIV

) );
?> 
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>