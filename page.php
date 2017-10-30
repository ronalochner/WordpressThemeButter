<?php
/**
 - The template for displaying all pages */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header"> 
					<?php the_title( '<h3>', '</h3>' ); ?>
					<div class="aside-image" style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0] ?>')"></div>
				</header>
				<div class="row">
					<div class="twelve columns">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if ( is_active_sidebar( 'page-1' ) ) { ?>
						<div class="four columns">
							<?php dynamic_sidebar( 'page-1' ); ?>
						</div>
					<?php } ?>
					<?php if ( is_active_sidebar( 'page-2' ) ) { ?>
					<div class="four columns">
						<?php dynamic_sidebar( 'page-2' ); ?>
					</div>
					<?php } ?>
					<?php if ( is_active_sidebar( 'page-3' ) ) { ?>
					<div class="four columns">
						<?php dynamic_sidebar( 'page-3' ); ?>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<?php if ( is_active_sidebar( 'page-4' ) ) { ?>
					<div class="twelve columns">
						<div id="page-widget-area">
							<?php dynamic_sidebar( 'page-4' ); ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</article>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();