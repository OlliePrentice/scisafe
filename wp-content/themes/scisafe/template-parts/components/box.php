<?php

$heading    = ! empty( $args[ 'heading' ] ) ? $args[ 'heading' ] : '';
$copy       = ! empty( $args[ 'copy' ] ) ? $args[ 'copy' ] : '';
$buttons    = ! empty( $args[ 'buttons' ] ) ? $args[ 'buttons' ] : '';
$layout     = ! empty( $args[ 'layout' ] ) ? $args[ 'layout' ] : '';

?>

<div class="box p-8 sm:p-10 md:p-14 pb-6 sm:pb-8 md:pb-10 bg-primary theme-dark">
    <?php if ( $heading ) : ?>
        <h3><?php echo $heading; ?></h3>    
    <?php endif; ?>
    <?php if ( $copy ) : ?>
        <div class="<?php echo $layout === 'Large' ? 'font-display font-medium' : ''; ?>">
            <?php echo $copy; ?>
        </div>    
    <?php endif; ?>
    <?php if ( ! empty( $buttons['buttons'] ) ) : ?>
        <?php get_template_part( 'template-parts/components/buttons', '', $buttons['buttons'] ); ?>    
    <?php endif; ?>
</div>