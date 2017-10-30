<?php
/*
- The template for displaying the footer
- Contains the closing of the #content div and all content after.
- @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
			</div><!-- #content -->
		</div><!-- /Main Page -->
	</div><!-- /Main Content Area -->

	<div class="footer-area full"> <!-- Footer; "container" = Footer-area-->
		<div class="main-page"> <!-- Footer "container" -->
			<footer id="colophon" class="site-footer inner">
				<nav id="site-navigation" class="main-navigation footer-menu">
					<?php wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu'

							) );
							?>
				</nav><!-- #site-navigation -->
				<div class="row">	
					<div class="featured-image three columns">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url(); ?>"/>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">	
					<div class="site-info">
						<div><a href=""><h5>EMAIL : JESSICA@BUSINESS.COM</h5></a></div>
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
				</div>		
			</footer><!-- #colophon -->
		</div>
	</div>		


<?php wp_footer(); ?>

</body>
</html>
