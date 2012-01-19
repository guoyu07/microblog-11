<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<title><?php display_meta_title( ); ?></title>
	<meta description="<?php bloginfo( 'description' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all and (max-width: 800px)" href="<?php bloginfo( 'template_directory' ); ?>/css/1024.css" />
	<link rel="stylesheet" type="text/css" media="all and (min-width: 1600px)" href="<?php bloginfo( 'template_directory' ); ?>/css/full.css" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo( 'rss2_url' ); ?>" title="<?php bloginfo( 'name' ); ?> » Articles" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo( 'comments_rss2_url' ); ?>" title="<?php bloginfo( 'name' ); ?> » Comments" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- Internet Explorer HTML5 enabling code: -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="site-header-wrapper">
		<header id="site-header">
			<hgroup>
				<?php
				/**
				 * Based on work by the WordPress team
				 * @package WordPress
				 * @subpackage Twenty_Ten
				 */
				$heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'h2';
				$subheading_tag = ( is_home() || is_front_page() ) ? 'h2' : 'h3';
				?>
				<<?php echo $heading_tag; ?> id="site-title"><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"><?php bloginfo( 'name' ); ?></a></<?php echo $heading_tag; ?>>
				<<?php echo $subheading_tag; ?> id="tagline"><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>"><?php bloginfo( 'description' ); ?></a></<?php echo $subheading_tag; ?>>
				<p><a href="https://twitter.com/_sthibault" title"Contacter @_sthibault sur Twitter">@_sthibault</a></p>
			</hgroup>
		</header><!-- END site-header -->
	</div><!-- END site-header-wrapper -->
