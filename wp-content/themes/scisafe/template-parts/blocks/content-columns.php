<?php if ( have_rows( 'columns' ) ) : ?>
    <div class="content-columns md:pl-14">
        <div class="flex flex-wrap -mx-4">
            <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
                <?php if ( $copy = get_sub_field( 'copy' ) ) : ?>
                    <div class="w-full md:w-1/2 px-4">
                        <div class="max-w-xl">
                            <?php echo $copy; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>