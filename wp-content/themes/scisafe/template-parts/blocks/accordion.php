<?php if ( have_rows( 'items' ) ) : ?>
    <div class="accordion pl-14">
        <div class="w-8/12">
            <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                <?php

                $dropdown = [
                    'heading'   => get_sub_field( 'heading' ),
                    'copy'      => get_sub_field( 'copy' )
                ];

                get_template_part( 'template-parts/components/dropdown', '', $dropdown );

                ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>