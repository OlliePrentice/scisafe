<?php 

$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );

?>

<div class="heading-copy max-w-md md:pl-14">
    <?php if ( $heading ) : ?>
        <h1 class="font-extrabold"><?php echo $heading; ?></h1>    
    <?php endif; ?>
    <?php if ( $copy ) : ?>
        <div>
            <?php echo $copy; ?>
        </div>    
    <?php endif; ?>
</div>