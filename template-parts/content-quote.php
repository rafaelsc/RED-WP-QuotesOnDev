<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-header">
		<span class="entry-title">— 
		<?php the_title( sprintf( '<span class="entry-title-text">', esc_url( get_permalink() ) ), '</span>' ); ?>
		</h2>
	</footer><!-- .entry-header -->

</article><!-- #post-## -->
