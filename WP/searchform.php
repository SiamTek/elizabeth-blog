<?php
/**
 * The template for displaying search forms in Consistently Inconsistent
 *
 * @package Consistently Inconsistent
 * @since Consistently Inconsistent v0.6
 */
 ?>

    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label for="s" class="assistive-text"><?php _e( 'Search', 'ci_wp' ); ?></label>
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'ci_wp' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'ci_wp' ); ?>" />
    </form>