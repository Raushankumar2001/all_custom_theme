<section>
    <?php
    $interview_section = get_sub_field('interview_section');
    $interview_left_section_image = $interview_section['interview_left_section_image'];
    $interview_left_section_text = $interview_section['interview_left_section_text'];
    $interview_center_section = $interview_section['interview_center_section'];
    $interview_center_section_main_heading = $interview_section['interview_center_section_main_heading'];
    $interview_left_section_main_heading = $interview_section['interview_left_section_main_heading'];
    $interview_right_section = $interview_section['interview_right_section'];
    $interview_section_btn_icon = $interview_section['interview_section_btn_icon'];
    $interview_link = $interview_section['interview_link'];
    $interview_view_all = $interview_section['interview_view_all'];

    ?>

    <div class="modual_interview">
        <div class="container">
            <div class="modual_main_interview_section">
                <div class="modual_left_interview_section">
                    <div class="modual_left_interview_section_img">
                        <?php if ($interview_left_section_image): ?>
                            <div class="left_random_text_icon">
                                <img src="<?php echo esc_url($interview_left_section_image['url']); ?>" 
                                     alt="<?php echo esc_attr($interview_left_section_image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($interview_left_section_text): ?>
                        <h4><?php echo esc_html($interview_left_section_text); ?></h4>
                    <?php endif; ?>
                </div>

                <div class="modual_center_interview">
                    <div class="modual_center_text">
                        <?php if ($interview_center_section_main_heading): ?>
                            <h5><?php echo esc_html($interview_center_section_main_heading); ?></h5>
                        <?php endif; ?>

                        <div class="box">
                            <div class="modual_all_content">
                                <?php if ($interview_center_section): ?>
                                    <?php foreach ($interview_center_section as $interview): 
                                        $interview_section_icon = $interview['interview_section_icon'];
                                        $interview_section_heading = $interview['interview_section_heading'];
                                        $interview_section_span = $interview['interview_section_span'];
                                        $interview_center_icon = $interview['interview_center_icon'];
                                    ?>
                                        <div class="modual_center_icon">
                                            <div class="modual_center_icon_inner_wrap">
                                                <?php if ($interview_section_icon): ?>
                                                    <img src="<?php echo esc_url($interview_section_icon['url']); ?>" 
                                                         alt="<?php echo esc_attr($interview_section_icon['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="modual_center_content">
                                                <?php if ($interview_section_heading): ?>
                                                    <h6><?php echo esc_html($interview_section_heading); ?></h6>
                                                <?php endif; ?>
                                                <?php if ($interview_section_span): ?>
                                                    <span><?php echo esc_html($interview_section_span); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <?php if ($interview_section_btn_icon): ?>
                                                    <img src="<?php echo esc_url($interview_section_btn_icon['url']); ?>" 
                                                         alt="<?php echo esc_attr($interview_section_btn_icon['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <div class="modual_all_content">
                                <?php if ($interview_center_section): ?>
                                    <?php foreach ($interview_center_section as $interview): 
                                        $interview_section_icon = $interview['interview_section_icon'];
                                        $interview_section_heading = $interview['interview_section_heading'];
                                        $interview_section_span = $interview['interview_section_span'];
                                        $interview_center_icon = $interview['interview_center_icon'];
                                    ?>
                                        <div class="modual_center_icon">
                                            <div class="modual_center_icon_inner_wrap">
                                                <?php if ($interview_section_icon): ?>
                                                    <img src="<?php echo esc_url($interview_section_icon['url']); ?>" 
                                                         alt="<?php echo esc_attr($interview_section_icon['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="modual_center_content">
                                                <?php if ($interview_section_heading): ?>
                                                    <h6><?php echo esc_html($interview_section_heading); ?></h6>
                                                <?php endif; ?>
                                                <?php if ($interview_section_span): ?>
                                                    <span><?php echo esc_html($interview_section_span); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <?php if ($interview_center_icon): ?>
                                                    <img src="<?php echo esc_url($interview_center_icon['url']); ?>" 
                                                         alt="<?php echo esc_attr($interview_center_icon['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="modual_right_content_btn">
                            <ul>
                                <li><a href="">View all companies</a></li>
                            </ul>
                            <?php if ($interview_section_btn_icon): ?>
                                                    <img src="<?php echo esc_url($interview_section_btn_icon['url']); ?>" 
                                                         alt="<?php echo esc_attr($interview_section_btn_icon['alt']); ?>">
                                                <?php endif; ?>                        </div>
                    </div>
                </div>

                <div class="modual_right_interview_section">
                    <div class="modual_right_interview">
                        <div class="modual_right_text">
                            <?php if ($interview_left_section_main_heading): ?>
                                <h5><?php echo esc_html($interview_left_section_main_heading); ?></h5>
                            <?php endif; ?>
                            <div class="box">
                                <div class="modual_right_all_content">
                                    <?php if ($interview_right_section): ?>
                                        <?php foreach ($interview_right_section as $right): 
                                            $interview_right_section_heading = $right['interview_right_section_heading'];
                                            $interview_right_section_paragraph = $right['interview_right_section_paragraph'];
                                        ?>
                                            <div class="modual_right_content">
                                                <?php if ($interview_right_section_heading): ?>
                                                    <h6><?php echo esc_html($interview_right_section_heading); ?> 
                                                        <span><?php echo esc_html($interview_right_section_paragraph); ?></span>
                                                    </h6>
                                                <?php endif; ?>  
                                            </div>
                                            <hr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="modual_right_content_btn">
    <ul>
    <?php if ($interview_view_all): ?>
        <a class="btn" target="<?php echo esc_html($interview_view_all['target']); ?>" href="<?php echo esc_url($interview_view_all['url']); ?>">
            <?php echo esc_html($interview_view_all['title']); ?>
        </a>
    <?php endif; ?>
    </ul>
    <?php if ($interview_link): ?>
        <a class="btn" target="<?php echo esc_html($interview_link['target']); ?>" href="<?php echo esc_url($interview_link['url']); ?>">
            <?php echo esc_html($interview_link['title']); ?>
        </a>
    <?php endif; ?>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
