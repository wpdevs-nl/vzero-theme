<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vzero
 */
get_header();
?>

<section>
    <div class="content">
        <h2 class="title">
            <?php _e( 'Page not found', 'vzero' ); ?>
        </h2>
        <p class="">
            <?php _e( 'The page you are looking for does not exist.', 'vzero' ); ?>
        </p>
    </div>
</section>

<?php
get_footer();