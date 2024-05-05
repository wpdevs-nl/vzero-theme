<?php
/**
 * Basic header component
 *
 * @package Vzero
 * @since 1.0.0
 */

$menu_args = array(
    'theme_location' => 'primary',
    'container' => 'nav',
    'container_class' => 'main-nav',
)
?>
<div class="container">
    <div class="logo"><h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">V Zero</a></h2></div>

    <?php wp_nav_menu( $menu_args ); ?>
</div>
