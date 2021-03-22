<?php

$image      = wp_get_attachment_image_url( get_field( 'image' ), 'full' );
$video      = get_field( 'video' );
$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );
$buttons    = get_field( '_buttons' );
$layout     = get_field( 'layout' );
$alignment  = get_field('alignment');

$box        = array(
    'heading'   => $heading,
    'copy'      => $copy,
    'buttons'   => $buttons,
    'layout'    => $layout
);

$item_classes = [];
$wrapper_classes = ['-mx-4 md:mx-0'];

if ( $layout === 'Large' ) {
    $item_classes[] = '-mt-56 md:-mt-80 px-4 md:px-14';
} else {
    $wrapper_classes[] = ' lg:pl-14';
    $item_classes[] = 'px-4 md:px-0';
}



?>

<div class="image-box <?php echo 'image-box--' . $alignment; ?> <?php echo 'image-box--' . seoUrl($layout); ?> <?php echo implode( ' ', $wrapper_classes ); ?>">
    <div class="relative image-box__inner">
        <?php if ( $layout !== 'Small' ) : ?>
            <div class="image-box__image bg-cover bg-center" <?php if ( $image ) : ?>style="background-image: url(<?php echo $image; ?>);"<?php endif; ?>>
                <?php if ( $video ) : ?>
                    <video class="fit-vid" src="<?php echo $video['url']; ?>" autoplay playsinline muted loop></video>    
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="<?php echo implode( ' ', $item_classes ); ?>">
            <div class="<?php echo $layout === 'Large' ? 'max-w-xl' : 'max-w-2xl'; ?> <?php echo $alignment === 'right' ? 'ml-auto' : ''; ?>">
                <?php get_template_part( 'template-parts/components/box', '', $box ); ?>
            </div>
        </div>
        <?php if ( $layout === 'Small' ) : ?>
            <div class="image-box__image bg-cover bg-center" <?php if ( $image ) : ?>style="background-image: url(<?php echo $image; ?>);"<?php endif; ?>>
                <?php if ( $video ) : ?>
                    <video class="fit-vid" src="<?php echo $video['url']; ?>" autoplay playsinline muted loop></video>    
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>