<?php

////////////////////////////////////
// Load scripts, stylesheets, and fonts
////////////////////////////////////
function splace_files()
{
    // add the style.css to the list of files from university_files
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2');
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('main_css', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('reset_css', get_theme_file_uri('/css/reset.css'), array('bootstrap'), filemtime(get_theme_file_path('/css/reset.css')));
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
}
// hook to load the files in the theme from university_files()
add_action('wp_enqueue_scripts', 'splace_files');

////////////////////////////////////
// Enable adding page title in address bar of the browser
////////////////////////////////////
function splace_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'splace_features');

/**
 * Register Jobs custom post type.
 */
function mytheme_register_jobs_post_type()
{
    $args = array(
        'labels' => array(
            'name'               => 'Jobs',
            'singular_name'      => 'Job',
            'add_new'            => 'Add New Job',
            'add_new_item'       => 'Add New Job',
            'edit_item'          => 'Edit Job',
            'new_item'           => 'New Job',
            'view_item'          => 'View Job',
            'search_items'       => 'Search Jobs',
            'not_found'          => 'No jobs found',
            'not_found_in_trash' => 'No jobs found in Trash',
            'all_items'          => 'All Jobs',
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array(
            'slug' => 'jobs',
            'with_front' => false,
        ),
        'menu_icon'    => 'dashicons-businessperson',
        'supports'     => array(
            'title',
            'editor',
        ),
        'show_in_rest' => true,
    );

    register_post_type('job', $args);
}
add_action('init', 'mytheme_register_jobs_post_type');


/**
 * Add Salary and Location meta box.
 * Job Title uses WordPress's native post title field.
 */
function mytheme_add_job_meta_box()
{
    add_meta_box(
        'job_details',
        'Job Details',
        'mytheme_render_job_meta_box',
        'job',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mytheme_add_job_meta_box');


/**
 * Render the custom fields in the admin.
 */
function mytheme_render_job_meta_box($post)
{
    wp_nonce_field(
        'mytheme_save_job_details',
        'mytheme_job_nonce'
    );

    $salary = get_post_meta(
        $post->ID,
        '_job_salary',
        true
    );

    $location = get_post_meta(
        $post->ID,
        '_job_location',
        true
    );
    ?>

    <p>
        <label for="job_salary">
            <strong>Salary</strong>
        </label>
        <br>
        <input
            type="text"
            id="job_salary"
            name="job_salary"
            value="<?php echo esc_attr($salary); ?>"
            class="widefat"
            placeholder="e.g. $50,000 - $60,000 per year"
        >
    </p>

    <p>
        <label for="job_location">
            <strong>Location</strong>
        </label>
        <br>
        <input
            type="text"
            id="job_location"
            name="job_location"
            value="<?php echo esc_attr($location); ?>"
            class="widefat"
            placeholder="e.g. Remote / Cebu City"
        >
    </p>

    <?php
}


/**
 * Save Salary and Location fields securely.
 */
function mytheme_save_job_details($post_id)
{

    // Verify nonce.
    if (
        ! isset($_POST['mytheme_job_nonce']) ||
        ! wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['mytheme_job_nonce'])
            ),
            'mytheme_save_job_details'
        )
    ) {
        return;
    }

    // Ignore autosaves and revisions.
    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id)
    ) {
        return;
    }

    // Only save the Jobs post type.
    if ('job' !== get_post_type($post_id)) {
        return;
    }

    // Check user permissions.
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save Salary.
    if (isset($_POST['job_salary'])) {
        update_post_meta(
            $post_id,
            '_job_salary',
            sanitize_text_field(
                wp_unslash($_POST['job_salary'])
            )
        );
    }

    // Save Location.
    if (isset($_POST['job_location'])) {
        update_post_meta(
            $post_id,
            '_job_location',
            sanitize_text_field(
                wp_unslash($_POST['job_location'])
            )
        );
    }
}
add_action('save_post', 'mytheme_save_job_details');
