<section>
    <?php
    $modual_random_section = get_sub_field('modual_random_section');
    $modual_random_section_heading = $modual_random_section['modual_random_section_heading'];
    $modual_random_section_subheading = $modual_random_section['modual_random_section_subheading'];
    $modual_random_section_paragraph = $modual_random_section['modual_random_section_paragraph'];
    $modual_random_section_right_image = $modual_random_section['modual_random_section_right_image'];
    $modual_random_section_btn = $modual_random_section['modual_random_section_btn'];
    ?>

    <div class="modual_random_content_wrap">
        <div class="container">
            <div class="modual_random_all_content">
                <div class="modual_random_left_content">
                    <?php if ($modual_random_section_heading): ?>
                        <h4><?php echo esc_html($modual_random_section_heading); ?></h4>
                    <?php endif; ?>

                    <?php if ($modual_random_section_subheading): ?>
                        <h3><?php echo esc_html($modual_random_section_subheading); ?></h3>
                    <?php endif; ?>

                    <?php if ($modual_random_section_paragraph): ?>
                        <p><?php echo esc_html($modual_random_section_paragraph); ?></p>
                    <?php endif; ?>
                    
                    <div class="btn">
                        <?php if ($modual_random_section_btn): ?>
                            <button>
                                <a target="<?php echo esc_html($modual_random_section_btn['target']); ?>" 
                                   href="<?php echo esc_html($modual_random_section_btn['url']); ?>">
                                    <?php echo esc_html($modual_random_section_btn['title']); ?>
                                </a>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="modual_random_right_content">
                    <?php if ($modual_random_section_right_image): ?>
                        <img src="<?php echo esc_url($modual_random_section_right_image['url']); ?>" 
                             alt="<?php echo esc_attr($modual_random_section_right_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>




