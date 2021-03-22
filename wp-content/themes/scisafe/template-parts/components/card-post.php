<?php 

$_post = $args;

$thumbnail  = get_the_post_thumbnail( $_post->ID, 'card' );

?>

<article class="card-post relative h-full">
    <a href="<?php echo get_the_permalink( $_post->ID ); ?>" class="block h-full pt-9">
        <div class="card-post__inner">
            <div class="border-2 border-senary h-full px-2 md:px-3 pb-4 gradient-wrap">
                <?php if ( $thumbnail ) : ?>
                    <div class="img-full -mt-9">
                        <?php echo $thumbnail; ?>
                    </div>
                <?php endif; ?>
                <div class="px-4 md:px-7 pt-10 pb-6">
                    <h5 class="text-primary card-post__header"><?php echo get_the_title(); ?></h5>
                    <div class="pt-2">
                        <span class="btn btn--alt"><?php echo __('Find out more'); ?><span class="btn__arrow"><?php echo get_inline_svg('arrow-right.svg'); ?></span></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>