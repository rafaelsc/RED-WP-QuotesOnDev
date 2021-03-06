<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'quote' ); ?>

		<?php endwhile; // End of the loop. ?>


			<div class="new-quote-button">
				<button type="button" id="new-quote-button">Show Me Another!</button>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
