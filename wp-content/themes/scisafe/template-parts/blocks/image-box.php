<?php

$image      = wp_get_attachment_image_url( get_field( 'image' ), 'full' );
$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );
$buttons    = get_field( '_buttons' );
$layout     = get_field( 'layout' );

$box        = array(
    'heading'   => $heading,
    'copy'      => $copy,
    'buttons'   => $buttons,
    'layout'    => $layout
);

$item_classes = [];
$wrapper_classes = [];

if ( $layout === 'Large' ) {
    $item_classes[] = '-mt-80 pl-14';
} else {
    $wrapper_classes[] = 'pl-14';
}


?>

<div class="image-box <?php echo 'image-box--' . seoUrl($layout); ?> <?php echo implode( ' ', $wrapper_classes ); ?>">
    <div class="relative image-box__inner">
        <?php if ( $image ) : ?>
            <div class="image-box__image bg-cover bg-center" style="background-image: url(<?php echo $image; ?>);"></div>
        <?php endif; ?>
        <div class="<?php echo implode( ' ', $item_classes ); ?>">
            <div class="<?php echo $layout === 'Large' ? 'max-w-xl' : 'max-w-2xl'; ?>">
                <?php get_template_part( 'template-parts/components/box', '', $box ); ?>
            </div>
        </div>
    </div>
</div>