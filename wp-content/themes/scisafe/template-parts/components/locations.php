<?php if ( have_rows( 'locations', 'options' ) ) : ?>
    <div class="locations flex flex-wrap -mx-4">
        <?php while ( have_rows( 'locations', 'options' ) ) : the_row(); ?>
            <?php
            
            $heading = get_sub_field( 'heading' );
            $address = get_sub_field( 'address' );
            $link    = get_sub_field( 'link' );
            
            ?>
            <div class="px-4">
                <div class="locations__item mb-3">
                    <?php echo $link ? '<a href="' . $link["url"] . '" target="' . $link["target"] . '">' : ''; ?>
                        <?php if ( $heading ) : ?>
                            <h6 class="text-primary mb-0 text-lg"><?php echo $heading; ?></h6>
                        <?php endif; ?>
                        <?php if ( $address ) : ?>
                            <span class="text-sm block"><?php echo $address; ?></span>
                        <?php endif; ?>
                    <?php echo $link ? '</a>' : ''; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>