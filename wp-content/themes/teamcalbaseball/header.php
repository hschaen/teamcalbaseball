<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo ('template_url' ); ?>/styles/fonts.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo ('template_url' ); ?>/styles/jquery.bxslider.css" type="text/css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet/less" href="<?php bloginfo ('template_url' ); ?>/less/tcb.less" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="http://cdn.kendostatic.com/2013.3.1119/js/kendo.web.min.js"></script>
	<script src="<?php bloginfo ('template_url' ); ?>/js/less-1.6.1.min.js"></script>
	<script src="<?php bloginfo ('template_url' ); ?>/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo ('template_url' ); ?>/js/jquery.marquee.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.marquee').marquee({
		  duration: 10000,
		   pauseOnHover: true,
		});
		$('.sponsors').bxSlider({
			minSlides:  4,
			slideWidth: 210,
		});
	});
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47989106-1', 'teamcalbaseball.com');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header>
			<div class="pageTitle">
				<h1>Team California Baseball</h1>
			</div>
			<?php if (!is_page( array(22, 57, 63, 65, 67, 224, 226, 228, 230)) ) { ?>
			<div id="headerImage"><img src="/wp-content/themes/teamcalbaseball/images/headerImage2.png"></div>
			<?php } else { ?>
			<div id="headerImage"><img src="/wp-content/themes/teamcalbaseball/images/headerImage.png"></div>
			<?php } ?>
			<div class="twitterLink"><a href="https://twitter.com/teamcalbaseball" target="_blank"><img src="/wp-content/themes/teamcalbaseball/images/twitterLink.png"></a></div>
		</header>
		<section id="ticker">
		<?php get_template_part('ticker'); ?>
		<!-- <div class="popout">
			<a class="button" href="#" onclick="javascript:void window.open('http://harrisonschaen.com/teamcalbaseball/ticker/','tickerWindow','width=990,height=110,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0');return false;">

				Popout

			</a>
				</div>-->
			</div>
		</div> 
		</section>
		<nav id="primary-navigation" class="site-navigation primary-navigation tcbNav" role="navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu tcbNav' ) ); ?>
		</nav>