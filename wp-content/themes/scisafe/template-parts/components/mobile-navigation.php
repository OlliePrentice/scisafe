<?php

/**
 * Component: Mobile Navigation
 */

$image      = get_field( 'menu_image', 'options' );
$telephone  = get_field( 'telephone', 'options' );

?>

<div class="mobile-navigation">
    <div class="mobile-navigation__background gradient-wrap">
        <div class="container mx-auto">
            <div class="md:px-14">
                <div class="flex flex-wrap -mx-4 items-center">
                    <div class="px-4 w-full md:w-6/12 relative">
                        <div class="stripes stripes--vertical hidden md:block"></div>
                        <nav class="mobile-navigation__nav remove-bullets mb-12 md:mb-28">
                            <?php wp_nav_menu(['theme_location' => 'header', 'container' => false]); ?>
                        </nav>
                        <?php get_template_part( 'template-parts/components/locations' ); ?>
                        <?php if ( $telephone ) : ?>
                            <div class="pt-3 pb-8">
                                <a href="<?php echo $telephone['url']; ?>" class="font-display font-semibold"><?php echo $telephone['title']; ?></a>
                            </div>
                        <?php endif; ?>
                        <nav class="mobile-navigation__nav mobile-navigation__nav--secondary remove-bullets">
                            <?php wp_nav_menu(['theme_location' => 'secondary', 'container' => false]); ?>
                        </nav>
                    </div>
                    <div class="px-4 w-6/12 relative hidden md:block">
                        <?php if ( $image ) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mx-auto relative left-16 mb-20">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .mobile-navigation -->
