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
	<link rel="stylesheet/less" href="<?php bloginfo ('template_url' ); ?>/less/tcbTicker.less" type="text/css">

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
			minSlides:  6,
			slideWidth: 200,
		});
	});
	</script>
</head>

<body <?php body_class(); ?>>