<?php

/**
 * Component: Filter
 */

global $wp;

$post_type = get_queried_object();;

$_taxonomies = get_object_taxonomies($post_type->name);


$tag_blacklist = ['post_format', 'product_type', 'product_visibility', 'product_cat', 'product_tag', 'product_shipping_class'];

if ($post_type->name === 'post') {
    $tag_blacklist[] = 'post_tag';
}

?>

<div class="filter text-right">
    <form class="filter__form text-zero -mx-3 mb-12" action="#postLoop">
        <?php if ($_taxonomies) : ?>

                <?php foreach ($_taxonomies as $_taxonomy) : ?>
                    <?php

                    if (in_array($_taxonomy, $tag_blacklist)) {
                        continue;
                    }
                    $_taxonomy_obj = get_taxonomy($_taxonomy);

                    $_terms = get_terms($_taxonomy);

                    ?>

                    <?php if ($_terms) : ?>
                        <?php

                        $selected_term = isset($_GET['_' . $_taxonomy]) ? wp_unslash($_GET['_' . $_taxonomy]) : '';
                        ?>

                        <?php foreach ($_terms as $_term) : ?>
                            <div class="inline-block px-3 mb-3 w-full md:w-auto">
                                <a href="#" class="btn btn--standard filter-btn w-full md:w-auto" data-taxonomy="<?php echo $_term->taxonomy; ?>" data-term-id="<?php echo $_term->term_id; ?>" ><?php echo $_term->name; ?></a>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                <?php endforeach; ?>

        <?php endif; ?>

    </form>
</div>