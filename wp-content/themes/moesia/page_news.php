<?php

/*

Template Name: Full width

*/
	get_header();
?>



	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php
			if ( get_query_var('paged') ) $paged = get_query_var('paged');  
			if ( get_query_var('page') ) $paged = get_query_var('page');
 
			$query = new WP_Query( array( 'post_type' => 'news', 'paged' => $paged ) );
 
			?>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry">
				<h2 class="title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				
			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

