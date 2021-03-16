<?php

add_filter('block_categories', function ($categories, $post) {
    return array_merge(
        [
            [
                'slug' => 'page-blocks',
                'title' => __('Page Blocks', 'theme-blocks'),
            ],

        ],
        $categories
    );
}, 10, 2);

add_action('acf/init', function () {

    if (function_exists('acf_register_block')) {

        acf_register_block_type([
            'name'              => 'full-container',
            'title'             => __('Full Container'),
            'mode'              => 'preview',
            'render_template'   => '/template-parts/containers/full-container.php',
            'category'          => 'layout',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),

        ]);

        acf_register_block([
            'name'              => 'buttons',
            'title'             => __('Buttons'),
            'description'       => __('Buttons'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('Hero'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'heading_copy',
            'title'             => __('Heading & Copy'),
            'description'       => __('Heading & Copy'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'content_graphic',
            'title'             => __('Content & Graphic'),
            'description'       => __('Content & Graphic'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'icon_grid',
            'title'             => __('Icon Grid'),
            'description'       => __('Icon Grid'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'image_box',
            'title'             => __('Image & Box'),
            'description'       => __('Image & Box'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'content_columns',
            'title'             => __('Content Columns'),
            'description'       => __('Content Columns'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'full_width_image',
            'title'             => __('Full Width Image'),
            'description'       => __('Full Width Image'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => 'full',
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'timeline',
            'title'             => __('Timeline'),
            'description'       => __('Timeline'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => 'full',
            'classes'           => 'overflow-hidden relative',
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'team_member',
            'title'             => __('Team Member'),
            'description'       => __('Team Member'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'title_background',
            'title'             => __('Title & Background'),
            'description'       => __('Title & Background'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => 'full',
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'post_loop',
            'title'             => __('Post Loop'),
            'description'       => __('Post Loop'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => false,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'text_content',
            'title'             => __('Text Content'),
            'description'       => __('Text Content'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'accordion',
            'title'             => __('Accordion'),
            'description'       => __('Accordion'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'carousel',
            'title'             => __('Carousel'),
            'description'       => __('Carousel'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

        acf_register_block([
            'name'              => 'page_title',
            'title'             => __('Page Title'),
            'description'       => __('Page Title'),
            'render_callback'   => 'theme_block_render_callback',
            'category'          => 'page-blocks',
            'keywords'          => ['Block'],
            'mode'              => 'edit',
            'layout'            => true,
            'supports'          => array(
                'align'         => false,
                'multiple'      => true,
                'jsx'           => true,
                'anchor'        => true
            ),
        ]);

    }

});


function theme_block_render_callback($block)
{

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if (!empty($block['layout']) && $block['layout']) {
        if($block['layout'] === 'full') {
            if (file_exists(get_theme_file_path("/template-parts/structures/layout-full-width.php"))) {
                include(get_theme_file_path("/template-parts/structures/layout-full-width.php"));
            }
        } else {
            if (file_exists(get_theme_file_path("/template-parts/structures/layout.php"))) {
                include(get_theme_file_path("/template-parts/structures/layout.php"));
            }
        }
    } else {
        if (file_exists(get_theme_file_path("/template-parts/blocks/{$slug}.php"))) {
            include(get_theme_file_path("/template-parts/blocks/{$slug}.php"));
        }
    }
}
