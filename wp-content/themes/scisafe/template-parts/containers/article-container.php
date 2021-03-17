<?php

$id = seoUrl( $block['title'] ) . '-' . $block['id'];
if ( !empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

$classes = !empty( $block['classes'] ) ? [$block['classes']] : [];
$classes[] = !empty( $block['default_classes'] ) ? $block['default_classes'] : '';
$classes[] = padding_classes();

?>

<div id="<?php echo $id; ?>" class="full-container <?php echo implode( ' ', $classes ); ?>" data-aos="fade">
    <div class="container mx-auto" data-aos="fade">
        <div class="max-w-5xl mx-auto md:px-8">
            <?php
            echo '<InnerBlocks/>';
            ?>
        </div>
    </div>
</div>
