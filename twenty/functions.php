<?php
function my_theme_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery'); 

    // Enqueue custom script
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null);
    wp_enqueue_script('filter', get_stylesheet_directory_uri() . '/js/filter.js', array('jquery'), null);
    
    // Localize AJAX URL
    wp_localize_script('filter', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_localize_script('custom', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// AJAX function to fetch posts
function load_more_posts() {
    $paged = isset($_POST['page']) ? $_POST['page'] : 1; // Get the current page number
    $args = array(
        'post_type' => 'jobs',
        'posts_per_page' => 2,
        'paged' => $paged
    );

    $query = new WP_Query($args);
    $posts = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $posts[] = array(
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'link' => get_permalink(),
            );
        }
        wp_send_json_success($posts); // Send the posts back as a successful response
    } else {
        wp_send_json_error('No more posts to load.');
    }
    
    wp_reset_postdata();
    wp_die(); 
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');




function filter_jobs() {
    $response = [];
  
    
    $args = [
        'post_type' => 'jobs',
        'posts_per_page' => 5,
        'post_status' => 'publish',
        'order' => 'DESC',
        'paged' => $paged,
    ];

   
    $tax_query = ['relation' => 'AND'];
    $meta_query = ['relation' => 'AND']; 

    // Add filters from POST data
    if (!empty($_POST['location'])) {
        $location_id = intval($_POST['location']);
        $tax_query[] = [
            'taxonomy' => 'location',
            'field' => 'term_id',
            'terms' => $location_id,
        ];
    }
    if (!empty($_POST['job_type'])) {
        $job_type_id = intval($_POST['job_type']);
        $tax_query[] = [
            'taxonomy' => 'job-type', 
            'field' => 'term_id',
            'terms' => $job_type_id,
        ];
    }
    // Handle experiences
    if (!empty($_POST['experiences'])) {
        $experiences_id = intval($_POST['experiences']);
        $tax_query[] = [
            'taxonomy' => 'experience',
            'field' => 'term_id',
            'terms' => $experiences_id,
        ];
    }

    // Handle skills
    if (!empty($_POST['Skills'])) {
        $skills_id = intval($_POST['Skills']);
        $tax_query[] = [
            'taxonomy' => 'skills',
            'field' => 'term_id',
            'terms' => $skills_id,
        ];
    }

    // Handle sector
    if (!empty($_POST['Sector'])) {
        $sector_id = intval($_POST['Sector']);
        $tax_query[] = [
            'taxonomy' => 'sector',
            'field' => 'term_id',
            'terms' => $sector_id,
        ];
    }

    // Handle career level
    if (!empty($_POST['career_level'])) {
        $career_level_id = intval($_POST['career_level']);
        $tax_query[] = [
            'taxonomy' => 'career-level',
            'field' => 'term_id',
            'terms' => $career_level_id,
        ];
    }

    // Handle offered salary
    if (!empty($_POST['offered_salary'])) {
        $offered_salary_id = intval($_POST['offered_salary']);
        $tax_query[] = [
            'taxonomy' => 'offered-salary',
            'field' => 'term_id',
            'terms' => $offered_salary_id,
        ];
    }

    // Handle date filter
    if (isset($_POST['date'])) {
        $selected_date = sanitize_text_field($_POST['date']);       
            $date_query = [
                'after' => $_POST['date'],
                'before' => $_POST['date'],
                'inclusive' => true,
            ];
            $args['date_query'] = [$date_query];
        }

    

    // Add meta_query if there are filters
    if (count($meta_query) > 1) {
    }

    // Add tax_query if there are filters
    if (count($tax_query) > 1) { // At least one taxonomy query should be added
        $args['tax_query'] = $tax_query;
    }

    $query = new WP_Query($args);

    // Prepare the response data
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $job_salary = get_field('job_salary');
            $is_job_feature = get_field('is_job_feature'); 
            $location_Obj = get_the_terms(get_the_ID(), 'location');
            $sector_Obj = get_the_terms(get_the_ID(), 'sector');
            $offered_salary_Obj = get_the_terms(get_the_ID(), 'offered-salary');

            $response[] = [
                'title' => get_the_title(),
                'permalink' => get_permalink(),
                'featured' => $is_job_feature,
                'location' => $location_Obj ? esc_html($location_Obj[0]->name) : '',
                'location_image' => get_template_directory_uri() . '/image/locations.png', // Path to location image
                'sector' => $sector_Obj ? esc_html($sector_Obj[0]->name) : '',
                'sector_image' => get_template_directory_uri() . '/image/skills.png', 
                'salary' => $offered_salary_Obj ? esc_html($offered_salary_Obj[0]->name) : '',
                'salary_image' => get_template_directory_uri() . '/image/salary.png', 
                'thumbnail' => has_post_thumbnail() ? esc_url(wp_get_attachment_url(get_post_thumbnail_id())) : get_template_directory_uri() . '/image/icon.png',
            ];
            
        }
    } else {
        $response = ['message' => 'No jobs found.'];
    }

    // Send JSON response
    wp_send_json_success($response);
    wp_die(); 
}

add_action('wp_ajax_filter_jobs', 'filter_jobs');
add_action('wp_ajax_nopriv_filter_jobs', 'filter_jobs');





// Register navigation menus
function add_nav_menus() {
    register_nav_menus(array(
        'main_menu'   => 'Main Menu',
        'top_menu'    => 'Top Menu',
        'footer_menu'  => 'Footer Menu',
        'footer_menu1' => 'Footer Menu 1',
        'footer_menu2' => 'Footer Menu 2',
    ));
}
add_action('init', 'add_nav_menus');

// Theme support for post thumbnails
add_theme_support('post-thumbnails');

// ACF options page setup (if using ACF)
function setup_acf() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Theme Options',
            'menu_title' => 'Theme Options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'redirect' => false,
        ));
    }
}
add_action('acf/init', 'setup_acf');
?>
