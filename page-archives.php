<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-archive" role="main">

            <header class="entry-header">
         		<h1 class="entry-title">Archives</h1> 
            </header>
        
            <div class="post_titles clearfix">
                <h2>Quote Authors</h2>
                <ul class="titles-list">
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category' => 0, 'orderby' => 'title',
                        'order' => 'ASC'
                    ) );
                    if ( $posts ) {
                        foreach ( $posts as $post ) :
                            setup_postdata( $post ); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                        endforeach; 
                        wp_reset_postdata();
                    }
                    ?>
                </ul>
            </div>

            <div class="post_cats clearfix">
                <h2>Categories</h2>
                <ul class="titles-list">
                    <?php 
                    wp_list_categories( array( 'title_li'=>'') );
                    ?>
                </ul>
            </div>

            <div class="post_tags clearfix">
                <h2>Tags</h2>
                <ul class="tag-list">
                    <?php 
                        $tags = get_tags();
                        foreach ( $tags as $tag ) {
                            $tag_link = get_tag_link( $tag->term_id );
                            $html = "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                            $html .= "{$tag->name}</a></li>";
                            echo $html;
                        }
                    ?>
                </ul>
            </div>

	</div><!-- #primary -->

<?php get_footer(); ?>
