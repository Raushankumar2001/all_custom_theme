<section>
    <?php  
    $faq_home_section_content = get_sub_field('faq_home_section_content');
    ?>

    <div class="blog_home_section">
        <div class="container">
            <?php if ($faq_home_section_content ): ?>
                <span><?php echo esc_html($faq_home_section_content); ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>
