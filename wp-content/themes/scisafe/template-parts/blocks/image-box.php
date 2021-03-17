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
$wrapper_classes = ['-mx-4 md:mx-0'];

if ( $layout === 'Large' ) {
    $item_classes[] = '-mt-56 md:-mt-80 px-4 md:pl-14 md:pr-0';
} else {
    $wrapper_classes[] = ' lg:pl-14';
    $item_classes[] = 'px-4 md:px-0';
}


?>

<div class="image-box <?php echo 'image-box--' . seoUrl($layout); ?> <?php echo implode( ' ', $wrapper_classes ); ?>">
    <div class="relative image-box__inner">
        <?php if ( $image && $layout !== 'Small' ) : ?>
            <div class="image-box__image bg-cover bg-center" style="background-image: url(<?php echo $image; ?>);"></div>
        <?php endif; ?>
        <div class="<?php echo implode( ' ', $item_classes ); ?>">
            <div class="<?php echo $layout === 'Large' ? 'max-w-xl' : 'max-w-2xl'; ?>">
                <?php get_template_part( 'template-parts/components/box', '', $box ); ?>
            </div>
        </div>
        <?php if ( $image && $layout === 'Small' ) : ?>
            <div class="image-box__image bg-cover bg-center" style="background-image: url(<?php echo $image; ?>);"></div>
        <?php endif; ?>
    </div>
</div>