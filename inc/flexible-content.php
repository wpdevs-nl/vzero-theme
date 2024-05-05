<?php

function flexible_content() {
    while ( have_rows( 'content_blocks' ) ) {
        the_row();

        $layout = str_replace('_', '-', get_row_layout());

        get_template_part( 'template-parts/content-blocks/' . $layout );
    }
}