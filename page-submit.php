<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class="entry-title">Submit a Quote</h1>

			<?php if ( current_user_can( 'publish_posts' ) ) : ?>

				<p>Loged - Submit Form</p>
				<!-- TODO -->

			<?php else : ?>

				<p><?php echo esc_html( 'Sorry, you must be logged in to submit a quote!' ); ?></p>

				<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" alt="<?php esc_attr_e( 'Login', 'textdomain' ); ?>">
					<?php _e( 'Login', 'textdomain' ); ?>
				</a>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
