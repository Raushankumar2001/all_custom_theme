<?php
/**
 * Template Name: About
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<!-- About_section start -->
<section>
  
           <?php
           $about_section = get_field('about_section');
           $banner_image = $about_section['banner_image'];
           $banner_text = $about_section['banner_text'];
           ?>
            
            <div class="blog_section">
                <?php if ($banner_image): ?>
                    <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
                <?php endif; ?>
                <div class="container">
                    <div class="blog_wrap">
                        <?php if ($banner_text): ?>
                            <h1><?php echo esc_html($banner_text); ?></h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       
</section>


<section>
    <?php  
    $about_home_section = get_field('about_home_section');
    ?>

    <div class="blog_home_section">
        <div class="container">
            <?php if ($about_home_section ): ?>
                <span><?php echo esc_html($about_home_section['about_home_content']); ?></span>
       
            <?php endif; ?>
        </div>
    </div>
</section>


<section>
    <?php
    $our_company = get_field('our_company');
    $modual_compnay_wrap_left_heading = $our_company['modual_compnay_wrap_left_heading'];
    $modual_compnay_wrap_left_paragraph = $our_company['modual_compnay_wrap_left_paragraph'];
    $modual_compnay_wrap_left_sub_paragraph = $our_company['modual_compnay_wrap_left_sub_paragraph'];
    $modual_compnay_wrap_left_btn = $our_company['modual_compnay_wrap_left_btn'];
    $modual_compnay_wrap_right_image = $our_company['modual_compnay_wrap_right_image'];
    $our_company_top_bg = $our_company['our_company_top_bg'];
    ?>

    <div class="modual_our_comapny">
               <div class="container">
            <div class="modual_left_company_wrap">
                <div class="modual_left_company">
                    <?php if ($modual_compnay_wrap_left_heading): ?>
                        <h3><?php echo esc_html($modual_compnay_wrap_left_heading); ?></h3>
                    <?php endif; ?>

                    <?php if ($modual_compnay_wrap_left_paragraph): ?>
                        <p class="sub"><?php echo esc_html($modual_compnay_wrap_left_paragraph); ?></p>
                    <?php endif; ?>

                    <?php if ($modual_compnay_wrap_left_sub_paragraph): ?>
                        <p><?php echo esc_html($modual_compnay_wrap_left_sub_paragraph); ?></p>
                    <?php endif; ?>
                    
                    <div class="modual_left_commapny_btn">
                        <?php if ($modual_compnay_wrap_left_btn): ?>
                            <button><?php echo esc_html($modual_compnay_wrap_left_btn); ?></button>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="modual_right_company">
                    <?php if ($modual_compnay_wrap_right_image): ?>
                        <img src="<?php echo esc_url($modual_compnay_wrap_right_image['url']); ?>" alt="<?php echo esc_attr($modual_compnay_wrap_right_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<section>
    <?php
    $our_service = get_field('our_service');
    $our_service_inner_content = $our_service['our_service_inner_content'];
    $our_service_top_heading = $our_service['our_service_top_heading'];
    ?>

    <div class="modual_our_services">
   
        <div class="container">
            <div class="modual_our_services_wrap">
                <?php if ($our_service_top_heading): ?>
                    <h3><?php echo esc_html($our_service_top_heading); ?></h3>
                <?php endif; ?>

                <div class="modual_services_wrap_content">
                    <?php if ($our_service_inner_content): ?>
                        <?php foreach ($our_service_inner_content as $r): 
                            $our_service_company_inner_image = $r['our_service_company_inner_image'];
                            $our_service_company_inner_heading = $r['our_service_company_inner_heading'];
                            $our_service_company_inner_paragraph = $r['our_service_company_inner_paragraph'];
                        ?>
                            <div class="modual_services_wrap_inner_content">
                                <?php if ($our_service_company_inner_image): ?>
                                    <img src="<?php echo esc_url($our_service_company_inner_image['url']); ?>" 
                                         alt="<?php echo esc_attr($our_service_company_inner_image['alt']); ?>">
                                <?php endif; ?>
                                
                                <div class="modual_services_wrap_inner_text">
                                    <?php if ($our_service_company_inner_heading): ?>
                                        <h4><?php echo esc_html($our_service_company_inner_heading); ?></h4>
                                    <?php endif; ?>   

                                    <?php if ($our_service_company_inner_paragraph): ?>
                                        <p><?php echo esc_html($our_service_company_inner_paragraph); ?></p>
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

<!-- company icon start  -->
<section>
    <div class="company_wrap_section">
        <div class="container">
            <div class="swiper modual_company_wrap">
                <div class="swiper-wrapper">
                    <?php if (have_rows('company_wrap_icon')) : ?>
                        <?php while (have_rows('company_wrap_icon')) : the_row(); 
                            $company_logo = get_sub_field('company_logo'); ?>
                            <div class="swiper-slide">
                                <?php if ($company_logo) : ?>
                                    <div class="modual_company_wrap_icon">
                                        <img src="<?php echo esc_url($company_logo['url']); ?>" alt="<?php echo esc_attr($company_logo['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="client_pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- company icon end  -->

<!-- Client Section start -->
 <section>
    <?php if (have_rows('client_section')) : ?>
        <?php while (have_rows('client_section')) : the_row(); 
            $client_section_heading = get_sub_field('client_section_heading');  
            $client_section_p = get_sub_field('client_section_p'); 
            $client_section_inner = get_sub_field('client_section_inner');
            $client_section_inner_icon = get_sub_field('client_section_inner_icon'); 
        ?>
            <div class="modual_client_section">
                <div class="container">
                    <div class="modual_client_text">
                        <?php if ($client_section_heading) : ?>
                            <h1><?php echo esc_html($client_section_heading); ?></h1>
                        <?php endif; ?>
                        <?php if ($client_section_p) : ?>
                            <p><?php echo esc_html($client_section_p); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="swiper modual_client_all_content">
                        <div class="swiper-wrapper">
                            <?php if ($client_section_inner) : ?>
                                <?php foreach ($client_section_inner as $client) : 
                                    $client_section_inner_image = $client['client_section_inner_image'];  
                                    $client_section_inner_heading = $client['client_section_inner_heading'];  
                                    $client_section_inner_span = $client['client_section_inner_span'];  
                                    $client_section_inner_p = $client['client_section_inner_p']; 
                                    $client_section_inner_icon = $client['client_section_inner_icon']; 
                                ?>
                                    <div class="swiper-slide">
                                        <div class="modual_client_section_icon">
                                            <div class="modual_client_section_content">
                                                <?php if ($client_section_inner_image) : ?>
                                                    <img src="<?php echo esc_url($client_section_inner_image['url']); ?>" 
                                                         alt="<?php echo esc_attr($client_section_inner_image['alt']); ?>">
                                                <?php endif; ?>

                                                <div class="modual_client_section_text">
                                                    <?php if ($client_section_inner_heading): ?>
                                                        <h6><?php echo esc_html($client_section_inner_heading); ?></h6>
                                                    <?php endif; ?>
                                                    <?php if ($client_section_inner_span): ?>
                                                        <span><?php echo esc_html($client_section_inner_span); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php if ($client_section_inner_span): ?>
                                                <p><?php echo esc_html($client_section_inner_p); ?></p>
                                            <?php endif; ?>

                                            <div class="client_section_feedback">
                                                <?php if ($client_section_inner_icon) : ?>
                                                    <?php foreach ($client_section_inner_icon as $icon_item) : 
                                                        $icon = $icon_item['icon']; 
                                                    ?>
                                                        <?php if ($icon) : ?>
                                                            <img src="<?php echo esc_url($icon['url']); ?>" 
                                                                 alt="<?php echo esc_attr($icon['alt']); ?>">
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
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
        <?php endwhile; ?>
    <?php endif; ?>
 </section>
<!-- Client Section end -->

<!-- Subscribe Section start -->
<section>
    <div class="modual_subscribe_section">
        <div class="container">
            <div class="modual_subscribe_section_main">
                <div class="modual_subscribe_section_content">
                    <?php if (have_rows('subscribe_section')) : ?>
                        <?php while (have_rows('subscribe_section')) : the_row(); 
                            $subscribe_section_heading = get_sub_field('subscribe_section_heading');
                            $subscribe_section_heading_p = get_sub_field('subscribe_section_heading_p');
                            $subscribe_section_input_field = get_sub_field('subscribe_section_input_field'); 
                            $subscribe_section_input_button = get_sub_field('subscribe_section_input_button'); 
                            $subscribe_section_input_icon = get_sub_field('subscribe_section_input_icon'); 
                        ?>
                            <?php if ($subscribe_section_heading) : ?>
                                <h5><?php echo esc_html($subscribe_section_heading); ?></h5>
                            <?php endif; ?>
                            <?php if ($subscribe_section_heading_p) : ?>
                                <p><?php echo esc_html($subscribe_section_heading_p); ?></p>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="modual_subscribe_section_email">
                    <?php if ($subscribe_section_input_field) : ?>
                        <input type="email" placeholder="Enter your email" 
                               value="<?php echo esc_attr($subscribe_section_input_field); ?>"> 
                    <?php else : ?>
                        <input type="email" placeholder="Enter your email"> 
                    <?php endif; ?>

                    <div class="btn_submit">
                        <button type="submit"><?php echo esc_html($subscribe_section_input_button); ?></button> 
                        <div class="modual_subscribe_section_icon">
                            <?php if ($subscribe_section_input_icon) : ?>
                                <img src="<?php echo esc_url($subscribe_section_input_icon['url']); ?>" 
                                     alt="<?php echo esc_attr($subscribe_section_input_icon['alt']); ?>">
                            <?php endif; ?>                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section end -->
</div>
    <?php get_footer()?>
    