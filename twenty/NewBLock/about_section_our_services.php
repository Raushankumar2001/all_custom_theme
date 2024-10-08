<section>
    <?php
  $our_services_wraps = get_sub_field('our_services_wraps');
  $our_services_top_heading = $our_services_wraps['our_services_top_heading'];
  $our_services_inner_content = $our_services_wraps['our_services_inner_content'];
    ?>

    <div class="modual_our_services">
   
        <div class="container">
            <div class="modual_our_services_wrap">
                <?php if ($our_services_top_heading): ?>
                    <h3><?php echo esc_html($our_services_top_heading); ?></h3>
                <?php endif; ?>

                <div class="modual_services_wrap_content">
                    <?php if ($our_services_inner_content): ?>
                        <?php foreach ($our_services_inner_content as $icons): 
                            $our_services_inner_content_image = $icons['our_services_inner_content_image'];
                            $our_services_inner_content_heading = $icons['our_services_inner_content_heading'];
                            $our_services_inner_content_paragraph = $icons['our_services_inner_content_paragraph'];
                        ?>
                            <div class="modual_services_wrap_inner_content">
                                <?php if ($our_services_inner_content_image): ?>
                                    <img src="<?php echo esc_url($our_services_inner_content_image['url']); ?>" 
                                         alt="<?php echo esc_attr($our_services_inner_content_image['alt']); ?>">
                                <?php endif; ?>
                                
                                <div class="modual_services_wrap_inner_text">
                                    <?php if ($our_services_inner_content_heading): ?>
                                        <h4><?php echo esc_html($our_services_inner_content_heading); ?></h4>
                                    <?php endif; ?>   

                                    <?php if ($our_services_inner_content_paragraph): ?>
                                        <p><?php echo esc_html($our_services_inner_content_paragraph); ?></p>
                                    <?php endif; ?>   
                                </div>
                            </div>
                        <?php endforeach; ?>
                   
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>