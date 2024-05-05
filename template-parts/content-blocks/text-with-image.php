<?php
/* Content fields */
$title = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
$image = get_sub_field( 'image' );
/* Settings */
$image_position = get_sub_field( 'image_position' );
$ratio = get_sub_field( 'ratio' );
?>
<section class="text-with-image <?php if ( $image_position === 'left') : echo 'reverse'; endif; ?> <?php if ( $ratio === '33' ) : echo 'w66-33'; elseif ( $ratio === '66' ) : echo 'w33-66'; else : echo 'w50-50'; endif; ?>">
    <div class="content">
        <?php if ( $title ) : ?>
            <h2 class="title">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <?php if ( $content ) : ?>
            <div class="text">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="image">
        <?php if ( $image ) : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
    </div>
</section>
