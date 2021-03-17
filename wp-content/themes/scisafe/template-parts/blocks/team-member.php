<?php

$member         = !empty( get_field( 'member' )[0] ) ? get_field( 'member' )[0] : '';
$qualifications = get_field( 'team_qualifications', $member->ID );
$position       = get_field( 'team_position', $member->ID  );
$thumbnail      = get_the_post_thumbnail( $member->ID, 'full' );

?>

<div class="team-member lg:pl-14">
    <div class="flex flex-wrap -mx-4 items-center">
        <div class="w-full md:w-1/2 px-4 mb-8">
            <?php if ( $thumbnail ) : ?>
                <?php echo $thumbnail; ?>    
            <?php endif; ?>
        </div>
        <div class="w-full md:w-1/2 px-4">
            <h2 class="mb-1">
                <?php echo get_the_title( $member->ID ); ?>
                <?php if ( $qualifications ) : ?>
                    <span class="text-lg tracking-normal"><?php echo $qualifications; ?></span>
                <?php endif; ?>
            </h2>
            <?php if ( $position ) : ?>
                <h3><?php echo $position; ?></h3>
            <?php endif; ?>
            <?php if ( ! empty( $member->post_content ) ) : ?>
                <div class="pt-2 font-display font-medium">
                    <?php echo apply_filters( 'the_content', $member->post_content ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>