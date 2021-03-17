<?php

get_header();

if ( is_singular( 'post' ) ) {
    get_template_part( 'template-parts/components/article-header' );
}

get_the_content() ? the_content() : get_template_part('template-parts/components/error');

get_footer();

