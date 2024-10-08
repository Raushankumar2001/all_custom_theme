<section>
    <?php
    $faq_top_heading = get_sub_field('faq_top_heading');?>
    <div class="container">
        <div class="faq_top_heading">
    <?php if ($faq_top_heading ): ?>
                <h3><?php echo esc_html($faq_top_heading); ?></h3>
            <?php endif; ?>  
            </div> 
         </div>
</section>