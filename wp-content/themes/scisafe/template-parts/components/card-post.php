<?php 

$_post = $args;

$thumbnail  = get_the_post_thumbnail( $_post->ID, 'card' );

?>

<article class="card-post relative">
    <a href="<?php echo get_the_permalink( $_post->ID ); ?>" class="block pt-9">
   
        <div class="border-2 border-senary px-4 pb-4">
            <?php if ( $thumbnail ) : ?>
                <div class="img-full -mt-9">
                    <?php echo $thumbnail; ?>
                </div>
            <?php endif; ?>
            <div class="px-6 pt-10 pb-6">
                <h5 class="text-primary"><?php echo get_the_title(); ?></h5>
                <div class="pt-2">
                    <span class="btn btn--alt"><?php echo __('Find out more'); ?><span class="btn__arrow"><?php echo get_inline_svg('arrow-right.svg'); ?></span></span>
                </div>
            </div>
        </div>
    </a>
</article>