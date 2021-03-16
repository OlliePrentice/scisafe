<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta HTTP-EQUIV="Content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1"/>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"/>
    </noscript>
</head>

<body <?php body_class(); ?>>

<?php

$logo = get_field( 'logo', 'options' );

?>

<header class="main-header fixed top-0 left-0 z-50 w-full bg-white">
    <div class="container mx-auto">
        <div class="flex py-8 -mx-2 items-center">
            <?php if ( $logo ) : ?>
                <div class="flex-auto px-2">
                    <div class="main-header__logo">
                        <a href="<?= home_url('/'); ?>"
                           class="main-header__logo-link">
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">   
                        </a>
                    </div>
                </div>
            <?php endif; ?>
            <div class="flex-initial px-2">
                <div>
                    <?php get_template_part('template-parts/components/burger'); ?>
                </div>
            </div>
        </div>
    </div>
</header><!-- .masthead -->

<?php

get_template_part('template-parts/components/mobile-navigation');

?>

<main class="site-wrapper">
