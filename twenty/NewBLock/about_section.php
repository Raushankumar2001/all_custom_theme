<section>
    <?php
    $modual_about_section_wrap = get_sub_field('modual_about_section_wrap');
    $about_section_banner_image = $modual_about_section_wrap['about_section_banner_image'];
    $about_section_banner_text = $modual_about_section_wrap['about_section_banner_text'];
    ?>
    
    <div class="blog_section">
        <?php if ($about_section_banner_image): ?>
            <img src="<?php echo esc_url($about_section_banner_image['url']); ?>" alt="<?php echo esc_attr($about_section_banner_image['alt']); ?>">
        <?php endif; ?>
        
        <div class="container">
            <div class="blog_wrap">
                <?php if ($about_section_banner_text): ?>
                    <h1><?php echo esc_html($about_section_banner_text); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
