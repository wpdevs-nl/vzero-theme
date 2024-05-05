<?php
/* Content fields */
$left_title = get_sub_field( 'left_title' );
$left_content = get_sub_field( 'left_content' );
$right_title = get_sub_field( 'right_title' );
$right_content = get_sub_field( 'right_content' );
/* Settings */
$ratio = get_sub_field( 'ratio' );
?>
<section class="text-two-columns <?php if ( $ratio === '33' ) : echo 'w66-33'; elseif ( $ratio === '66' ) : echo 'w33-66'; else : echo 'w50-50'; endif; ?>">
    <div class="content-left">
        <?php if ( $left_title ) : ?>
            <h2 class="title">
                <?php echo $left_title; ?>
            </h2>
        <?php endif; ?>
        <?php if ( $left_content ) : ?>
            <div class="text">
                <?php echo $left_content; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="content-right">
        <?php if ( $right_title ) : ?>
            <h2 class="title">
                <?php echo $right_title; ?>
            </h2>
        <?php endif; ?>
        <?php if ( $right_content ) : ?>
            <div class="text">
                <?php echo $right_content; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
