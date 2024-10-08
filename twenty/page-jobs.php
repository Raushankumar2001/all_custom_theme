<?php get_header(); ?>
<section>
    <?php
    $job_result_banner_text = get_field('job_result_banner_text');
    $job_result_banner_image = get_field('job_result_banner_image');
    ?>
    <div class="blog_section">
        <?php if ($job_result_banner_image): ?>
        <img src="<?php echo esc_url($job_result_banner_image['url']); ?>"
            alt="<?php echo esc_attr($job_result_banner_image['alt']); ?>">
        <?php endif; ?>
        <div class="container">
            <div class="blog_wrap">
                <?php if ($job_result_banner_text): ?>
                <h1><?php echo esc_html($job_result_banner_text); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modual_job_search">
        <div class="container">
            <div class="modual_all_job_search_item">
                <div class="modual_left_item">
                    <div class="location">
                        <div id="job-search-form" >
                            <?php
                            // Location dropdown
                            $locations = get_terms(['taxonomy' => 'location', 'hide_empty' => true]);
                            echo '<label for="location-select">Choose a location:</label>';
                            echo '<select name="location" id="location-select">';
                            echo '<option value="">Choose a location</option>';
                            foreach ($locations as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['location']) ? ($_GET['location']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Job type dropdown
                            $job_types = get_terms(['taxonomy' => 'job-type', 'hide_empty' => true]);
                            echo '<label for="job-type-select">Choose a Job type:</label>';
                            echo '<select name="job_type" id="job-type-select">';
                            echo '<option value="">Choose a job type</option>';
                            foreach ($job_types as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '">' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Experience dropdown
                            $experiences = get_terms(['taxonomy' => 'experience', 'hide_empty' => true]);
                            echo '<label for="experiences-select">Choose Experience:</label>';
                            echo '<select name="experiences" id="experiences-select">';
                            echo '<option value="">Choose Experience</option>';
                            foreach ($experiences as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['experiences']) ? ($_GET['experiences']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Skills dropdown
                            $skills = get_terms(['taxonomy' => 'skills', 'hide_empty' => true]);
                            echo '<label for="skill-select">Choose a skill:</label>';
                            echo '<select name="skills" id="skill-select" >';
                            echo '<option value="">Choose a skill</option>';
                            foreach ($skills as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['skills']) ? ($_GET['skills']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Sector dropdown
                            $sectors = get_terms(['taxonomy' => 'sector', 'hide_empty' => true]);
                            echo '<label for="sector-select">Choose sector:</label>';
                            echo '<select name="sector" id="sector-select" >';
                            echo '<option value="">Choose sector</option>';
                            foreach ($sectors as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['sector']) ? ($_GET['sector']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Career-level dropdown
                            $career_levels = get_terms(['taxonomy' => 'career-level', 'hide_empty' => true]);
                            echo '<label for="career-level-select">Choose career-level:</label>';
                            echo '<select name="career-level" id="career-level-select">';
                            echo '<option value="">Choose career-level</option>';
                            foreach ($career_levels as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['career-level']) ? ($_GET['career-level']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Offered salary dropdown
                            $offered_salaries = get_terms(['taxonomy' => 'offered-salary', 'hide_empty' => true]);
                            echo '<label for="offered-salary-select">Choose offered salary:</label>';
                            echo '<select name="offered-salary" id="offered-salary-select">';
                            echo '<option value="">Choose offered salary</option>';
                            foreach ($offered_salaries as $term) {
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . selected(isset($_GET['offered-salary']) ? ($_GET['offered-salary']) : '', $term->term_id, false) . '>' . esc_html($term->name) . '</option>';
                            }
                            echo '</select>';

                            // Date input
                            echo '<label for="date-select">Choose a date:</label>';
                            echo '<input type="date" name="date" id="date-select" value="' . esc_attr(isset($_GET['date']) ? $_GET['date'] : '') . '">';
                            ?>
                        </div>
                    </div>
                </div>

                <div class="v">
                    <?php
                    $args = [
                        'post_type' => 'jobs',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'paged' => $paged,

                    ];

                    $tax_query = ['relation' => 'AND'];

                    // Filter check
                    if (isset($_GET['location']) || isset($_GET['job_type']) || isset($_GET['experiences']) || isset($_GET['career-level']) || isset($_GET['sector']) || isset($_GET['skills']) || isset($_GET['offered-salary'])) {
                        // Location filter
                        if (!empty($_GET['location'])) {
                            $tax_query[] = [
                                'taxonomy' => 'location',
                                'field' => 'term_id',
                                'terms' => ($_GET['location']),
                            ];
                        }

                        // Job type filter
                        if (!empty($_GET['job_type'])) {
                            $tax_query[] = [
                                'taxonomy' => 'job-type',
                                'field' => 'term_id',
                                'terms' => ($_GET['job_type']),
                            ];
                        }

                        // Experience filter
                        if (!empty($_GET['experiences'])) {
                            $tax_query[] = [
                                'taxonomy' => 'experience',
                                'field' => 'term_id',
                                'terms' => ($_GET['experiences']),
                            ];
                        }

                        // Career level filter
                        if (!empty($_GET['career-level'])) {
                            $tax_query[] = [
                                'taxonomy' => 'career-level',
                                'field' => 'term_id',
                                'terms' => ($_GET['career-level']),
                            ];
                        }

                        // Sector filter
                        if (!empty($_GET['sector'])) {
                            $tax_query[] = [
                                'taxonomy' => 'sector',
                                'field' => 'term_id',
                                'terms' => ($_GET['sector']),
                            ];
                        }

                        // Skills filter
                        if (!empty($_GET['skills'])) {
                            $tax_query[] = [
                                'taxonomy' => 'skills',
                                'field' => 'term_id',
                                'terms' => ($_GET['skills']),
                            ];
                        }

                        // Offered salary filter
                        if (!empty($_GET['offered-salary'])) {
                            $tax_query[] = [
                                'taxonomy' => 'offered-salary',
                                'field' => 'term_id',
                                'terms' => ($_GET['offered-salary']),
                            ];
                        }
                    }

                    // Date query
                    if (isset($_GET['date'])) {
                        $date_query = [
                            'after' => $_GET['date'],
                            'before' => $_GET['date'],
                            'inclusive' => true,
                        ];
                        $args['date_query'] = [$date_query];
                    }

                    if (count($tax_query) > 0) {
                        $args['tax_query'] = $tax_query;
                    }

                    // Query
                    $query = new WP_Query($args);

                    // Check if there are posts
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $job_salary = get_field('job_salary');
                            $is_job_feature = get_field('is_job_feature'); 
                            $location_Obj = get_the_terms(get_the_ID(), 'location');
                            $sector_Obj = get_the_terms(get_the_ID(), 'sector');
                            $offered_salary_Obj = get_the_terms(get_the_ID(), 'offered-salary');
                            ?>
                    <div class="modual_right_inner_content_wrap">
                        <div class="modual_right_job_wrap">
                            <div class="job-image">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php $attachment_image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                                <link rel="preload" as="image" href="<?php echo esc_url($attachment_image); ?>">
                                <img src="<?php echo esc_url($attachment_image); ?>" alt="">
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/image/icon.png"
                                    alt="Default Image">
                                <?php endif; ?>
                            </div>
                            <div class="modual_right_job_inner_wrap">
                                <h4>
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
                                    <?php if ($is_job_feature == 1) : ?>
                                    <span class="featured-label">Featured</span>
                                    <?php endif; ?>
                                </h4>
                                <div class="modual_right_job_inner_wrap_icon">
                                    <?php if ($location_Obj) : ?>
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/locations.png"
                                            alt="Location Icon">
                                        <?php echo esc_html($location_Obj[0]->name); ?>
                                    </span>
                                    <?php endif; ?>
                                    <?php if ($sector_Obj) : ?>
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/skills.png"
                                            alt="Sector Icon">
                                        <?php echo esc_html($sector_Obj[0]->name); ?>
                                    </span>
                                    <?php endif; ?>
                                    <span>
                                        <?php if ($offered_salary_Obj) : ?>
                                        <span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/image/salary.png"
                                                alt="Salary Icon">
                                            <?php echo esc_html($offered_salary_Obj[0]->name); ?>
                                        </span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                    <?php
                        }
                    } else {
                        echo '<p class="no-jobs">No jobs found.</p>';
                    }


                    wp_reset_postdata();
                    ?>
                       <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


                        $pagination_args = [
                            'total' => $query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('&larr;'),
                            'next_text' => __(' &rarr;'),
                        ];
                        
                        $pagination = paginate_links($pagination_args);
                        
                        if ($pagination) {
                            echo '<div class="pagination">' . $pagination . '</div>';
                        }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="post-container"> 
    <!-- Initial posts will be loaded here -->
</div>
<button id="loads" data-page="1">Load More</button>

<div id="content"></div>
<!-- <button id="loads">Read More</button> -->
<div id="output"></div> 





<?php get_footer(); ?>



















