<?php

$heading    = get_field( 'heading' );
$copy       = get_field( 'copy' );
$background = wp_get_attachment_image_url( get_field( 'background' ), 'full' );

?>

<div class="timeline">
    <div class="bg-cover bg-center py-16 timeline__background relative gradient-wrap lg:pl-14" <?php echo $background ? 'style="background-image: url('. $background .')"' : ''; ?>>
        <div class="container mx-auto">
            <div class="max-w-xl">
                <?php if ( $heading ) : ?>
                    <h2><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if ( $copy ) : ?>
                    <div>
                        <?php echo $copy; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="pl-4 md:pl-0">
                <?php if ( have_rows( 'events' ) ) : ?>
                    <div class="timeline__events swiper-container">
                        <div class="swiper-wrapper">
                            <?php while ( have_rows( 'events' ) ) : the_row(); ?>
                                <?php
                                
                                $year           = get_sub_field( 'year' );
                                $text           = get_sub_field( 'text' );
                                $position       = get_sub_field( 'position' );
                                $reduce_width   = get_sub_field( 'reduce_width' );

                                $item_classes = [];

                                if ( $position === 'Below' ) {
                                    $item_classes[] = 'timeline__event--below';
                                } else {
                                    $item_classes[] = 'timeline__event--above';
                                }

                                if ( $reduce_width ) {
                                    $item_classes[] = 'timeline__event--short';
                                }
                                
                                ?>
                                <div class="swiper-slide timeline__slide <?php echo $reduce_width ? 'timeline__slide--short' : ''; ?>">
                                    <div class="timeline__event py-12 <?php echo implode( ' ', $item_classes ); ?>">
                                        <?php if ( $year ) : ?>
                                            <h4 class="text-primary mb-0"><?php echo $year; ?></h4>
                                        <?php endif; ?>
                                        <?php if ( $text ) : ?>
                                            <span class="text-secondary font-display font-medium"><?php echo $text; ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>                  
                            <?php endwhile; ?>
                        </div>
                        <div class="timeline__spacer"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>