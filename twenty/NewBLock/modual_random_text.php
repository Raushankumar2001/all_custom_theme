<div class="bg">
    <section>
        <?php 
        $modual_random_text_wrap = get_sub_field('modual_random_text_wrap');
        if (!is_array($modual_random_text_wrap)) {
            return; // Handle the error appropriately
        }

        $modual_random_text_main_heading = $modual_random_text_wrap['modual_random_text_main_heading'];
        $modual_random_text_subheading = $modual_random_text_wrap['modual_random_text_subheading'];
        $heading_image_description = $modual_random_text_wrap['heading_image_description'];
        $modual_random_text_right = $modual_random_text_wrap['modual_random_text_right'];
        ?>
        
        <div class="modual_random_text">
            <div class="container">
                <div class="modual_random_text_wrap">
                    <div class="modual_random_left">
                        <div class="modual_random_left_wrap_inner">
                            <?php if ($modual_random_text_main_heading): ?>
                                <h4><?php echo esc_html($modual_random_text_main_heading); ?></h4>
                            <?php endif; ?>
                            
                            <?php if ($modual_random_text_subheading): ?>
                                <h3><?php echo esc_html($modual_random_text_subheading); ?></h3>
                            <?php endif; ?>

                            <?php if ($heading_image_description): ?>
                                <?php foreach($heading_image_description as $icon):  
                                    $heading = $icon['heading'];
                                    $description = $icon['description'];
                                    $image = $icon['image'];
                                ?>
                                    <div class="left_random_subsection">
                                        <div class="left_random_text">
                                            <?php if ($heading): ?>
                                                <h5><?php echo esc_html($heading); ?></h5>
                                            <?php endif; ?>
                                            <?php if ($description): ?>
                                                <p><?php echo esc_html($description); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($image): ?>
                                            <div class="left_random_text_icon">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                      
                                        <?php endif; ?>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                           
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="swiper modual_random_right_text">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php if (isset($modual_random_text_right) && is_array($modual_random_text_right)): ?>
                                    <?php foreach($modual_random_text_right as $icon): 
                                        $right_side_image = $icon['right_side_image'];
                                        if ($right_side_image): ?>
                                            <div class="swiper-slide">
                                                <div class="modual_random_right_text_img_wrap">
                                                    <img src="<?php echo esc_url($right_side_image['url']); ?>" alt="<?php echo esc_attr($right_side_image['alt']); ?>">
                                                </div>
                                            </div>
                                        <?php endif; 
                                    endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="autoplay-progress">
                                <svg viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="20"></circle>
                                </svg>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
