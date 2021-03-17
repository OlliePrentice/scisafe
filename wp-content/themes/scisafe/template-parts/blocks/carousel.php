<?php

$images = get_field( 'images' );

?>

<?php if ( $images ) : ?>
    <div class="carousel text-right md:text-left -mx-4 md:mx-0" data-aos="fade">
        <div class="carousel__images swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ( $images as $image_id ) : ?>
                    <?php

                    $image = wp_get_attachment_image( $image_id, 'full' );

                    ?>

                    <?php if ( $image ) : ?>
                        <div class="carousel__image img-full swiper-slide">
                            <?php echo $image; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="carousel__navigation relative bg-primary text-zero p-4 inline-block">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
<?php endif; ?>