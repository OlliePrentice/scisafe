<?php 

$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );
$buttons    = get_field( '_buttons' );
$image      = get_field( 'image' );

?>

<div class="content-graphic lg:pl-14">
    <div class="flex flex-wrap -mx-4 items-center">
        <div class="w-full md:w-1/2 px-4">
            <div class="max-w-xl">
                <?php if ( $heading ) : ?>
                    <h2><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if ( $copy ) : ?>
                    <div>
                        <?php echo $copy; ?>
                    </div>
                <?php endif; ?>
                <?php if ( ! empty( $buttons['buttons'] ) ) : ?>
                    <?php get_template_part( 'template-parts/components/buttons', '', $buttons['buttons'] ); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-4 pt-5 md:pt-0">
            <?php if ( $image ) : ?>
                <div class="text-right">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ml-auto">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>