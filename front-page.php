<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php
        $rnd_post = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1' ) );
        ?>

		<?php if ( $rnd_post->have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $rnd_post->have_posts() ) : $rnd_post->the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'quote' ); ?>

			<?php endwhile; ?>

            <?php 
            wp_reset_postdata();
            ?>

            <div class="new-quote-button">
                <button type="button" id="new-quote-button">Show Me Another!</button>
            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
