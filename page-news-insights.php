<?php get_header(); ?>

<div class="container mx-auto px-4 my-5">
    <div class="w-full mb-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgviewerr.png" alt="News Header" class="w-full h-80 object-cover">
    </div>
    <h1 class="text-center text-3xl font-bold mb-6">News and Insights</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <?php
    // WP_Query arguments
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="rounded-card bg-gray-800 text-white shadow-lg transition-transform duration-300 transform hover:scale-105">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover rounded-img']); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                        <img src="https://via.placeholder.com/300x200" class="w-full h-48 object-cover rounded-img" alt="Placeholder image">
                    </a>
                <?php endif; ?>

                <div class="card-body p-4">
                    <div class="post-category mb-2">
                        <?php
                        $category = get_the_category();
                        if (!empty($category)) {
                            echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '" class="text-yellow-400">' . esc_html($category[0]->name) . '</a>';
                        }
                        ?>
                    </div>

                    <h5 class="text-xl font-semibold mb-2">
                        <a href="<?php the_permalink(); ?>" class="hover:text-yellow-400"><?php the_title(); ?></a>
                    </h5>

                    <p class="text-sm">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>
</div>

</div>

<!-- Custom Footer -->
<?php get_footer(); ?>
