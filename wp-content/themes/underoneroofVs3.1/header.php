<!DOCTYPE>
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	
		<head profile="http://gmpg.org/xfn/11">
			
			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			
			<title>
				<?php if (is_home () ) { echo bloginfo('name'); echo ' | '; bloginfo('description'); }
					elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }
					elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }
					else { wp_title(' | ',true); } 
				 ?>
			</title>
		
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
			
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/scripts/nivo-slider.css" media="screen" />	
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/themes/default/default.css" type="text/css" media="screen" />
			
			<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
			<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			
			<?php wp_head(); ?>
		</head>
		<body>
			<div class="Main">
				<div class="page_template">
					<!-- HEADER -->
					<div id="header">
						<div class="head">
							<!-- LOGO -->
							<div id="logo" class="logo">
								<a href="<?php echo get_settings('home');?>">	
									<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="UnderOneRoof" />
								</a>
							</div>
							<!-- NAV SUP -->
							<div id="top-menu">
								
								<?php wp_nav_menu(
									array(
									'container'		=> false,
									'items_wrap' 	=> '<ul id="menu-top2">%3$s</ul>',
									'theme_location'=> 'menu-top2',
								)); ?>
								<ul class="middle">
									<li class="left sep"><img src="<?php bloginfo('template_url'); ?>/images/separator.jpg" alt="UnderOneRoof"></li>
									<li class="left"><a href="http://www.twiiter.com/underoneroof"><img src="<?php bloginfo('template_url'); ?>/images/twiitertop.jpg" alt="UnderOneRoof"></a></li>
								</ul>
								<?php wp_nav_menu(
									array(
									'container'		=> false,
									'items_wrap' 	=> '<ul id="menu-top1">%3$s</ul>',
									'theme_location'=> 'menu-top1',
								)); ?>								
								
							</div>
							<!-- TITLE PAGE -->
							<div class="titlepage">
								<h1>
									<a href="<?php echo get_settings('home');?>">
										<?php bloginfo('name'); ?>
									</a>
									<span class="description">Building<br> Progress.</span>
								</h1>
							</div>
							<!-- MAIN NAV -->
							<div class="nav">
								<?php wp_nav_menu( 
									array(
									'container'		=> false,
									'items_wrap' 	=> '<ul id="menu">%3$s</ul>',
									'theme_location'=> 'menu',
								)); ?>
							</div>
						</div>
					</div>
					<!-- CONTEND -->
					<div id="content">
						<div class="contend">
							<div class="g12">
								<!-- BAR NAVIGATION -->
								<div id="bar_navigation">
									<p>
										<b>
											<?php 
												if (class_exists('breadcrumb_navigation_xt')) 
												{	
													$mybreadcrumb = new breadcrumb_navigation_xt;
													// Options for breadcrumb_navigation_xt
													$mybreadcrumb->opt['title_blog'] = 'HOME';
													$mybreadcrumb->opt['separator'] = ' / ';
													$mybreadcrumb->opt['singleblogpost_category_display'] = true;
													// Display the breadcrumb	
													$mybreadcrumb->display();
												} 
											?>									
										</b>
									</p>
								</div>
							