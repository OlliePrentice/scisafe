<?php

$thumbnail = get_the_post_thumbnail( get_the_ID(), 'full' );

?>

<div class="article-header py-4">
    <div class="container mx-auto">
        <div class="max-w-5xl mx-auto md:px-8">
            <div class="max-w-3xl">
                <h1 class="text-3xl md:text-4xl"><?php echo get_the_title(); ?></h1>
            </div>
            <?php $item_classes = ['inline-block', 'text-xxl', 'mb-2', 'px-2']; ?>
            <ul class="text-zero remove-bullets p-0 -mx-2">
                <li class="<?php echo implode( ' ', $item_classes ); ?>">
                    <button class="social_share text-quinary" data-type="twitter"><i class="fab fa-twitter"></i></button>
                </li>
                <li class="<?php echo implode( ' ', $item_classes ); ?>">
                    <button class="social_share text-quinary" data-type="linkedin"><i class="fab fa-linkedin"></i></button>
                </li>
                <li class="<?php echo implode( ' ', $item_classes ); ?>">
                    <button class="social_share text-quinary" data-type="fb"><i class="fab fa-facebook"></i></button>
                </li>
            </ul>
        </div>

        <?php if ( $thumbnail ) : ?>
            <div class="md:px-14">
                <?php echo $thumbnail; ?>
            </div>
        <?php endif; ?>
    </div>
</div>