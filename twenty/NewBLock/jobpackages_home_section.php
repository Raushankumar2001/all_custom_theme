<section>
    <?php  
    $jobpackages_home_section_heading = get_sub_field('jobpackages_home_section_heading');
    ?>

    <div class="blog_home_section">
        <div class="container">
            <?php if ($jobpackages_home_section_heading ): ?>
                <span><?php echo esc_html($jobpackages_home_section_heading); ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>