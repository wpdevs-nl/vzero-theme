<?php
/**
 * Basic page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package vzero
 */
get_header();

while ( have_posts() ) :
    the_post();

    if ( ! have_rows( 'content_blocks' ) ):
        get_template_part( 'template-parts/content', get_post_type() );
    else:
        flexible_content();
    endif;
endwhile;

get_footer();