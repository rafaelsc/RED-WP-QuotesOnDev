<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-archive post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title">— ', esc_url( get_permalink() ) ), '</h2>' ); ?>
	</footer><!-- .entry-header -->

</article><!-- #post-## -->
