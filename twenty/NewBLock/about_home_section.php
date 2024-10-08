<section>
    <?php  
    $about_home_section_heading = get_sub_field('about_home_section_heading');
    ?>

    <div class="blog_home_section">
        <div class="container">
            <?php if ($about_home_section_heading ): ?>
                <span><?php echo esc_html($about_home_section_heading); ?></span>
       
            <?php endif; ?>
        </div>
    </div>
</section>