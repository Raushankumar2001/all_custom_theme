<section>
    <?php
    $faq_accordion_section_wrap = get_sub_field('faq_accordion_section_wrap');?>

        <div class="modual_faq_wrap">
            <div class="container">
                <div class="modual_faq_wrap_inner">
                    <div class="modual_faq_accordian">
                        <?php foreach ($faq_accordion_section_wrap as $faq): 
                            $faq_accordion_section_inner_question = $faq['faq_accordion_section_inner_question'];
                            $faq_accordion_section_inner_answer = $faq['faq_accordion_section_inner_answer'];
                        ?>
                            <div class="accordion-item">
                                <?php if ($faq_accordion_section_inner_question): ?>
                                    <h5 class="accordion-header">
                                        <?php echo esc_html($faq_accordion_section_inner_question); ?>
                                        <span class="arrow">+</span><!-- Right arrow -->
                                    </h5>
                                <?php endif; ?>
                                <?php if ($faq_accordion_section_inner_answer): ?>
                                    <div class="accordion-body" style="display: none;">
                                        <p><?php echo esc_html($faq_accordion_section_inner_answer); ?></p>
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