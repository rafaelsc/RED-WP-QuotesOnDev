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

				<form id="submit-post">
					<fieldset>
						<label>Author of Quote</label>
						<input id="author" type="text" required="required"/>
					</fieldset>
					<fieldset>
						<label>Quote</label>
						<textarea id="quote" required="required" rows="4"></textarea>
					</fieldset>
					<fieldset>
						<label>Where did you find this quote? (e.g. book name)</label>
						<input id="source" type="text" />
					</fieldset>
					<fieldset>
						<label>Provide the URL of the quote, if available.</label>
						<input id="url" type="url"/>
					</fieldset>
				
					<button id="submit-quote" type="submit">Submit quote</button>
				</form>

			<?php else : ?>

				<p><?php echo esc_html( 'Sorry, you must be logged in to submit a quote!' ); ?></p>

				<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" alt="<?php esc_attr_e( 'Login', 'textdomain' ); ?>">
					Click here to login.
				</a>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
