<?php 

$heading    = ! empty( $args['heading'] ) ? $args['heading'] : '';
$copy       = ! empty( $args['copy'] ) ? $args['copy'] : '';

?>


<div class="dropdown border-b-2 border-quinary">
    <div class="dropdown__trigger py-6 relative pr-12 cursor-pointer">
        <?php if ( $heading ) : ?>
            <h4 class="mb-0 text-primary"><?php echo $heading; ?></h4>
        <?php endif; ?>
        <span class="plus absolute top-0 bottom-0 right-0 my-auto transition-all"></span>
    </div>
    <div class="dropdown__content">
        <?php if ( $copy ) : ?>
            <div class="dropdown__copy remove-last-margin pb-6">
                <?php echo $copy; ?>
            </div>
        <?php endif; ?>
    </div>
</div>