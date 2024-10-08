<?php get_header(); ?>
<section>
  
           <?php
           $blog_banner_text = get_field('blog_banner_text');
           $banner_image = get_field('banner_image');
           ?>
            <div class="blog_section">
                <?php if ($banner_image): ?>
                    <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
                <?php endif; ?>
                <div class="container">
                    <div class="blog_wrap">
                        <?php if ($blog_banner_text): ?>
                            <h1><?php echo esc_html($blog_banner_text); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       
</section>
<section>
        <div class="blog_home_section">
            <div class="container">
                <span>Blog</span>
            </div>
        </div>
    </section>


<section>
    <div class="modual_blog_post">
        <div class="container">
            <div class="modual_blog_inner_all_content_wrap">
                <div class="modual_blog_conternt_wrap">
                    <div class="modual_blog_inner_wraps">

                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'post_status' => 'publish',
                            'order' => 'DESC',
                            'paged' => $paged,

                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                              
                                <div class="modual_blog_inner_wrap">
                                    <div class="modual_blog_wrap">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/image/default_image.png" alt="Default Image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="modual_blog_wrap_text">
                                        <h6><?php echo get_the_date(); ?></h6>
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="modual_blog_wrap_btn">
                                            <a href="<?php echo esc_url(get_permalink()); ?>" class="blog_btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>

                            <?php }
                        } else {
                            echo '<p>No posts found.</p>';
                        }

                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>

            <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $pagination_args = [
                        'total' => $query->max_num_pages,
                        'current' => $paged,
                        'prev_text' => __('&larr;'),
                        'next_text' => __('&rarr;'),
                    ];

                    $pagination = paginate_links($pagination_args);

                    if ($pagination) {
                        echo '<div class="pagination">' . $pagination . '</div>';
                    }
                    ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
