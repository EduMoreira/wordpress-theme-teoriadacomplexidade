<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php

	global $post;
	$pages = get_field('page_title_and_meta_description', 'options');

	if($pages) {

		$found = false;

		foreach ($pages as $page) {
					
			$object = $page['page'][0];

			if ($object == $post) {
				echo '<meta name="description" content="' . $page['page_meta_description'] . '">';
				echo '<title>' . $page['page_title'] . '</title>';
				$found = true;
			}
		}

		if (!$found) {
			echo '<meta name="description" content="' . get_bloginfo('description') . '">';
			echo '<title>' . get_bloginfo('name') . '</title>';
		}
	}

	?>
	<?php wp_head(); ?>
	<link href='<?php bloginfo('template_url'); ?>/css/justifiedGallery.min.css' rel='stylesheet' type='text/css'>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-57x57.png?v=2">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-60x60.png?v=2">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-72x72.png?v=2">
	<link rel="apple-touch-icon" sizes="76x76" href="/<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-76x76.png?v=2">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-114x114.png?v=2">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-120x120.png?v=2">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-144x144.png?v=2">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-152x152.png?v=2">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-180x180.png?v=2">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-32x32.png?v=2" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/android-chrome-192x192.png?v=2" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-96x96.png?v=2" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-16x16.png?v=2" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/manifest.json?v=2">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/favicons/safari-pinned-tab.svg?v=2" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Teoria da Complexidade">
	<meta name="application-name" content="Teoria da Complexidade">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicons/mstile-144x144.png?v=2">
	<meta name="theme-color" content="#000000">
	<meta name="description" content="<?php echo get_option('seo-meta-description') ?>">
	<!--Google-->
	<meta name="description" content="<?php the_field('descript'); ?>">
    <title><?php the_title(); ?></title>
	<!--/Google-->
	<!--Facebook-->
    <meta property="og:title" content="<?php the_title(); ?>"/>
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Teoria da Complexidade"/>
    <meta property="og:image" content="<?php the_field('cover'); ?>"/>
	<!--Facebook-->
</head>
<body>
	<div id="header">
	<!--<div class="inscription"><button type="media" data-toggle="modal" data-target="#inscrever">Inscrever-se</button></div>-->
	<?php
			if (is_front_page()) {
				wp_nav_menu(["theme_location"  => "home-menu", "container_class" => "menu mobile"]);
				wp_nav_menu(["theme_location"  => "home-menu", "container_class" => "menu non-mobile"]);
			} else {
				wp_nav_menu(["theme_location"  => "inner-menu", "container_class" => "menu mobile"]);
				wp_nav_menu(["theme_location"  => "inner-menu", "container_class" => "menu non-mobile"]);
			}
            global $post;
			$pages = get_field('page_title_and_meta_description', 'options');

			if($pages) {

				$found = false;

				foreach ($pages as $page) {
					
					$object = $page['page'][0];

					if ($object == $post) {
						echo '<meta name="description" content="' . $page['page_meta_description'] . '">';
						echo '<title>' . $page['page_title'] . '</title>';
						$found = true;
					}
				}

				if (!$found) {
					echo '<meta name="description" content="' . get_bloginfo('description') . '">';
					echo '<title>' . get_bloginfo('name') . '</title>';
				}
			}
		?>
		<a href="<?php echo home_url(); ?>" class="logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" class="white" alt="Teoria da Complexidade"/>
			<img src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" class="black" alt="Teoria da Complexidade"/>
		</a>		
		<button id="menu-button">
			<span class="lines-container">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</span>
		</button>
	</div>