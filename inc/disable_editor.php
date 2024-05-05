<?php

function remove_editor() {
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'remove_editor' );