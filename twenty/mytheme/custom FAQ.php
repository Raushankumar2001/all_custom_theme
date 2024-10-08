<?php
/**
 * Template Name: FAQ
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<section>
  
           <?php
           $faq_section = get_field('faq_section');
           $banner_image = $faq_section['banner_image'];
           $banner_text = $faq_section['banner_text'];
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
    $faq_home_section = get_field('faq_home_section');
    $faq_home_content = $faq_home_section['faq_home_content'];
    ?>

    <div class="blog_home_section">
        <div class="container">
            <?php if ($faq_home_content ): ?>
                <span><?php echo esc_html($faq_home_content); ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>


<section>
    <?php
    $faq_top_heading = get_field('faq_top_heading');?>
    <div class="container">
        <div class="faq_top_heading">
    <?php if ($faq_top_heading ): ?>
                <h3><?php echo esc_html($faq_top_heading); ?></h3>
            <?php endif; ?>  
            </div> 
         </div>
</section>



<section>
    <?php
    $faq_accordian_section = get_field('faq_accordian_section');?>

        <div class="modual_faq_wrap">
            <div class="container">
                <div class="modual_faq_wrap_inner">
                    <div class="modual_faq_accordian">
                        <?php foreach ($faq_accordian_section as $faq): 
                            $accordian_question = $faq['accordian_question'];
                            $accordian_answer = $faq['accordian_answer'];
                        ?>
                            <div class="accordion-item">
                                <?php if ($accordian_question): ?>
                                    <h5 class="accordion-header">
                                        <?php echo esc_html($accordian_question); ?>
                                        <span class="arrow">+</span><!-- Right arrow -->
                                    </h5>
                                <?php endif; ?>
                                <?php if ($accordian_answer): ?>
                                    <div class="accordion-body" style="display: none;">
                                        <p><?php echo esc_html($accordian_answer); ?></p>
                                    </div>
                                <?php endif; ?>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
   
</section>



<section>
<?php 
  $question_section = get_field('question_section');
  $question_section_heading = $question_section['question_section_heading'];
  $question_section_paragrph = $question_section['question_section_paragrph'];
  $question_section_btn = $question_section['question_section_btn'];
  $question_section_repeater = $question_section['question_section_repeater'];
  ?>
    <div class="modual_questions_section">
        <div class="container">
            <div class="modual_questions_section_wrap"> 
                     <div class="modual_questions_section_inner">
                <?php if ($question_section_repeater): ?>
                        <?php foreach ($question_section_repeater as $img): 
                            $question_section_image = $img['question_section_image'];
                        ?>
                     <?php if ($question_section_image): ?>
                    <img src="<?php echo esc_url($question_section_image['url']); ?>" alt="<?php echo esc_attr($question_section_image['alt']); ?>">
                <?php endif; ?>
                     <?php endforeach; ?>
              <?php endif;?>
                </div>
                <div class="modual_questions_section_iner_content">
                <?php if ($question_section_heading): ?>
                    <h3><?php echo esc_html($question_section_heading); ?></h3>
                <?php endif; ?>
                <?php if ($question_section_paragrph): ?>
                    <p><?php echo esc_html($question_section_paragrph); ?></p>
                <?php endif; ?>
                    <div class="modual_questions_section_inner_btn">
                    <?php if ($question_section_btn): echo "<pre>"; print_r($question_section_btn ['target'])  ;exit; ?>

                        <button><a  target ="<?php echo esc_html($question_section_btn['target']); ?>" href="<?php echo esc_html($question_section_btn['title']); ?>">
                        <?php echo esc_html($question_section_btn['title']); ?>
                    </a></button>
                    <?php endif; ?>
                    </div>
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
<?php get_footer(); ?>
