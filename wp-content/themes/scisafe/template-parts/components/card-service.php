<?php

$_post = $args;

$thumbnail  = get_the_post_thumbnail( $_post->ID, 'full' );
$excerpt    = excerpt( 60, $_post->ID );
$cat        = get_the_terms( $_post->ID, 'service_category' ); 

?>

<article class="card-service relative">
    <a href="<?php echo get_the_permalink( $_post->ID ); ?>">
        <div class="relative border-2 border-senary gradient-wrap">
            <div class="flex flex-wrap items-center -mx-4">
                <?php if ( $thumbnail ) : ?>
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative z-10 flex justify-center -mx-3 md:mx-0 -mt-8 md:mt-0 md:top-8 md:-left-4 2xl:-left-16">
                            <?php echo $thumbnail; ?>    
                        </div>
                    </div>
                <?php endif; ?>
                <div class="w-full md:w-6/12 px-4">
                    <div class="py-8 sm:py-10 px-4 sm:px-10 md:px-0">
                        <h4 class="font-semibold"><?php echo get_the_title( $_post->ID ); ?></h4>
                        <?php if ( $excerpt ) : ?>
                            <div>
                                <?php echo apply_filters( 'the_content', $excerpt ); ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            <span class="btn btn--alt"><?php echo __('Find out more'); ?><span class="btn__arrow"><?php echo get_inline_svg('arrow-right.svg'); ?></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( ! empty( $cat[0] ) ) : ?>
                <div class="card-service__tag bg-senary md:absolute bottom-0 md:bottom-auto md:right-0 md:top-0 text-center">
                    <span class="md:absolute font-display font-medium uppercase top-1/2 right-0 text-white transform origin-bottom md:-rotate-90 translate-x-1/2 -translate-y-full"><?php echo $cat[0]->name; ?></span>
                </div>
            <?php endif; ?>
        </div>
    </a>
</article>