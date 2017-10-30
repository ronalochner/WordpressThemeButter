<?php
/* Header Yo!
- @link https://developer.wordpress.org/themes/basics/template-- files/#template-partials
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part('template-parts/head'); ?>
	<?php wp_head(); ?> <!--This makes sure wordpress has the final say later when we want to include more stuff-->
</head>

<body <?php body_class(); ?>>
		
	<!-- This takes over the #page function I deleted container that includes the header, content and footer, seperately.-->
		<div class="header-area full"> <!-- Header container-->
			<div class="main-page" > <!-- whole "container" -->
				
				
					<!-- Ignore skiplink for now-->
					<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'butter' ); ?></a> 
					
				
					<!-- This is where we structure the content that is fed-->
					<header id="masthead" class="site-header inner">
								<div class="site-branding row">
									<div class="twelve columns">
										<?php
										the_custom_logo();
										if ( is_front_page() && is_home() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php
										endif;

										$description = get_bloginfo( 'description', 'display' );
										if ( $description || is_customize_preview() ) : ?>
											<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
										<?php
										endif; ?>
									</div>
								</div><!-- .site-branding -->
								<div class="row">
									<nav id="site-navigation" class="main-navigation twelve columns">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'butter' ); ?></button>
										<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu'

											) );
										?>
									</nav>
								</div><!-- #site-navigation -->
				
								<div class="row">	
									<div class="featured-image-1 three columns">
										<?php if ( has_post_thumbnail() ) : ?>
											<img src="<?php the_post_thumbnail_url(); ?>"/>
										<?php endif; ?>
									</div>
								</div>
							
					</header><!-- #masthead -->
				</div><!-- /whole "container" -->
			</div><!-- /Header container-->		
	
		
		<div class="main-content-area full"> <!-- content; "container" = content-area-->
			<div class="main-page"> <!-- Content "container" -->
				<div id="content" class="site-content inner row">
				

				
				
				
				
				
				
				
				
				
				