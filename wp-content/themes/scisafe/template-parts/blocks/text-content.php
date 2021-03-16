<?php

$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );

?>

<div class="text-content pl-14">
    <div class="w-8/12">
        <?php if ( $heading) : ?>
            <h3><?php echo $heading; ?></h3>
        <?php endif; ?>
        <?php if ( $copy ) : ?>
            <div>
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>
    </div>
</div>