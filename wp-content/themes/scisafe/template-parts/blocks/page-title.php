<?php

$heading = get_field( 'heading' );

?>

<?php if ( $heading ) : ?>
    <div class="page-title">
        <h1 class="font-bold text-4xl md:text-5xl mb-12 max-w-xl"><?php echo $heading; ?></h1>
        <div class="stripes stripes--small"></div>
    </div>
<?php endif; ?>