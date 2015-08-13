<?php
/**
 * The template for displaying all single posts.
 *
 * @package Moesia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( !is_singular( 'projects' ) ): ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'project' ); ?>
			<?php endif; ?>	


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>