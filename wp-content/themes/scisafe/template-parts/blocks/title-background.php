<?php

$title      = get_field( 'title' );
$copy       = get_field( 'copy' );
$image      = wp_get_attachment_image_url( get_field( 'image' ), 'full' );

?>

<div class="title-background">
    <div class="title-background__image bg-cover bg-center absolute top-0 left-0 w-full md:w-9/12 h-4/6 md:h-full" <?php if ( $image ) : ?>style="background-image: url(<?php echo $image; ?>);"<?php endif; ?>></div>
    <div class="container mx-auto pt-80 md:py-48">
        <div class="p-6 sm:p-8 md:p-10 bg-white max-w-xl ml-auto">
            <?php if ( $title ) : ?>
                <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ( $copy ) : ?>
                <div class="remove-last-margin">
                    <?php echo $copy; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>