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
		<h2 class="entry-title">
			— <?php the_title( sprintf( '<span class="entry-title-text">', esc_url( get_permalink() ) ), '</span>' ); ?>
			<span class="entry-reference">
			<?php
				$source = get_post_meta(get_the_ID(),'_qod_quote_source' );
				$source_url = get_post_meta(get_the_ID(),'_qod_quote_source_url' );
				if ($source) {
					$source = $source[0];
					if ($source_url) {
						$source_url = $source_url[0];
						echo ', <a href="' . $source_url . '" target="_blank">' . $source . '</a>'; //TODO Escape
					}
					else {
						echo ', ' .$source; //TODO Escape
					}
				}
			?>
			</span>
		</h2>
	</footer><!-- .entry-header -->

</article><!-- #post-## -->
