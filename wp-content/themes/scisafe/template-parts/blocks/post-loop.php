<?php 

global $wp_query;

$default_post_type = 'post';

if ( is_archive() ) {
    $default_post_type = get_queried_object()->name;
}

$post_type      = get_field( 'post_type' ) ? get_field( 'post_type' ) : [$default_post_type];
$posts_per_page = get_field( 'posts_per_page' );


?>

<?php if ( have_posts() ) : ?>
    <div class="post-loop <?php echo in_array( 'service',  $post_type ) ? 'lg:pl-14' : ''; ?>" data-post-types='[<?php echo implode(', ', array_map('add_quotes', $post_type)); ?>]' data-posts-per-page="<?php echo $posts_per_page; ?>">
        <?php get_template_part( 'template-parts/components/filter' ); ?>
        <?php get_template_part( 'template-parts/components/post-grid', '', ['query' => $wp_query] ); ?>
        <?php get_template_part( 'template-parts/components/pagination-infinite', '', ['max_pages' => $wp_query->max_num_pages] ); ?>
    </div>
<?php endif; ?>