<?php if ( have_rows( 'items' ) ) : ?>
    <div class="icon-grid md:pl-14">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                <?php
                
                $icon = get_sub_field( 'icon' );
                $text = get_sub_field( 'text' );
                
                ?>
                <div class="w-1/3 px-4 mb-12 icon-grid__item">
                    <div class="flex flex-wrap items-center -mx-4">
                        <?php if ( $icon ) : ?>
                            <div class="px-4">
                                <div class="icon-grid__icon w-20">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ( $text ) : ?>
                            <div class="px-4 flex-1">
                                <p class="text-base font-display mb-0"><?php echo $text; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>               
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>