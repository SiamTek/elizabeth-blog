<?php 
/**
 * The Template for displaying all single posts.
 *
 * @package Consistently Inconsistent
 * @since Consistently Inconsistent v0.6
 */
get_header(); ?>

<!-- BEGIN ORIGINAL MARKUP -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
        <div class="post-header">
            <h3><?php the_title(); ?></h3>
            <div class="date"><h4 class="published"><?php the_time( 'F j, Y' ); ?></h4></div>
            <!--<div class="author"><?php the_author(); ?></div>-->
        </div><!--end post header-->
        <div class="entry clear">
			<?php the_content(); ?>
			<?php edit_post_link(); ?>
			<?php wp_link_pages(); ?>
		</div><!--end entry-->
    </article>
<!-- END ORIGINAL MARKUP -->

<!-- BEGIN THEMESHAPER MARKUP (http://themeshaper.com/2012/11/06/the-wordpress-theme-search-template-and-page-template/) -->
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <?php while ( have_posts() ) : the_post(); ?>
 
                <!--<?php ci_content_nav( 'nav-above' ); ?>-->
 
                <?php get_template_part( 'content', 'single' ); ?>
 
                <!--<?php ci_content_nav( 'nav-below' ); ?>-->
 
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>
 
            <?php endwhile; // end of the loop. ?>
 
        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
<!-- END THEMESHAPER MARKUP (http://themeshaper.com/2012/11/06/the-wordpress-theme-search-template-and-page-template/) -->




</section><!-- END BLOG SECTION -->
	
<!-- END CONTENT -->


    <?php comments_template(); ?>

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>