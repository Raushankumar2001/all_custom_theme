<section>
  
           <?php
           $modual_faq_section_wrap = get_sub_field('modual_faq_section_wrap');
           $faq_banner_image = $modual_faq_section_wrap['faq_banner_image'];
           $faq_banner_text = $modual_faq_section_wrap['faq_banner_text'];
           ?>
            
            <div class="blog_section">
                <?php if ($faq_banner_image): ?>
                    <img src="<?php echo esc_url($faq_banner_image['url']); ?>" alt="<?php echo esc_attr($faq_banner_image['alt']); ?>">
                <?php endif; ?>
                <div class="container">
                    <div class="blog_wrap">
                        <?php if ($faq_banner_text): ?>
                            <h1><?php echo esc_html($faq_banner_text); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
</section>