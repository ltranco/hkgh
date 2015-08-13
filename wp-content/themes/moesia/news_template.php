<?php /* Template Name: News Template */
	get_header();
?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">
<?php 
    query_posts(array( 
        'post_type' => 'portfolio',
        'showposts' => 10 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
<?php endwhile;?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

