<section>
<?php 
  $faq_question_section_wrap = get_sub_field('faq_question_section_wrap');
  $question_section_heading = $faq_question_section_wrap['question_section_heading'];
  $question_section_paragraph = $faq_question_section_wrap['question_section_paragraph'];
  $question_section_btn = $faq_question_section_wrap['question_section_btn'];
  $question_section_all_images = $faq_question_section_wrap['question_section_all_images'];
  ?>
    <div class="modual_questions_section">
        <div class="container">
            <div class="modual_questions_section_wrap"> 
                     <div class="modual_questions_section_inner">
                <?php if ($question_section_all_images): ?>
                        <?php foreach ($question_section_all_images as $img): 
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
                <?php if ($question_section_paragraph): ?>
                    <p><?php echo esc_html($question_section_paragraph); ?></p>
                <?php endif; ?>
                    <div class="modual_questions_section_inner_btn">
                    <?php if ($question_section_btn): ?>

                        <button><a  target ="<?php echo esc_html($question_section_btn['target']); ?>" href="<?php echo esc_html($question_section_btn['url']); ?>">
                        <?php echo esc_html($question_section_btn['title']); ;?>
                       </a></button>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
