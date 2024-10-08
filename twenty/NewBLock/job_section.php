<section>
  
           <?php
           $job_section_wrap = get_sub_field('job_section_wrap');
           $job_banner_image = $job_banner_section['job_banner_section'];
           $about_section_banner_text = $job_section_wrap['about_section_banner_text'];
           ?>
            
            <div class="blog_section">
                <?php if ($job_banner_section): ?>
                    <img src="<?php echo esc_url($job_banner_section['url']); ?>" alt="<?php echo esc_attr($job_banner_section['alt']); ?>">
                <?php endif; ?>
                <div class="container">
                    <div class="blog_wrap">
                        <?php if ($job_banner_text): ?>
                            <h1><?php echo esc_html($job_banner_text); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       
</section>