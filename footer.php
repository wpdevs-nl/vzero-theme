<?php
/**
 * The footer file for the V Zero theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vzero
 */
?>
</main>

<footer>
    <?php get_template_part( 'template-parts/footer.php' ); ?>
</footer>

<?php wp_footer(); ?>
<?php set_query_var('script_placement', 'footer'); ?>

</body>
</html>