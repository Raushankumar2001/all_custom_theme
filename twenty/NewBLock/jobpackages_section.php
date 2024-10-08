<section>
  
           <?php
           $jobpackages_section_wrap = get_sub_field('jobpackages_section_wrap');
           $jobpackages_banner_image = $jobpackages_section_wrap['jobpackages_banner_image'];
           $jobpackages_banner_text = $jobpackages_section_wrap['jobpackages_banner_text'];
           ?>
            
            <div class="blog_section">
                <?php if ($jobpackages_banner_image): ?>
                    <img src="<?php echo esc_url($jobpackages_banner_image['url']); ?>" alt="<?php echo esc_attr($jobpackages_banner_image['alt']); ?>">
                <?php endif; ?>
                <div class="container">
                    <div class="blog_wrap">
                        <?php if ($jobpackages_banner_text): ?>
                            <h1><?php echo esc_html($jobpackages_banner_text); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       
</section>