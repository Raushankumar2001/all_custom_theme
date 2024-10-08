<section>
    <?php
    $about_secton_company_details_wrap = get_sub_field('about_secton_company_details_wrap');
    $company_details_left_heading = $about_secton_company_details_wrap['company_details_left_heading'];
    $company_details_left_paragraph = $about_secton_company_details_wrap['company_details_left_paragraph'];
    $company_details_left_subparagraph = $about_secton_company_details_wrap['company_details_left_subparagraph'];
    $company_details_right_section_image = $about_secton_company_details_wrap['company_details_right_section_image'];
    $company_details_left_heading_btn = $about_secton_company_details_wrap['company_details_left_heading_btn'];
    ?>

    <div class="modual_our_company">
        <div class="container">
            <div class="modual_left_company_wrap">
                <div class="modual_left_company">
                    <?php if ($company_details_left_heading): ?>
                        <h3><?php echo esc_html($company_details_left_heading); ?></h3>
                    <?php endif; ?>

                    <?php if ($company_details_left_paragraph): ?>
                        <p class="sub"><?php echo esc_html($company_details_left_paragraph); ?></p>
                    <?php endif; ?>

                    <?php if ($company_details_left_subparagraph): ?>
                        <p><?php echo esc_html($company_details_left_subparagraph); ?></p>
                    <?php endif; ?>
                    
                    <div class="modual_left_company_btn">
                        <?php if ($company_details_left_heading_btn): ?>
                            <button>
                                <a target="<?php echo esc_html($company_details_left_heading_btn['target']); ?>" 
                                   href="<?php echo esc_html($company_details_left_heading_btn['url']); ?>">
                                    <?php echo esc_html($company_details_left_heading_btn['title']); ?>
                                </a>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="modual_right_company">
                    <?php if ($company_details_right_section_image): ?>
                        <img src="<?php echo esc_url($company_details_right_section_image['url']); ?>" 
                             alt="<?php echo esc_attr($company_details_right_section_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
