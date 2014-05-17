<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Consistently Inconsistent
 * @since Consistently Inconsistent v0.6
 */
 
get_header(); ?>

<!-- THE LOOP -->
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-summary blog-post' ); ?>>
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
		<div class="post-header">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<h3><?php the_title(); ?></h3>
			</a>
			<div class="date"><h4 class="published"><?php the_time( 'F j, Y' ); ?></h4></div>
			<!--<div class="author"><?php the_author(); ?></div>-->
		</div><!-- end post header -->
		<div class="entry clear">
			<?php the_excerpt(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- end entry -->
		<div class="post-footer">
			<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
		</div><!-- end post footer -->
	  </article><!-- end entry summary -->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	  <div class="navigation index">
		<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
		<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	  </div><!--end navigation-->
	<?php else : ?>
	<?php endif; ?>
<!-- END LOOP -->
</section><!-- END BLOG SECTION -->
	
<!-- END CONTENT -->

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>