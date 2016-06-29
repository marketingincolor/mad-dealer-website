<!DOCTYPE html>
<?php global $language; ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?></title>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?v=' . filemtime( get_stylesheet_directory() . '/css/style.css' ); ?>" type="text/css" media="screen" />
	<link href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" rel="stylesheet" media="print" />
	<!--[if IE]><link href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" rel="stylesheet" media="all" /><![endif]-->
	<?php wp_head(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
</head>

<body class="<?php base_body_class(); ?>">
<div id="content"><!--//start #content -->
<div class="background"><!--// start #background -->
	<div class="background-graphic"></div>
<div class="container"><!--// start #container -->

	<div class="branding">
		<a href="<?php print get_option("home"); ?>"><?php print get_bloginfo("name"); ?></a>
	</div>

	<div id="lang_flag_sel"><?php language_selector_flags(); ?></div>

	<?php if ( $language != 'chinese' ): ?>
		<div class="search">
			<?php require_once(TEMPLATEPATH . "/searchform.php"); ?>
		</div>
	<?php else: ?>
		<div class="tagline">
			<span>中國</span>
		</div>
	<?php endif; ?>

	<div class="utility">

	</div>

	<div class="menu" id="dave">
		<ul>
			<?php
                wp_nav_menu( array(
                    'menu' => 'primary',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'items_wrap' => '%3$s',
					'depth' => 3,
                    'walker' => new Madico_Custom_Walker_Menu()
                ) );
			?>
		</ul>
	</div>

<div class="page"><!--// start #page -->
