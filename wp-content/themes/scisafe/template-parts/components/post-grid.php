<?php 

$_query = $args['query'];

?>

<div class="post-grid">
    <div class="inf-grid -mx-4 flex flex-wrap">
        <?php while ( $_query->have_posts() ) : $_query->the_post(); ?>
            <?php
            
            $item_classes = [];

            if ( get_post_type( get_the_ID() ) === 'service' ) {
                $item_classes[] = 'w-full';
            } else {
                $item_classes[] = 'w-4/12';
            }

            ?>
            <div class="inf-post mb-20 px-4 <?php echo implode( ' ', $item_classes ); ?>">
                <?php 
                
                get_template_part( 'template-parts/components/card-' . get_post_type( get_the_ID() ), '', get_post( get_the_ID() ) ); 
                
                ?>
            </div>
        <?php endwhile; ?>
    </div>
    
</div>