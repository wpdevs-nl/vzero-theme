<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vzero
 */

?>

<?php if ( is_singular() ) : ?>

    <div>
        <article>

        </article>
    </div>

<?php else : ?>

    <?php get_template_part('template-parts/post', false, ['post_type' => get_post_type(), 'post_id' => get_the_ID()]) ?>

<?php endif; ?>
