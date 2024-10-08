<footer>

    <!-- company_wrap_section start  -->
    <section>
        <?php 
    $company_icon = get_field('company_icon', 'option');
    ?>

        <div class="company_wrap_section">
            <div class="container">
                <div class="swiper modual_company_wrap">
                    <div class="swiper-wrapper">
                        <?php if ($company_icon): ?>
                        <?php foreach ($company_icon as $icon): 
                            $company_icon_image = $icon['company_icon_image'];
                            if ($company_icon_image): 
                        ?>
                        <div class="swiper-slide">
                            <div class="modual_company_wrap_icon">
                                <img src="<?php echo esc_url($company_icon_image['url']); ?>"
                                    alt="<?php echo esc_attr($company_icon_image['alt']); ?>">
                            </div>
                        </div>
                        <?php 
                            endif; 
                        endforeach; ?>

                        <?php endif; ?>
                    </div>

                    <div class="client_pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- company_wrap_section end  -->

    <!-- modual_client_section_wrap start  -->

    <section>
        <?php
        $modual_client_section_wrap_copy = get_field('modual_client_section_wrap_copy', 'option');
        $modual_client_section_main_heading = $modual_client_section_wrap_copy['modual_client_section_main_heading'];
        $modual_client_section_paragraph = $modual_client_section_wrap_copy['modual_client_section_paragraph'];
        $modual_client_section_inner_box = $modual_client_section_wrap_copy['modual_client_section_inner_box'];
        ?>

        <div class="modual_client_section">
            <div class="container">
                <div class="modual_client_text">
                    <?php if ($modual_client_section_main_heading): ?>
                    <h1><?php echo esc_html($modual_client_section_main_heading); ?></h1>
                    <?php endif; ?>
                    <?php if ($modual_client_section_paragraph): ?>
                    <p><?php echo esc_html($modual_client_section_paragraph); ?></p>
                    <?php endif; ?>
                </div>
                <div class="swiper modual_client_all_content">
                    <div class="swiper-wrapper">

                        <?php if ($modual_client_section_inner_box): ?>
                        <?php foreach ($modual_client_section_inner_box as $box): 
                                $modual_client_section_inner_box_image = $box['modual_client_section_inner_box_image'];
                                $modual_client_section_inner_box_heading = $box['modual_client_section_inner_box_heading'];
                                $modual_client_section_inner_box_span = $box['modual_client_section_inner_box_span'];
                                $modual_client_section_inner_box_paragraph = $box['modual_client_section_inner_box_paragraph'];
                                $modual_client_section_inner_icons = $box['modual_client_section_inner_icons']; 
                            ?>
                        <div class="swiper-slide">
                            <div class="modual_client_section_icon">
                                <div class="modual_client_section_content">
                                    <?php if ($modual_client_section_inner_box_image): ?>
                                    <img src="<?php echo esc_url($modual_client_section_inner_box_image['url']); ?>"
                                        alt="<?php echo esc_attr($modual_client_section_inner_box_image['alt']); ?>">
                                    <?php endif; ?>
                                    <div class="modual_client_section_text">
                                        <?php if ($modual_client_section_inner_box_heading): ?>
                                        <h5><?php echo esc_html($modual_client_section_inner_box_heading); ?></h5>
                                        <?php endif; ?>
                                        <?php if ($modual_client_section_inner_box_span): ?>
                                        <span><?php echo esc_html($modual_client_section_inner_box_span); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if ($modual_client_section_inner_box_paragraph): ?>
                                <p><?php echo esc_html($modual_client_section_inner_box_paragraph); ?></p>
                                <?php endif; ?>
                                <div class="star-rating">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <span class="star" data-value="<?php echo $i; ?>">
                                        &#9734;
                                        <!-- Empty star -->
                                    </span>
                                    <?php endfor; ?>
                                </div>
                                <div class="rating-result" style="display:none;"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                    <div class="client_pagination">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- modual_client_section_wrap end  -->

    <!-- $modual_subscribe_section_wrap start  -->

    <section>
        <?php
    $modual_subscribe_section_wrap = get_field('modual_subscribe_section_wrap', 'option');
    $subscribe_section_left_heading = $modual_subscribe_section_wrap['subscribe_section_left_heading'] ?? '';
    $subscribe_section_left_paragraph = $modual_subscribe_section_wrap['subscribe_section_left_paragraph'] ?? '';
    $subscribe_section_right_inputfield = $modual_subscribe_section_wrap['subscribe_section_right_inputfield'] ?? '';
    $subscribe_section_right_icon = $modual_subscribe_section_wrap['subscribe_section_right_icon'] ?? '';
    ?>

        <div class="modual_subscribe_section">
            <div class="container">
                <div class="modual_subscribe_section_main">
                    <div class="modual_subscribe_section_content">
                        <?php if ($subscribe_section_left_heading): ?>
                        <h5><?php echo esc_html($subscribe_section_left_heading); ?></h5>
                        <?php endif; ?>

                        <?php if ($subscribe_section_left_paragraph): ?>
                        <p><?php echo esc_html($subscribe_section_left_paragraph); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="modual_subscribe_section_email">
                        <?php echo do_shortcode('[contact-form-7 id="bba040d" title="subscribe Email"]'); ?>


                        <div class="modual_subscribe_section_icon">
                            <?php if ($subscribe_section_right_icon): ?>
                            <img src="<?php echo esc_url($subscribe_section_right_icon['url']); ?>"
                                alt="<?php echo esc_attr($subscribe_section_right_icon['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- $modual_subscribe_section_wrap end  -->

    <!-- modual_footer start  -->

    <?php
