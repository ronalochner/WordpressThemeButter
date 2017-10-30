<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part('template-parts/head'); ?>
	<?php wp_head(); ?> <!--This makes sure wordpress has the final say later when we want to include more stuff-->
</head>

<body class="twelve columns">
   <div id="landing-page" class="row"> 
       <nav onclick="location.href='#';" style="cursor: pointer;">
			<?php wp_nav_menu( array(
			     'theme_location' => 'menu-3',
			     'menu_id'        => 'tertiary-menu'
							) );
							?>
      </nav><!-- #primary -->  
   </div>
   <div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'butter' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'butter' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'butter' ), 'butter', '<a href="http://www.ronalochner.com">Rona Lochner</a>' );
					?>
				</div><!-- .site-info -->
   <?php wp_footer(); ?>   
</body>
