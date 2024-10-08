<section>
    <?php
    $main_banner_section = get_sub_field('main_banner_section');
    $banner_image = $main_banner_section['banner_image'];
    $banner_text = $main_banner_section['banner_text'];
    $main_input_field_icon = $main_banner_section['main_input_field_icon'];
    $main_input_field = $main_banner_section['main_input_field'];
    ?>
    <div class="home_section">
        <?php if ($banner_image): ?>
            <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
        <?php endif; ?>
        
        <div class="container">
            <div class="home_section_wrap">
                <div class="home_wrap_top">
                    <?php if ($banner_text): ?>
                        <h2><span>5.568 </span><?php echo esc_html($banner_text); ?></h2>
                    <?php endif; ?>
                </div>
                
                <div class="home_section_bottom">
                    <?php if ($main_input_field): ?>
                        <?php foreach ($main_input_field as $input):
                            $main_input_field_box = $input['main_input_field_box'];
                        ?>
                            <input type="email" placeholder="Enter your email" 
                                   value="<?php echo esc_attr($main_input_field_box ? $main_input_field_box : ''); ?>"> 
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if ($main_input_field_icon): ?>
                        <img src="<?php echo esc_url($main_input_field_icon['url']); ?>" 
                             alt="<?php echo esc_attr($main_input_field_icon['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
