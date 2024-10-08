<section>
    <?php
    $blog_section_wrap = get_field('blog_section_wrap');
    $blog_banner_image = $blog_section_wrap['blog_banner_image'];
    $blog_banner_text = $blog_section_wrap['blog_banner_text'];
    ?>
    
    <div class="blog_section">
        <?php if ($blog_banner_image): ?>
            <img src="<?php echo esc_url($blog_banner_image['url']); ?>" alt="<?php echo esc_attr($blog_banner_image['alt']); ?>">
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
