<?php get_header(); 
the_post(); ?>

<div class="all_blogs">
    <div class="thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="blogs_text">
        <p><?php echo get_the_date(); ?></p> 
        <h4><?php the_title(); ?></h4> 
        <div><?php the_content(); ?></div> 
    </div>
</div>

   
</div>

<?php get_footer(); ?>
