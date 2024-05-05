<?php
if ( ! function_exists( 'dd' ) ) {
    /**
     * Helper function to dump and die
     */
    function dd($args = null) {
        dump($args);
        die();
    }
}

if ( ! function_exists( 'dump' ) ) {
    /**
     * Helper function to dump
     */
    function dump($args = null) {
        echo '<pre>';
        var_dump($args);
        echo '</pre>';
    }
}
