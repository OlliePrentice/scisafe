<?php 

$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );

?>

<div class="heading-copy max-w-md lg:pl-14 z-10 relative">
    <?php if ( $heading ) : ?>
        <h1 class="font-extrabold text-4xl md:text-5xl lg:text-6xl"><?php echo $heading; ?></h1>    
    <?php endif; ?>
    <?php if ( $copy ) : ?>
        <div>
            <?php echo $copy; ?>
        </div>    
    <?php endif; ?>
</div>