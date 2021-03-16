</main>

<?php

$logo           = get_field( 'logo', 'options' );
$trustpilot     = get_field( 'trustpilot', 'options' );

?>

<footer class="main-footer pt-16 pb-8">
    <div class="stripes"></div>
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-between -mx-4 pt-8">
            <div class="px-4">
                <h5 class="font-extrabold mb-3"><?php echo __('Locations'); ?></h5>
                <?php get_template_part( 'template-parts/components/locations' ); ?>
            </div>
            <?php if ( $trustpilot ) : ?>
                <div class="px-4">
                    <?php echo $trustpilot; ?>
                </div>    
            <?php endif; ?>
            <div class="px-4 text-center">
                <?php if ($logo) : ?>
                    <div class="main-footer__logo pt-10">
                        <a href="<?= home_url('/'); ?>" class="main-footer__logo-link"><img
                                    src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>"></a>
                    </div>
                <?php endif; ?>
                <span class="text-sm"><?php echo get_bloginfo( 'description' ); ?></span>
            </div>
        </div>
    </div>
</footer><!-- .mastfoot -->

<?php

$google_maps_key = get_field('google_maps_api_key', 'options');

?>

<?php if($google_maps_key) : ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_maps_key; ?>"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