$common_footer = get_field('common_footer', 'option');
$social_icon = get_field('social_icon', 'option');
$all_social_icon = $social_icon['all_social_icon']; // Ensure this line is present
$footer_heading_left = $common_footer['footer_heading_left'];
$footer_left_p = $common_footer['footer_left_p'];
$footer_left_bottom = $common_footer['footer_left_bottom'];
$footer_copy_right = $common_footer['footer_copy_right'];
?>

    <div class="modual_footer">
        <div class="container">
            <div class="modual_footer_wrap">
                <div class="modual_footer_left">
                    <h4><?php echo esc_html($footer_heading_left); ?></h4>
                    <p><?php echo esc_html($footer_left_p); ?></p>

                    <div class="footer_img">
                        <?php if ($all_social_icon): ?>
                        <?php foreach ($all_social_icon as $i): 
                            $social_media = $i['social_media'];  
                            $social_url = $i['social_url']; ?>

                        <?php if ($social_media && $social_url): // Check both media and URL exist ?>
                        <a href="<?php echo esc_url($social_url); ?>" target="_blank">
                            <img src="<?php echo esc_url($social_media['url']); ?>"
                                alt="<?php echo esc_attr($social_media['alt']); ?>">
                        </a>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="footer_message">
                        <h4><?php echo esc_html($footer_left_bottom); ?></h4>
                    </div>
                </div>

                <div class="modual_footer_right">
                    <div class="modual_footer_list">
                        <span>Company</span>
                        <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'class' => 'modual_footer_list',
                        'container' => 'ul'
                    )); ?>
                    </div>

                    <div class="modual_footer_list">
                        <span>Help & Support</span>
                        <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu1',
                        'class' => 'modual_footer_list',
                        'container' => 'ul'
                    )); ?>
                    </div>

                    <div class="modual_footer_list">
                        <span>Legal</span>
                        <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu2',
                        'class' => 'modual_footer_list',
                        'container' => 'ul'
                    )); ?>
                    </div>
                </div>
            </div>
            <div class="footer_right_section">
                <p><?php echo esc_html($footer_copy_right); ?></p>
            </div>
        </div>
    </div>


    <!-- Modual_footer end  -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/home.js"></script>