<section>

<?php 
$modual_download_left_section = get_sub_field('modual_download_left_section');
$modual_download_left_section_heading = $modual_download_left_section['modual_download_left_section_heading'];
$modual_download_left_section_subheading = $modual_download_left_section['modual_download_left_section_subheading'];
$modual_download_left_section_paragraph = $modual_download_left_section['modual_download_left_section_paragraph'];
$modual_download_left_section_image = $modual_download_left_section['modual_download_left_section_image'];
$modual_download_left_section_images = $modual_download_left_section['modual_download_left_section_images'];
$modual_download_right_image = $modual_download_left_section['modual_download_right_image'];
$modual_download_right_image_link = $modual_download_left_section['modual_download_right_image_link'];
$modual_download_right_image_link_ios = $modual_download_left_section['modual_download_right_image_link_ios'];
?>

    <div class="modual_download_section">
        <div class="container">
            <div class="main_modual_download">
                <div class="main_left_secton_download">
                    <?php if ($modual_download_right_image): ?>
                        <img src="<?php echo esc_url($modual_download_right_image['url']); ?>" 
                             alt="<?php echo esc_attr($modual_download_right_image['alt']); ?>">
                    <?php endif; ?>                             
                </div>

                <div class="main_right_secton_download">
                    <?php if ($modual_download_left_section_heading): ?>
                        <h4><?php echo esc_html($modual_download_left_section_heading); ?></h4>
                    <?php endif; ?>                               

                    <?php if ($modual_download_left_section_subheading): ?>
                        <h2><?php echo esc_html($modual_download_left_section_subheading); ?></h2>
                    <?php endif; ?>                               

                    <?php if ($modual_download_left_section_paragraph): ?>
                        <p><?php echo esc_html($modual_download_left_section_paragraph); ?></p>
                    <?php endif; ?>                               

                    <div class="main_right_section_download_img">
                        <?php if ($modual_download_left_section_image): ?>
                            <a href="<?php echo esc_url($modual_download_right_image_link_ios); ?>" target="_blank">
                                <img src="<?php echo esc_url($modual_download_left_section_image['url']); ?>" 
                                     alt="<?php echo esc_attr($modual_download_left_section_image['alt']); ?>">
                            </a>
                        <?php endif; ?> 

                        <?php if ($modual_download_left_section_images): ?>
                            <a href="<?php echo esc_url($modual_download_right_image_link); ?>" target="_blank">
                                <img src="<?php echo esc_url($modual_download_left_section_images['url']); ?>"
                                     alt="<?php echo esc_attr($modual_download_left_section_images['alt']); ?>">
                            </a>
                        <?php endif; ?>                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
