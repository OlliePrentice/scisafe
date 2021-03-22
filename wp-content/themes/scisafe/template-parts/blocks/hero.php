<?php

$detect = new Mobile_Detect;

?>

<div class="home_cube lg:-mb-40">
    <div class="pop_up w-9/12">
        <h3>Foo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="absolute bottom-10 right-2 xl:right-auto xl:left-1/2 transform xl:-translate-x-1/2 p-3 bg-white w-16 sm:w-auto">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/svgs/cube-spin.svg' ?>" alt="Cube">
    </div>
    <?php if ( $detect->is_mobile() ) : ?>
        <div class="absolute top-20 sm:top-24 right-2 lg:right-5 p-2 scroll-next text-primary w-20">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
            </svg>
        </div>
    <?php endif; ?>
</section>