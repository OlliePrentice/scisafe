<?php

$image = wp_get_attachment_image( get_field( 'image' ), 'full' );

?>

<?php if ( $image ) : ?>
    <div class="full-width-image img-full relative">
        <?php echo $image; ?>
    </div>
<?php endif; ?>