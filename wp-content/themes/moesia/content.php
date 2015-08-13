<?php
/**
 * @package Moesia
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumb col-md-4 col-sm-4 col-xs-4">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
				<?php the_post_thumbnail('moesia-thumb'); ?>
			</a>			
		</div>	
	<?php endif; ?>


	<?php if (has_post_thumbnail()) : ?>
		<?php $has_thumb = "col-md-8 col-sm-8 col-xs-8"; ?>
	<?php else : ?>
		<?php $has_thumb = ""; ?>
	<?php endif; ?>

	<div class="post-content <?php echo $has_thumb; ?>">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php moesia_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php if ( (get_theme_mod('full_content') == 1) && is_home() ) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->